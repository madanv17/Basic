<?php
$conn = new mysqli("localhost","root","","form");

/*if($conn->connect_error){
    echo $conn->connect_error;
            die ("database connection failed");
          }
          else{
            echo "database connected";
          }*/
?>
<html>
<head>
    <title>form</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Name </td>
            <td><input type="text" name="t1"></td>
        </tr>
        <tr>
            <td>City </td>
            <td><input type="text" name="t2"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit"></td>
        </tr>

</form>
<?php
if(isset($_POST["submit"]))
{
   $sql= "INSERT into form values('$_POST[t1]','$_POST[t2]')";
}



?>
</body>
</html>