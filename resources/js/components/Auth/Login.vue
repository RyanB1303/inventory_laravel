<template>
  <div class="component-login">
    <Spinner :show="show">
      <fulfilling-bouncing-circle-spinner :animation-duration="500" :size="60" color="#ff1d5e" />
    </Spinner>
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
import Spinner from "../Shared/Spinner";
import { FulfillingBouncingCircleSpinner } from "epic-spinners";

export default {
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "dashboard" });
    }
  },
  components: {
    Spinner,
    FulfillingBouncingCircleSpinner,
  },
  data() {
    return {
      form: {
        email: null,
        password: null,
      },
      show: false,
      errors: {},
    };
  },
  methods: {
    login() {
      this.show = !this.show;
      axios
        .post("api/auth/login", this.form)
        .then((res) => {
          this.show = false;
          User.responseAfterLogin(res);
          Toast.fire({
            icon: "success",
            title: "Signed in successfully",
          });
          this.$router.push({ name: "dashboard" });
        })
        .catch((err) => {
          this.show = false;
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
