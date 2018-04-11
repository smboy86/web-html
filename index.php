<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function delNoFontObject(){
            console.log(document.getElementById("test").children[0].value);
            if(true){
                document.getElementById("test").remove();
            }
        }
    </script>

</head>
<body onload="delNoFontObject();">
    <div align='center'>
        <span id='test' class='myc'>
            <font color='red'>TEST</font>
        </span>
    </div>
    <div align='center'><span id='test2' class='myc' onclick='autocalc();'><font color='red'></font></span></div>
    <div align='center'><span id='test2' class='myc' onclick='autocalc();'><font color='red'></font></span></div>
    <div align='center'><span id='test3' class='myc' onclick='autocalc();'><font color='red'>TEST3</font></span></div>    
</body>
</html>

