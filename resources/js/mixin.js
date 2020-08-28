export default {
    created: function() {
        if (!User.loggedIn() && this.$router.name !== "login") {
            this.$router.push({ name: "login" }).catch(() => {});
        }
    },
    methods: {}
};
