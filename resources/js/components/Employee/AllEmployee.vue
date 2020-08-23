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
      </ol>
    </div>
    <!-- <div v-for="(employee, index) in employees" :key="index">
            <div v-for="(emp, index) in employee" :key="index">
                {{ emp | index }}
            </div>
    </div>-->
    <div class="row justify-content-center">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>Prefix</th>
                  <th>Name</th>
                  <th>LastName</th>
                  <th>Start date</th>
                  <th>Salary</th>
                  <th>Photo</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(emp, index) in employees" :key="index">
                  <td>{{ emp.gender }}</td>
                  <td>{{ emp.first_name }}</td>
                  <td>{{ emp.last_name }}</td>
                  <td>{{ emp.join_date }}</td>
                  <td>{{ new Intl.NumberFormat('ID', { style: 'currency', currency: 'IDR'}).format(emp.salary) }}</td>
                  <td>
                    <img :src="emp.photo" alt="employee photo" style="width:100px;height:100px;" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    axios
      .get("/api/employee/all")
      .then((res) => {
        console.log(res.data);
        this.employees = res.data;
      })
      .catch((err) => console.log(err));
  },
  data() {
    return {
      employees: "",
    };
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
