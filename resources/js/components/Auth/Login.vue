<template>
  <div class="component-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" @submit.prevent="login">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail"
                        aria-describedby="emailHelp"
                        placeholder="Enter Email Address"
                        v-model="form.email"
                      />
                      <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                    </div>
                    <div class="form-group">
                      <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword"
                        placeholder="Password"
                        v-model="form.password"
                      />
                      <small class="text-danger" v-if="errors.password">{{ errors.password[0] }}</small>
                    </div>
                    <div class="form-group">
                      <div
                        class="custom-control custom-checkbox small"
                        style="line-height: 1.5rem;"
                      >
                        <input type="checkbox" class="custom-control-input" id="customCheck" />
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                  <hr />
                  <div class="text-center">
                    <router-link
                      :to="{ name: 'register' }"
                      class="font-weight-bold small"
                    >Create an Account!</router-link>
                  </div>
                  <div class="text-center"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "dashboard" });
    }
  },
  data() {
    return {
      form: {
        email: null,
        password: null,
      },
      errors: {},
    };
  },
  computed: {
    show() {
      return this.$store.state.show;
    },
  },
  methods: {
    login() {
      this.$store.commit("SHOW_SPINNER");
      axios
        .post("api/auth/login", this.form)
        .then((res) => {
          this.$store.commit("HIDE_SPINNER");
          User.responseAfterLogin(res);
          setTimeout(() => {
            this.$router.go({ name: "dashboard" });
          }, 1000);
        })
        .catch((err) => {
          this.$store.commit("HIDE_SPINNER");

          //   console.log(err.response.data.errors);

          if (err.response.status === 401) {
            Toast.fire({
              icon: "warning",
              title: "Invalid Email or Password",
            });
            return (this.errors = {
              email: ["Wrong Email"],
              password: ["Wrong Password"],
            });
          }
          Toast.fire({
            icon: "warning",
            title: "Empty Email and Password",
          });
          this.errors = err.response.data.errors || {
            email: ["Wrong Email"],
            password: ["Wrong Password"],
          };
          //   console.log("Ini dari aslinya", this.errors);
        });
    },
  },
};
</script>

<style></style>
