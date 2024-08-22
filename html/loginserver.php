<?php>
$con=mysql_connect('localhost','root');
mysqli_select_db($con,'sigma');
$Login ID=$ post['Login ID'];
$Password=$ post['Password'];

if($$Login ID= =""||$ Login ID= ="")
{
    echo"Please re-enter Login ID & Password"
}
else
{
    $q="select Login ID, Password from condidate whereLogin ID='$login ID'";
    $data=mysqli_query($con,$q);
    $result=mysqli_fetch_assoc($data);
    if($reult['Login ID'])= =$Login_ID&& $result['password']==$Password)
    {
        ?>
        <br><br><br><center><h2>click&nbsp;<a href="opponiment.php">Here </a>&nbsp; to book your valuable time with our Doctors'</h2></center>
        <?php
    }
    else
{
    echo"<center><br><br><h3>Login_ID and Password Mismatch Occurs</h3></center>";
    ?>
    <center><b><p> Click <a href="login.php"> Here</a> to log in Again</p></b></center>
    <?php
}
}
?>




