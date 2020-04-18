<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="main-container">
        <div class="left-side">
    <?php
    include("sidebar.php");
    error_reporting(0);
    ?>
    </div>
    <div class="right-side">
    <form action="" method="GET" class="my-form">
    User Id <input type="text" name="userid" value="">
    Password <input type="text" name="password" value="">
    Hobby <input type="text" name="hobby" value="">
    <input type="submit" name="submit" value="submit" class="submit-btn">
    </form>
    </div>
    </div>

<?php

if($_GET['submit'])
{
    $ui = $_GET['userid'];
    $pw = $_GET['password'];
    $hb = $_GET['hobby'];

    if($ui!="" && $pw!="" && $hb!="")
    {
        $query = "INSERT INTO user VALUES('$ui','$pw','$hb')";
        $data = mysqli_query($connect, $query);
        if($data)
        {
            echo "Data inserted into database";
        }
    }
    else
    {
        echo "All fields are required";
    }
}


?>

</body>
</html>