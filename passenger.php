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
Reserve Status <input type="text" name="reserve" value="">
Pname <input type="text" name="pname" value="">
Seet No <input type="number" name="seetno" value="">
PNR <input type="text" name="pnr" value="">
Gender <input type="text" name="gender" value="">
Age <input type="number" name="age" value="">
<input type="submit" name="submit" value="submit" class="submit-btn">

</form>
</div>
    </div>

<?php

if($_GET['submit'])
{
    $rs = $_GET['reserve'];
    $pn = $_GET['pname'];
    $sn = $_GET['seetno'];
    $pnr = $_GET['pnr'];
    $gndr = $_GET['gender'];
    $ag = $_GET['age'];

    if($rs!="" && $pn!="" && $sn!="" && $pnr!="" && $gndr!="" && $ag!="" )
    {
        $query = "INSERT INTO passenger VALUES('$rs','$pn','$sn','$pnr','$gndr','$ag')";
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