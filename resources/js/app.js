window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


window.Vue = require('vue').default;

import store from './store'

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('article-component', require('./components/ArticleComponent.vue').default);
Vue.component('views-component', require('./components/ViewsComponent.vue').default);
Vue.component('likes-component', require('./components/LikesComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);

const app = new Vue({
    store,
    el: '#app',
    created() {
        let url = window.location.pathname
        let slug = url.substring(url.lastIndexOf('/')+1)

        console.log(url)
        console.log(slug)
        this.$store.commit('SET_SLUG',slug )
        this.$store.dispatch('article/getArticleData', slug)
        this.$store.dispatch('article/viewsIncrement', slug)
    }
});
