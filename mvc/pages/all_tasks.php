<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1>Tasks:</h1>

<?php

include "header.php";
?>


<!--<form action="index.php?page=accounts&action=profile">
    <button type="submit"  value="profile"> My Profile </button>
</form-->

<a href="index.php?page=accounts&action=profile">My Profile</a>
<a href="index.php?page=accounts&action=editprofile">Edit Profile</a>



 <?php
//this is how you print something
        if($data == false){
            echo '<h3>You did not create any Task</h3>';
        }else {
            print utility\htmlTable::genarateTableFromMultiArray($data);
        }

    ?



<form action="index.php?page=tasks&action=insert" method="post">

    
    Owneremail: <input type="text" name="owneremail" ><br>
    Ownerid: <input type="text" name="ownerid" ><br>
    Createddate: <input type="text" name="createddate" ><br>
    Duedate: <input type="text" name="duedate" ><br>
    Message: <input type="text" name="message" ><br>
    isDone: <input type="text" name="isdone" ><br>
    <input type="submit" value="Insert form">
    
</form>


<script src="js/scripts.js"></script>
</body>
</html>