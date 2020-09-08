<template>
  <div class="row">
    <div class="text-center" @click="getIngredientes">
      <b-button pill class="azulEscuro sombra" @click="show = !show">Ingredientes</b-button>
      <!-- <div class="h3 lead text-light" @click="show = !show">Ingredientes</div> -->
      <transition name="slide-fade">
        <listagem-component v-show="show" :items="ingredientes"></listagem-component>
      </transition>
    </div>
  </div>
</template>

<script>
import ListagemComponent from "../Listagem";
import axios from "axios";
export default {
  data() {
    return {
      show: false,
      ingredientes: [],
    };
  },

  methods: {
    getIngredientes() {
      axios
        .get("http://localhost:3000/cardapio/ingredientes")
        .then((response) => {
          this.ingredientes = response.data;
        })
        .catch((error) => {
          console.log(error);
          this.errored = true;
        })
        .finally(() => (this.loading = false));
    },
  },

  components: {
    ListagemComponent,
  },
};
</script>

<style lang="scss" scoped>
.lista {
  border-radius: 15px;
  box-shadow: 5px 5px 5px #f29494;
}

.slide-fade-enter-active {
  transition: all 0.3s ease;
}
.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>