import Vue from 'vue'
import Vuex from 'vuex'

import * as article from './modules/article.js'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        article
    },
    state: {
        slug: '',
    },
    actions: {

    },
    getters: {
        articleSlugRevers(state) {
            return state.slug.split('').reverse().join('');
        },
    },
    mutations: {
        SET_SLUG(state, payload) {
            state.slug = payload;
        }
    }
})

