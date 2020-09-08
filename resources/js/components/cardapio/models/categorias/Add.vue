<template>
  <div>
    <form class="form form-inline mt-3" @submit.prevent="submitForm">
      <input class="form-control" v-model="nome" type="text"  placeholder="Nova Categoria"/>
      <button class="btn btn-success" type="submit">Salvar</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      
      nome: ''
    };
  },
  methods:{
      submitForm(){
        
        this.$store.dispatch('storeCategoria',{name: this.nome})

      }
  }
};
</script>

<style lang="scss" scoped>
</style>