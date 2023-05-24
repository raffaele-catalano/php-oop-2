<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <!-- FontAwesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/pets_favicon.png" type="png">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pet Shop</title>
</head>

<style>
    body {
        scroll-behavior: smooth !important;
    }
    .main-wrapper {
        background-image: url(../assets/img/wallpaper.jpg);
    }
    .card {
        position: relative;
    }
    .btn_container {
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
    }

    .btn_container button {
        transition: all .4s;

    }
    .btn_container button i {
        transition: all .4s;
    }
    
    /* .btn_container button:hover {
        transform: scale(1.1);
    } */

    .btn_container button:hover .fa-cart-shopping {
        color: gold;
        transform: scale(1.3);

    }
    .btn_container button:hover .fa-heart {
        color: crimson;
        transform: scale(1.4);
    }
</style>