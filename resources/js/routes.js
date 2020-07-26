const Login = require('./components/Auth/Login.vue').default
const Register = require('./components/Auth/Register.vue').default
const App = require('./components/App.vue').default
const Table = require('./components/SimpleTable.vue').default
const DataTable = require('./components/DataTable.vue').default

export const routes = [
    {
        path:'/',
        component: App,
        name: 'home'
    },{
        path:'/login',
        component: Login,
        name: 'login'
    },{
        path:'/register',
        component: Register,
        name: 'register'
    },{
        path:'/table',
        component: Table,
        name: 'table'
    },
    {
        path:'/data-table',
        component: DataTable,
        name: 'data-table'
    },
]