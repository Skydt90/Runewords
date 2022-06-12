require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('runeword-index', require('./components/Runewords/Index.vue').default);
Vue.component('runeword-calculator', require('./components/Runewords/Calculator.vue').default);
Vue.component('rune-index', require('./components/Runes/Index.vue').default);
Vue.component('rune-recipes', require('./components/Runes/Recipes.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
