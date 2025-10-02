//Is taken from W3 Schools.
function PasswordToggle() {
  var Input = document.getElementById("Password");
  if (Input.type === "password") {
    Input.type = "text";
  } else {
    Input.type = "password";
  }
} 