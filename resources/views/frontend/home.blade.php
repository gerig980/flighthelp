<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Kompensim per vonesa fluturimi">
    <meta name="keywords" content="Anullim fluturimi, Shtyrje fluturimi, Vonesa fluturimi,Kompensim fluturimi,kompani ajrore, bileta">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/form-style.css') }}" />
  <style>
      #testimonial_area {
	padding: 10% 0;
}
.box-area {
	padding: 30px;
	position: relative;
	display: block;
	background: #fff;
	color: #000;
	box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	margin: 40px 0;
}
.box-area h5 {
	font-size: 16px;
	font-weight: 700;
	color: #0a69ed;
	margin-top: 30px;
	margin-bottom: 5px;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.box-area span {
	color: #262626;
	display: block;
	font-size: 13px;
	margin: 0 0 10px;
	font-weight: 400;
}
.box-area .content {
	color: #262626;
}
.box-area .img-area {
	width: 90px;
	height: 90px;
	position: absolute;
	top: -40px;
	left: 0;
	bottom: 0;
	margin: 0 auto;
	right: 0;
	z-index: 1;
	border: 5px solid #fff;
	border-radius: 50%;
	box-shadow: 0 5px 4px rgba(0, 0, 0, 0.5);
}
.box-area .img-area img {
	width: 100%;
	height: auto;
	border-radius: 50%;
}
.socials {
	margin-top: 30px;
}
.socials i {
	margin: 0 10px;
	color: #0a69ed;
	font-size: 18px;
}
#testimonial_area .owl-nav {
	position: absolute;
	top: 50%;
	width: 100%;
}
#testimonial_area .owl-prev, #testimonial_area .owl-next {
	width: 40px;
	height: 40px;
	line-height: 40px;
	color: #0a69ed;
	border-radius: 50%;
	text-align: center;
	background: #fff;
	position: absolute;
}
#testimonial_area .owl-prev {
	left: -60px;
	top: -30px;
}
#testimonial_area .owl-next {
	right: -60px;
	top: -30px;
}
@media only screen and (max-width: 991px) {
	.owl-nav {
		display: none;
	}
}
@media only screen and (max-width: 767px) {
	.box-area {
		text-align: center;
	}
	.owl-nav {
		display: none;
	}
}

  </style>
    <title>SkyRights</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="logo" src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}" alt="logo"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">           
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="#whyus">{{__('home.why')}} </a></li>
            <li class="nav-item"><a class="nav-link" href="#about">{{__('home.about')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('ourfee') }}">{{__('home.ourfee')}}</a></li>
            <div class="dropdown ms-1 topbar-head-dropdown header-item">
              <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if(app()->getLocale() == 'al')
                 AL <span class="fi fi-al"></span> 
                 
                  @else
                 EN <span class="fi fi-gb"></span>
                  @endif
              </button>
              <div class="dropdown-menu dropdown-menu-end">

                  <!-- item-->
                  @if(app()->getLocale() == 'en')
                  <a href="locale/en" class="dropdown-item notify-item language py-2 selected" data-lang="en" title="English">
                      <span class="fi fi-gb "></span> 
                      <span class="align-middle">English</span>
                  </a>
                  <a href="locale/al" class="dropdown-item notify-item language py-2 " data-lang="al" title="Albanian">
                      <span class="fi fi-al "></span> 
                      <span class="align-middle">Albanian</span>
                  </a>
                  @elseif(app()->getLocale() == 'al')
                  <a href="locale/en" class="dropdown-item notify-item language py-2 " data-lang="en" title="English">
                      <span class="fi fi-gb "></span> 
                      <span class="align-middle">English</span>
                  </a>
                  <a href="locale/al" class="dropdown-item notify-item language py-2 selected" data-lang="al" title="Albanian">
                      <span class="fi fi-al "></span> 
                      <span class="align-middle">Albanian</span>
                  </a>
                  @endif
              </div>
          </div>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="head-title">
             {{__('home.title') }} 
            </h2>
            <p class="head-desc">
              {!! __('home.desc_title') !!} 
            </p>
          </div>
          <form action="{{ route('applications') }}" class="inline">
            <div class="form-departure">
              <div class="input-icons">
              <i class="fa-solid fa-plane-departure icon"></i>
              <input
                id="departure-input"
                type="text"
                name="departure"
                class="form-control input-field typeahead "
                placeholder="{{__('home.departure')}}"
                style="padding-left: 3rem;"
              />
            </div>
            <div class="input-icons">
              <i class="fa-solid fa-plane-arrival icon"></i>
              <input
                id="destination-input"
                type="text"
                name="destination"
                class="form-control input-field"
                placeholder="{{__('home.destination')}}"
                style="padding-left: 3rem;"
              />
            </div>
              <button style="height:50px;" class="btn btn-success" type="submit">{{__('home.claim')}}</button>
            </div>
         </form>
          <div class="checks">
            <i class="fa-solid fa-check" style="color: #0080ff;"></i> <span>{{__('home.all airlines')}}</span>
            <i class="fa-solid fa-check" style="color: #0080ff;"></i> <span>{{__('home.all countries')}}</span>
            <i class="fa-solid fa-check" style="color: #0080ff;"></i> <span>{{__('home.no win')}}</span>
          </div>
          <div class="col-lg-4">
           
          </div>
        </div>
        <div class="row">
          <div class="wrapper-regulations">
            <h6>{!! __('home.protect')!!}</h6>
            <h6>{{__('home.rules')}}</h6>
            <h6>{{__('home.regulation')}}</h6>
            <h6>{{__('home.montreal')}}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="section-2" id="whyus">
      <div class="container">
        <div class="row justify-content-center">
          <h2 class="title-card">{{__('home.why choose')}}</h2>
          <div class="col-lg-5 col-md-6 d-desktop">
            <div class="card card-1" >
              <div class="card-body">
                <h5 class="card-title">{{__('home.claim yourself')}}</h5>
                <hr>
                <div class="row">
                  <div class="col-lg-12">
                    <h6 class="card-subtitle mb-2"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i> {{__('home.stressful')}}</h6>
                    <p class="card-text">
                      {{__('home.stressful_desc')}}
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <h6 class="card-subtitle mb-2 ">
                        <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                        {{__('home.lots of papper')}}
                    </h6>
                    <p class="card-text">
                      {{__('home.lots of papper_desc')}}
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <h6 class="card-subtitle mb-2 ">
                        <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                        {{__('home.time consuming')}}
                    </h6>
                    <p class="card-text">
                      {{__('home.time consuming_desc')}}
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                      {{__('home.risky')}}</h6>
                    <p class="card-text">
                      {{__('home.risky_desc')}}
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <h6 class="card-subtitle mb-2 ">
                        <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                        {{__('home.unresponsive')}}
                    </h6>
                    <p class="card-text">
                      {{__('home.unresponsive_desc')}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-5 col-md-6 d-desktop">
            <div class="card card-2" >
                <div class="card-body">
                  <h5 class="card-title">{{__('home.use skyrights')}}</h5>
                  <hr>
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('home.easy and hassle')}}</h6>
                      <p class="card-text">
                        {{__('home.easy_desc')}}
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <h6 class="card-subtitle mb-2 ">
                        <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('home.we take care')}}
                      </h6>
                      <p class="card-text">
                        {{__('home.take care_desc')}}
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <h6 class="card-subtitle mb-2 ">
                        <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('home.save time')}}
                      </h6>
                      <p class="card-text">
                        {{__('home.save time_desc')}}
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('home.no win')}}</h6>
                      <p class="card-text">
                        {{__('home.no win_desc')}}
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('home.regular updates')}}
                      </h6>
                      <p class="card-text">
                        {{__('home.regular_desc')}}
                      </p>
                    </div>
                    <a  href="{{ route('applications') }}"><button class="btn btn-primary" style="width: 100%">{{__('home.claim')}}</button></a>
                  </div>
                  
                </div>
              </div>
          </div> 
          <div class="container d-mobile">
            <h5 class="card-title">{{__('home.claim yourself')}}</h5>
            <ul class="cards">
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i> {{__('home.stressful')}}</h6>
                  <p class="card-text">
                    {{__('home.stressful_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 ">
                      <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                      {{__('home.lots of papper')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.lots of papper_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 ">
                      <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                      {{__('home.time consuming')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.time consuming_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                    {{__('home.risky')}}</h6>
                  <p class="card-text">
                    {{__('home.risky_desc')}}
                  </p>
                </div>
              </li>

              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 ">
                      <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                      {{__('home.unresponsive')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.unresponsive_desc')}}
                  </p>
                </div>
              </li>
          
            </ul>
          </div>
          <div class="container d-mobile">
            <h5 class="card-title">{{__('home.use skyrights')}}</h5>
            <ul class="cards">
              <li class="card4">
                <div class="col-lg-12 col-md-12">
                  <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                    {{__('home.easy and hassle')}}</h6>
                  <p class="card-text">
                    {{__('home.easy_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 ">
                    <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                    {{__('home.we take care')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.take care_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 ">
                    <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                    {{__('home.save time')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.save time_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                    {{__('home.no win')}}</h6></h6>
                  <p class="card-text">
                    {{__('home.no win_desc')}}
                  </p>
                </div>
              </li>
              <li class="card4">
                <div class="col-lg-12">
                  <h6 class="card-subtitle mb-2 "><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                    {{__('home.regular updates')}}
                  </h6>
                  <p class="card-text">
                    {{__('home.regular_desc')}}
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div class="row section2-second-row">
            <div class="wrapp-head">
                <span>{{__('home.why us')}}</span>
                <h2>{{__('home.solve problem')}}</h2>
                <p>{{__('home.work for many')}}</p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" >
                    <div class="card-body">
                        <i class="fa-solid fa-plane-circle-xmark" style="color: #0080ff;"></i>
                      <h5 class="card-title">{{__('home.cancelled title')}}</h5>
                      <p class="card-text">{{__('home.cancelled desc')}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card" >
                    <div class="card-body">
                        <i class="fa-solid fa-plane-circle-exclamation" style="color: #0080ff;"></i>
                      <h5 class="card-title">{{__('home.delayed title')}}</h5>
                      <p class="card-text">{{__('home.delayed desc')}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card" >
                    <div class="card-body">
                        <i class="fa-solid fa-plane-slash" style="color: #0080ff;"></i>
                      <h5 class="card-title">{{__('home.lost connection')}}</h5>
                      <p class="card-text">{{__('home.lost connection desc')}}</p>
                    </div>
                </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card" >
                    <div class="card-body">
                        <i class="fa-solid fa-gavel" style="color: #0080ff;"></i>
                      <h5 class="card-title">{{__('home.airlines unresposive')}}</h5>
                      <p class="card-text">{{__('home.airlines unresponsive_desc')}}</p>
                    </div>
                </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/images/skyrights/No-win-no-fee-formal-desktop.webp') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-7 wrapp-head">
                    <span>{{__('home.no win')}}</span>
                    <h2>{{__('home.our fee')}}</h2>
                    <p class="wrapp-desc">{{__('home.our fee_desc')}}</p>
                    <button class="btn btn-primary">{{__('home.claim')}}</button>
                </div>
                <hr>
                <!--<div class="row wrapp-body" id="about">-->
                <!--    <div class="col-lg-6">-->
                <!--        <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis tempora nisi fugit nemo illum nostrum dolor, minima maxime rerum nobis?</h3>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6">-->
                <!--        <div class="row">-->
                <!--            <div class="col-lg-6">-->
                <!--                <div>-->
                <!--                    <h5>1.5 M</h5>-->
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, dolore..</p>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-6">-->
                <!--                <div>-->
                <!--                    <h5>350+</h5>-->
                <!--                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, consequatur?.</p>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-6">-->
                <!--                <div>-->
                <!--                    <h5>35+</h5>-->
                <!--                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, nesciunt?.</p>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-lg-6">-->
                <!--                <div>-->
                <!--                    <h5>18</h5>-->
                <!--                    <p>Lorem ipsum dolor sit amet..</p>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <section id="testimonial_area" class="section_padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
								<div class="box-area">	
									<div class="img-area">
										<img src="img/1.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="img/2.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="img/3.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="img/4.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="img/5.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									   <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="img/6.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									    <i class="fa-solid fa-star" style="color: #dae31c;"></i>
									</h6>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</section>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <img src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}" class="logo-footer">
                            <p class="footer-desc">SkyRights is a part of the Association of Passenger Rights Advocates (APRA) whose mission is to promote and protect passengers’ rights.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        {{-- <h6>Know Your Rights</h6>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet.</a></li>

                        </ul> --}}
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <h6>OUR COMPANY</h6>
                        <ul>
                            <li><a href="#about">About us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <h6>OTHER</h6>
                        <ul>
                            <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="row text-center">
                  <p class="text-center development-footer"> Copyright &copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> SkyRights.al</a></p>
               </div>
            </footer>
        </div>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
        $(".testmonial_slider_area").owlCarousel({
				autoplay: true,
				slideSpeed:1000,
				items : 3,
				loop: true,
				nav:true,
				navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
				margin: 30,
				dots: true,
				responsive:{
					320:{
						items:1
					},
					767:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}
				
			});
    </script>
  <script type="text/javascript">


  var path = "{{ route('airport_names') }}";

  $('#departure-input').typeahead({
    source: function (query, process) {
        return $.get(path, {
            query: query
        })
        .done(function (data) {
            return process(data);
        })
        .fail(function (error) {
            console.error(error);
        });
    },
    displayText: function (item) {
        return   item.airport_name +  `  (${item.airport_code})`;
    }
  });

  $('#destination-input').typeahead({
    source: function (query, process) {
        return $.get(path, {
            query: query
        })
        .done(function (data) {
            return process(data);
        })
        .fail(function (error) {
            console.error(error);
        });
    },
    displayText: function (item) {
      return   item.airport_name +  `  (${item.airport_code})`;
    }
  });


  </script>

  </body>
</html>
