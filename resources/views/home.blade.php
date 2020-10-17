@extends('layout.layout1')
@section('content')
<style>
    .c img {
        transition: all .3s linear;
        transform: scale(1.1);

    }

    .c:hover img {
        transform: scale(1.0);
    }

    .pic {
        overflow: hidden;
    }

    .c:hover .card-body {
        background-color: rgb(163, 153, 10);
        color: white;
    }
</style>
<!-- --------------------slider------------------------ -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 700px;">
                <img src="http://images6.fanpop.com/image/photos/42900000/white-tiger-bing-42982792-1920-1200.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item" style="height: 700px;">
                <img src="https://www.zoochat.com/community/media/flamingo-mom-and-chick.488184/full?d=1592493050" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item" style="height: 700px;">
                <img src="http://cdn.wallpapersafari.com/55/0/VtnaU5.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item" style="height: 700px;">
                <img src="http://images6.fanpop.com/image/photos/39600000/New-Picks-bing-39643260-1920-1200.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item" style="height: 700px;">
                <img src="http://images6.fanpop.com/image/photos/42900000/Ruff-wading-bird-bing-42982001-1920-1200.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item" style="height: 700px;">
                <img src="http://images6.fanpop.com/image/photos/42900000/meerkat-family-bing-42981971-1920-1200.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- -----------------------paragraph--------------------- -->
<section class="container mt-5">
    <div class="row mt-5">
        <div class="col text-center">
            <h1 class="display-1"><span style="color: red;">A</span>nimal</h1>
            <p class="p text-muted">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo velit sapiente voluptate,
                ipsa nemo illo doloribus nulla. Pariatur asperiores alias doloribus soluta, quod numquam
                expedita! Dolor a repellendus ipsa officia.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, similique soluta culpa quasi,
                vero fuga repudiandae consequatur velit atque temporibus laboriosam quam pariatur, doloremque
                quae tenetur iusto dolorem nesciunt at.
            </p>
        </div>
    </div>
</section>
<!-- ---------------------cards---------------------- -->
<section>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://www.realvisits.org/wp-content/uploads/2017/09/leapord-crouching.jpg" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://wallpaperphoto.net/system/storage/serve/1009165/tiger-face-eyes-big-cat-wallpaper.jpg" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://image.winudf.com/v2/image/Y29tLm1hcm9jZi5hbmltYWxzaGRfc2NyZWVuXzNfMmtjbWIyODc/screen-3.jpg?fakeurl=1&type=.jpg" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://hdwallpapers.move.pk/wp-content/uploads/2015/10/angry-cat-1024x768.jpg" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://th.bing.com/th/id/OIP.b4XVS3Je82n5sQflSm8V4wHaE7?pid=Api&rs=1" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
                <div class="card c">
                    <div class="pic">
                        <img src="https://cdn.wallpapersafari.com/91/73/AUFBSK.jpg" class="card-img-top" height="300px">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection