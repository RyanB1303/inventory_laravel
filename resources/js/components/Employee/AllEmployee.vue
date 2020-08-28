<template>
  <div class="all-employee">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">All Employee</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="./">Home</a>
        </li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active" aria-current="page">All Employee</li>
        <li class="breadcrumb-item">Page {{ employees.current_page }}</li>
      </ol>
    </div>
    <div class="row justify-content-center">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="table-responsive p-3">
            <!-- Search Bar -->
            <search-bar v-model="searchInput" />
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Photo</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(emp, index) in filterSearch" :key="index">
                  <td>{{ emp.first_name }}</td>
                  <td>
                    <img :src="emp.photo" alt="employee photo" style="width:100px;height:100px;" />
                  </td>
                  <td>
                    {{
                    new Intl.NumberFormat("ID", {
                    style: "currency",
                    currency: "IDR"
                    }).format(emp.salary)
                    }}
                  </td>
                  <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger mx-2">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <pagination :data="employees" @pagination-change-page="getEmployee"></pagination>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import pagination from "laravel-vue-pagination";
import SearchBar from "../Shared/SearchBar";
export default {
  created() {
    this.getEmployee();
  },
  data() {
    return {
      employees: { data: [] },
      searchInput: "",
    };
  },
  computed: {
    filterSearch() {
      return this.employees.data.filter((employee) => {
        return employee.first_name
          .toLowerCase()
          .match(this.searchInput.toLowerCase());
      });
    },
  },
  components: {
    pagination,
    SearchBar,
  },
  methods: {
    getEmployee(page = 1) {
      window.scrollTo({ top: 0, right: 0, behavior: "smooth" });
      axios
        .get("/api/employee/all?page=" + page)
        .then((res) => {
          this.employees = res.data;
        })
        .catch((err) => Notifications.warning());
    },
  },
};
</script>

<style scoped>
td {
  vertical-align: middle;
  text-transform: capitalize;
  text-align: center;
}
th {
  text-align: center;
}
</style>
