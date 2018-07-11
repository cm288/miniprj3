@extends('layouts.app')

@section('content')
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>About this Assignment.</h1>
                            <p>Mini Project 3 has tested all of the skills we've learned so far IS601. Below are some of the concepts that were tested with this assignment</p>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Mini Project 3</h1>
                            <p>Click below for more details on the project and deliverables </p>
                            <p><a class="btn btn-lg btn-primary" href="http://njit2.mrooms.net/course/view.php?id=22771#section-1" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Project Goals and Objectives.</h1>
                            <p>The aim of this project was to help IS601 students become more familiarized with the concepts covered in the class lectures and also test their ability apply some of the concepts and skills learned.</p>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('images/laravel.png') }}" alt="Generic placeholder image" width="140" height="140">
                    <h2>Laravel Framework</h2>
                    <p>This project has solidified my understanding of the PHP Laravel framework and the blade template file structures.</p>
                    <p><a class="btn btn-secondary" href="https://laravel.com/" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="{{ asset('images/source-code.png') }}" alt="Generic placeholder image" width="140" height="140">
                    <h2>Unit Testing</h2>
                    <p>Unit testing was a completely unfamiliar territory but after gaining some experience with phpunit and building out some simple tests, I feel more comfortable with php as a whole. </p>
                    <p><a class="btn btn-secondary" href="https://phpunit.de/" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img  src="{{ asset('images/database.png') }}" alt="Generic placeholder image" width="140" height="140">
                    <h2>Database Seeding</h2>
                    <p>Through this assignment, I also learned how to create a connection to a database using the Laravel framework and seed the database with test data using the $faker library.</p>
                    <p><a class="btn btn-secondary" href="https://laravel.com/docs/5.6/seeding" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Heroku. <span class="text-muted">Deployment.</span></h2>
                    <p class="lead"> Having working knowledge about the Heroku platform is a great skill to have and this assignment has helped me understand how the cloud service works and benefits that come from hosting your apps on this platform.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/heroku.png') }}" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">GitHub. <span class="text-muted">Version Control.</span></h2>
                    <p class="lead">Version Control is a "must-know" in the world of application development and this project and helped sharpen my ability to share my code with through the GitHub platform.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/github.png') }}" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">PhpStorm. <span class="text-muted">IDE.</span></h2>
                    <p class="lead">At this point in the class, I've become very fluent with the PhpStorm IDE and can easily navigate my way around it's vast feature set and supplemental resources for writing code and creating sites.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/phpstorm.png') }}" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
@endsection
