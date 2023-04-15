<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/main_logo.png">
    <title>SirTech | Admin Login</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-shadow: border-box;
        font-family: "El Messiri", sans-serif;
    }

    body {
        background: #031323;
        overflow: hidden;
    }

    img {
        width: 32px;
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(to right,#00000066,#0000006b), url(assets/imgs/bg.jpg);
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;

        background-size: 100% 100%;

    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .box {
        position: relative;
    }

    .box .square {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        animation: square 10s linear infinite;
        animation-delay: calc(-1s * var(--i));
    }

    @keyframes square {

        0%,
        100% {
            transform: translateY(-20px);
        }

        50% {
            transform: translateY(20px);
        }
    }

    .box .square:nth-child(1) {
        width: 100px;
        height: 100px;
        top: -15px;
        right: -45px;
    }

    .box .square:nth-child(2) {
        width: 150px;
        height: 150px;
        top: 105px;
        left: -125px;
        z-index: 2;
    }

    .box .square:nth-child(3) {
        width: 60px;
        height: 60px;
        bottom: 85px;
        right: -45px;
        z-index: 2;
    }

    .box .square:nth-child(4) {
        width: 50px;
        height: 50px;
        bottom: 35px;
        left: -95px;
    }

    .box .square:nth-child(5) {
        width: 50px;
        height: 50px;
        top: -15px;
        left: -25px;
    }

    .box .square:nth-child(6) {
        width: 85px;
        height: 85px;
        top: 165px;
        right: -155px;
        z-index: 2;
    }

    .container {
        position: relative;
        padding: 50px;
        width: 260px;
        min-height: 380px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border-radius: 10px;
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
    }

    .container::after {
        content: "";
        position: absolute;
        top: 5px;
        right: 5px;
        bottom: 5px;
        left: 5px;
        border-radius: 5px;
        pointer-events: none;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 2%);
    }

    .form {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .form h2 {
        color: #fff;
        letter-spacing: 2px;
        margin-bottom: 30px;
    }

    .form .inputBx {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .form .inputBx input {
        width: 80%;
        outline: none;
        border: none;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.2);
        padding: 8px 10px;
        padding-left: 40px;
        border-radius: 15px;
        color: #fff;
        font-size: 16px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .form .inputBx .password-control {
        position: absolute;
        top: 11px;
        right: 10px;
        display: inline-block;
        width: 20px;
        height: 20px;
        background: url(https://snipp.ru/demo/495/view.svg) 0 0 no-repeat;
        transition: 0.5s;
    }

    .form .inputBx .view {
        background: url(https://snipp.ru/demo/495/no-view.svg) 0 0 no-repeat;
        transition: 0.5s;
    }

    .form .inputBx img {
        position: absolute;
        top: 6px;
        left: 8px;
        transform: scale(0.6);
        filter: invert(1);
    }

    .form .inputBx input[type=submit] {
        background: #fff;
        color: #111;
        max-width: 100px;
        padding: 8px 10px;
        box-shadow: none;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 1.5s;
    }

    .form .inputBx input[type=submit]:hover {
        background: linear-gradient(115deg, rgba(0, 0, 0, 0.1), rgba(255, 255, 255, 0.25));
        color: #fff;
        transition: 0.5s;
    }

    .form .inputBx input::placeholder {
        color: #fff;
    }

    .form .inputBx span {
        position: absolute;
        left: 30px;
        padding: 10px;
        display: inline-block;
        color: #fff;
        transition: 0.5s;
        pointer-events: none;
    }

    .form .inputBx input:focus~span,
    .form .inputBx input:valid~span {
        transform: translateX(-30px) translateY(-25px);
        font-size: 12px;
    }

    .form p {
        color: #fff;
        font-size: 15px;
        margin-top: 5px;
    }

    .form p a {
        color: #fff;
    }

    .form p a:hover {
        background-color: #000;
        background-image: linear-gradient(to right, #434343 0%, black 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .remember {
        position: relative;
        display: inline-block;
        color: #fff;
        margin-bottom: 10px;
        cursor: pointer;
    }

    @media screen and (max-width:550px) {
        .box .square {
            display: none;
        }

    }
    </style>
</head>

<body>
    <section>

        <div class="box">

            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>

            <div class="container">
                <div class="form">
                    <h2>LOGIN to SirTech</h2>
                    <form action="server/auth.php" method="POST" id="login_form">
                        <div class="inputBx">
                            <input type="text" required class="username">
                            <span>Login</span>
                            <img src="assets/imgs/login.png" alt="user">
                        </div>
                        <div class="inputBx password">
                            <input id="password-input" type="password" name="password" required class="pass">
                            <span>Password</span>
                            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                            <img src="assets/imgs/lock.png" alt="lock">
                        </div>


                        <div class="inputBx">
                            <input type="submit" value="Log in">
                        </div>
                        <p class='alert_msg'></p>
                    </form>

                </div>
            </div>

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
    function show_hide_password(target) {
        var input = document.getElementById('password-input');
        if (input.getAttribute('type') == 'password') {
            target.classList.add('view');
            input.setAttribute('type', 'text');
        } else {
            target.classList.remove('view');
            input.setAttribute('type', 'password');
        }
        return false;
    }

    $('#login_form').submit(function(e) {
        e.preventDefault();
        let username = $('.username').val();
        let pass = $('.pass').val();
        let alert_box = $('.alert_msg');

        $.ajax({
            url: "server/auth.php",
            type: "POST",
            data: {
                username: username,
                pass: pass
            },
            success: function(res) {
                if (res == 'success') {
                    window.location.href = 'index.php';
                } else {
                    alert_box.html('Invalid username or password');
                }
            }
        })

    });
    </script>
</body>

</html>