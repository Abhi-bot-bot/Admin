<?php
include './header.php';
include './footer.php';
include './sidemenu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboad</title>
    <link rel="stylesheet" href="style.css">
<style>
.dash{
    margin-left: 200px;
    margin-top: 20px;   
}
.container{
    width: 1200px;
    height: auto;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,0fr));
    grid-gap: 10px;
    padding:10px;
    box-sizing: border-box;
    float: right;
    margin-top:50px;
}
.container .box{
    position: relative;
    background: cornflowerblue;
    padding: 20px 40px 40px;
    text-align: center;
    overflow: hidden;
    border-radius: 20px;
}
.container .box:nth-child(1){
    background: linear-gradient(45deg,#036eb7,#64eaff)
}
.container .box:nth-child(2){
    background: linear-gradient(45deg,#e91e63,#ed55ff)
}
.container .box:nth-child(3){
    background: linear-gradient(45deg,#086d35,#00ff72)
}
.container .box:nth-child(4){
    background: linear-gradient(45deg,#f05a4f,#f4c030)
}


.container .box h2{
    position: relative;
    margin: 0;
    padding: 0;
    font-size: 100px;
    color: #fff;
    z-index: 1;
    opacity: 0.4;
}
.container .box h3{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
}
.container .box p{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 18px;
}
    </style>
</head>
<body>
    <h1 class="dash">Dashboard</h1>
    <div class="container">
        <div class="box">
            <h2>1</h2>
            <h3>ONE</h3>
            <p>Lorem ipsum dolor sit amet fugit?</p>
        </div>
        <div class="box">
            <h2>2</h2>
            <h3>TWO</h3>
            <p>Lorem ipsum dolor sit amet fugit?</p>
        </div>
        <div class="box">
            <h2>3</h2>
            <h3>THREE</h3>
            <p>Lorem ipsum dolor sit amet fugit?</p>
        </div>
        <div class="box">
            <h2>4</h2>
            <h3>FOUR</h3>
            <p>Lorem ipsum dolor sit amet fugit?</p>
        </div>
    </div>
</body>
</html>