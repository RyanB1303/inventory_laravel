<template>
    <ul
        class="navbar-nav sidebar sidebar-light accordion"
        id="accordionSidebar"
        v-if="show"
    >
        <router-link
            :to="{ name: 'dashboard' }"
            class="sidebar-brand d-flex align-items-center justify-content-center"
        >
            <div class="sidebar-brand-icon">
                <img :src="'/backend/img/logo/logo2.png'" />
            </div>
            <div class="sidebar-brand-text mx-3">RuangAdmin</div>
        </router-link>
        <div id="feature-list">
            <hr class="sidebar-divider my-0" />
            <li class="nav-item active">
                <router-link :to="{ name: 'dashboard' }" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></router-link
                >
            </li>
            <hr class="sidebar-divider" />
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseForm"
                    aria-expanded="true"
                    aria-controls="collapseForm"
                >
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Forms</span>
                </a>
                <div
                    id="collapseForm"
                    class="collapse"
                    aria-labelledby="headingForm"
                    data-parent="#accordionSidebar"
                >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Forms</h6>
                        <router-link
                            :to="{ name: 'form-basic' }"
                            class="collapse-item"
                            >Form Basics</router-link
                        >
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseTable"
                    aria-expanded="true"
                    aria-controls="collapseTable"
                >
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div
                    id="collapseTable"
                    class="collapse"
                    aria-labelledby="headingTable"
                    data-parent="#accordionSidebar"
                >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables</h6>
                        <router-link
                            :to="{ name: 'table' }"
                            class="collapse-item"
                            >Simple Table</router-link
                        >
                        <router-link
                            :to="{ name: 'data-table' }"
                            class="collapse-item"
                            >Data Table</router-link
                        >
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider" />
            <!-- <li class="nav-item">
            <router-link :to="{ name: 'login' }" class="nav-link"
                >Login</router-link
            >
            <router-link :to="{ name: 'register' }" class="nav-link"
                >Register</router-link
            >
        </li> -->
            <hr class="sidebar-divider" />
            <li class="nav-item">
                <router-link :to="{ name: 'charts' }" class="nav-link">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span>
                </router-link>
            </li>
        </div>
        <hr class="sidebar-divider" />
        <div class="version" id="version-ruangadmin"></div>
    </ul>
</template>

<script>
export default {
    created() {
        if (!User.loggedIn()) {
            this.show = false;
        }
    },
    data() {
        return {
            show: true
        };
    }
};
</script>

<style></style>
