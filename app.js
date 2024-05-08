const { createApp } = Vue

  createApp({
    data() {
      return {
        dischi: [],
      }
    },

    methods: {
        fetchData() {
            // recupero dati tramite axios
            axios.get('./script.php').then((result) => {
                this.dischi = result.data;
            });
        }
    },

    created() {
        this.fetchData();
    },

  }).mount('#app')