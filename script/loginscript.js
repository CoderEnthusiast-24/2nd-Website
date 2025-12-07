document.addEventListener("DOMContentLoaded", () => {

    const tabLogin = document.getElementById('tab-login');
    const tabRegister = document.getElementById('tab-register');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const loginMsg = document.getElementById('loginMsg');
    const registerMsg = document.getElementById('registerMsg');
    const showLoginPass = document.getElementById('showLoginPass');
    const loginPass = document.getElementById('loginPass');

    function showLogin(){
      tabLogin.classList.add('active'); tabLogin.setAttribute('aria-selected','true');
      tabRegister.classList.remove('active'); tabRegister.setAttribute('aria-selected','false');
      loginForm.style.display = 'block'; registerForm.style.display = 'none';
      loginMsg.textContent = ''; registerMsg.textContent = '';
    }
    function showRegister(){
      tabRegister.classList.add('active'); tabRegister.setAttribute('aria-selected','true');
      tabLogin.classList.remove('active'); tabLogin.setAttribute('aria-selected','false');
      registerForm.style.display = 'block'; loginForm.style.display = 'none';
      loginMsg.textContent = ''; registerMsg.textContent = '';
    }

    tabLogin.addEventListener('click', showLogin);
    tabRegister.addEventListener('click', showRegister);

    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      loginMsg.className = '';
      const email = document.getElementById('loginEmail').value.trim();
      const pass = loginPass.value;
      if (!email || !pass) {
        loginMsg.textContent = 'Enter your email/phone and password.'; loginMsg.className = 'error';
        return;
      }
      // Redirect to dashboard.php after successful login
      window.location.href = "dashboard/dashboard.php";
    });

    registerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      registerMsg.className = '';
      const first = document.getElementById('firstName').value.trim();
      const last = document.getElementById('lastName').value.trim();
      const contact = document.getElementById('regContact').value.trim();
      const pwd = document.getElementById('newPass').value;
      const confirmPwd = document.getElementById('confirmPass').value;

      if (!first || !last || !contact || !pwd || !confirmPwd) {
        registerMsg.textContent = 'Please complete all required fields.'; registerMsg.className = 'error';
        return;
      }
      if (pwd.length < 6) {
        registerMsg.textContent = 'Password should be at least 6 characters.'; registerMsg.className = 'error';
        return;
      }
      if (pwd !== confirmPwd) {
        registerMsg.textContent = 'Passwords do not match.'; registerMsg.className = 'error';
        return;
      }
      registerMsg.textContent = 'Account created successfully (demo). You can now log in.'; registerMsg.className = 'success';
      setTimeout(()=>{ showLogin(); }, 1200);
    });

    // Show/hide password for login
    if (showLoginPass && loginPass) {
      showLoginPass.addEventListener('change', function() {
        loginPass.type = this.checked ? 'text' : 'password';
      });
    }

    window.addEventListener('load', () => document.getElementById('loginEmail').focus());
});