<?php 
include "db.php";
$sql = "SELECT * FROM menu WHERE status=1";
$result = $conn->query($sql);
// print_r($result);
// foreach ($result as $arr){
//     // echo '<a href="'.$arr[0].'">'.$arr[1].'</a>';
// }
// print_r($result)
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
                    foreach ($result as $arr){?>
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
        <div class="mix-center" id="mix-center">
            <div class="mix-body" id="top-body">
                <div class="mix-top-body" id="news-top-body">
                    <div class="top-news-body">
                        <div class="float-left top-left-news top-news-hover">
                            <a href="#">
                                <div class="bg"></div>
                                <div class="news-status" style="background-color: red;">កម្សាន្ត</div>
                                <div class="time-date" style="">
                                    <div class="title" style="height: 85px;position: relative;overflow: hidden;">
                                        <div class="title-anima" style="position: absolute;">
                                            <h4>អង់គ្លេស ​ភ្លាត់​ចាញ់ ដាណឺម៉ាក ​១-០ ​ក្នុង​ពាន Nations League</h4>
                                            <h6>​ក្រុម​បាល់ទាត់​ជម្រើស​ជាតិ​អង់គ្លេស ​លេង​ចាញ់​ក្រុម​ដាណឺម៉ាក ​ក្នុង​លទ្ធផល ១-០ ​ក្នុង​ការ​ប្រកួត​ពាន​រង្វាន់ UEFA Nations League ​កាល​ពី​យប់មិញ​នេះ​។</h6>
                                        </div>
                                    </div>
                                    <h5>ថ្ងៃនេះ​ ម៉ោង 11:30pm</h5>
                                </div>
                                <img src="img/news1.jpg" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                        <div class="float-left top-right-news">
                            <a href="#">
                                <div class="news-status" style="background-color:blue;">ព័តមានវិទ្យា</div>
                                <div class="time-date" style="">
                                    <div class="title">សួស្ដីទាំងអស់គ្នានេះជា គេហទំព័រថ្មី</div>
                                    <h5>ថ្ងៃនេះ​ ម៉ោង 11:30pm</h5>
                                </div>
                                <img src="img/news2.jpg" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="top-news-body">
                        <div class="float-left top-left-news">
                            <a href="#">
                                <div class="news-status" style="background-color: purple;">វិទ្យាសាស្ត្រ</div>
                                <div class="time-date" style="">
                                    <div class="title">សួស្ដីទាំងអស់គ្នានេះជា គេហទំព័រថ្មី</div>
                                    <h5>ថ្ងៃនេះ​ ម៉ោង 11:30pm</h5>
                                </div>
                                <img src="img/news3.jpg" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                        <div class="float-left top-right-news">
                            <a href="#">
                                <div class="news-status" style="background-color: sienna;">កីឡា</div>
                                <div class="time-date" style="">
                                    <div class="title">សួស្ដីទាំងអស់គ្នានេះជា គេហទំព័រថ្មី</div>
                                    <h5>ថ្ងៃនេះ​ ម៉ោង 11:30pm</h5>
                                </div>
                                <img src="img/news4.jpg" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mix-top-body" id="ads-top-body">
                    <div class="float-left right-top-body">
                        <img src="img/ads1.jpg" style="width: 100%;height: auto;">
                    </div>
                    <div class="float-left right-top-body">
                        <iframe width="100%" height="220" src="https://www.youtube.com/embed/3dT-WvF69Pk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="mix-body" id="botton-body">
                <!-- get code from JavaScript -->
                      
            </div>
        </div>
    </div>
    <div class="main" id="footer">pheasa</div>
    <script>
        var news0={
            imag:"img/news1.jpg",
            title:"AA0",
            category:"AA"
        };
        var news1={
            imag:"img/news2.jpg",
            title:"AA1",
            category:"AA"
        };
        var news2={
            imag:"img/news3.jpg",
            title:"AA2",
            category:"AA"
        };
        var news3={
            imag:"img/news4.jpg",
            title:"AA3",
            category:"AA"
        };
        var news4={
            imag:"img/news1.jpg",
            title:"AA4",
            category:"AA"
        };
        var news5={
            imag:"img/news1.jpg",
            title:"AA5",
            category:"AA"
        };
        var news6={
            imag:"img/news1.jpg",
            title:"AA6",
            category:"AA"
        };
        var news7={
            imag:"img/news1.jpg",
            title:"AA7",
            category:"AA"
        };
        var news8={
            imag:"img/news1.jpg",
            title:"AA8",
            category:"AA"
        };
        var news9={
            imag:"img/news1.jpg",
            title:"AA9",
            category:"AA"
        };
        var news10={
            imag:"img/news1.jpg",
            title:"AA10",
            category:"BB"
        };
        var news11={
            imag:"img/news1.jpg",
            title:"AA11",
            category:"BB"
        };
        var news12={
            imag:"img/news1.jpg",
            title:"AA12",
            category:"BB"
        };
        var news13={
            imag:"img/news1.jpg",
            title:"AA13",
            category:"BB"
        };
        var news14={
            imag:"img/news1.jpg",
            title:"AA14",
            category:"BB"
        };
        var news15={
            imag:"img/news1.jpg",
            title:"AA15",
            category:"BB"
        };
        var news16={
            imag:"img/news2.jpg",
            title:"AA16",
            category:"BB"
        };
        var news17={
            imag:"img/news3.jpg",
            title:"AA17",
            category:"BB"
        };
        var news18={
            imag:"img/news4.jpg",
            title:"AA18",
            category:"BB"
        };
        var news19={
            imag:"img/news1.jpg",
            title:"AA19",
            category:"BB"
        };
        var news20={
            imag:"img/news1.jpg",
            title:"AA20",
            category:"CC"
        };
        var news21={
            imag:"img/news1.jpg",
            title:"AA21",
            category:"CC"
        };
        var news22={
            imag:"img/news1.jpg",
            title:"AA22",
            category:"CC"
        };
        var news23={
            imag:"img/news1.jpg",
            title:"AA23",
            category:"CC"
        };
        var news24={
            imag:"img/news1.jpg",
            title:"AA24",
            category:"CC"
        };
        var news25={
            imag:"img/news1.jpg",
            title:"AA25",
            category:"CC"
        };
        var news26={
            imag:"img/news1.jpg",
            title:"AA26",
            category:"CC"
        };
        var news27={
            imag:"img/news1.jpg",
            title:"AA27",
            category:"CC"
        };
        var news28={
            imag:"img/news1.jpg",
            title:"AA28",
            category:"CC"
        };
        var news29={
            imag:"img/news1.jpg",
            title:"AA29",
            category:"CC"
        };

        var AA=[news0,news1,news2,news3,news4,news5,news6,news7,news8,news9,];
        var BB=[news10,news11,news12,news13,news14,news15,news16,news17,news18,news19];
        var CC=[news20,news21,news22,news23,news24,news25,news26,news27,news28,news29]
        var p=[AA,BB,CC]
        var q=0;
        var l=0;
        var next_data;
        p.forEach(element => {
            document.getElementById("botton-body").innerHTML+='<div class="slide-news" style="margin-top: 20px;float: left;">\
                    <div class="mix-body-head">\
                        <ul style="width: 100%;margin: 0px;float: left;">\
                            <a href="#" style="background-color: red;padding: 10px;color: white;text-decoration: none;float: left;">សួរស្ដី</a>\
                            <div class="corner" style="clip-path: polygon(0 0, 0% 100%, 100% 100%);background-color: red;width: 20px;float: left;height: 100%;height: 43px;"></div>\
                        </ul>\
                    </div>\
                    <div class="mix-body-body" id="mix-body-body"><div class="all-mix-body" style="position: relative;">\
                            <div class="float-left mix-body-sub-news-lef">\
                                <a href="#" style="height: 300px;width: 100%;float: left;">\
                                    <div class="top" style="height: 65%;float: left;width: 100%;"><img id="image-slide'+q+'-new0" src="'+element[0].imag+'" style="width:100%;height:100%"></div>\
                                    <div class="bott" style="height: 35%;float: left;width: 100%;" id="title-slide'+q+'-new0">'+element[0].title+'</div>\
                                </a>\
                            </div>\
                            <div class="float-right mix-body-sub-news-right">\
                                <div class="float-left sub-news-right-more">\
                                    <div id="bott1" class="bott1" style="height: 35%;float: left;width: 100%;">\
                                        <div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new1" src="'+element[1].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new1" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[1].title+'</div>\
                                            </a>\
                                        </div>\
                                        <div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div  class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new2" src="'+element[2].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new2" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[2].title+'</div>\
                                            </a>\
                                        </div>\
                                        <div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div  class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new3" src="'+element[3].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new3" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[3].title+'</div>\
                                            </a>\
                                        </div>\
                                        <div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new4" src="'+element[4].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new4" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[4].title+'</div>\
                                            </a>\
                                        </div>\
                                        <div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new5" src="'+element[5].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new5" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[5].title+'</div>\
                                            </a>\
                                        </div><div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new6" src="'+element[6].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new6" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[6].title+'</div>\
                                            </a>\
                                        </div><div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new7" src="'+element[7].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new7" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[7].title+'</div>\
                                            </a>\
                                        </div><div class="mini-box-news float-left">\
                                            <a href="#" style="width:100%;height: 160px;float: left;">\
                                                <div class="mini-img float-left" style="width: 100%;height: 65%;">\
                                                    <img id="image-slide'+q+'-new8" src="'+element[8].imag+'" style="width: 100%;height: 100%;">\
                                                </div>\
                                                <div id="title-slide'+q+'-new8" class="mini-title float-left" style="height: 35%; font-size: 12px; width: 100%;color: black;">'+element[8].title+'</div>\
                                            </a>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                            <div class="prev" style="position: absolute;float: left;left: 0px;">\
                                <button type="button" id="prev"><span class="glyphicon glyphicon-menu-left"></span></button>\
                            </div>\
                            <div class="next" style="position: absolute;right: 0px;float: left;">\
                                <button type="button" onclick="next(this)" id="'+q+'" value="9" class="next"><span class="glyphicon glyphicon-menu-right"></span></button>\
                            </div>\
                        </div>\
                    </div>\
                </div>';
                q=q+1; 
        });
        function next(next_data){
            l=next_data.value;
            l=parseInt(l);
            for(var i=0;i<9;i++){

                var uu = 'image-slide'+next_data.id+'-new'+i
                var tt = 'title-slide'+next_data.id+'-new'+i
                try{
                    document.getElementById(uu).src=p[next_data.id][l].imag;
                    document.getElementById(tt).innerText=p[next_data.id][l].title;
                    document.getElementById(next_data.id).value=l;
                }catch(error){
                    document.getElementById(uu).src="img/non_image.png";
                    document.getElementById(tt).innerText="data is none";
                    window.location.replace('http://www.youtube.com');
                }
                l=l+1;
            }
        }
    </script>
</body>
</html>