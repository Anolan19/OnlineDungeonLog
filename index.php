<?php
require_once "sup.php";
$conn=connect();
if($_POST['username']){
    $un=$_POST['username'];
    $query="SELECT * from users where username = $un ";
    $res=$con->query($query);
    if($res->num_rows > 0){
        echo 'username found';
    } else {
        echo 'username not found';
    }
}
echo generatePage("<h1>Welcome to the Dungeon log system of the rpg utils website</h1><pre>
This page is still under construction.
To use, please make an account

<h3>goodbye world</h3>
</pre>");