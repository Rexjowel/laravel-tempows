@extends('master.html')


@section('title','home page')
    
@section('services')
    
<div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Our Service</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-picture-o"></i></div>
            <div class="service-text">
              <h3>Design</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa fa-code"></i></div>
            <div class="service-text">
              <h3>Development</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-diamond"></i></div>
            <div class="service-text">
              <h3>Marketing</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('portfolio')
    
<div id="portfolio">
    <div class="container">
      <div class="page-title text-center">
        <h1>Our Privious Works</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
        <hr class="pg-titl-bdr-btm"></hr>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-logo">Logo</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app1.jpg" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web2.jpg" alt="">
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app3.jpg" alt="">
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card1.jpg" alt="">
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card2.jpg" alt="">
            <div class="details">
              <h4>Card 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web3.jpg" alt="">
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card3.jpg" alt="">
            <div class="details">
              <h4>Card 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app2.jpg" alt="">
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo1.jpg" alt="">
            <div class="details">
              <h4>Logo 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo3.jpg" alt="">
            <div class="details">
              <h4>Logo 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web1.jpg" alt="">
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo2.jpg" alt="">
            <div class="details">
              <h4>Logo 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('team')
    

    <div id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Meet Our Team</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="autoplay">
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent1.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Haris Brown</h3>
                <p class="marb-20">Sr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent2.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Emmy Brown</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent3.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Iain Dante</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent4.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Kate Haris</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection