  <script src="../extlib/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="../extlib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="../extlib/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
    <script src="../extlib/bootstrap-3.3.5-dist/js/tooltip.js" type="text/javascript" charset="utf-8" ></script>
    <script src="../extlib/bootstrap-3.3.5-dist/js/carousel.js" type="text/javascript" charset="utf-8" ></script>

<!-- bs3-carousel 即可解决 -->
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/banner-201308221138340.jpg" height="409" width="1000">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="images/banner-201308191512580.jpg" height="409" width="1000">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item active">
            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="images/banner-201308191607480.jpg" height="409" width="1000">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>