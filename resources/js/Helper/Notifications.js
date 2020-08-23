class Notifications {
    success() {
        new Noty({
            type: "success",
            text: "Successfully Done",
            layout: "topRight",
            timeout: 1000,
            closeWith: ["click"]
        }).show();
    }
    warning() {
        new Noty({
            type: "warning",
            text: "Something are not right",
            layout: "topRight",
            timeout: 1000,
            closeWith: ["click"]
        }).show();
    }
    imageWarning() {
        new Noty({
            type: "error",
            text: "File are too big",
            layout: "topRight",
            timeout: 1000,
            closeWith: ["click"]
        }).show();
    }
    failedInsert() {
        new Noty({
            type: "error",
            text: "Sorry , Failed to add",
            layout: "topRight",
            timeout: 1000,
            closeWith: ["click"]
        }).show();
    }
}
export default Notifications = new Notifications();
