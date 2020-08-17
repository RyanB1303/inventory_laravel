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
              aria-label="username"
            />
          </div>
          <div class="form-group col-md-6">
            <input
              type="email"
              class="form-control"
              placeholder="Email Address"
              aria-label="email"
              name="email"
            />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <select name="gender" class="form-control p-1 input-group-text">
                <option value="m">Mr.</option>
                <option value="f">Mrs.</option>
              </select>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="First Name"
              aria-label="First Name"
              aria-describedby="basic-addon1"
            />
          </div>
          <div class="form-group col-md-6">
            <input
              type="text"
              class="form-control"
              placeholder="Last Name"
              aria-label="Last Name"
              aria-describedby="basic-addon1"
            />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp.</span>
            </div>
            <input type="text" class="form-control input-group" placeholder="Salary" name="salary" />
          </div>
          <div class="form-group col-md-6">
            <input type="text" name="position" placeholder="Position" class="form-control" />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group input-group col-md-6">
            <div class="input-group-prepend">
              <span class="input-group-text">+62</span>
            </div>
            <input
              type="tel"
              name="phone"
              placeholder="Phone Number"
              aria-label="Phone Number"
              class="form-control"
            />
          </div>
          <div class="form-group col-md-6">
            <input type="text" name="city" placeholder="City" class="form-control" />
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="form-group col-md-6 d-flex flex-sm-column justify-content-sm-around">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Join Date</span>
              </div>
              <input class="form-control input-group" type="date" id="example-date-input" />
            </div>
            <div class="custom-file d-flex flex-row-reverse">
              <input
                type="file"
                class="custom-file-input"
                multiple
                lang="ar"
                id="customFile"
                dir="rtl"
              />
              <label class="custom-file-label text-right" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="https://picsum.photos/200/200?random=1"
              alt="..."
              class="rounded mx-auto d-block"
            />
          </div>
        </div>
        <button class="btn btn-success w-100">Submit</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.custom-file-label::after {
  left: 0;
  right: auto;
  border-left-width: 0;
  border-right: inherit;
}
</style>