<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./loginAdmin.css" />
    <title>Login Admin</title>
  </head>
  <body>
    <section>
      <div class="form-box">
        <div class="form-value">
          <form id="login-admin">
            <h2>Login Admin</h2>
            <div class="inputbox">
              <ion-icon name="mail-outline"></ion-icon>
              <input name="username" id ="username" type="text" required />
              <label for="">Username</label>
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input name="password" id="password" type="password" required />
              <label for="">Password</label>
            </div>
            <div class="login-message" id="login-message"></div>
            <button>Log in</button>
          </form>
        </div>
      </div>
    </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
  <script src="./javascript/request.js"></script>
</html>