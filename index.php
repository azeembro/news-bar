<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Bar</title>
</head>
<body>

<div class="bar">
   <span class="bar_content">
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
   </span>
 </div>

    
</body>
<style>
   @import url("https://fonts.googleapis.com/css?family=Gelasio&display=swap");

* { box-sizing: border-box; }

    body,
    html { overflow-x: hidden; }

    .bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 0;
    background-color: #12239b;
    color: white;
    font-family: Arial;
    font-size: 18px;
    }

    .bar_content {
    display: block; /* Important to give the content a width */

    width: 100%;
    transform: translateX(100%); /* Animation start out of the screen */

    /* Add the animation */
    animation: move 30s linear infinite /* infinite make reapeat the animation indefinitely */;
    }

    /* Create the animation */
    @keyframes move {
    to { transform: translateX(-100%); }
    }     
</style>
</html>
