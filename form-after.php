<?php
include("connect-after.php");
if (isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $mail = $_POST['mail'];
    $field = $_POST['field'];

    $query = "INSERT INTO interns(first_name, last_name, phone_no,mail,field)
    VALUES('$first_name','$last_name','$phone_no','$mail','$field')";

    $result = mysqli_query($conn, $query);
    header("location:display.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-AFTER</title>
    <style>
        body {
            color: white;
            padding: 0;
            margin: 0;
            background: linear-gradient(90deg, rgba(84, 30, 171, 1) 0%, rgba(81, 78, 171, 1) 35%, rgb(42 27 51) 100%);
            background-size: 236%;
            animation: anime 5s infinite ease-in-out;
            text-transform: uppercase;
            font-family: tahoma;
        }

        @keyframes anime {
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

        .container {
            margin-top: 10%;
            display: grid;
            justify-content: center;
            text-transform: uppercase;
            font-size: 20px;
        }

        form {
            background: white;
            display: grid;
            grid-template-columns: 440px;
            gap: 18px;
            color: #535354;
            border-radius: 1rem;
            padding: 26px 21px 17px 21px;
        }

        input {
            caret-color: #541eab;
            background-color: #541eab2b;
            border-radius: 4px;
            font-size: 17px;
            border: 1px solid #ccc;
            padding: 12px 0px 12px 6px;

        }

        input:focus {
            box-shadow: 0px 0px 3px 2px rgb(163 30 171);
            border: 0;
            outline: 1px solid #a066ff;
            outline-offset: 2px;
        }

        .label-input {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .register {
            border: none;
            color: aliceblue;
            background: #541eab;
            font-size: 17px;
            width: 100%;
            border-radius: 8px;
            padding: 12px;
        }

        .register:hover {
            cursor: pointer;
            background: #1e1e50;

        }

        .register:focus {
            box-shadow: 1px 2px 8px 2px rgba(84, 30, 171, 1);
            outline: #a066ff;
            outline-offset: 2px;
        }

        .register:active {
            box-shadow: 1px 2px 8px 2px rgba(84, 30, 171, 1);
        }

        @media screen and (max-width:557px) {
            .div-mobile {
                display: block;
            }

            .label-input-mobile {
                display: block;
                width: 100%;
            }

            .form-mobile {
                grid-template-columns: 290px;
            }
        }

        @media screen and (max-width:280px) {

            .form-mobile-sm {
                grid-template-columns: 216px;
            }
        }

        h5 {
            color: #541eab;
            font-size: 32px;
            margin: 0;
            display: grid;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form-mobile form-mobile-sm" action="" method="post">
            <h5>FORM</h5>
            <div class="label-input div-mobile">
                <label for="first_name" class="label-input-mobile">
                    First name
                </label>
                <input type="text" id="first_name" name="first_name" class="label-input-mobile"
                    placeholder="Enter first name">
            </div>
            <div class="label-input div-mobile">
                <label for="last_name" class="label-input-mobile">
                    Last name
                </label>
                <input type="text" id="last_name" name="last_name" class="label-input-mobile"
                    placeholder="Enter last name">
            </div>
            <div class="label-input div-mobile">
                <label for="phone_no" class="label-input-mobile">
                    Phone number
                </label>
                <input type="tel" id="phone_no" name="phone_no" class="label-input-mobile"
                    placeholder="Enter Phone number" maxlength="10" required>
            </div>
            <div class="label-input div-mobile">
                <label for="mail" class="label-input-mobile">
                    mail
                </label>
                <input type="email" id="mail" name="mail" class="label-input-mobile" placeholder="Enter your mail"
                    required>
            </div>
            <div class="label-input div-mobile">
                <label for="field" class="label-input-mobile">
                    field </label>
                <input type="text" id="field" name="field" class="label-input-mobile" placeholder="Enter field">
            </div>
            <button class="register register-mobile" name="register">REGISTER</button>
        </form>
    </div>
</body>

</html>