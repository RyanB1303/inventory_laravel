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
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form>
                    <div class="form-group">
                      <label>Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="exampleInputFirstName"
                        placeholder="Enter First Name"
                        name="name"
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
                      />
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword"
                        placeholder="Password"
                        name="password"
                      />
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="exampleInputPasswordRepeat"
                        placeholder="Repeat Password"
                      />
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr />
                  <div class="text-center">
                    <router-link
                      :to="{name: 'login'}"
                      class="font-weight-bold small"
                    >Already have an account?</router-link>
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
export default {};
</script>

<style>
</style>