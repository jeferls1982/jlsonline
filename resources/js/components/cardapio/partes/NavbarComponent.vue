<template>
  <div>
    <b-navbar  toggleable="sm"  type="dark"  class="hotPink  sombra">
      <b-navbar-brand  href="/cardapio">Cardápio</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
            <b-nav-item href="/">Jlsonline</b-nav-item>

           <b-nav-item-dropdown text="Lang" right>
            <b-dropdown-item href="#">EN</b-dropdown-item>
            <b-dropdown-item href="#">ES</b-dropdown-item>
            <b-dropdown-item href="#">RU</b-dropdown-item>
            <b-dropdown-item href="#">FA</b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
         

         

          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template v-slot:button-content>
              <em> <b-icon icon="person-circle" animation="spin" font-scale="1"></b-icon></em>
            </template>
            <b-dropdown-item href="/login">Login</b-dropdown-item>
            
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>

// .hotPink{
//     background-color: #F2505D;
// }
</style>