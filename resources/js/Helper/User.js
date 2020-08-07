import Token from "./Token";
import AppToken from "./AppToken";

class User {
    responseAfterLogin(res) {
        const access_token = res.data.access_token;
        const username = res.data.user_name;

        if (Token.isValid(access_token)) {
            AppToken.store(access_token, username);
        }
    }
    hasToken() {
        const storeToken = localStorage.getItem("token");
        if (storeToken) {
            return Token.isValid(storeToken) ? true : false;
        }
        false;
    }
    loggedIn() {
        return this.hasToken();
    }
    userName() {
        if (this.loggedIn()) {
            return localStorage.getItem(user);
        }
    }
    userId() {
        if (this.loggedIn()) {
            const payload = Token.payload(localStorage.getItem("token"));
            return payload.sub;
        }
        return false;
    }
}

export default User = new User();
