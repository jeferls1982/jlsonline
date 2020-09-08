<template>
  <div>
    
    <!-- --------------------------------------------------------------------------------------- -->
    <b-list-group-item class="d-flex justify-content-between align-items-center">
      <form @submit.prevent="add" class="form-inline">
        <label class="sr-only" for="novoItem">Novo Item</label>
        <b-input-group prepend="+" class="mb-2 mr-sm-2 mb-sm-0 success">
          <b-input id="novoItem" v-model="novoItem" placeholder="Novo item"></b-input>
        </b-input-group>
        <b-button type="submit"  variant="outline-success"><b-icon icon="plus" font-scale="1"></b-icon> Adicionar</b-button>
      </form>
    </b-list-group-item>
  </div>
</template>

<script>
export default {
  data() {
    return {
      novoItem:''
    };
  },
  methods:{
      add(){
          this.$emit('add',this.novoItem)
         
    }
  }
};
</script>

<style lang="scss" scoped>
</style>