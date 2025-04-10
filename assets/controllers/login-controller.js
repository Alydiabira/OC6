import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ["username", "password"];

    prefillAlyAdmin() {
        this.usernameTarget.value = "aly";
        this.passwordTarget.value = "azerty";
    }

    togglePasswordInputType(event) {
        let passwordInput = this.passwordTarget;
        passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    }
}
