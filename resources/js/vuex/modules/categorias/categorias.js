export default {
    state: {
        items: {
            data: []
        }
    },
    mutations: {
        LOAD_CATEGORIAS(state, categorias){
            state.items = categorias
        }
    },
    actions: {
        loadCategorias(context) {
            axios
                .get("http://localhost:3000/cardapio/categorias")
                .then((response) => {
                    context.commit('LOAD_CATEGORIAS',response.data)
                    
                })
                .catch((error) => {
                    console.log(error);
                    this.errored = true;
                })
                .finally(() => (this.loading = false));

        },

        storeCategoria(context, params){
            axios.post("http://localhost:3000/cardapio/categorias",params)
                .then(response =>{

                })
                .catch(error =>{
                    console.log(error)
                })
                .finally(()=>{console.log('fim')})
        }
    },
    getters: {

    }
}