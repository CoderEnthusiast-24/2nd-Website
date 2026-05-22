<?php
session_start();
require_once('../links/backend/database.php');

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
        $_SESSION['admin_name'] = $admin['fname']. " " . $admin['lname'];
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


?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Login - MCR Realty</title>
      <link rel="stylesheet" href="../css/admin.css">
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
              <h2 style="text-align: center; padding: 12px 0 24px">LOG IN</h2>
              <!-- Display Messages -->
              <?php if ($error): ?>
                  <div class="message error-msg"><?= htmlspecialchars($error) ?></div>
              <?php endif; ?>
              
              <?php if ($success): ?>
                  <div class="message success-msg"><?= htmlspecialchars($success) ?></div>
              <?php endif; ?>

              <!-- Login Form -->
              <form id="loginForm" method="POST">
                  <input type="hidden" name="login" value="1">
                  
                  <div class="input-box">
                        <input required type="text" class="input" id="email" name="email">
                        <label class="label">
                            <span class="char" style="--index: 0; margin-left: 20px;">E</span>
                            <span class="char" style="--index: 1">m</span>
                            <span class="char" style="--index: 2">a</span>
                            <span class="char" style="--index: 3">i</span>
                            <span class="char" style="--index: 4; padding-right: 5px;">l</span>
                        </label>
                  </div>

                  <div class="input-box password-box">
                    <div>
                      <input required type="password" class="input" id="password" name="password">
                      <label class="label">
                          <span class="char" style="--index: 0; margin-left: 20px;">P</span>
                          <span class="char" style="--index: 1">a</span>
                          <span class="char" style="--index: 2">s</span>
                          <span class="char" style="--index: 3">s</span>
                          <span class="char" style="--index: 4">w</span>
                          <span class="char" style="--index: 5">o</span>
                          <span class="char" style="--index: 6">r</span>
                          <span class="char" style="--index: 7; padding-right: 5px;">d</span>
                      </label>
                    </div>

                    <div class="show-password-toggle actions ">
                      <label class="small-label">
                        <input type="checkbox" id="showPasswordCheckbox" onclick="togglePassword('password')"> Show password
                      </label>
                      <label class="small-label">
                        <input type="checkbox" name="remember"> Remember me
                      </label>
                    </div>
                  </div>

                  <button type="submit" class="btn primary">Log in</button>
                  <a href="admin-reg.php" class="subtext">Don't have an account? <span class="clickable-blue">Click Here.</span></a>
              </form>

              <footer>By continuing, you agree to our Terms and Privacy Policy.</footer>
          </div>
      </div>

      <script>
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