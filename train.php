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
Train Id <input type="number" name="trainid" value="">
Train Name <input type="text" name="trainname" value="">
Train Type <input type="text" name="traintype" value="">
Available Class <input type="text" name="avalclass" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
</div>

<?php

if($_GET['submit'])
{
    $ti = $_GET['trainid'];
    $tn = $_GET['trainname'];
    $tt = $_GET['traintype'];
    $ac = $_GET['avalclass'];

    if($ti!="" && $tn!="" && $tt!="" && $ac!="")
    {
        $query = "INSERT INTO train VALUES('$ti','$tn','$tt','$ac')";
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