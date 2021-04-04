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
// whether text contains string
    $input1 = "";
    $txt1 = "";
    $answer1 = "does not contain";
    //whether input2 is an email
    $input2 = "";
    $answer2 = "It is not an email";
    // check phone number
    $input3 = "";
    $answer3 = "incorrect phone format";

    // eliminate whitespace
    $txt4 = "";
    $answer4 = "";

    // remove non-numeric characters except , and .
    $txt5 = "";
    $answer5 = "";
    // remove new lines
    $txt6 = "";
    $answer6 = "";

    // extracting a string inside parenthesis from a text
    $txt7 = "";
    $answer7 = "";

    if ($_SERVER["REQUEST_METHOD"] = "POST"){
        // whether text contains string
        $input1 = $_REQUEST["input1"];
        $txt1 = $_REQUEST["txt1"];
        $contains = preg_match("/$input1/i", $txt1);
        if ($contains){
            $answer1 = "contains";
        }

        //whether input2 is an email
        $input2 = $_REQUEST["input2"];
        $emailPattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
        $isEmailValid = preg_match("/$emailPattern/", $input2);
        if ($isEmailValid){
            $answer2 = "email is valid";
        }
        // phone number checking
        $input3 = $_REQUEST["input3"];
        $phonePattern = "\+998-[0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]";
        $isPhoneValid = preg_match("/$phonePattern/gim",$input3);
        if ($isPhoneValid){
            $answer3 = "phone is in correct form";
        }
        // eliminate whitespace
        $txt4 = $_REQUEST["txt4"];
        $answer4 = preg_replace('/\s+/', ' ', $txt4);
        // remove non numeric characters except , and .
        $txt5 = $_REQUEST["txt5"];
        $answer5 = preg_replace("/[^0-9||.|,]/","",$txt5);

        // removing new lines
        $txt6= $_REQUEST["txt6"];
        $answer6 = preg_replace("/\r?\n|\r/","",$txt6);
        // extracting a string within parenthesis from a text
        $txt7 = $_REQUEST["txt7"];
        $extractPattern = "/\[(.*?)\]/";
        preg_match($extractPattern,$txt7,$answer7);

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

            <form action="task1.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="input2" name="input2" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">check if it is email</button>
                <p><?=$answer2?></p>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <form action="task1.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone number (+998-xx-xxx-xxxx)</label>
                    <input type="text" class="form-control" id="input3" name="input3" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">check phone number</button>
                <p><?=$answer3?></p>
            </form>
        </div>
        <div class="col-sm">
            <form action="task1.php" method="post">

                <div class="mb-3">
                    <label for="txt4" class="form-label">text</label>
                    <textarea class="form-control" id="txt4" name="txt4" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="answer4" class="form-label">text</label>
                    <textarea class="form-control" id="answer4" name="answer4" rows="3">
                        <?=$answer4?>
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">eliminate whitespace</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <form action="task1.php" method="post">

                <div class="mb-3">
                    <label for="txt5" class="form-label">text</label>
                    <textarea class="form-control" id="txt5" name="txt5" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="answer5" class="form-label">text</label>
                    <textarea class="form-control" id="answer5" name="answer5" rows="3">
                        <?=$answer5?>
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">remove non numeric characters except , and .</button>
            </form>
        </div>
        <div class="col-sm">
            <form action="task1.php" method="post">

                <div class="mb-3">
                    <label for="txt6" class="form-label">text</label>
                    <textarea class="form-control" id="txt6" name="txt6" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="answer6" class="form-label">text</label>
                    <textarea class="form-control" id="answer6" name="answer6" rows="3">
                        <?=$answer6?>
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">remove new lines</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <form action="task1.php" method="post">

                <div class="mb-3">
                    <label for="txt7" class="form-label">text</label>
                    <textarea class="form-control" id="txt7" name="txt7" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <p><?= var_dump($answer7[1]) ?></p>
                </div>
                <button type="submit" class="btn btn-primary">extract from []</button>
            </form>
        </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>