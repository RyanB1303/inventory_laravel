<template>
    <div id="register">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            Register
                                        </h1>
                                    </div>
                                    <form @submit.prevent="signup">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputFirstName"
                                                placeholder="Enter First Name"
                                                name="name"
                                                v-model="form.name"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="exampleInputEmail"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter Email Address"
                                                name="email"
                                                v-model="form.email"
                                            />
                                            <small
                                                class="text-danger"
                                                v-if="errors.email"
                                                >{{ errors.email[0] }}</small
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="exampleInputPassword"
                                                placeholder="Password"
                                                name="password"
                                                v-model="form.password"
                                            />
                                            <small
                                                class="text-danger"
                                                v-if="errors.password"
                                                >{{ errors.password[0] }}</small
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Repeat Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="exampleInputPasswordRepeat"
                                                placeholder="Repeat Password"
                                                v-model="
                                                    form.password_confirmation
                                                "
                                            />
                                            <small
                                                class="text-danger"
                                                v-if="
                                                    errors.password_confirmation
                                                "
                                                >{{
                                                    errors
                                                        .password_confirmation[0]
                                                }}</small
                                            >
                                        </div>
                                        <div class="form-group">
                                            <button
                                                type="submit"
                                                class="btn btn-primary btn-block"
                                            >
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                    <hr />
                                    <div class="text-center">
                                        <router-link
                                            :to="{ name: 'login' }"
                                            class="font-weight-bold small"
                                            >Already have an
                                            account?</router-link
                                        >
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
    computed: {
        show() {
            return this.$store.state.show;
        }
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            show: false,
            errors: {}
        };
    },
    methods: {
        signup() {
            this.$store.commit("SHOW_SPINNER");

            if (this.form.password_confirmation != this.form.password) {
                this.$store.commit("HIDE_SPINNER");

                return (this.errors = {
                    password_confirmation: ["Password Doen't Match"]
                });
            }

            axios
                .post("/api/auth/signup", this.form)
                .then(res => {
                    this.$store.commit("HIDE_SPINNER");

                    User.responseAfterLogin(res);
                    Toast.fire({
                        icon: "success",
                        title: "Signed in successfully"
                    });
                    this.$router.push({ name: "dashboard" });
                })
                .catch(err => {
                    this.$store.commit("HIDE_SPINNER");

                    if (err.response.status === 401) {
                        return (this.errors = {
                            email: ["Wrong Email"],
                            password: ["Wrong Password"]
                        });
                    }

                    this.errors = err.response.data.errors || {
                        email: ["Something Wrong"],
                        password: ["Something Wrong"]
                    };
                });
        }
    }
};
</script>

<style></style>
