<?php 
function Query($db,$select){
    include "db.php";
    $sql = "SELECT * FROM $db WHERE $select";
    $result = $conn->query($sql);
    return($result);
}

$id_cat=$_GET["cate_ind"];
$post_get=Query("post","category=".$id_cat."  && status=1");
// print_r($post_get);
// foreach($post_get as $post_gets){
//     print_r($post_gets);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rean code</title>
<!-- -----------------bootstap---------------------------- -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<!-- ------------------------------------------------------------ -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Khmer&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <div class="main" id="header">
        <div class="mix-center">
            <div class="sub-header" id="logo">
                <img src="img/logo.png">
            </div>
            <div class="sub-header" id="ads">
                <img src="img/ads.jpg">
            </div>
        </div>
    </div>
    <div class="main" id="menu" style="background-color: #fa1939;">
        <div class="mix-center">
            <div id="main-menu">
                <a href="#" style="float: left;">
                    <img src="img/home icon.png" alt="">
                </a>
                <div class="sub-menu">
                    <?php 
                    $category=Query("menu","status=1");
                    foreach ($category as $arr){?>
                        <a href="list_page.php?cate_ind=<?php echo $arr["id"] ?>"><?php echo $arr["name"] ?></a>
                    <?php
                    }
                    ?>                
                    <!-- <a href="#">បច្ចេកវិទ្យា</a>
                    <a href="#">ព័តមានវិទ្យា</a>
                    <a href="#">ភាសាខ្មែរ</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="main" id="body">
        <div class="mix-center">
        <?php foreach($post_get as $post_gets){ 
            // print_r($post_gets);
        ?>
            <a href="single_page.php?post_id=<?php echo $post_gets["id"];?>" class="float-left" style="width:100%;margin:5px;-webkit-box-shadow: 0px -4px 62px -5px rgba(0,0,0,0.54);-moz-box-shadow: 0px -4px 62px -5px rgba(0,0,0,0.54);box-shadow: 0px -4px 62px -5px rgba(0,0,0,0.54);">
                <div id="list_news" class="float-left">
                    <div class="cover float-left">
                        <img src="img/<?php echo $post_gets["cover_img"];?>" style="width:100%;height:100%">
                    </div>
                    <div class="discription float-left">
                        <h3><?php echo $post_gets["title"];?></h3>
                        <div class="datetime" style="font-size:8"><?php echo $post_gets["time_date"];?></div>
                        <div class="discription"><?php echo $post_gets["discription"];?></div>
                    </div>
                </div>
            </a>
        <?php 
        }
        ?>
        </div>
    </div>
    <div class="main" id="footer">pheasa</div>
    <script>
    </script>
</body>
</html>