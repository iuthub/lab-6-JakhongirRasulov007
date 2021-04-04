<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Task-2</title>
</head>
<body>
<h1>Task-2</h1>
<?php
    // Name This field is required. It has to contain at least 2 chars. It should not contain any number.
    $name ="";
    $isNameValid = false;
    $isEmailValid = false;
    $isUsernameValid = false;
    $isPasswordValid = false;
    $isConfirmPasswordValid = false;
    $isBirthdayValid = false;
    $isGenderValid = false;
    if ($_SERVER["REQUEST_METHOD"] = "POST"){
        //check name
        $namePattern = "/(.*[a-z]){2}/i";
        $name = $_REQUEST["name"];
        $isNameValid = preg_match($namePattern,$name);

        // checking email
        $email = $_REQUEST["email"];
        $emailPattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
        $isEmailValid = preg_match("/$emailPattern/", $email);

        $usernamePattern = "/(.*[a-z]){5}/i";
        $username = $_REQUEST["username"];
        $isUsernameValid = preg_match($usernamePattern,$username);

        $passwordPattern = "/(.*[a-z]){8}/i";
        $password = $_REQUEST["password"];
        $isPasswordValid = preg_match($passwordPattern,$password);

        $confirmPasswordPattern = "/(.*[a-z]){8}/i";
        $confirmPassword = $_REQUEST["confirmPassword"];
        $isConfirmPasswordValid = $password == $confirmPassword;

        $birthday = $_REQUEST["birthday"];
        $birthdayPattern = "/^(0[1-9]|1[0-2])\.(0[1-9]|1\d|2\d|3[01])\.(19|20)\d{2}$/";
        $isBirthdayValid = preg_match($birthdayPattern,$birthday);

        $gender = $_REQUEST["gender"];
        $isGenderValid = preg_match("/male|female/i", $gender);
    }






?>

<form action="task2.php" method="post">
    <div class="container">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?=$isNameValid ? "": "is-invalid"?>" id="name" name="name" placeholder="enter name">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control <?=$isEmailValid ? "": "is-invalid"?>" id="email" name="email" placeholder="enter email">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?=$isUsernameValid ? "": "is-invalid"?>" id="username" name="username" placeholder="enter username">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control <?=$isPasswordValid ? "": "is-invalid"?>" id="password" name="password" placeholder="enter password">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="confirmPassword" class="col-sm-2 col-form-label">confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control <?=$isConfirmPasswordValid ? "": "is-invalid"?>" id="confirmPassword" name="confirmPassword" placeholder="enter password again">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="birthday" class="col-sm-2 col-form-label">birthday</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?=$isBirthdayValid ? "": "is-invalid"?>" id="birthday" name="birthday" placeholder="enter birthday">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <label for="gender" class="col-sm-2 col-form-label">gender</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?=$isGenderValid ? "": "is-invalid"?>" id="gender" name="gender" placeholder="enter gender">
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>