<template>
  <div class="col-sm sombra p-2">

    <transition name="fade" mode="out-in">
      <b-list-group>
        <b-list-group-item
          v-for="item in items"
          :key="item.id"
          class="d-flex justify-content-between align-items-center"
          
        >
          {{ item.nome }}
          <b-badge class="azulClaro" pill></b-badge>
        </b-list-group-item>
        <!-- ------------------------------------------------------------------------------------------------ -->
        <add-component></add-component>
      </b-list-group>
    </transition>
  </div>
</template>

<script>

import AddComponent from './categorias/Add'
export default {
   props: ["items"],
  data(){
   return{

   }
  }, 

  
  components: {
    AddComponent,
  },
};
</script>

<style lang="scss" scoped>
</style>