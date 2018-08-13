<html>
<body align="Center">
<h1> Form</h1>
<form action=""<?php $_PHP_SELF ?>" method="POST"><br><br><br><br>
<label for="usname"> UserName:</label><br>
<input type="text" name="uname"><br>
<label for="pwd"> Password: </label><br>
<input type="password" name="pwd"> <br><br>
<button type="Submit"> Submit: </button>
</form>
</body>
</html>
<?php

if( isset($_POST["uname"]) && isset($_POST["pwd"] ))
 {
 echo "Welcome ". $_POST['uname']. "<br />";
 echo "Your Password is". $_POST['pwd'];
 exit();
 }
 /*if( isset($_GET["uname"]) && isset($_GET["pwd"] ))
 {
 echo "Welcome ". $_GET['uname']. "<br />";
 echo "Your Password is". $_GET['pwd'];
 exit();
 }*/
 

 /*if(isset($_REQUEST["uname"]) && isset($_REQUEST["pwd"] ))
 {
 echo "Welcome ". $_REQUEST['uname']. "<br />";
 echo "Your password is". $_REQUEST['pwd'];
 exit();
 }*/
?>