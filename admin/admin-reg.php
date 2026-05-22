<?php
session_start();
require_once('../links/backend/database.php');

$error = '';
$success = '';

// Handle Registration
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['register'])){
  $fname = trim($_POST['fname']);
  $lname = trim($_POST['lname']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $pass = $_POST['password'];
  $confirm_pass = $_POST['confirm_password'];

  if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($pass) || empty($confirm_pass)){
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
      $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

      $stmt = $con->prepare("INSERT INTO admin_table (fname, lname, email, phone, password) VALUES (?,?,?,?,?)");
      $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $hashed_password);

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
      <title>Admin Registration - MCR Realty</title>
      <link rel="stylesheet" href="../css/admin-reg.css">
      <style>
          .input-row {
              display: flex;
              gap: 12px;
              width: 100%;
          }
          
          .input-row .input-box {
              flex: 1;
          }
      </style>
  </head>
  <body>
      <div class="container">
          <div class="card">
              <h2 style="text-align: center; padding: 12px 0 24px">REGISTER</h2>
              
              <?php if ($error): ?>
                  <div class="message error-msg"><?= htmlspecialchars($error) ?></div>
              <?php endif; ?>
              
              <?php if ($success): ?>
                  <div class="message success-msg"><?= htmlspecialchars($success) ?></div>
              <?php endif; ?>

              <form id="registerForm" method="POST">
                  <input type="hidden" name="register" value="1">
                  
                  <!-- First Name and Last Name Row -->
                  <div class="input-row">
                      <div class="input-box">
                          <input required type="text" name="fname" class="input" id="fname">
                          <label class="label">
                              <span class="char" style="--index: 0; padding-left: 10px;">F</span>
                              <span class="char" style="--index: 1">i</span>
                              <span class="char" style="--index: 2">r</span>
                              <span class="char" style="--index: 3">s</span>
                              <span class="char" style="--index: 4">t</span>
                              <span class="char" style="--index: 5">&nbsp;</span>
                              <span class="char" style="--index: 6">N</span>
                              <span class="char" style="--index: 7">a</span>
                              <span class="char" style="--index: 8">m</span>
                              <span class="char" style="--index: 9; padding-right: 5px;">e</span>
                          </label>
                      </div>
                      
                      <div class="input-box">
                          <input required type="text" name="lname" class="input" id="lname">
                          <label class="label">
                              <span class="char" style="--index: 0; padding-left: 10px;">L</span>
                              <span class="char" style="--index: 1">a</span>
                              <span class="char" style="--index: 2">s</span>
                              <span class="char" style="--index: 3">t</span>
                              <span class="char" style="--index: 4">&nbsp;</span>
                              <span class="char" style="--index: 5">N</span>
                              <span class="char" style="--index: 6">a</span>
                              <span class="char" style="--index: 7">m</span>
                              <span class="char" style="--index: 8; padding-right: 5px;">e</span>
                          </label>
                      </div>
                  </div>

                  <!-- Email -->
                  <div class="input-box">
                      <input required type="text" name="email" class="input" id="email">
                      <label class="label">
                          <span class="char" style="--index: 0; padding-left: 10px;">E</span>
                          <span class="char" style="--index: 1">m</span>
                          <span class="char" style="--index: 2">a</span>
                          <span class="char" style="--index: 3">i</span>
                          <span class="char" style="--index: 4; padding-right: 5px;">l</span>
                      </label>
                  </div>

                  <!-- Phone Number -->
                  <div class="input-box">
                      <input required type="tel" name="phone" class="input" id="phone">
                      <label class="label">
                          <span class="char" style="--index: 0; padding-left: 10px;">P</span>
                          <span class="char" style="--index: 1">h</span>
                          <span class="char" style="--index: 2">o</span>
                          <span class="char" style="--index: 3">n</span>
                          <span class="char" style="--index: 4">e</span>
                          <span class="char" style="--index: 5">&nbsp;</span>
                          <span class="char" style="--index: 6">N</span>
                          <span class="char" style="--index: 7">u</span>
                          <span class="char" style="--index: 8">m</span>
                          <span class="char" style="--index: 9">b</span>
                          <span class="char" style="--index: 10">e</span>
                          <span class="char" style="--index: 11; padding-right: 5px;">r</span>
                      </label>
                  </div>

                  <!-- Password -->
                  <div class="input-box password-box">
                      <div>
                          <input required type="password" name="password" class="input" id="password">
                          <label class="label">
                              <span class="char" style="--index: 0; padding-left: 10px;">P</span>
                              <span class="char" style="--index: 1">a</span>
                              <span class="char" style="--index: 2">s</span>
                              <span class="char" style="--index: 3">s</span>
                              <span class="char" style="--index: 4">w</span>
                              <span class="char" style="--index: 5">o</span>
                              <span class="char" style="--index: 6">r</span>
                              <span class="char" style="--index: 7; padding-right: 5px;">d</span>
                          </label>
                          <label class="small-label">
                            <input type="checkbox" id="showPasswordCheckbox" onclick="togglePassword('password')"> Show password
                          </label>
                      </div>
                  </div>

                  <!-- Confirm Password -->
                  <div class="input-box password-box">
                      <div>
                          <input required type="password" name="confirm_password" class="input" id="confirm_password">
                          <label class="label">
                              <span class="char" style="--index: 0; padding-left: 10px;">R</span>
                              <span class="char" style="--index: 1">e</span>
                              <span class="char" style="--index: 2">-</span>
                              <span class="char" style="--index: 3">t</span>
                              <span class="char" style="--index: 4">y</span>
                              <span class="char" style="--index: 5">p</span>
                              <span class="char" style="--index: 6">e</span>
                              <span class="char" style="--index: 7">&nbsp;</span>
                              <span class="char" style="--index: 8">P</span>
                              <span class="char" style="--index: 9">a</span>
                              <span class="char" style="--index: 10">s</span>
                              <span class="char" style="--index: 11">s</span>
                              <span class="char" style="--index: 12">w</span>
                              <span class="char" style="--index: 13">o</span>
                              <span class="char" style="--index: 14">r</span>
                              <span class="char" style="--index: 15; padding-right: 5px;">d</span>
                          </label>
                          <label class="small-label">
                            <input type="checkbox" id="showPasswordCheckbox" onclick="togglePassword('confirm_password')"> Show password
                          </label>
                      </div>
                  </div>

                  <button type="submit" class="btn primary">Register</button>
                  <a href="admin-log.php" class="subtext">Already have an account? <span class="clickable-blue">Click Here.</span></a>
              </form>

              <footer>By continuing, you agree to our Terms and Privacy Policy.</footer>
          </div>
      </div>

      <script>
          function togglePassword(fieldId) {
              const field = document.getElementById(fieldId);
              field.type = field.type === 'password' ? 'text' : 'password';
          }

          <?php if ($success): ?>
              setTimeout(() => window.location.href = 'admin-log.php', 2000);
          <?php endif; ?>
      </script>
  </body>
</html>