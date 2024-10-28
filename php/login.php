<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../reset.css">

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            background-image: url(https://picsum.photos/id/82/1920/1080);
            height: 100vh;
            display: flex;
            align-items: center;
            color: #01274C
        }

        .main {
            width: 360px;
            height: 400px;
            margin: 0 auto;
            /* background: #000; */
        }

        .form,
        .login {
            margin: 0 auto;
            background-color: rgba(222, 222, 222, 0.5);
            backdrop-filter: blur(10px);
            text-align: center;
            box-shadow: 2px 2px 20px 4px rgba(1, 39, 76, 0.5);
        }

        .form {
            width: 100%;
            height: 200px;
            width: 100%;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login {
            height: 40px;
            width: 80%;
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
            /* background: linear-gradient(to top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.32) 68%, rgba(222, 222, 222, 0.5) 99%, rgba(255, 255, 255, 0) 100%); */
        }

        .input-label {
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .input-icon {
            width: 40px;
            height: 40px;
            background-color: rgb(1, 39, 76);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-label input {
            height: 40px;
            background-color: #325677;
            padding: 8px;
            box-sizing: border-box;
        }
        .input input{
            color: #EEEEEE;
        }


        .input input::placeholder {
            color: rgba(255, 255, 255, 0.5);
            letter-spacing: 2px;
        }

        .other {
            padding: 16px;
            display: flex;
            justify-content: space-around
        }

        .ckbutton_label {
            position: relative;
            display: block;
            width: 16px;
            height: 16px;
            cursor: pointer;
            border: 1px solid #01790d;
            transition: background-color 0.2s ease-in;
        }

        .ckbutton_label::before,
        .ckbutton_label::after {
            /* 上面的打勾 */
            content: "";
            position: absolute;
            width: 5px;
            background-color: white;
            transition: opacity 0.2s ease-in;
            opacity: 0;
        }

        .ckbutton_label::before {
            /* 打勾左邊的線 */
            height: 11px;
            top: 13px;
            left: 7px;
            transform: rotate(-45deg);
        }

        .ckbutton_label::after {
            /* 打勾右邊的線 */
            height: 16px;
            top: 6px;
            left: 16px;
            transform: rotate(45deg);
        }

        .ckbutton_checkbox:checked+.ckbutton_label {
            /* 當check時 按鈕顏色改變 */
            background-color: #10bd2a;
        }

        .ckbutton_checkbox:checked+.ckbutton_label::before,
        .ckbutton_checkbox:checked+.ckbutton_label::after {
            /* 當check時 打勾消失 */
            opacity: 1;
        }

        .ckbutton_checkbox {
            display: none;
        }

        .login-button {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            border: 0px;
            letter-spacing: 2px;
            color: rgb(1, 39, 76);
        }
    </style>
</head>

<body>

    <!-- <form action="./php/data.php">
        <label for="">姓名：</label>
        <input type="text" name="name" id=""><br>
        <label for="">電話：</label>
        <input type="text" name="mobile" id=""><br>
        <label for="">價錢：</label>
        <input type="number" name="price" id=""><br>
        <label for="">生日：</label>
        <input type="date" name="birthday" id=""><br>

        <input type="submit" value="送出">
    </form> -->
    <!-- name 是給 php；id是拿來控制的-->


    <div class="main">
        <form action="check_acc.php" method="post">
            <div class="form">
                <div class="input">
                    <div class="input-label">
                        <i class="input-icon fas fa-user fa-inverse"></i>
                        <input type="text" id="username" name="username" placeholder="Username"><br>
                    </div><br>
                    <div class="input-label">
                        <i class="input-icon fas fa-lock fa-inverse"></i>
                        <input type="text" id="passworde" name="password" placeholder="Password"><br>

                    </div>
                </div>
                <!-- <div class="other">
                    <label class="ckbutton_label" for="remember">
                        <input class="ckbutton_checkbox" type="checkbox" value="remember" id="remember" />
                        <span>Remember me</span>
                    </label>
                    <a href="#">Forgot Passwoed?</a>
                </div> -->
            </div>
            <div class="login">
                <input class="login-button" type="submit" value="LOGIN">
            </div>
        </form>
    </div>
</body>

</html>