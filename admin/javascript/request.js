document
  .getElementById("login-admin")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    var url = "./server/login.php";
    var formData = new FormData(document.getElementById("login-admin"));
    xhr.open("POST", url, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        var jsonResponse = JSON.parse(response);
        if (jsonResponse.success) {
          window.location.href = "./dashboard.php";
        } else {
          var message = jsonResponse.message;
          document.getElementById("login-message").innerHTML = message;
          setTimeout(function () {
            document.getElementById("login-message").innerHTML = "";
          }, 1500);
        }
      }
    };
    xhr.send(formData);
});