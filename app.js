const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!'
      }
    },

    methods: {
        fetchData() {
            // recupero dati tramite axios
        }
    },
  }).mount('#app')