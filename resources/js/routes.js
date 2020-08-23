const Login = require("./components/Auth/Login.vue").default;
const Register = require("./components/Auth/Register.vue").default;
const Dashboard = require("./components/Dahsboard.vue").default;
const Table = require("./components/SimpleTable.vue").default;
const DataTable = require("./components/DataTable.vue").default;
const FormBasic = require("./components/FormBasic.vue").default;
const Chart = require("./components/Chart.vue").default;
const AddEmployee = require("./components/Employee/AddEmployee.vue").default;
const AllEmployee = require("./components/Employee/AllEmployee.vue").default;
const Home = require("./components/App.vue").default;

export const routes = [
    {
        path: "/",
        component: Home,
        name: "Home"
    },
    {
        path: "/dashboard",
        component: Dashboard,
        name: "dashboard"
    },
    {
        path: "/login",
        component: Login,
        name: "login"
    },
    {
        path: "/register",
        component: Register,
        name: "register"
    },
    {
        path: "/table",
        component: Table,
        name: "table"
    },
    {
        path: "/data-table",
        component: DataTable,
        name: "data-table"
    },
    {
        path: "/form-basic",
        component: FormBasic,
        name: "form-basic"
    },
    {
        path: "/charts",
        component: Chart,
        name: "charts"
    },
    {
        path: "/add-employee",
        component: AddEmployee,
        name: "add-employee"
    },
    {
        path: "/all-employee",
        component: AllEmployee,
        name: "all-employee"
    }
];
