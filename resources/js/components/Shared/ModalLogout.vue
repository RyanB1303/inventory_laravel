<template>
    <!-- Modal Logout -->
    <div
        class="modal fade"
        id="logoutModal"
        role="dialog"
        aria-labelledby="exampleModalLabelLogout"
        aria-hidden="true"
        v-if="modalShow"
    >
        <div class="modal-dialog" role="document" v-if="modalShow">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">
                        Ohh No!
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-outline-primary"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <a @click="logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        modalShow() {
            return this.$store.state.modalShow;
        }
    },
    methods: {
        // logout() {
        //     User.logout;
        // },
        logout() {
            localStorage.removeItem("token");
            localStorage.removeItem("user");
            this.$router.go(this.$router.currentRoute);

            console.log("logout success");
        }
    }
};
</script>

<style></style>
