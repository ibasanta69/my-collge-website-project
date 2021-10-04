<HTML>

<head>
    <title>Create login form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            font-family: monospace;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            background: #ecf0f3;
        }

        .login-form-design:hover {
            transform: rotate(0deg);
            opacity: 1;
        }

        .login-form-design {
            width: 300px;
            height: 300px;
            transition-duration: 2.3s;
            padding: 30px 17px 17px 17px;
            border-radius: 40px;
            background: #ecf0f3;
            box-shadow: 13px 13px 20px #cbced1,
                -13px -13px 20px #ffffff;
        }

        .form-logo-image,
        img {
            width: 75px;
            height: 73px;
            border-radius: 100%;
            margin: 0 auto;
            
            box-shadow:
                0px 0px 2px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaaf,
                -8px -8px 15px #ffffff;
        }

        .large-text-title {
            text-align: center;
            font-size: 21px;
            padding-top: 23px;
            letter-spacing: 0.6px;
        }

        .small-text {
            text-align: center;
            font-size: 10px;
            padding-top: 6px;
            letter-spacing: 3.1px;
        }

        .input-fields {
            width: 75%;
            margin-left: 5%;
            text-align: center;
            padding: 25px;
        }

        .input-fields input {
            border: none;
            text-align: center;
            outline: none;
            background: none;
            font-size: 13px;
            color: #555;
            padding: 15px 5px 10px 2px;
        }

        .username,
        .password {
            margin-bottom: 15px;
            text-align: center;
            border-bottom-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: inset 8px 8px 8px #cbced1,
                inset -8px -8px 8px #ffffff;
        }

        .signin-button {
            outline: none;
            border: none;
            margin-left:5px;
            cursor: pointer;
            width: 70%;
            height: 40px;
            border-radius: 29.9px;
            font-size: 15px;
            font-weight: 699.9;
            font-family: monospace;
            color: #fff;
            text-align: center;
            background: rgb(165, 216, 233);
            box-shadow: 3px 3px 8px #b1b1b1,
                -3px -3px 8px #ffffff;
            transition: 0.5s;
        }

        .signin-button:hover {
            background: #24cfaa;
        }

        .signin-button:active {
            background: #1da88a;
        }

        .link {
            padding-top: 20px;
            text-align: center;
        }

        .link a {
            color: #aaa;
            font-size: 15px;
        }

        footer {
            background-color: rgb(141, 101, 101);
            color: #fff;
            opacity: 0.5;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
            font-family: sans-serif;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
            margin-right: 5px;
        }

        .location {
            margin-right: 5%;
            transition-duration: 2.3s;
            border-top-right-radius: 40px;
            opacity: 0.1;
            transform: rotate(-14deg);
            border-bottom-left-radius: 40px;
            border-top-color: darkmagenta;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        }

        .location:hover {
            opacity: 1;
            transform: rotate(0deg);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
        }
    </style>
</head>

<body>
    <form action="searchemail.php" method="POST">
        <div class="login-form-design">
            <div class="form-logo-image">
                <img src="ind.jpg">
            </div>
            <div class="large-text-title">search email</div>
            <div class="input-fields">
                <div class="username"><input type="user" name="email" class="user-input" placeholder="searching email" /></div><br>
                <input class="signin-button" type="submit" name="search" value="search">
                <div class="link">
                    <a href="loginbox.php">Back</a>
                </div>
            </div>
            <!--  <footer>
          <p id="show-content">WelCome</p>
        </footer>
        --->

    </form>
</body>
<!-- <script>
      function getvalue() {
        var name1 = document.getElementById('value1').value;
        var pass1 = document.getElementById('value2').value;
    
        if (name1 == "admin" && pass1 == "admin") {
          window.location.href = "home.html";
          document.getElementById('show-content').innerHTML = "login Successfull !";
    
    
        } else {
    
          document.getElementById('show-content').innerHTML = "Sorry Invalid Password & Emaile !";
        }
      }
    
    
    </script> -->

</html>