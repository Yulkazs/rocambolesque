let button = document.getElementById("submit");

button.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the form from submitting (page reload)
});

function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (message == "") {
        alert("Message must be filled out");
        return false;
    }
    alert("Form submitted successfully");
    return true;
}
