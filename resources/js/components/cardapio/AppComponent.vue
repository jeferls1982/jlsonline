<template>
  <div>
    <!-- ------------------------------------------------------------navbar -->
    <navbar-component></navbar-component>
    <!-- ----------------------------------------------------------------------sidebar -->
    <b-container>
      <div class="d-flex align-items-center">
        <div class="ml-auto py-3">
          <sidebar-component @chamadoSidebar="mostrarOpcao"></sidebar-component>
        </div>
      </div>
    </b-container>
    <!-- -----------------------------------------------------------------------main -->

    <div class="container">
      <b-row align-h="center">
        <div v-show="showCategoria" class="mx-4">
          <categoria-component ></categoria-component>
        </div>
       
        <!-- <div v-show="showIngredientes" class="mx-4">
          <ingrediente-component></ingrediente-component>
        </div> -->
      </b-row>

      <!-- --------------------------------------------------------------------------------footer -->
      <footer class="fixed-bottom pink row justify-content-center">
        <a class="text-muted" href="/">®jlsonline</a>
      </footer>
    </div>
  </div>
</template>

<script>
import NavbarComponent from "./partes/NavbarComponent";
import SidebarComponent from "./partes/SidebarComponent";
import CategoriaComponent from "./models/categorias/Categorias";
import IngredienteComponent from "./models/ingredientes/Ingrediente";

export default {
  data() {
    return {
      showCategoria: true,
      showIngredientes: false,
    };
  },
  methods: {
    mostrarOpcao(i) {
      switch (i) {
        case "cat":
          this.showCategoria = !this.showCategoria;
          break;
        case "ing":
          this.showIngredientes = !this.showIngredientes;
          this.showCategoria = false;

        default:
          break;
      }
    },
    
  },

  components: {
    NavbarComponent,
    SidebarComponent,
    CategoriaComponent,
    IngredienteComponent,
  },
};
</script>

<style lang="scss" >
// link = https://color.adobe.com/pt/explore?page=3
.azulEscuro {
  background-color: #022859;
}
.azulMedio {
  background-color: #0388a6;
}
.azulClaro {
  background-color: #82d9d0;
}
.pink {
  background-color: #f29494;
}
.hotPink {
  background-color: #f2505d;
}
.textAzulEscuro {
  color: #022859;
}

.sombra {
  box-shadow: 5px 5px 5px #f29494;
}
.navTop {
  border-bottom: 1px solid #022859;
}
</style>