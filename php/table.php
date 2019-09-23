<?php
if(isset($_POST["submit"]))
{
    mysqli_query($link,"insert into form values('$_POST[t1]','$_POST[t2]')");
}



?>
