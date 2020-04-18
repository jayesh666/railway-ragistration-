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
Station Id <input type="number" name="stationid" value="">
Station Name <input type="text" name="stationname" value="">
Train Id <input type="number" name="trainid" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
</div>

<?php

if($_GET['submit'])
{
    $si = $_GET['stationid'];
    $sn = $_GET['stationname'];
    $ti = $_GET['trainid'];

    if($si!="" && $sn!="" && $ti!="")
    {
        $query = "INSERT INTO station VALUES('$si','$sn','$ti')";
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