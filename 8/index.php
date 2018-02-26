<?php

include_once __DIR__ . '/src/EvilDead/Api.php';

$api = new Api();

if ( isset( $_GET['submit'] ) ){
    $paras = $api->api();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>EvilDead Ipsum - A Kandarian Lorem Ipsum Generator</title>
        <link href="half-slider/css/bootstrap.css" rel="stylesheet">
        <link href="half-slider/css/half-slider.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/favicon.png">
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        Evil Dead Lorem Ipsum Generator
                    </a>
                </div>                                
            </div>
        </nav>
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('images/evil_dead_1.png');"></div>                
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/evil_dead_2.jpg');"></div>                
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/evil_dead_3.jpg');"></div>                
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/evil_dead_4.jpg');"></div>                
                </div>            
            </div>
        </div>
        <div class="container">
            <div class="row section">
                <div class="col-lg-12">
                    <h1><strong>Evil Dead Lorem Ipsum Generator</strong></h1>
                    <p>
                        <i>It is through the recitation of these paragraphs that the demons are given license to possess the living.</i>
                    </p>
                    <div class="form">                        
                        <form action="index.php" class="form-horizontal" method="get">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Paragraphs:</label>
                                <div class="col-sm-1">
                                    <input style="width: 40px;" type="text" name="paras" value="5" maxlength="2" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <input id="start-with-lorem" type="checkbox" name="start-with-lorem" value="1" checked="checked" />
                                    <label for="start-with-lorem">Start with \'Evil Dead ipsum dolor sit amet...\'</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" name="submit" value="Play the recorder..." />
                                </div>
                            </div>                            
                        </form>                        
                    </div>
                    <p>
                        Based on <a href="http://baconipsum.com/">Bacon Ipsum</a>
                    </p>
                </div>
            </div>
            <div class="well">
                <?php
                    if (isset($paras)){
                        foreach ($paras as $para) {
                            echo "<p>" . $para . "</p>";
                        }                    
                    }
                ?>
            </div>
            <hr>
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Contact: <a href="https://twitter.com/devdrops">@devdrops</a>
                            &nbsp;
                            Source at <a href="https://github.com/devdrops/evildead-ipsum">Github</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="half-slider/js/jquery-1.10.2.js"></script>
        <script src="half-slider/js/bootstrap.js"></script>
        <script>
            $('.carousel').carousel({interval: 5000})
        </script>
    </body>
</html>
