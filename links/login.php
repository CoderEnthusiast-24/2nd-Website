<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in or Create Account</title>
    <link rel="stylesheet" href="../css/login.css">

    <style>
      /* Moved inline styles to internal CSS */

      /* spacing for password labels */
      label[for="loginPass"],
      label[for="newPass"],
      label[for="confirmPass"] {
        margin-top: 10px;
      }

      /* small secondary labels (show password, remember) */
      .small-label {
        margin-top: 8px;
        font-weight: 400;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
      }

      .small-label-inline {
        font-weight: 400;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
      }

      /* actions container variants */
      .actions.space-between {
        justify-content: space-between;
        margin-top: 12px;
        display: flex;
        align-items: center;
      }

      .actions.right {
        justify-content: flex-end;
        margin-top: 12px;
        display: flex;
        gap: 8px;
      }

      .btn-row {
        display: flex;
        gap: 8px;
      }

      /* hide register form initially */
      #registerForm.hidden {
        display: none;
      }

      /* row for first/last name */
      .row {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
      }

      .row .col {
        flex: 1;
      }
    </style>
</head>
<body>
 
  <div class="container">
    <aside class="card" aria-label="Authentication">
      <div class="tabs" role="tablist" aria-label="Authentication tabs">
        <button class="tab active" id="tab-login" role="tab" aria-selected="true">Log in</button>
        <button class="tab" id="tab-register" role="tab" aria-selected="false">Create account</button>
      </div>

      <!-- Login form -->
      <form id="loginForm" autocomplete="on" novalidate>
        <label for="loginEmail">Email or phone</label>
        <input id="loginEmail" name="loginEmail" type="text" placeholder="Email or phone" required />

        <label for="loginPass">Password</label>
        <input id="loginPass" name="loginPass" type="password" placeholder="Password" required />
        <!-- Show password checkbox -->
        <label class="small-label">
          <input type="checkbox" id="showLoginPass" /> Show password
        </label>

        <div class="actions space-between">
          <label class="small-label-inline"><input id="remember" type="checkbox" /> Remember</label>
          <div class="btn-row">
            <button type="button" class="btn ghost" id="forgotBtn">Forgot password</button>
            <button type="submit" class="btn primary">Log in</button>
          </div>
        </div>
        <div id="loginMsg" role="status" aria-live="polite"></div>
      </form>

      <!-- Register form -->
      <form id="registerForm" class="hidden" novalidate>
        <div class="row">
          <div class="col">
            <label for="firstName">First name</label>
            <input id="firstName" name="firstName" type="text" required />
          </div>
          <div class="col">
            <label for="lastName">Last name</label>
            <input id="lastName" name="lastName" type="text" required />
          </div>
        </div>

        <label for="regContact">Mobile number or email</label>
        <input id="regContact" name="regContact" type="text" required />

        <label for="newPass">Password</label>
        <input id="newPass" name="newPass" type="password" required />

        <label for="confirmPass">Confirm Password</label>
        <input id="confirmPass" name="confirmPass" type="password" required />

        <div class="actions right">
          <button type="reset" class="btn ghost">Reset</button>
          <button type="submit" class="btn primary">Sign up</button>
        </div>
        <div id="registerMsg" role="status" aria-live="polite"></div>
      </form>

      <footer>By continuing, you agree to our Terms and Privacy Policy.</footer>
    </aside>
  </div>
<script src="../Script/loginscript.js"></script>
</body>
</html>