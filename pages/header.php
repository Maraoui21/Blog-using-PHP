<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>            
    <nav class="navbar">
        <h2>WELCOME TO TESTING BLOG WEBSITE </h2>
        <span class="add-btn">
        <a href="pages/Add.php">
            ADD BLOG
        </a>
        </span>
    </nav>
<script type="text/javascript">
    const url = window.location.href;
    const test = url.includes("index.php")
    if(test){

        const button = document.querySelector('body > nav > span > a');
        button.innerText = "ADD BLOG";
        button.setAttribute('href','pages/Add.php');
    }
    else{
        const button = document.querySelector('body > nav > span > a');
        button.innerText = "HOME PAGE";
        button.setAttribute('href','../index.php');

    }
</script>