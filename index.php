<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>agroSun</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/image-gallery.slider/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/image-gallery.slider/js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('js/image-gallery.slider/img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('js/image-gallery.slider/img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    </style>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="page-scroll" href="#home">
                <div class="block-line">

                      <div class="agro">agro</div>

                      <div class="logo">sun</div>

                </div>
            </a>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">ІНФОРМАЦІЯ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">ПРОДУКЦІЯ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">КОНТАКТИ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" id="home">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <h1 class="brand-heading ">СІЛЬГОСПТЕХНІКА</h1>
            
                        <p class="intro-text" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">ВІД ВІТЧИЗНЯНОГО ВИРОБНИКА</p>

                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->

    <section class="introAbout" id="about">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <div class="well">
                        <h1>AgroSun</h1>
                <h3>Реалізація сільгосптехніки від вітчизняного виробника.</h3>
                <h3>Реалізація вживаної техніки.</h3>
                <h3>Запчастини до грунтообробної техніки.</h3>
                    </div>
                
                
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="introDownload content-section text-center" id="download">
        <div class="download">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
            <h1>ЧИЗЕЛЬ</h1>
            </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:600px;overflow:hidden;visibility:hidden">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('js/image-gallery.slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/chiz/chiz.png" />
                <img data-u="thumb" src="img/chiz/chizthumb.png" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div>
                <img data-u="image" src="img/chiz/IMG_4973.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4973.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4970.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4970.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4951.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4951.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4932.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4932.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4915.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4915.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4884.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4884.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4871.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4871.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4841.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4841.JPG" />
            </div>
            <div>
                <img data-u="image" src="img/chiz/IMG_4824.JPG" />
                <img data-u="thumb" src="img/chiz/IMGthumb_4824.JPG" />
            </div>
            
            
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:250px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:250px;right:8px;width:40px;height:40px;"></span>
    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                <br>
                <div class="well">
                    <h2>
                    ПРИЗНАЧЕННЯ
                </h2>
                <p style="color:black;color:black;
  font-size: 25px;
  text-shadow: 1px 1px 2px white, 0 0 1em white;">
                    Глибокорозпушувачі причипні призначаються для основного безвідвального обробітку 
                    на глибину до 50 см в усіх грунтово-кліматичних зонах України, крім грунтових масивів з кам’янистими включеннями. 
                </p>
                </div>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                <br>
                <div class="well">
                    <h2>ТЕХНІЧНІ ХАРАКТЕРИСТИКИ</h2>
                <div class="table-bordered table-responsive">
                  <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>
                                            Марка машини
                                        </td>
                                        <td>
                                            ЧН-1,5
                                        </td>
                                        <td>
                                            ЧН-2,5
                                        </td>
                                        <td>
                                            ЧН-3,5
                                        </td>
                                        <td>
                                            ЧН-4,5
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Продуктивність, га/год
                                        </td>
                                        <td>
                                            до 1,2
                                        </td>
                                        <td>
                                            до 2,0
                                        </td>
                                        <td>
                                            до 2,8
                                        </td>
                                        <td>
                                            до 3,6
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Робоча ширина захвату, м
                                        </td>
                                        <td>
                                            1,5
                                        </td>
                                        <td>
                                            2,5
                                        </td>
                                        <td>
                                            3,5
                                        </td>
                                        <td>
                                            4,5
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Глибина обробітку,см
                                        </td>
                                        <td>
                                            до 50
                                        </td>
                                        <td>
                                            до 50
                                        </td>
                                        <td>
                                            до 50
                                        </td>
                                        <td>
                                            до 50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Число робочих органів, шт
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            9
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Глибина обробітку котками, см
                                        </td>
                                        <td>
                                            до 15
                                        </td>
                                        <td>
                                            до 15
                                        </td>
                                        <td>
                                            до 15
                                        </td>
                                        <td>
                                            до 15
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Необхідна потужність трактора, к.с.
                                        </td>
                                        <td>
                                            80-120
                                        </td>
                                        <td>
                                            120-180
                                        </td>
                                        <td>
                                            160-220
                                        </td>
                                        <td>
                                            250-340
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Маса, кг
                                        </td>
                                        <td>
                                            750
                                        </td>
                                        <td>
                                            1200
                                        </td>
                                        <td>
                                            1700
                                        </td>
                                        <td>
                                            2300
                                        </td>
                                    </tr>
                                </tbody>
                            </table>  


                </div>
                </div>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                <h2>ВІДЕО</h2>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8CCrXUJ5AoI"></iframe>
                </div>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/lM0quUcNnuU"></iframe>
                </div>
                

                </div>
            
        </div>
            </div>
        </div>
        </div>

        



    </section>

    <!-- Contact Section -->



    <section class="introContact" id="contact">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <div class="well">
                        <h2>Контакти: </h2>

                <p>м. Кропивницький, вул. Марманська 8</p>

                <p>

                    <i class="fa fa-user" aria-hidden="true"></i>

                    Дмитро Савіцький<br>

                    <i class="fa fa-phone-square" aria-hidden="true"></i>

                    (097) 051 8820<br>

                    <br>

                    <i class="fa fa-user" aria-hidden="true"></i>

                    Андрій Савіцький<br>

                    <i class="fa fa-phone-square" aria-hidden="true"></i>

                    (099) 499 0658<br>

                    <br>

                    <i class="fa fa-envelope" aria-hidden="true"></i>

                    <a style="color:white" href="mailto:feedback@startbootstrap.com">agrosun.kr@ukr.net</a><br>

                    

               

                </p>

                    </div>
                

               <!-- <ul class="list-inline banner-social-buttons">

                    <li>

                        <a href="https://twitter.com/SBootstrap&quot; class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>

                    </li>

                    <li>

                        <a href="https://github.com/IronSummitMedia/startbootstrap&quot; class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>

                    </li>

                    <li>

                        <a href="https://plus.google.com/+Startbootstrap/posts&quot; class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>

                    </li>

                </ul>-->

            </div>

        </div>
        </div>
        </div>

    </section>

    <!-- Map Section -->
<section class="introMymap">
        <div class="mymap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                    
                    </div>
        </div>
        </div>
        </div>

</section>
    <!-- <section class="container content-section text-center">
        
            <div class="container mymap">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            


   
            

    
    </div>
        

    </section> -->
    

    <!-- Footer -->
    <footer style="background: #039BE5">
        <div class="container text-center">
            <p style="color:black"><i class="fa fa-copyright" aria-hidden="true"></i>2017 AgroSun
</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

    
</body>

</html>
