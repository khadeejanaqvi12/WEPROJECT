
<?php
$db=new PDO('mysql:host=localhost;dbname=web','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($db){
    echo"";
}
else{
    echo "Failed to connect to server";
}
?>