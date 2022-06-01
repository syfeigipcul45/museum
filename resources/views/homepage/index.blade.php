@extends('homepage.layouts.app')

@section('title')
Beranda
@endsection

@section('content')
<section id="center">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <h1> Lorem ipsum dolor sit <br> amet</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Read more <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Boost our Art & culture</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Read more <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="item slides active">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>tell something <br> about us</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Read more <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="box">
    <div class="col-sm-6 space_left">
        <div class="box_left">
            <ul class="nav nav_box">
                <li class="dropdown"><a href="blog.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a>
                    <ul class="dropdown-menu drop_box_1">
                        <li>
                            <div class="navbar-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="img/41.jpg" alt="Alternate Text" class="img-responsive">
                                        <p class="text-center small">
                                            <a href="blog.html">Sed Augue</a>
                                        </p>
                                    </div>
                                    <div class="col-sm-7">
                                        <span>Semper Porta</span>
                                        <p class="text-muted small">
                                            info@gmail.com</p>
                                        <div class="divider">
                                        </div>
                                        <a href="blog.html" class="btn btn-primary btn-sm active">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="blog.html" class="btn btn-default btn-sm">Change Passowrd</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="blog.html" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <div class="col-sm-6 space_right">
        <div class="box_right text-right">
            <ul class="nav nav_box_1">
                <li class="dropdown">
                    <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                    <ul class="dropdown-menu drop_box" style="padding: 15px;min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="form" role="form" method="post" action="http://bootsnipp-env.elasticbeanstalk.com/iframe/login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required="">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                            <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="middle">
    <div class="container">
        <div class="row">
            <div class="middle clearfix text-center">
                <h1>Best Wishes!</h1>
                <p>Vestibulum lacinia arcu eget nulla.Class aptent taciti ad litora torquent per conubia nostra<br> per inceptos himenaeos. Curabitursodales ligula in libero.</p>
                <h4>Learn our <a href="blog.html">headlines & classes</a> or <a href="blog.html">get connect</a> to read our Culture.</h4>
            </div>
        </div>
    </div>
</section>

<section id="about_middle">
    <div class="container">
        <div class="row">
            <div class="about_middle clearfix text-center">
                <h1> Sed cursus ante dapibus diam nulla quis sem at nibh elementum imperdiet. </h1>
            </div>
        </div>
    </div>
</section>

<section id="service_home">
    <div class="container">
        <div class="row">
            <div class="service_home clearfix">
                <div class="col-sm-4">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-group"></i></h2>
                        <h3>Vocation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam Nulla quis sem at nibh elementum imperdiet.</p>
                        <h4><a href="blog.html">Read More <i class="fa fa-arrow-right"></i></a></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-umbrella"></i></h2>
                        <h3>Foreign Events</h3>
                        <p> Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla taciti sociosqu ad litora.</p>
                        <h4><a href="blog.html">Read More <i class="fa fa-arrow-right"></i></a></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_home_1 text-center">
                        <h2><i class="fa fa-chain-broken"></i></h2>
                        <h3>Future Delegacy</h3>
                        <p> Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, ligula in libero.Sed dignissim lacinia nunc.</p>
                        <h4><a href="blog.html">Read More <i class="fa fa-arrow-right"></i></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about_home">
    <div class="container">
        <div class="row">
            <div class="about_home clearfix">
                <div class="col-sm-6">
                    <div class="about_home_1 clearfix">
                        <div class="col-sm-3 space_all">
                            <div class="about_home_1_left">
                                <h2><i class="fa fa-skyatlas"></i></h2>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="about_home_1_right">
                                <h4>OUR TOURS</h4>
                                <p> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about_home_1 clearfix">
                        <div class="col-sm-3 space_all">
                            <div class="about_home_1_left">
                                <h2><i class="fa fa-television"></i></h2>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="about_home_1_right">
                                <h4>FOREIGN TOURS</h4>
                                <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about_home_1 clearfix">
                        <div class="col-sm-3 space_all">
                            <div class="about_home_1_left">
                                <h2><i class="fa fa-user-plus"></i></h2>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="about_home_1_right">
                                <h4>COMMUNICATION</h4>
                                <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about_home_1 clearfix">
                        <div class="col-sm-3 space_all">
                            <div class="about_home_1_left">
                                <h2><i class="fa fa-suitcase "></i></h2>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="about_home_1_right">
                                <h4>COMPANY PROGRESS</h4>
                                <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery_home">
    <div class="container">
        <div class="row">
            <div class="gallery_home clearfix text-center">
                <h1>Boost Our Art & Culture</h1>
                <p>Class aptent taciti per conubia nostra, per inceptos himenaeos.</p>
            </div>
            <div class="gallery_home_1 clearfix">


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">All CATEGORY / </a></li>
                    <li><a data-toggle="tab" href="#menu1"> CATEGORY I / </a></li>
                    <li><a data-toggle="tab" href="#menu2">CATEGORY II / </a></li>
                    <li><a data-toggle="tab" href="#menu3">CATEGORY III </a></li>
                </ul>

                <div class="tab-content clearfix">
                    <div id="home" class="tab-pane fade in active clearfix">
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/7.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/8.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/9.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/10.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/11.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/12.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/7.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/8.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/9.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade clearfix">
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/13.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/14.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/15.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/16.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/17.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/18.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/13.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/14.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/15.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade clearfix">
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/19.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/20.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/21.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/22.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/23.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/24.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/19.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/20.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/21.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade clearfix">
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/25.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/26.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/27.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/28.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/29.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/30.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="click clearfix">
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/25.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/26.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-4 space_right">
                                <div class="grid clearfix">
                                    <figure class="effect-sadie">
                                        <img src="img/27.jpg" alt="img02" />
                                        <figcaption>
                                            <h2>Art <span>Culture</span></h2>
                                            <p>Curabitursodales ligula in libero sed<br> dignissim lacinia nunc.</p>
                                            <a href="blog.html">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="testimonial_home">
    <div class="container">
        <div class="row">
            <div class="testimonial_home clearfix">

                <div class="quote clearfix"><i class="fa fa-quote-left fa-4x"></i></div>
                <div class="carousel slide clearfix" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0" class=""></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1" class=""></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>

                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
                            </blockquote>
                            <div class="profile-circle"></div>
                            <h4 class="text-center">Elementum Imperdiet</h4>
                            <h6>Vestibulum lacinia arcu eget nulla</h6>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>

                            </blockquote>
                            <div class="profile-circle_1"></div>
                            <h4 class="text-center">Praesent Mauris</h4>
                            <h6>Vestibulum lacinia arcu eget nulla</h6>
                        </div>
                        <div class="item active">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
                            </blockquote>
                            <div class="profile-circle_2"></div>
                            <h4 class="text-center">Semper Porta</h4>
                            <h6>Vestibulum lacinia arcu eget nulla</h6>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="about_middle_center">
    <div class="container">
        <div class="row">
            <div class="about_middle_center clearfix text-center">
                <h1>Diam nulla quis sem at nibh elementum imperdiet.</h1>
            </div>
        </div>
    </div>
</section>

<section id="team_home">
    <div class="container">
        <div class="row">
            <div class="team_home clearfix">
                <h1 class="text-center">Our Team</h1>
                <div class="col-sm-3">
                    <div class="team_home_1 clearfix aos-init aos-animate text-center" data-aos="zoom-in-up">
                        <img src="img/35.jpg" width="100%" height="240px">
                        <div class="team_home_1_inner clearfix">
                            <h3>Integer Nec</h3>
                            <h4>DIRECTOR</h4>
                            <p>Sed cursus ante dapibus diam. Nulla quis sem at nibh imperdiet.<br> Duis sagittis ipsum. </p>
                            <ul class="social-network social-circle">
                                <li><a href="blog.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="blog.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="blog.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team_home_1 clearfix aos-init aos-animate text-center" data-aos="zoom-in-up">
                        <img src="img/36.jpg" width="100%" height="240px">
                        <div class="team_home_1_inner clearfix">
                            <h3>Ante Dapibus</h3>
                            <h4>OWNER</h4>
                            <p>Sed cursus ante dapibus diam. Nulla quis sem at nibh imperdiet.<br> Duis sagittis ipsum.</p>
                            <ul class="social-network social-circle">
                                <li><a href="blog.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="blog.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="blog.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team_home_1 clearfix aos-init aos-animate text-center" data-aos="zoom-in-up">
                        <img src="img/37.jpg" width="100%" height="240px">
                        <div class="team_home_1_inner clearfix">
                            <h3>Nibh Elementum</h3>
                            <h4>TEACHER</h4>
                            <p>Sed cursus ante dapibus diam. Nulla quis sem at nibh imperdiet.<br> Duis sagittis ipsum.</p>
                            <ul class="social-network social-circle">
                                <li><a href="blog.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="blog.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="blog.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team_home_1 clearfix aos-init aos-animate text-center" data-aos="zoom-in-up">
                        <img src="img/38.jpg" width="100%" height="240px">
                        <div class="team_home_1_inner clearfix">
                            <h3>Duis Sagittis</h3>
                            <h4>TEAM LEADER</h4>
                            <p>Sed cursus ante dapibus diam. Nulla quis sem at nibh imperdiet.<br> Duis sagittis ipsum.</p>
                            <ul class="social-network social-circle">
                                <li><a href="blog.html" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="blog.html" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="blog.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog_home">
    <div class="container">
        <div class="row">
            <div class="blog_home clearfix">
                <h1 class="text-center">Blog Post</h1>
                <h3 class="text-center">Nulla quis sem at nibh elementum imperdiet</h3>
                <div class="blog_home_inner_main clearfix">
                    <div class="blog_home_inner clearfix aos-init text-center aos-animate" data-aos="zoom-in-up">
                        <img src="img/39.jpg">
                    </div>
                    <div class="blog_home_inner_1 clearfix">
                        <h4>16 June, 2016 </h4>
                        <h2>Sed cursus ante dapibus diam. Nulla quis sem at nibh imperdiet.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum...</p>
                        <h4 class="heading_1"><a href="blog.html">Read More <i class="fa fa-arrow-right"></i></a></h4>
                    </div>
                </div>
                <div class="blog_home_inner_main clearfix">
                    <div class="blog_home_inner clearfix aos-init text-center aos-animate" data-aos="zoom-in-up">
                        <img src="img/40.jpg">
                    </div>
                    <div class="blog_home_inner_1 clearfix">
                        <h4>12 March, 2016 </h4>
                        <h2>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum...</p>
                        <h4 class="heading_1"><a href="blog.html">Read More <i class="fa fa-arrow-right"></i></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact_home">
    <div class="container">
        <div class="row">
            <div class="contact_home clearfix">
                <h1 class="text-center">Contact us</h1>
                <div class="contact_home_1 clearfix">
                    <div class="col-sm-5">
                        <div class="contact_home_1_left">
                            <p><a href="blog.html"><i class="fa fa-envelope"></i> info@gmail.com</a></p>
                            <p><a href="blog.html"><i class="fa fa-mobile"></i> +0 101 102 1234</a></p>
                            <p><a href="blog.html"><i class="fa fa-map-marker"></i> 0101 Integer Road Sagittis , AO1 49BS</a></p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="contact_home_1_right">
                            <input type="text" class="form-control form_1" placeholder="Name">
                            <input type="text" class="form-control form_1" placeholder="Email">
                            <textarea class="form-control form_2" placeholder="Message"></textarea>
                            <p class="text-center"><a href="blog.html">SUBMIT</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection