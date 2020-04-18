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
Dates <input type="datetime-local" name="dates" value="">
User Id <input type="text" name="userid" value="">
PNR <input type="text" name="pnr" value="">
Status Id <input type="text" name="statusid" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
</div>
<?php

if($_GET['submit'])
{
    $date = $_GET['dates'];
    $ui = $_GET['userid'];
    $pnr = $_GET['pnr'];
    $si = $_GET['statusid'];

    if($date!="" && $ui!="" && $pnr!="" && $si!="")
    {
        $query = "INSERT INTO book VALUES('$date','$ui','$pnr','$si')";
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
else
{
	echo " something went wrong please enter value again";
}

?>

</body>
</html>