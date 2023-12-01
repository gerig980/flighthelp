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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/form-style.css') }}" />
    <title>Our Fees</title>
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
    <div class="section-fee">
        <div class="container">
          <div class="row justify-content-center">
            <h2 class="title-card">{{__('home.why choose')}}</h2>
            <div class="col-lg-4 col-md-4 ">
              <div class="card card-2" >
                <div class="card-body">
                  <h5 class="card-title">{{__('home.claim yourself')}}</h5>
                  <hr>
                  <div class="row">
                    <div class="col-lg-12">
                      <p class="card-text"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #008000;"></i>{{__('fee.free')}}</p>
                      
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                          <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                          {{__('fee.time')}}
                        </p>
                      
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                          <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                          {{__('fee.deal')}}
                        </p>
                     
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                            {{__('fee.learn')}}</p>
                      
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                          <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                          {{__('fee.time-waste')}}
                        </p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 ">
            <div class="card card-1" >
                <div class="card-body">
                    <span class="fee-span">{{__('fee.hassle')}}</span>
                <h5 class="card-title">{{__('home.use skyrights')}}</h5>
                <hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                            {{__('fee.affordable')}}</p>
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                        <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('fee.handle-claim')}}
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                        <i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                        {{__('fee.specialists')}}
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                            {{__('fee.risk-free')}}</p>
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                            {{__('fee.cover-legal')}}
                        </p>
                    </div>
                </div>
                <a  href="{{ route('applications') }}"><button class="btn btn-primary" style="width: 100%">{{__('home.claim')}}</button></a>
                </div>
            </div>
            </div> 
            <div class="col-lg-4 col-md-4 ">
                <div class="card card-2" >
                <div class="card-body">
                    <h5 class="card-title">{{__('fee.lawyer')}}</h5>
                    <hr>
                    <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-check" style="color: #008000;"></i>
                            {{__('fee.handles-lawyer')}}</p>
                        
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                        <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                        {{__('fee.costly-lawyer')}}
                        </p>
                        
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text">
                        <i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                        {{__('fee.most-lawyer')}}
                        </p>
                        
                    </div>
                    <div class="col-lg-12">
                        <p class="card-text"><i class="fa-sharp fa-solid fa-circle-exclamation" style="color: #ff9e3e;"></i>
                            {{__('fee.still-fee')}}</p>
                    </div>
                    
                    
                    </div>
                    
                </div>
                </div>
            </div> 
          </div>
         <div class="row second-fee-row">
            <h4 class="fee-head">{{__('fee.our-fee')}}</h4>
            <div class="col-lg-8 fee-desc">
                <h5><span>{{__('fee.standart')}}</span> {{__('fee.standart-desc')}}</h5>
                <h5><span>{{__('fee.legal')}}</span>  {{__('fee.legal-desc')}}</h5>
                <p class="more-information">{!!__('fee.more-info',['termsRoute' => route('terms'), 'privacyRoute' => route('privacy')])!!}
                </p>
            </div>
         </div>
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
                            <li><a href="{{ route('home') }}#about">About us</a></li>
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

  </body>