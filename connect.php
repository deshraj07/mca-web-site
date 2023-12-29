<?php
if(isset($_POST['Login'])){
    $name   = $_POST['name'];
    $pwdq    = $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $pwd  = '';
    $dbname ='new1';
    $conn =mysqli_connect($host,$user,$pwd,$dbname);
    if($conn->connect_error){
        die("Faild to connect :".$con->connect_error);
    }
    else{
        $stm = $conn->prepare("select * from signup1 where Name =?");
        $stm ->bind_param("s",$name);
        $stm ->execute();
        $stm_result = $stm->get_result();
        if($stm_result -> num_rows >0){
            $data = $stm_result -> fetch_assoc();
            if($data['Password'] === $pwdq)
            {echo '<script> alert ("login sucessful")
                window.location.href="index.php"</script>';
        }
        else{
             echo '<script> alert ("faild to login")
            window.location.href="login1.php"</script>';
 
        }
    }
        else{
            echo "<h2>Invalide name or rpassword </h2>";
        }
    }
    

}
?>