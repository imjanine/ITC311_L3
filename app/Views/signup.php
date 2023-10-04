<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFAE42;
            color: #000; /* Font color is now black */
            font-family: Arial, sans-serif;
        }

        .container-login100 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrap-login100 {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login100-pic {
            text-align: center;
            margin-bottom: 30px;
        }

        .login100-pic img {
            width: 100%;
            max-width: 200px;
        }

        .login100-form-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #FFAE42;
        }

        .wrap-input100 {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .input100 {
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            color: #000;
        }

        .focus-input100 {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            border-radius: 5px;
            box-sizing: border-box;
            border: 2px solid transparent;
        }

        .focus-input100::before {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #007bff;
            transition: all 0.4s;
            border-radius: 5px;
            transform: scaleX(0);
        }

        .input100:focus+.focus-input100::before {
            transform: scaleX(1);
        }

        .symbol-input100 {
            position: absolute;
            font-size: 18px;
            color: #999;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
        }

        .container-login100-form-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        .login100-form-btn {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #FFAE42;
            border: none;
            border-radius: 5px;
            color: #000;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login100-form-btn:hover {
            background-color: #FF8C00;
        }

        .txt2 {
            font-size: 14px;
            color: #999;
            text-decoration: none;
            transition: color 0.3s;
        }

        .txt2:hover {
            color: #FF8C00;
        }
    </style>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">

            <form class="login100-form validate-form" action="/authreg" method="post">
                <span class="text-white">
                    Member Registration <!-- Changed from "Member Login" to "Member Registration" -->
                </span>

                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="username" placeholder="User Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                    <input class="input100" type="password" name="confirmpassword" placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <!-- Display validation errors if they exist -->
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" name="authreg">
                        Create Account
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/login">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        Back to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
