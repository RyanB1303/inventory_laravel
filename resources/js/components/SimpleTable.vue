<template>
  <div class="table-component">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="./">Home</a>
        </li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Fruit Tables</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Order ID</th>
                  <th>Fruit</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(fruit, index) in fruits" :key="index">
                  <td>{{ index + 1 }}</td>
                  <td>{{ fruit }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="input-group">
            <input
              type="text"
              name="fruit"
              placeholder="add fruit"
              v-model="fruit"
              @keyup.enter="addFruit(fruit)"
            />
            <button @click.prevent="addFruit(fruit)">Submit</button>
          </div>
          <div class="card-footer"></div>
        </div>
        <div class="card">
          <button class="btn btn-dark" @click.prevent="loadCar">Load Car</button>
          <div class="table-responsive p-3" v-if="showCars">
            <table class="table align-items-center table-flush" id="dataTable" v-show="cars">
              <thead class="thead-light">
                <tr>
                  <th>Id</th>
                  <th>Manufacture</th>
                  <th>Tires</th>
                  <th>Color</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="car in cars" :key="car.id">
                  <td>{{ car.id }}</td>
                  <td>{{ car.manufacture }}</td>
                  <td>{{ car.tires }}</td>
                  <td>{{ car.color }}</td>
                  <td>{{ car.price }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->

    <!-- Modal Logout -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      fruit: "",
      showCars: false,
    };
  },
  computed: {
    fruits() {
      return this.$store.getters.fruitNtSort;
    },
    cars() {
      return this.$store.getters.allCars;
    },
  },
  methods: {
    addFruit(fruit) {
      this.$store.commit("addFruit", fruit);
      this.fruit = "";
    },
    loadCar() {
      this.showCars = !this.showCars;
      console.time("cars load");
      let cars = this.$store.dispatch("GET_CARS");
      console.timeEnd("cars load");
    },
  },
};
</script>

<style></style>
