@extends('main')

@section('content')

<div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/harvard_fd.jpg" class="img-responsive" alt="">
          </div>

          <div class="item">
            <img src="img/princeton_fd.jpg" class="img-responsive" alt="">
          </div>
          
          <div class="item">
            <img src="img/northcam.jpg" class="img-responsive" alt="">
          </div>
          
          <div class="item">
            <img src="img/whartonbldg.jpg" class="img-responsive" alt="">
          </div>
          
          <div class="item">
            <img src="img/montinola1.jpg" class="img-responsive" alt="">
          </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  <!--/#slider-->

<div class="about">
    <div class="container">
      <div class="text-center">
        <h2> About Us </h2>
        <div class="col-md-10 col-md-offset-1">
          <p> Martha’s property management is under Goshen Land Property Management Company that assists unit owners and investors in establishing a reliable operation as a property management company. Martha serves property owners by seeking tenants for their units and properties and get a good return on their investments. With the help of Martha, unit/property owners can conveniently earn passive income without the burden and headache of managing their own properties. </p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="services">
    <div class="container">
      <div class="text-center">
        <h2><strong>OUR SERVICES</strong></h2>
      </div>
        <center>
          <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i class="fa fa-shield" style="color:black"></i>
            <h3>24 hours security</h3>
            <p>Martha's Rooms ensures the security of the guest by having a 24 hour CCTV camera's and security guard on duty.</p>
          </div>
          <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-rss" style="color:black" ></i>
            <h3>Internet and Cable Ready</h3>
            <p>Martha's Rooms provide a high speed wireless internet connectivity and a cable ready for a flat screen TV for guests entertainment.</p>
          </div>
          <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <i class="fa fa-building-o" style="color:black"></i>
            <h3>Fully Furnished with Mini Kitchen</h3>
            <p>Martha's Rooms offers a fully furnished unit with a Mini Kitchen to provide a convenient and relaxing stay for the guests.</p>
          </div>
          <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-road" style="color:black"></i>
            <h3>Parking Spaces</h3>
            <p>Parking Spaces are available for guest to park their vehicles.</p>
          </div>
        </center>
    </div>
  </div>


@stop

