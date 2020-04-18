<?php
include("connection.php");
error_reporting(0);
?>

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
Available Seat <input type="number" name="avalseat" value="">
Status Id <input type="text" name="statusid" value="">
Bookes Seat <input type="number" name="bookedseat" value="">
Train Id <input type="number" name="trainid" value="">
Wait Seat <input type="number" name="waitseat" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
</div>
<?php

if($_GET['submit'])
{
    $as = $_GET['avalseat'];
    $si = $_GET['statusid'];
    $bs = $_GET['bookedseat'];
    $ti = $_GET['trainid'];
    $ws = $_GET['waitseat'];

    if($as!="" && $si!="" && $bs!="" && $ti!="" && $ws!="")
    {
        $query = "INSERT INTO train_status VALUES('$as','$si','$bs','$ti','$ws')";
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