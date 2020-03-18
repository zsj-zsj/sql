<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        for($i=1;$i<=100;$i++){
            echo "&nbsp;&nbsp;<button class='seat'>{$i}</button>&nbsp;&nbsp;";
            if($i%10==0){
                echo "<br>";
            }
        }
    
    
    ?>

<script>
    var seats=document.getElementsByClassName("seat");
   
    for(var i=0;i<seats.length;i++){
        seats[i].addEventListener('click',function(e){
            var ys =confirm("确定选中此座位吗？"+this.innerHTML)
            if(ys){
                this.style.backgroundColor='red';
                var xhr =new XMLHttpRequest();
                var seat_id=this.innerHTML;
                xhr.open('GET','/redis/seats.php?id='+seat_id,true);
                xhr.send();
            }
         });
    }
</script>
</body>
</html>