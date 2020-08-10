<template>
  <div>
    <div class="jumbotron" v-if="notLogged">
      <h1>Welcome To RuangAdmin</h1>
      <!-- <li class="nav-item">
                <router-link :to="{ name: 'login' }" class="nav-link"
                    >Login</router-link
                >
                <router-link :to="{ name: 'register' }" class="nav-link"
                    >Register</router-link
                >
      </li>-->
    </div>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  created() {
    if (User.loggedIn()) {
      this.notLogged = false;
    }
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
