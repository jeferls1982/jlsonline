<template>
  <div>
    <div>
      <b-button v-b-toggle.sidebar-backdrop class="azulMedio sombra px-3"><b-icon icon="gear-fill" animation="spin" style="color: white" class="mx-2"></b-icon> Opções</b-button>

      <b-sidebar
        id="sidebar-backdrop"
        title="Configurações"
        :backdrop-variant="variant"
        backdrop
        shadow
        class="azulEscuro"
      >
        <div>
          <b-list-group>
            <b-list-group-item @click.prevent="mostrar('cat')" class="pink">Categorias</b-list-group-item>
          </b-list-group>
          <b-list-group>
            <b-list-group-item @click.prevent="mostrar('ing')" class="pink">Ingredientes</b-list-group-item>
          </b-list-group>
        </div>
      </b-sidebar>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      variant: "dark",
    };
  },

  methods: {
    mostrar(i) {
      // o metodo precisa estar na chamada do componente pai          
      this.$emit("chamadoSidebar",i);      
    },
  },
};
</script>

<style lang="scss" scoped>
</style>