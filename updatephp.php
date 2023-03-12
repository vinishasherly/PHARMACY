<?php
include 'index.php';
if(isset($_POST['TName'],$_POST['Avail'],$_POST['MDate'],$_POST['EDate'],$_POST['Price'],$_POST['Stock'],$_POST['BName']))
{
    $tname= mysqli_real_escape_string($con_ph,$_POST['TName']);
    $avail=$_POST['Avail'];
    $mdate=$_POST['MDate'];
    $edate=$_POST['EDate'];
    $price=$_POST['Price'];
    $stock=$_POST['Stock'];
    $bname=$_POST['BName'];
    
    $query1=mysqli_query($con_ph,"SELECT * from pharminfo WHERE tablet_name='$tname'");
    if(mysqli_num_rows($query1)==1){
        $query2=mysqli_query($con_ph,"Update pharminfo set avail='$avail',man_date='$mdate',exp_date='$edate',price=$price,stock=$stock,brand_name='$bname' where tablet_name='$tname'");
        echo '<script>alert("MEDICINE RECORD UPDATED Successfully");window.location.href="adminwork.html";</script>';
        
    }
    else{
        echo '<script>alert("MEDICINE DOSE NOT EXIST.... SO PLEASE USE INSERT OPTION");window.location.href="main.html";</script>';
    }
    
}

?>