<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/public_styling.css">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
        font-family: 'Averia Serif Libre', cursive;

    }

    header {
        background: #006384;
        height: 30vh;
    }
    ul{
        float: right;
        list-style-type: none;
        margin-top: 25px;
    }
    ul li {
        display: inline-block;
        margin-right:40px;

    }
    ul li a{
        text-decoration: none;
        color: rgba(255,255,255,0.5);
        padding: 5px 0.2px;
        transition: 0.5s ease;
    }
    ul li a:hover{
        color: rgba(255,255,255,0.75);

    }
    ul li a.active{
        border-bottom: 2px solid black;
        color: #fff
    }

    ul li a.download{
        border: 1px solid #fff;
        padding: 5px 20px;
        border-radius: 3px;
        color: #fff;
    }

    ul li a.download:hover{
        background-color: #fff;
        color: purple;
    }
    .title{
        position:absolute;
        top:40%;
        left: 25%;

    }
    .title h2{
        color: black;
        font-size: 55px;
        font-weight: 300;
        letter-spacing: -1px;
    }

    .title p{
        color: black;
        font-size: 18px;
        text-align: center;
    }
    </style>
</head>
<body>
    <header>
        <div class="main">
            <ul>
                <li><a class="active" href="#">HOME</a></li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">PRICING</a></li>
                <li><a class="download" href="#">DOWNLOAD</a></li>

            </ul>
        </div>
        <div class="logo_div">
                <a href="index.php"><h1>LifeBlog</h1></a>
        </div>
        <div class="title">
        <h2>Talk is cheap. Show me the code.</h2>
        <p>Any fool can write code that a computer can understand. Good programmers write code that humands can understand</p>
        <p>you have successfully signed up</p>
        </div>
        <a href="index.php">LogOut</a>
    </header>

</body>
</html>
<?php include('includes/footer.php') ?>
