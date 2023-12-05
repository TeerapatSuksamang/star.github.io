<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <style>
        button{
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['st1'])){
            $st = 1;
        } else if(isset($_POST['st2'])){
            $st = 2;
        } else if(isset($_POST['st3'])){
            $st = 3;
        } else if(isset($_POST['st4'])){
            $st = 4;
        } else if(isset($_POST['st5'])){
            $st = 5;
        } else {
            $st = 0;
        }
    ?>
    <form action="star_rating.php" method="post">
        <button class="btn text-warning" name="st1"><h2>&#973<?php echo ($st > 0 ? 3 : 4); ?>;</h2></button>
        <button class="btn text-warning" name="st2"><h2>&#973<?php echo ($st > 1 ? 3 : 4); ?>;</h2></button>
        <button class="btn text-warning" name="st3"><h2>&#973<?php echo ($st > 2 ? 3 : 4); ?>;</h2></button>
        <button class="btn text-warning" name="st4"><h2>&#973<?php echo ($st > 3 ? 3 : 4); ?>;</h2></button>
        <button class="btn text-warning" name="st5"><h2>&#973<?php echo ($st > 4 ? 3 : 4); ?>;</h2></button>
        
        <input type="hidden" name="star" value="<?php echo $st ?>"> 
        <input type="submit" value="Enter" name="submit">
    </form>
    <!-- 
        &#9733 => ดาวแบบเต็มดวง
        &#9734 => ดาวแบบไม่เต็มดวง

        echo ($st > 0 ? 3 : 4) คือ if else แบบลดรูป
        $st > 0  คือเงื่อนไข
        ? 3      ถ้าเงื่อนไขเป็นจริง แสดง 3
        : 4      ถ้าเงื่อนไขไม่เป็นจริง แสดง 4
     -->
</body>
</html>
