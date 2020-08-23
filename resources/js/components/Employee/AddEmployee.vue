<template>
  <div class="add-employee">
    <router-link to="/all-employee" tag="button" class="ml-1 btn btn-primary mw-25">All Employee</router-link>
    <div class="card mb-4 mt-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <span>
          <i class="far fa-address-card fa-3x"></i>
        </span>
        <h3 class="ml-1 font-weight-bold">Employee Info</h3>
        <div class="button-collection">
          <button class="btn btn-warning mw-50 mr-2">Reset</button>
          <button class="btn btn-danger mw-50 mr-2">Discard</button>
        </div>
      </div>
      <form class="card-body" @submit.prevent="addEmployee" enctype="multipart/form-data">
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input
              type="text"
              class="form-control input-group"
              placeholder="Username"
              v-model="form.username"
            />
          </div>
          <div class="form-group col-md-6">
            <input
              type="email"
              class="form-control"
              placeholder="Email Address"
              v-model="form.email"
              name="email"
            />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <select name="gender" class="form-control p-1 input-group-text" v-model="form.gender">
                <option value="m">Mr.</option>
                <option value="f">Mrs.</option>
              </select>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="First Name"
              v-model="form.firstName"
              aria-describedby="basic-addon1"
            />
          </div>
          <div class="form-group col-md-6">
            <input
              type="text"
              class="form-control"
              placeholder="Last Name"
              v-model="form.lastName"
              aria-describedby="basic-addon1"
            />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp.</span>
            </div>
            <input
              type="text"
              class="form-control input-group"
              placeholder="Salary"
              v-model="form.salary"
            />
          </div>
          <div class="form-group col-md-6">
            <input type="text" v-model="form.position" placeholder="Position" class="form-control" />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <span class="input-group-text">+62</span>
            </div>
            <input type="tel" v-model="form.phone" placeholder="Phone Number" class="form-control" />
          </div>
          <div class="form-group col-md-6">
            <input type="text" v-model="form.city" placeholder="City" class="form-control" />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group col-md-6 d-flex flex-sm-column justify-content-sm-around">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Join Date</span>
              </div>
              <input
                class="form-control input-group"
                type="date"
                id="example-date-input"
                v-model="form.joinDate"
              />
            </div>
            <div class="custom-file d-flex flex-row-reverse">
              <input
                type="file"
                class="custom-file-input"
                multiple
                lang="ar"
                id="customFile"
                dir="rtl"
                @change="imageSubmit"
              />
              <label class="custom-file-label text-right" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="col-md-6">
            <img
              :src="form.photo"
              alt="..."
              class="rounded mx-auto d-block"
              style="
                            height:200px;
                            max-height:200px;
                            width:200px;
                            max-width:200px;
                            "
            />
          </div>
        </div>
        <button class="btn btn-success w-100">Submit</button>
      </form>
      <button class="btn btn-warning" @click="notify">Click me for notificartion</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        username: "",
        email: "",
        gender: "m",
        firstName: "",
        lastName: "",
        salary: "",
        position: "",
        phone: "",
        city: "",
        joinDate: "",
        // photo: "",
      },
    };
  },
  computed: {},
  methods: {
    notify() {
      Notifications.warning();
      // this.$store.commit("SHOW_LOGOUT");
      // this.$store.commit("SHOW_SPINNER");
    },
    addEmployee() {
      this.$store.commit("SHOW_SPINNER");
      console.log(this.form);
      setTimeout(() => {
        axios
          .post("api/employee/add", this.form)
          .then((res) => {
            this.$store.commit("HIDE_SPINNER");
            Notifications.success();
            console.log(res);
            this.$router.push({ name: "all-employee" });
          })
          .catch((err) => {
            this.$store.commit("HIDE_SPINNER");
            console.log(err);
            Notifications.failedInsert();
          });
      }, 2000);
    },
    imageSubmit(event) {
      const file = event.target.files[0];
      if (file.size > 1048770) {
        Notifications.imageWarning();
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.photo = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
  },
};
</script>

<style scoped>
.custom-file-label::after {
  left: 0;
  right: auto;
  border-left-width: 0;
  border-right: inherit;
}
</style>
