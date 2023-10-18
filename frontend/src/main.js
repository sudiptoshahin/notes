import Vue from 'vue'
import App from './App.vue'

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
// import { library } from "@fontawesome/fontawesome-svg-core";

// import '@fontawesome/fontawesome-free/css/all.css';
// import '@fontawesome/fontawesome-free/css/all.js';
Vue.component("font-awesome-icon", FontAwesomeIcon);
// library.add(faSpinner);


Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
