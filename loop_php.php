<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr= array("ACD","B","C","D","E","F","G","H","I","J","K");
    foreach($arr as $arrs){
        ?>
        <div class="tt" style="flat:left;margin-right:10px;margin-top:10px;width:50px;height:50px;background-color:red;"><?php echo $arrs; ?></div>
        <?php
    }
    ?>
</body>
</html>