<?php

	function generatePage($body, $title="RPG Utility") {
    	    $page = <<<EOPAGE
<!doctype html> 
	<html> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
	    <head>  
	        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	        <title>$title</title>    
	    </head> 
	    <nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">[Dungeon log]</a>
</nav>
	             
	    <body> 
            $body 
	     <br>   
	    </body> 
	</html>
EOPAGE;

	    return $page;
	}

	function connect(){

    $servername = "localhost";
    $username = "id6696067_admin";
    $password ="12345";
	    $db="id6696067_users";

    $conn = new mysqli($servername, $username, $password, $db);


    if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
	    } else{
	        return $conn;
	    }
	}
	?>