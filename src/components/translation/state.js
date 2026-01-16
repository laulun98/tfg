import { reactive } from 'vue'
import translations from './TextTranslation.json'

export const i18nState = reactive({
    idioma: 'ES',
    pagina: null,
    textos: {}
})

export function traducir(pagina, idioma) {
    i18nState.idioma = idioma
    i18nState.pagina = pagina
    i18nState.textos = translations[idioma]?.[pagina] ?? {}

    console.log(pagina, idioma)
}
