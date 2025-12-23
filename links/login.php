<?php
session_start();
require_once('backend/database.php');

$error = '';
$success = '';

// Handle Login

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){
  $email = trim($_POST['email']);
  $pass = $_POST['password'];

  if (empty($email) || empty($pass)) {
    $error = 'Wrong email or password.';
  } else {
    $stmt = $con->prepare("SELECT id, fname, lname, email, password from admin_table where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows === 1) {
      $admin = $result -> fetch_assoc();

      if (password_verify($pass, $admin['password'])){
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['fname'] + " " + $admin['lname'];
        $_SESSION['admin_email'] = $admin['email'];

        header('Location: dashboard/dashboard.php');
        exit();

      } else {
        $error = "Invalid email or password.";
      }
    } else {
      $error = "Invalid email or password.";
    }
    $stmt->close();
  }

}

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['register'])){
  $fname = trim($_POST['fname']);
  $lname = trim($_POST['lname']);
  $email = trim($_POST['email']);
  $pass = $_POST['password'];
  $confirm_pass = $_POST['confirm_password'];

  if (empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($confirm_pass)){
    $error = "Fill in the blanks.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = "Please input a valid email.";
  } else if (strlen($pass) < 8){
    $error = "Password must be longer than 8 characters.";
  } else if ($pass !== $confirm_pass){
    $error = "Passwords do not match";
  } else {
    $stmt = $con->prepare("SELECT id from admin_table where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
      $error = "There is already an account with this email";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $stmt = $con->prepare("INSERT INTO admin_table (fbname, lname, email, password) VALUES (?,?,?,?)");
      $stmt->bind_param("ssss", $fname, $lname, $email, $hashed_password);


      if ($stmt->execute()){
        $success = "Account created successfully. You can now log in.";
      } else {
        $error = "Registration Failed, Try again later.";
      }
      $stmt->close();
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Login - MCR Realty</title>
      <link rel="stylesheet" href="../css/login.css">
      <style>
          .message {
              padding: 12px;
              margin-bottom: 15px;
              border-radius: 6px;
              font-size: 14px;
              font-weight: 600;
          }
          .error-msg {
              background-color: #fee;
              color: #c33;
              border: 1px solid #fcc;
          }
          .success-msg {
              background-color: #efe;
              color: #3c3;
              border: 1px solid #cfc;
          }
      </style>
  </head>
  <body>
      <div class="container">
          <div class="card">
              <!-- Tab Buttons -->
              <div class="tabs">
                  <button type="button" class="tab active" id="tab-login" onclick="showTab('login')">
                      Log in
                  </button>
                  <button type="button" class="tab" id="tab-register" onclick="showTab('register')">
                      Create account
                  </button>
              </div>

              <!-- Display Messages -->
              <?php if ($error): ?>
                  <div class="message error-msg"><?= htmlspecialchars($error) ?></div>
              <?php endif; ?>
              
              <?php if ($success): ?>
                  <div class="message success-msg"><?= htmlspecialchars($success) ?></div>
              <?php endif; ?>

              <!-- Login Form -->
              <form id="loginForm" method="POST" style="display: block;">
                  <input type="hidden" name="login" value="1">
                  
                  <label for="login-email">Email</label>
                  <input type="email" id="login-email" name="email" placeholder="Enter your email" required>

                  <label for="login-password">Password</label>
                  <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
                  
                  <label class="small-label">
                      <input type="checkbox" id="show-login-pass" onclick="togglePassword('login-password')">
                      Show password
                  </label>

                  <div class="actions space-between">
                      <label class="small-label-inline">
                          <input type="checkbox" name="remember"> Remember me
                      </label>
                      <button type="submit" class="btn primary">Log in</button>
                  </div>
              </form>

              <!-- Register Form -->
              <form id="registerForm" method="POST" style="display: none;">
                  <input type="hidden" name="register" value="1">
                  
                  <div class="row">
                      <div class="col">
                          <label for="fname">First name</label>
                          <input type="text" id="fname" name="fname" placeholder="First name" required>
                      </div>
                      <div class="col">
                          <label for="lname">Last name</label>
                          <input type="text" id="lname" name="lname" placeholder="Last name" required>
                      </div>
                  </div>

                  <label for="reg-email">Email</label>
                  <input type="email" id="reg-email" name="email" placeholder="Enter your email" required>

                  <label for="reg-password">Password</label>
                  <input type="password" id="reg-password" name="password" placeholder="At least 6 characters" required>

                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" id="confirm-password" name="confirm_password" placeholder="Re-enter password" required>

                  <div class="actions right">
                      <button type="reset" class="btn ghost">Reset</button>
                      <button type="submit" class="btn primary">Sign up</button>
                  </div>
              </form>

              <footer>By continuing, you agree to our Terms and Privacy Policy.</footer>
          </div>
      </div>

      <script>
          // Toggle between login and register forms
          function showTab(tab) {
              const loginTab = document.getElementById('tab-login');
              const registerTab = document.getElementById('tab-register');
              const loginForm = document.getElementById('loginForm');
              const registerForm = document.getElementById('registerForm');

              if (tab === 'login') {
                  loginTab.classList.add('active');
                  registerTab.classList.remove('active');
                  loginForm.style.display = 'block';
                  registerForm.style.display = 'none';
              } else {
                  registerTab.classList.add('active');
                  loginTab.classList.remove('active');
                  registerForm.style.display = 'block';
                  loginForm.style.display = 'none';
              }
          }

          // Toggle password visibility
          function togglePassword(fieldId) {
              const field = document.getElementById(fieldId);
              field.type = field.type === 'password' ? 'text' : 'password';
          }

          // Auto-switch to login tab if registration was successful
          <?php if ($success): ?>
              setTimeout(() => showTab('login'), 2000);
          <?php endif; ?>
      </script>
  </body>
</html>