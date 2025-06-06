import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';
import I18NextHttpBackend, { BackendOptions } from 'i18next-http-backend';
import I18NextMultiloadBackendAdapter from 'i18next-multiload-backend-adapter';

// Exponha a instância do i18n para o window para debug no browser:
declare global {
  interface Window {
    i18n: typeof i18n;
  }
}

if (typeof window !== 'undefined') {
  window.i18n = i18n;
}

// Hash para cache busting em HMR/dev
const hash = (module as any).hot ? Date.now().toString(16) : process.env.WEBPACK_BUILD_HASH;

// Inicialização do i18n
i18n
  .use(I18NextHttpBackend)
  .use(initReactI18next)
  .init({
    debug: process.env.DEBUG === 'true' || true, // Ative o debug sempre para facilitar
    lng: 'pt',
    fallbackLng: 'pt',
    defaultNS: 'translation',
    ns: ['translation'],
    keySeparator: '.',
    backend: {
      backend: I18NextHttpBackend,
      backendOption: {
        loadPath: '/locales/{{lng}}/{{ns}}.json',
        queryStringParams: { hash },
        allowMultiLoading: true,
      } as BackendOptions,
    } as Record<string, any>,
    interpolation: {
      escapeValue: false,
    },
  });

i18n.on('backendConnector:loading', (lng, ns, url) => {
  console.debug(`[i18n] Tentando carregar: idioma=${lng}, namespace=${ns}, url=${url}`);
});  

// Loga falha ao carregar arquivos de tradução
i18n.on('failedLoading', (lng, ns, msg) => {
  console.error(`[i18n] Falha ao carregar: idioma=${lng}, namespace=${ns}, erro=${msg}`);
});

// Loga todas as chaves de tradução faltantes (missing keys)
i18n.on('missingKey', (lngs, ns, key) => {
  console.warn(`[i18n] Chave faltando: "${key}" em namespace "${ns}", idiomas: ${lngs.join(', ')}`);
});

export default i18n;
