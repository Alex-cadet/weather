<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода в регионе</title>
</head>
<body class="b1">
    

 <div class="crud">
    <h1 style="color:rgb(12, 1, 1);text-align:center">Курсовая работа</h1>
    <h2 style="color:#353501;text-align:center";">Погода в регионах</h2>

     <div class="button">         
         <button id=b1 onclick="window.location.href='create'">Create</button>
         <h1 style="color:#80ff00;">C</h1>
     </div>
     <div class="button">       
        <button id=b2 onclick="window.location.href='read'">Read</button>
        <h1 style="color:#89049b;">R</h1>
     </div>
     <div class="button">        
        <button id=b3 onclick="window.location.href='update'"">Update</button>
        <h1 style="color:#421016;">U</h1>
     </div>
     <div class="button">
        
        <button id=b4 onclick="window.location.href='delete'">Delete</button>
        <h1 style="color:#912e07;">D</h1>
     </div>
 </div>  

<style>
    .wrapper{text-align: center;margin-top: 10px;}
    .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 1.25em;
         }
    .crud{text-align: center;margin-top: 50px;background-color: #2382c2; width: 350px; margin: 0 auto;
    opacity: .91;}
    .button{display: inline-block; margin-right: 1.25em;}
    #b1{background-color: #008000}
    #b2{background-color: #0000ff}
    #b3{background-color: yellow}
    #b4{background-color: red}
    .b1{
        background-size: cover;
        background-image: url("/images/главная.jpeg")}
</style>
</body>
</html>