<?php
include("connect-after.php");
$updateId = $_GET['updateId'];
$query = "SELECT * FROM interns WHERE id=$updateId";
$run = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($run);
// fetching the data from associated array
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$phone_no = $data['phone_no'];
$mail = $data['mail'];
$field = $data['field'];
$upload_files = $data['upload_files'];

// update button query
// echo $upload_files;


if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $mail = $_POST['mail'];
    $field = $_POST['field'];
    if (isset($_POST['upload_files'])) {
        $img_loc = $_FILES['upload_files']['tmp_name'];
        $img_name = $_FILES['upload_files']['name'];
        move_uploaded_file($img_loc, 'images/' . $img_name);
        $upload_files = 'images/' . $img_name;
    }

    $query = "UPDATE `interns` SET `first_name`='$first_name',`last_name`='$last_name',`phone_no`='$phone_no',`mail`='$mail',`field`='$field',`upload_files`='$upload_files' WHERE `id`=$updateId";
    $run = mysqli_query($conn, $query);
    header('location:display.php');
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
            margin-top: 20px;
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
            font-size: 17px;
            background-color: #541eab2b;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 12px 0px 12px 6px;

        }

        input:focus {
            box-shadow: 0px 0px 3px 2px rgb(163 30 171);
            border: 0;
            outline: #a066ff;
            outline-offset: 2px;
        }

        .label-input {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .upload-desktop {
            width: 210px;
        }


        .update {
            border: none;
            color: aliceblue;
            background: #541eab;
            font-size: 17px;
            width: 100%;
            border-radius: 8px;
            padding: 12px;
        }

        .update:hover {
            cursor: pointer;
            background: #1e1e50;
            ;
        }

        .update:focus {
            box-shadow: 1px 2px 8px 2px rgba(84, 30, 171, 1);
            outline: #a066ff;
            outline-offset: 2px;
        }

        .update:active {
            box-shadow: 1px 2px 8px 2px rgba(84, 30, 171, 1);
        }

        @media screen and (max-width:557px) {
            .div-mobile {
                display: block;
            }

            .container-mobile {
                margin-top: 20%;
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
    <div class="container container-mobile">
        <form class="form-mobile form-mobile-sm" action="" method="post" enctype="multipart/form-data">
            <h5>UPDATE FORM</h5>
            <div class="label-input div-mobile">
                <label for="first_name" class="label-input-mobile">
                    First name
                </label>
                <input type="text" id="first_name" name="first_name" class="label-input-mobile"
                    placeholder="Enter first name" value="<?php echo $first_name; ?>">
            </div>
            <div class="label-input div-mobile">
                <label for="last_name" class="label-input-mobile">
                    Last name
                </label>
                <input type="text" id="last_name" name="last_name" class="label-input-mobile"
                    placeholder="Enter last name" value="<?php echo $last_name; ?>">
            </div>
            <div class="label-input div-mobile">
                <label for="phone_no" class="label-input-mobile">
                    Phone number
                </label>
                <input type="tel" class="label-input-mobile" id="phone_no" name="phone_no"
                    placeholder="Enter Phone number" value="<?php echo $phone_no; ?>" maxlength="10" required>
            </div>
            <div class="label-input div-mobile">
                <label for="mail">
                    mail
                </label>
                <input type="email" class="label-input-mobile" id="mail" name="mail" placeholder="Enter your mail"
                    value="<?php echo $mail; ?>" required>
            </div>
            <div class="label-input div-mobile">
                <label for="field" class="label-input-mobile">
                    field </label>
                <input type="text" class="label-input-mobile" id="field" name="field" placeholder="Enter field"
                    value="<?php echo $field; ?>">
            </div>
            <div class="label-input div-mobile">
                <label for="upload_files" class="label-input-mobile">
                    Upload DP </label>
                <input type="file" id="upload_files" name="upload_files" value="<?php echo $upload_files; ?>"
                    class="upload-desktop label-input-mobile">
            </div>
            <div style="display: flex;justify-content: end;">
                <img height="100px" width="100px" src="<?php echo $upload_files; ?>" alt="<?php echo $upload_files; ?>">
            </div>
            <button class="update" name="update">UPDATE</button>
        </form>
    </div>
</body>

</html>