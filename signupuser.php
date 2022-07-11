<?php
include("database.php");
if(isset($_POST['submit']))
{
$date = date('Y-m-d H:i:s');
$name=$_POST['name'];
$usern=$_POST['usern'];
$verifypassword=$_POST['verifypassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$rs=mysqli_query($conn,"select * from user where username='$usern'");
if (mysqli_num_rows($rs)>0)
{
echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
exit;
}
$query="insert into user(userID,UName,username,password,Umail,Uphone,Uaddress,Ulastpass) values(rand(1,100),'$name','$usern','$verifypassword','$email','$phone','$message','$date')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID $usern Created Sucessfully</div>";
}
?>

