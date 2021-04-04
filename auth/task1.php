<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Task-1</title>
</head>
<body>
<h1>Task-1</h1>
<?php
    $input1 = "";
    $txt1 = "";
    $answer1 = "does not contain";
    if ($_SERVER["REQUEST_METHOD"] = "POST"){
        $input1 = $_REQUEST["input1"];
        $txt1 = $_REQUEST["txt1"];
        $contains = preg_match("/$input1/i", $txt1);
        if ($contains){
            $answer1 = "contains";
        }
    }

?>


<div class="container">

    <div class="row">

        <div class="col-sm">
            <form action="task1.php" method="post">
                <div class="mb-3">
                    <label for="input1" class="form-label">String</label>
                    <input type="text" class="form-control" id="input1" name="input1">
                </div>
                <div class="mb-3">
                    <label for="txt1" class="form-label">text</label>
                    <textarea class="form-control" id="txt1" name="txt1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Check if a string contains another string.</button>
                <p><?=$answer1?></p>
            </form>
        </div>

        <div class="col-sm">
            One of three columns
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>