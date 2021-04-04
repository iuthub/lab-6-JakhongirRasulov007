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
    if ($_SERVER["REQUEST_METHOD"] = "POST"){
        //check name
        $namePattern = "/(.*[a-z]){2}/i";
        $name = $_REQUEST["name"];
        $isNameValid = preg_match($namePattern,$name);

        // checking email
        $email = $_REQUEST["email"];
        $emailPattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
        $isEmailValid = preg_match("/$emailPattern/", $email);
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
                <input type="email" class="form-control <?=$isEmailValid ? "": "is-invalid"?>" id="name" name="email" placeholder="enter email">
            </div>
        </div>
    </div>




    <button type="submit" class="btn btn-primary">Submit</button>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>