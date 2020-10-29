<?php
    session_start();
    echo
    '
    <HTML>
    <head>
    <style> 
    #data{
    font-size: 18px;
    letter-spacing: 0px;
    word-spacing: 2px;
    color: #1F4DFF;
    font-weight: normal;
    text-decoration: none;
    font-style: normal;
    font-variant: small-caps;
    text-transform: none;
    margin-bottom: 2px;
    }
    </style>
    </head>
    <body>
    <p id = "data"> First Name:</p>' .$_SESSION['firstname'] .' <br>
    <p id = "data"> Last Name:</p>'.$_SESSION['lastname'].' <br>
    <p id = "data"> Email: </p>'.$_SESSION['email'].'<br> 
    <p id = "data"> Gender: </p>'.$_SESSION['gender'].'<br>
    <p id = "data"> Hometown: </p>'.$_SESSION['hometown'].'<br>
    <p id = "data"> About: </p>'.$_SESSION['aboutme'].'<br>
    <p id = "data"> Status: </p>'.$_SESSION['status'].'<br>
    <p id = "data"> Phone: </p>'.$_SESSION['phone'].'<br>
    <p id = "data"> Birthday: </p>'.$_SESSION['bday'].' <br>
    </body>
    </HTML>';  
?>