<?php
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];

$email = $_POST['em'];

$upassw1   =$_POST['upasswo'];





$query = "INSERT INTO signup1 value ('$fname','$email','$upassw1')";

$host   = 'localhost'; 
$user   = 'root';
$pwd    = '';
$dbname = 'new1';


$conn = mysqli_connect($host,$user,$pwd,$dbname);



$data = mysqli_query($conn,$query);
if ($data) {
    echo '  
    <script>alert ("Rgeistration is sucessful")
    window.location.href="login1.php"</script>';
   
    

    
   
   
  
}
else{
        echo '<script> alert ("Rgeistration is  not sucessful")
        window.location.href="signup1.php"</script>';
       
    
      

}
}
?>