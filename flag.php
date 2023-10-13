<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>IndianFlag</title> -->
    <link rel="stylesheet" href="style2.css">
    <style>
        .top,
.middle,
.button{
    height: 60px;
    width: 350px;
}
.top{
    background-color: #ff9933;

}
.middle{
    background-color: white;
    display: flex;
    justify-content: center;

}
.button{
    background-color: green;

}
.wheel{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    outline: 1px solid darkblue;
    position: relative;

}
.line{
    position: absolute;
    height: 100%;
    width: 1px;
    background-color: darkblue;
    left: 50%;
}
.line:nth-child(1){
    transform: rotate(15deg);
}
.line:nth-child(2){
    transform: rotate(30deg);
}
.line:nth-child(3){
    transform: rotate(45deg);
}
.line:nth-child(4){
    transform: rotate(60deg);
}
.line:nth-child(5){
    transform: rotate(75deg);
}
.line:nth-child(6){
    transform: rotate(90deg);
}
.line:nth-child(7){
    transform: rotate(105deg);
}
.line:nth-child(8){
    transform: rotate(120deg);
}
.line:nth-child(9){
    transform: rotate(135deg);
}
.line:nth-child(10){
    transform: rotate(150deg);
}
.line:nth-child(11){
    transform: rotate(165deg);
}
.line:nth-child(12){
    transform: rotate(180deg);
}

    </style>
    <!-- <link rel="stylesheet" href="https://unicons.iconsout.com/release/4.0.8/css.line.css"> -->
</head>
<body>
<center>
    <h1 style="background-color: blue; width:40%;">Indian Flag Created By Badal</h1>
    <div class="flag">
        <div class="top"></div>
        <div class="middle">
            <div class="wheel">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="button"></div>
    </div>
    </center>
</body>
</html>