Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-text-limit', require('./components/IndexField'))
  Vue.component('detail-nova-text-limit', require('./components/DetailField'))
  Vue.component('form-nova-text-limit', require('./components/FormField'))
})
