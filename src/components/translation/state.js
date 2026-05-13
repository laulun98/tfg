import { reactive, watch } from 'vue'
import translations from './TextTranslation.json'

export const i18nState = reactive({
  idioma: 'ES',
  pagina: null,
  textos: {}
})

watch(
  () => [i18nState.idioma, i18nState.pagina],
  ([idioma, pagina]) => {
    if (!pagina) return
    i18nState.textos = translations[idioma]?.[pagina] ?? {}
  },
  { immediate: true }
)