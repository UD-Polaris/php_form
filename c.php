<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $email=$_POST['email'];  
  $file = $_FILES['report'];
  $filename = $file['name'];
  $filetmp = $file['tmp_name'];

  $destination = 'uploads/' . $filename;
  move_uploaded_file($filetmp, $destination);

  $host ='localhost';
  $user='root';
  $pass='';
  $dbname='ud';

  $conn =  mysqli_connect($host,$user,$pass,$dbname);

  $sql ="INSERT INTO  registration(name,age,weight,email,report) values('$name','$age','$weight','$email','$destination')";
  mysqli_query($conn,$sql);

  
}
?>