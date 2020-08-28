<template>
  <div>
    <div class="jumbotron" v-if="notLogged">
      <h1>Welcome To ghjhbg</h1>
      <!-- <nav class="nav-item">
        <router-link :to="{ name: 'login' }" class="nav-link">Login</router-link>
        <router-link :to="{ name: 'register' }" class="nav-link">Register</router-link>
      </nav>-->
    </div>
    <modal-logout />
    <router-view></router-view>
  </div>
</template>

<script>
import ModalLogout from "./Shared/ModalLogout.vue";

export default {
  created() {
    if (User.loggedIn()) {
      this.notLogged = false;
    }
  },
  components: {
    ModalLogout,
  },
  data() {
    return {
      notLogged: true,
    };
  },
};
</script>

<style>
li.nav-item {
  list-style: none;
  display: inline-block;
}
</style>
