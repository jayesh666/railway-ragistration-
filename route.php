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
Arrive Time <input type="datetime-local" name="arrtime" value="">
Depart Time <input type="datetime-local" name="deptime" value="">
Stop No <input type="number" name="stopno" value="">
Train Id <input type="number" name="trainid" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
</div>

<?php

if($_GET['submit'])
{
    $at = $_GET['arrtime'];
    $dt = $_GET['deptime'];
    $sn = $_GET['stopno'];
    $ti = $_GET['trainid'];

    if($at!="" && $dt!="" && $sn!="" && $ti!="")
    {
        $query = "INSERT INTO route VALUES('$at','$dt','$sn','$ti')";
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