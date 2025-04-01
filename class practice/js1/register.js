function checkForm() {
    const fullname = document.getElementById("fullName");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirmpass = document.getElementById("passwordConfirm");
    const errorsdiv = document.getElementById("formErrors");

    const inputs = [fullname, email, password, confirmpass];
    inputs.forEach(input => input.classList.remove("error"));
    errorsdiv.innerHTML = '';

    let errors = [];

    if (fullname.value.length < 1) {
        errors.push("Missing full name.");
        fullname.classList.add("error");
    }

    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
    if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
        errors.push("Invalid or missing email address.");
        email.classList.add("error");
    }

    const passw = password.value;
    if (passw.length < 10 || passw.length > 20) {
        errors.push("Password must be between 10 and 20 characters.");
        password.classList.add("error");
    }

    const lowercaseRegex = /[a-z]/;
    if (!lowercaseRegex.test(passw)) {
        errors.push("Password must contain at least one lowercase character.");
        password.classList.add("error");
    }

    const uppercaseRegex = /[A-Z]/;
    if (!uppercaseRegex.test(passw)) {
        errors.push("Password must contain at least one uppercase character.");
        password.classList.add("error");
    }

    const digitRegex = /[0-9]/;
    if (!digitRegex.test(passw)) {
        errors.push("Password must contain at least one digit.");
        password.classList.add("error");
    }

    if (password !== confirmpass.value) {
        errors.push("Password and confirmation password don't match.");
        password.classList.add("error");
        confirmpass.classList.add("error");
    }

    if (errors.length > 0) {
        errorsdiv.classList.remove("hide");

        const ul = document.createElement("ul");
        errors.forEach(err => {
            const li = document.createElement("li");
            li.textContent = err;
            ul.appendChild(li);
        });
        errorsdiv.appendChild(ul);
    } else {
        errorsdiv.classList.add("hide");
        inputs.forEach(input => input.classList.remove("error"));
    }
}
    

document.getElementById("submit").addEventListener("click", function(event) {
checkForm();

// Prevent default form action. DO NOT REMOVE THIS LINE
event.preventDefault();
});