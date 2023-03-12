<?php      
    include('index.php');  
    $username = $_POST['TName'];  
    $password = $_POST['Stock'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con_ph, $username);  
        $password = mysqli_real_escape_string($con_ph, $password);  
      
        $sql = "select * from pharminfo where tablet_name = '$username' and stock >=1";  
        $sql1 = "update pharminfo set stock =stock-$password where tablet_name = '$username'";  
        mysqli_query($con_ph, $sql1);
        $result = mysqli_query($con_ph, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>alert("Order placed successfully!!");window.location.href="main.html";</script>';
        }  
        else{  
            echo '<script>alert("No stock available right now!!");window.location.href="main.html";</script>';
        }     
?>  