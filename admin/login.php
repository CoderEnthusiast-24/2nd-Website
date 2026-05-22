<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <section class="login-section">
        <div class="login__container">
            <div class="login__form">
                <h2>LOG-IN</h2>

                <form action="dashboard/dashboard.php" method="post">
                    
                    <div class="input-box">
                        <input required type="text" class="input">
                        <label class="label">
                            <span class="char" style="--index: 0; padding-left: 5px;">E</span>
                            <span class="char" style="--index: 1">m</span>
                            <span class="char" style="--index: 2">a</span>
                            <span class="char" style="--index: 3">i</span>
                            <span class="char" style="--index: 4; padding-right: 5px;">l</span>
                        </label>
                    </div>

                    <div class="input-box">
                        <input required type="password" class="input" id="password">
                        <label class="label">
                            <span class="char" style="--index: 0; padding-left: 5px;">P</span>
                            <span class="char" style="--index: 1">a</span>
                            <span class="char" style="--index: 2">s</span>
                            <span class="char" style="--index: 3">s</span>
                            <span class="char" style="--index: 4">w</span>
                            <span class="char" style="--index: 5">o</span>
                            <span class="char" style="--index: 6">r</span>
                            <span class="char" style="--index: 7; padding-right: 5px;">d</span>
                        </label>
                        <div class="show-password-toggle">
                            <input type="checkbox" id="showPasswordCheckbox" onclick="togglePasswordVisibility()">
                            <label for="showPasswordCheckbox">Show password</label>
                        </div>
                    </div>
                    

                    <button type="submit" onclick="">Log In</button>
                </form>
            </div>

            <div class="login__new">    
                New to MCR REALTY VENTURES OPC? <a href="/register">Create an account</a>
            </div>
        </div>

        <div class="login__image">
            <img src="../images/housepic.png" alt="pic">
        </div>
    </section> 

    <script>
        function togglePasswordVisibility() {
            const password = document.getElementById("password");
            const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

            if (showPasswordCheckbox.checked) {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }


        
    </script>
</body>
</html>