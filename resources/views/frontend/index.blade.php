<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/form-style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        
     
    <title>SkyRights Aplikim</title>
    <style>
        h1 {
            text-align: center;
        }

        h2 {
            margin: 0;
        }

        #multi-step-form-container {
            margin-top: 5rem;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .pl-0 {
            padding-left: 0;
        }

        .button {
            padding: 0.7rem 1.5rem;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            border: 1px solid #0e9594;
            background-color: #0e9594;
        }

        .mt-3 {
            margin-top: 2rem;
        }

        .d-none {
            display: none;
        }

        .form-step {
            padding: 3rem;
        }

        .font-normal {
            font-weight: normal;
        }

        ul.form-stepper {
            counter-reset: section;
            margin-bottom: 3rem;
        }

        ul.form-stepper .form-stepper-circle {
            position: relative;
        }

        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.form-stepper>li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }

        .form-stepper-horizontal>li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }

        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 1px;
            content: "";
            top: 32%;
        }

        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }

        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #4da3ff;
        }

        .form-stepper-horizontal li:last-child {
            flex: unset;
        }

        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }

        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #4361ee !important;
            color: #fff;
        }

        .form-stepper .form-stepper-active .label {
            color: #4361ee !important;
        }

        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #4361ee !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #0e9594 !important;
            color: #fff;
        }

        .form-stepper .form-stepper-completed .label {
            color: #0e9594 !important;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #0e9594 !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }

        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }

        .form-stepper .label {
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .form-stepper a {
            cursor: default;
        }

        #sig canvas{
            width: 100%;
        }
        .kbw-signature {
        	display: inline-block;
        	border: 1px solid #a0a0a0;
        	-ms-touch-action: none;
        }
        .kbw-signature-disabled {
        	opacity: 0.35;
        }
        
        .client-sign-info{
            margin-top:1rem;
            font-style:italic;
        }
    
    </style>
</head>

<body>
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-0 aside-wrapper">
                <div class="logo-form">
                    <a href="/">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="bottom-image">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/images/skyrights/multishape.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="logo-mobile">
                    <a href="/">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}" alt="logo">
                    </a>
                </div>
                <div id="multi-step-form-container">
                    <!-- Step Wise Form Content -->
                    <form id="userAccountSetupForm" action="{{ route('application.store') }}"
                        name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
                        @csrf
                        <!-- Step 1 Content -->
                        <section id="step-1" class="form-step">
                            <!-- Step 1 input fields -->
                            <div class="mt-3 form-style">
                                <div class="row">
                                    <h5 class="form-title">
                                        {{__('form.first_quest')}}
                                    </h5>
                                    <div class="col-lg-6">
                                        <label for="departing" class="form-label">{{__('home.departure')}}</label>
                                        <input id="departing" type="text" name="departing" class="form-control"
                                            placeholder="e.g Tirana "  value="{{ $departure ?? old('departure') }}"  required/>                                           
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="destination" class="form-label">{{__('home.destination')}}</label>
                                        <input id="destination" type="text" name="destination" class="form-control"
                                            placeholder="e.g Malpensa" value="{{ $destination ?? old('destination') }}" required/>                                            
                                    </div>
                                    
                                </div>
                            </div>
                            <fieldset class="form-style">
                                <div class="row">
                                    <legend class="form-title">{{__('form.second_quest')}}</legend>
                                    <div class="col-lg-6">
                                        <div class="box">
                                            <input type="radio" name="connecting" id="connecting-1" value="0" onclick='handleClickConn1(this);' >                                                                        
                                            <label for="connecting-1" class="connecting-1">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.no')}}</div>
                                            </label>                                                                 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="box">                               
                                            <input type="radio" name="connecting" id="connecting-2" value="1" onclick='handleClickConn2(this);'>                                                                           
                                            <label for="connecting-2" class="connecting-2">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.yes')}}</div>
                                            </label>                              
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-style d-none" id="city_airport">
                                <div class="row">
                                    <div class="city_airport">
                                        <h5 class="form-title">{{__('form.where change')}}</h5>
                                        <div class="col-lg-6">
                                            <label for="airport_change">{{__('form.city_airport')}}</label>
                                            <input type="text" name="airport_change[]" class="form-control"
                                                placeholder="e.g Tirana or TIA" />
                                        </div>
                                        <div id="container"></div>
                                        <a id="addButton">+{{__('form.add new airport')}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button id="button" class="button btn-navigate-form-step" type="button" step_number="2" >
                                    {{__('form.continue')}}
                                </button>
                            </div>
                        </section>
                        <section id="step-2" class="form-step d-none">
                            <div class="mt-3 form-style">
                                <div class="row">
                                    <h5 class="form-title">{{__('form.departure date')}}</h5>
                                    <div class="col-lg-8">
                                        <label for="date" class="form-label">{{__('form.date')}}</label>
                                        <input id="date" max="{{date("Y-m-d")}}" type="date" name="date" class="form-control" />
                                    </div>
                                    <div class="mt-3">
                                        <button id="button2" class="button btn-navigate-form-step" type="button" step_number="3">
                                            {{__('form.continue')}}
                                        </button>
                                    </div>
                                </div>
                        </section>
                        <!-- Step 2 Content, default hidden on page load. -->
                        <section id="step-3" class="form-step d-none">
                            <!-- Step 2 input fields -->
                            <div class="mt-3 form-style">
                                <h5 class="form-title">{{__('form.third_quest')}}</h5>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="airline_name" class="form-label">{{__('form.airline name')}}</label>
                                        <input id="airline_name" type="text" name="airline_name" class="form-control"
                                            placeholder="e.g WizzAir" />                                       
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-3 mt-3">
                                        <label for="flight_number" class="form-label">{{__('form.flight number')}}</label>
                                        <input id="flight_number" type="text" name="flight_number" class="form-control"
                                            placeholder="W1 5555" />
                                    </div>
                                    <div class="col-lg-5 mt-3">
                                        <label for="date" class="form-label">{{__('form.flight date')}}</label>
                                        <input id="date_flight" type="date" name="date" max="{{date("Y-m-d")}}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">

                                <button id="button3" class="button btn-navigate-form-step" type="button" step_number="4">
                                    {{__('form.continue')}}
                                </button>
                            </div>
                        </section>
                        <!-- Step 3 Content, default hidden on page load. -->
                        <section id="step-4" class="form-step d-none">
                            <!-- Step 3 input fields -->
                            <div class="mt-3">
                                <div class="row form-style">
                                    <h5 class="form-title">{{__('form.fourth_quest')}}</h5>
                                    <div class="col-lg-6">
                                        <div class="box">
                                            <input type="radio" name="flight_disruption" id="flight_disruption-1" value="0" onclick="handleFlight(this)">
                                            <input type="radio" name="flight_disruption" id="flight_disruption-2" value="1" onclick="handleFlight(this)">                                 
                                            <input type="radio" name="flight_disruption" id="flight_disruption-3" value="2" onclick="handleFlight(this)">                                 
                                            <label for="flight_disruption-1" class="flight_disruption-1">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.flight delayed')}}</div>
                                            </label>
                                            <label for="flight_disruption-2" class="flight_disruption-2">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.flight cancelled')}}</div>
                                            </label>     
                                            <label for="flight_disruption-3" class="flight_disruption-3">
                                                <div class="select-dots"></div>
                                                <div class="text">{{__('form.denied board')}}</div>
                                              </label>                              
                                          </div>                    
                                    </div>
                                </div>
                                    
                                <div class="row form-style d-none" id="delayed">
                                        <h5 class="form-title">{{__('form.fifth_quest')}}</h5>
                                    
                                    <div class="col-lg-6">
                                        <div class="box">
                                            <input type="radio" name="delayed_hours" id="delayed_hours-1" value="0" onclick="handleDelayed(this)">
                                            <input type="radio" name="delayed_hours" id="delayed_hours-2" value="1" onclick="handleDelayed(this)">                                 
                                            <input type="radio" name="delayed_hours" id="delayed_hours-3" value="2" onclick="handleDelayed(this)">                                 
                                            <input type="radio" name="delayed_hours" id="delayed_hours-4" value="3" onclick="handleDelayed(this)">                                 
                                            <input type="radio" name="delayed_hours" id="delayed_hours-5" value="4" onclick="handleDelayed(this)">                                 
                                            <input type="radio" name="delayed_hours" id="delayed_hours-6" value="5" onclick="handleDelayed(this)">                                 
                                            <label for="delayed_hours-1" class="delayed_hours-1">
                                              <div class="select-dots"></div>
                                              <div class="text">0-1 {{__('form.hours')}}</div>
                                            </label>
                                            <label for="delayed_hours-2" class="delayed_hours-2">
                                              <div class="select-dots"></div>
                                              <div class="text">1-2 {{__('form.hours')}} </div>
                                            </label>    
                                            <label for="delayed_hours-3" class="delayed_hours-3">
                                                <div class="select-dots"></div>
                                                <div class="text">2-3 {{__('form.hours')}}</div>
                                              </label>    
                                              <label for="delayed_hours-4" class="delayed_hours-4">
                                                <div class="select-dots"></div>
                                                <div class="text">3-4 {{__('form.hours')}}</div>
                                              </label>    
                                              <label for="delayed_hours-5" class="delayed_hours-5">
                                                <div class="select-dots"></div>
                                                <div class="text">4+ {{__('form.hours')}}</div>
                                              </label>    
                                              <label for="delayed_hours-6" class="delayed_hours-6">
                                                <div class="select-dots"></div>
                                                <div class="text">{{__('form.not flight')}}</div>
                                              </label>                              
                                          </div>
                                        
                                    </div>
                                </div>  

                                <div class="row form-style d-none" id="cancell_notification">
                                    <h5 class="form-title">{{__('form.sixth_quest')}}</h5>
                                    <div class="col-lg-6">
                                    <div class="box">
                                        <input type="radio" name="cancellation_notification" id="cancellation_notification-1" value="0" onclick="handleNotification(this)">
                                        <input type="radio" name="cancellation_notification" id="cancellation_notification-2" value="1" onclick="handleNotification(this)">                                 
                                        <label for="cancellation_notification-1" class="cancellation_notification-1">
                                          <div class="select-dots"></div>
                                          <div class="text">{{__('form.less than')}}</div>
                                        </label>
                                        <label for="cancellation_notification-2" class="cancellation_notification-2">
                                          <div class="select-dots"></div>
                                          <div class="text">{{__('form.more than')}}</div>
                                        </label>                              
                                      </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row form-style d-none" id="caused_problem">
                                <h5 class="form-title">{{__('form.seventh_quest')}}</h5>
                            <div class="col-lg-6">
                                <select id="caused" name="caused" class="form-control" required>
                                    <option disabled selected>{{__('form.select reason')}}</option>
                                    <option value="0">{{__('form.dont remember')}}</option>
                                    <option value="1">{{__('form.technical problem')}}</option>
                                    <option value="2">{{__('form.bad weather')}}</option>
                                    <option value="3">{{__('form.distrubed by other')}}</option>
                                    <option value="4">{{__('form.airport problem')}}</option>
                                    <option value="5">{{__('form.strike')}}</option>
                                    <option value="6">{{__('form.no reason')}}</option>
                                    <option value="7">{{__('form.major')}}</option>
                                </select>
                            </div>
                        </div>
                            <div class="mt-3">

                                <button id="button4" class="button btn-navigate-form-step" type="button" step_number="5">
                                    {{__('form.continue')}}
                                </button>
                            </div>
                        </section>

                        <section id="step-5" class="form-step d-none">
 
                            <div class="mt-3 ">
                                <div class="row form-style">
                                    <h5 class="form-title">{{__('form.eight_quest')}}</h5>
                                    <div class="col-lg-8">
                                        <label for="name" class="form-label">{{__('form.name')}}</label>
                                        <input id="name" type="text" name="name" class="form-control" />
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                        <input id="surname" type="text" name="surname" class="form-control" />
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="text" name="email" class="form-control" placeholder="example@email.com" />
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="passport" class="form-label">Passport Image</label>
                                        <input id="passport_image" type="file" name="passport_image" class="form-control" />
                                    </div>
                                    
                                <div class="row form-style">
                                    <div class="col-lg-6">
                                        <input type="checkbox" id="agree_terms" name="agree_terms" value="1" />
                                    <label for="agree_terms">{{__('form.accept terms')}}</label><br />
                                    <input type="checkbox" id="agree_promotions" name="agree_promotions" value="1" />
                                    <label for="agree_promotions">
                                        {{__('form.accept promotion')}}</label><br />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">

                                <button id="button5" class="button btn-navigate-form-step" type="button" step_number="6">
                                    {{__('form.continue')}}
                                </button>
                               
                            </div>
                            </div>
                        </section>
                        <section id="step-6" class="form-step d-none">
                            <div class="mt-3 ">
                                <div class="row form-style">
                                    <h5 class="form-title">{{__('form.nine_quest')}}
                                    </h5>
                                    <div class="col-lg-8">
                                        <div class="box">
                                            <input type="radio" name="traveling_alone" id="traveling_alone-1" value="0" onclick="handleTravelingAlone(this)">
                                            <input type="radio" name="traveling_alone" id="traveling_alone-2" value="1" onclick="handleTravelingNotAlone(this)">                                 
                                            <label for="traveling_alone-1" class="traveling_alone-1">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.travel alone')}}</div>
                                            </label>
                                            <label for="traveling_alone-2" class="traveling_alone-2">
                                              <div class="select-dots"></div>
                                              <div class="text">{{__('form.not alone')}}</div>
                                            </label>                              
                                          </div>
                                    </div>
                                </div>
                             
                                    <div class="row form-style d-none" id="other_passenger">
                                    <h5 class="form-title">{{__('form.other person')}}</h5>
                                    <input type="text" class="d-none" name="id[]" value="1" />
                                        <div class="col-lg-6">
                                            <input type="checkbox" id="other_underage" name="underage[]" value="1" />
                                            <label for="underage">{{__('form.under age')}}</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="name" class="form-label">{{__('form.name')}} </label>
                                            <input type="text" id="other_name" name="other_name[]" class="form-control" />
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                            <input type="text" id="other_surname" name="other_surname[]" class="form-control" />
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="email" class="form-label">Email </label>
                                            <input type="text" id="other_email" name="other_email[]" class="form-control" />
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="passport" class="form-label">Passport Image </label>
                                            <input type="file" id="other_images" name="other_images[]" class="form-control" />
                                        </div>
                                        <div class="row mt-3">
                                            <span style="font-weight:bold;">Full Name and Signature</span>
                                         <div class="col-lg-6 col-sm-12">
                
                                            <label class="" for="">{{__('form.firm accept')}}</label>
                                            <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div id="sig1" >
                                                
                                            </div>
                                            
                                            <br/>
                                            <div class="mt-3">
                                                <button id="clear1" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                
                                            </div>
                                            <textarea id="signature641" name="other_signatures[]" style="display: none"></textarea>
                                        </div>
                                        <a class="d-none" id="addDivButton1">+ {{__('form.add person')}}</a>
                                    </div>
                                    </div>
                                    <div class="row form-style d-none" id="other_passenger2">
                                        <h5 class="form-title">{{__('form.other person')}}</h5>
                                       <input type="text" class="d-none" name="id[]" value="2" />
                                            <div class="col-lg-6">
                                                <input type="checkbox" id="other_underage2" name="underage[]" value="1" />
                                                <label for="underage">{{__('form.under age')}}</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="name" class="form-label">{{__('form.name')}} </label>
                                                <input type="text" id="other_name2" name="other_name[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                <input type="text" id="other_surname2" name="other_surname[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="text" id="other_email2" name="other_email[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="passport" class="form-label">Passport Image </label>
                                                <input type="file" id="other_images2" name="other_images[]" class="form-control" />
                                            </div>
                                            <div class="row mt-3">
                                                <span style="font-weight:bold;">Full Name and Signature</span>
                                             <div class="col-lg-6 col-sm-12">
                    
                                                <label class="" for="">{{__('form.firm accept')}}</label>
                                                <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div id="sig_2" ></div>
                        
                                                <br/>
                                                <div class="mt-3">
                                                    <button id="clear_2" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                </div>
                                                <textarea id="signature64_2" name="other_signatures[]" style="display: none"></textarea>
                                            </div>
                                            <a  id="addDivButton2">+ {{__('form.add person')}}</a>
                                            </div>
                                            
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger3">
                                        <h5 class="form-title">{{__('form.other person')}}</h5>
                                       <input type="text" class="d-none" name="id[]" value="3" />
                                            <div class="col-lg-6">
                                                <input type="checkbox" id="other_underage3" name="underage[]" value="1" />
                                                <label for="underage">{{__('form.under age')}}</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="name" class="form-label">{{__('form.name')}} </label>
                                                <input type="text" id="other_name3" name="other_name[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                <input type="text" id="other_surname3" name="other_surname[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="text" id="other_email3" name="other_email[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="passport" class="form-label">Passport Image </label>
                                                <input type="file" id="other_images3" name="other_images[]" class="form-control" />
                                            </div>
                                            <div class="row mt-3">
                                                <span style="font-weight:bold;">Full Name and Signature</span>
                                             <div class="col-lg-6 col-sm-12">
                    
                                                <label class="" for="">{{__('form.firm accept')}}</label>
                                                <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div id="sig_3" ></div>
                        
                                                <br/>
                                                <div class="mt-3">
                                                    <button id="clear_3" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                </div>
                                                <textarea id="signature64_3" name="other_signatures[]" style="display: none"></textarea>
                                            </div>
                                            <a  id="addDivButton3">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger4">
                                        <h5 class="form-title">{{__('form.other person')}}</h5>
                                       <input type="text" class="d-none" name="id[]" value="4" />
                                            <div class="col-lg-6">
                                                <input type="checkbox" id="other_underage4" name="underage[]" value="1" />
                                                <label for="underage">{{__('form.under age')}}</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="name" class="form-label">{{__('form.name')}} </label>
                                                <input type="text" id="other_name4" name="other_name[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                <input type="text" id="other_surname4" name="other_surname[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="text" id="other_email4" name="other_email[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="passport" class="form-label">Passport Image </label>
                                                <input type="file" id="other_images4" name="other_images[]" class="form-control" />
                                            </div>
                                            <div class="row mt-3">
                                                <span style="font-weight:bold;">Full Name and Signature</span>
                                             <div class="col-lg-6 col-sm-12">
                    
                                                <label class="" for="">{{__('form.firm accept')}}</label>
                                                <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div id="sig_4" ></div>
                        
                                                <br/>
                                                <div class="mt-3">
                                                    <button id="clear_4" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                </div>
                                                <textarea id="signature64_4" name="other_signatures[]" style="display: none"></textarea>
                                            </div>
                                            <a  id="addDivButton4">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger5">
                                        <h5 class="form-title">{{__('form.other person')}}</h5>
                                       <input type="text" class="d-none" name="id[]" value="5" />
                                            <div class="col-lg-6">
                                                <input type="checkbox" id="other_underage5" name="underage[]" value="1" />
                                                <label for="underage">{{__('form.under age')}}</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="name" class="form-label">{{__('form.name')}} </label>
                                                <input type="text" id="other_name5" name="other_name[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                <input type="text" id="other_surname5" name="other_surname[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="text" id="other_email5" name="other_email[]" class="form-control" />
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="passport" class="form-label">Passport Image </label>
                                                <input type="file" id="other_images5" name="other_images[]" class="form-control" />
                                            </div>
                                            <div class="row mt-3">
                                                <span style="font-weight:bold;">Full Name and Signature</span>
                                             <div class="col-lg-6 col-sm-12">
                    
                                                <label class="" for="">{{__('form.firm accept')}}</label>
                                                <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div id="sig_5" ></div>
                        
                                                <br/>
                                                <div class="mt-3">
                                                    <button id="clear_5" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                </div>
                                                <textarea id="signature64_5" name="other_signatures[]" style="display: none"></textarea>
                                            </div>
                                            <a  id="addDivButton5">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger6">
                                            <h5 class="form-title">{{__('form.other person')}}</h5>
                                           <input type="text" class="d-none" name="id[]" value="6" />
                                                <div class="col-lg-6">
                                                    <input type="checkbox" id="other_underage6" name="underage[]" value="1" />
                                                    <label for="underage">{{__('form.under age')}}</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="name" class="form-label">{{__('form.name')}} </label>
                                                    <input type="text" id="other_name6" name="other_name[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                    <input type="text" id="other_surname6" name="other_surname[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="email" class="form-label">Email </label>
                                                    <input type="text" id="other_email6" name="other_email[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="passport" class="form-label">Passport Image </label>
                                                    <input type="file" id="other_images6" name="other_images[]" class="form-control" />
                                                </div>
                                                <div class="row mt-3">
                                                    <span style="font-weight:bold;">Full Name and Signature</span>
                                                 <div class="col-lg-6 col-sm-12">
                        
                                                    <label class="" for="">{{__('form.firm accept')}}</label>
                                                    <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div id="sig_6" ></div>
                            
                                                    <br/>
                                                    <div class="mt-3">
                                                        <button id="clear_6" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                    </div>
                                                    <textarea id="signature64_6" name="other_signatures[]" style="display: none"></textarea>
                                                </div>
                                                <a  id="addDivButton6">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger7">
                                            <h5 class="form-title">{{__('form.other person')}}</h5>
                                           <input type="text" class="d-none" name="id[]" value="7" />
                                                <div class="col-lg-6">
                                                    <input type="checkbox" id="other_underage7" name="underage[]" value="1" />
                                                    <label for="underage">{{__('form.under age')}}</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="name" class="form-label">{{__('form.name')}} </label>
                                                    <input type="text" id="other_name7" name="other_name[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                    <input type="text" id="other_surname7" name="other_surname[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="email" class="form-label">Email </label>
                                                    <input type="text" id="other_email7" name="other_email[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="passport" class="form-label">Passport Image </label>
                                                    <input type="file" id="other_images7" name="other_images[]" class="form-control" />
                                                </div>
                                                <div class="row mt-3">
                                                    <span style="font-weight:bold;">Full Name and Signature</span>
                                                 <div class="col-lg-6 col-sm-12">
                        
                                                    <label class="" for="">{{__('form.firm accept')}}</label>
                                                    <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div id="sig_7" ></div>
                            
                                                    <br/>
                                                    <div class="mt-3">
                                                        <button id="clear_7" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                    </div>
                                                    <textarea id="signature64_7" name="other_signatures[]" style="display: none"></textarea>
                                                </div>
                                                <a  id="addDivButton7">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger8">
                                            <h5 class="form-title">{{__('form.other person')}}</h5>
                                           <input type="text" class="d-none" name="id[]" value="8" />
                                                <div class="col-lg-6">
                                                    <input type="checkbox" id="other_underage8" name="underage[]" value="1" />
                                                    <label for="underage">{{__('form.under age')}}</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="name" class="form-label">{{__('form.name')}} </label>
                                                    <input type="text" id="other_name8" name="other_name[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                    <input type="text" id="other_surname8" name="other_surname[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="email" class="form-label">Email </label>
                                                    <input type="text" id="other_email8" name="other_email[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="passport" class="form-label">Passport Image </label>
                                                    <input type="file" id="other_images8" name="other_images[]" class="form-control" />
                                                </div>
                                                <div class="row mt-3">
                                                    <span style="font-weight:bold;">Full Name and Signature</span>
                                                 <div class="col-lg-6 col-sm-12">
                        
                                                    <label class="" for="">{{__('form.firm accept')}}</label>
                                                    <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div id="sig_8" ></div>
                            
                                                    <br/>
                                                    <div class="mt-3">
                                                        <button id="clear_8" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                    </div>
                                                    <textarea id="signature64_8" name="other_signatures[]" style="display: none"></textarea>
                                                </div>
                                                <a  id="addDivButton9">+ {{__('form.add person')}}</a>
                                        </div>
                                        </div>
                                    <div class="row form-style d-none" id="other_passenger9">
                                            <h5 class="form-title">{{__('form.other person')}}</h5>
                                           <input type="text" class="d-none" name="id[]" value="9" />
                                                <div class="col-lg-6">
                                                    <input type="checkbox" id="other_underage9" name="underage[]" value="1" />
                                                    <label for="underage">{{__('form.under age')}}</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="name" class="form-label">{{__('form.name')}} </label>
                                                    <input type="text" id="other_name9" name="other_name[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="surname" class="form-label">{{__('form.surname')}}</label>
                                                    <input type="text" id="other_surname9" name="other_surname[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="email" class="form-label">Email </label>
                                                    <input type="text" id="other_email9" name="other_email[]" class="form-control" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="passport" class="form-label">Passport Image </label>
                                                    <input type="file" id="other_images9" name="other_images[]" class="form-control" />
                                                </div>
                                                <div class="row mt-3">
                                                    <span style="font-weight:bold;">Full Name and Signature</span>
                                                 <div class="col-lg-6 col-sm-12">
                        
                                                    <label class="" for="">{{__('form.firm accept')}}</label>
                                                    <span class="client-sign-info">&#9432; each client should sign his/her name</span>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div id="sig_9" ></div>
                            
                                                    <br/>
                                                    <div class="mt-3">
                                                        <button id="clear_9" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                                    </div>
                                                    <textarea id="signature64_9" name="other_signatures[]" style="display: none"></textarea>
                                                </div>
                                              
                                        </div>
                                        </div>
                                                                
                                        
                                    <div class="mt-3">

                                        <button id="button6" class="button btn-navigate-form-step" type="button" step_number="7">
                                            {{__('form.continue')}}
                                        </button>
                                        
                                    </div>
                                    </div>
                        </section>
                        <section id="step-7" class="form-step d-none">
                            <div class="mt-3 ">
                                <div class="row form-style">
                                    <h5 class="form-title">{{__('form.your address')}}
                                    </h5>
                               
                                    <div class="col-lg-6">
                                        <label  for="address" class="form-label">{{__('form.address')}}</label>
                                        <input id="address" type="text" name="address" class="form-control" required />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="address2" class="form-label">{{__('form.address')}} 2 (Optional)</label>
                                        <input  type="text" name="address2" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="city" class="form-label">{{__('form.city')}}</label>
                                        <input id="city" type="text" name="city" class="form-control" required />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="postal_code" class="form-label">{{__('form.postal')}}</label>
                                        <input id="postal_code" type="text" name="postal_code" class="form-control" required />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="country" class="form-label">{{__('form.country')}}</label>
                                        <input id="country" type="text" name="country" class="form-control" required/>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="nationality" class="form-label">{{__('form.nationality')}}</label>
                                        <input id="nationality" type="text" name="nationality" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="pnr" class="form-label">{{__('form.pnr')}}</label>
                                        <input id="pnr" type="text" name="pnr" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone" class="form-label">{{__('form.phone')}}</label>
                                        <input id="phone" type="text" name="phone" class="form-control" required />
                                    </div>                
                                 </div> 
                                <div class="row mt-3">
                                     <div class="col-lg-6 col-sm-12">
    
                                        <label class="" for="">{{__('form.firm accept')}}</label>
            
                                    </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div id="sig" ></div>
        
                                    <br/>
                                    <div class="mt-3">
                                        <button id="clear" class="btn btn-danger btn-sm">{{__('form.clear firm')}}</button>
                                    </div>
                                    <textarea id="signature64" name="signature" style="display: none"></textarea>
                                </div>
                                 </div>
                                <div class="mt-3">
                                    <button id="submit" class="button submit-btn" type="submit">{{__('form.send')}}</button>
                                </div>
                                </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">


        var path = "{{ route('airport_names') }}";
         
         $('#departing').typeahead({
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
                return item.airport_name +  `  (${item.airport_code})`;
             }
         });
         
         $('#destination').typeahead({
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
                 return item.airport_name +  `  (${item.airport_code})`;
             }
         });
         
           
         </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{URL::asset('public/backend/assets/js/jquery.signature.js')}}"></script>
    <script src="{{URL::asset('public/backend/assets/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script type="text/javascript">
    
    // Get the button and container elements
 const addButton = document.getElementById("addButton");
        const container = document.getElementById("container");

        // Create a counter to keep track of the number of divs added
        let counter = 0;

        // Function to add a new div
        function addDiv() {
            counter++;

            // Create a new div element
            const newDiv = document.createElement("div");
            newDiv.className = "city_airport col-lg-6";

            // Create the label element
            const label = document.createElement("label");
            label.htmlFor = "airport_change";
            label.textContent = "{{__('form.city_airport')}}";

            // Create the input element
            const input = document.createElement("input");
            input.type = "text";
            input.name = "airport_change[]";
            input.className = "form-control";
            input.placeholder = "e.g Tirana or TIA"

            // Append the label and input elements to the new div
            newDiv.appendChild(label);
            newDiv.appendChild(input);

            // Append the new div to the container
            container.appendChild(newDiv);
        }

      addButton.addEventListener("click", addDiv);
       

        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    
        $('#clear').click(function(e) {
    
            e.preventDefault();
    
            sig.signature('clear');
    
    
            $("#signature64").val('');
    
        });
        
         var sig1 = $('#sig1').signature({syncField: '#signature641', syncFormat: 'PNG'});
    
        $('#clear1').click(function(e) {
    
            e.preventDefault();
    
            sig1.signature('clear');
    
            $("#signature641").val('');
    
        });
        
        var sig_2 = $('#sig_2').signature({syncField: '#signature64_2', syncFormat: 'PNG'});
    
        $('#clear_2').click(function(e) {
    
            e.preventDefault();
    
            sig_2.signature('clear');
    
            $("#signature64_2").val('');
    
        });
        
        var sig_3 = $('#sig_3').signature({syncField: '#signature64_3', syncFormat: 'PNG'});
    
        $('#clear_3').click(function(e) {
    
            e.preventDefault();
    
            sig_3.signature('clear');
    
            $("#signature64_3").val('');
    
        });
        
        var sig_4 = $('#sig_4').signature({syncField: '#signature64_4', syncFormat: 'PNG'});
    
        $('#clear_4').click(function(e) {
    
            e.preventDefault();
    
            sig_4.signature('clear');
    
            $("#signature64_4").val('');
    
        });
        
        var sig_5 = $('#sig_5').signature({syncField: '#signature64_5', syncFormat: 'PNG'});
    
        $('#clear_5').click(function(e) {
    
            e.preventDefault();
    
            sig_5.signature('clear');
    
            $("#signature64_5").val('');
    
        });
        
        var sig_6 = $('#sig_6').signature({syncField: '#signature64_6', syncFormat: 'PNG'});
    
        $('#clear_6').click(function(e) {
    
            e.preventDefault();
    
            sig_6.signature('clear');
    
            $("#signature64_6").val('');
    
        });
        
        var sig_7 = $('#sig_7').signature({syncField: '#signature64_7', syncFormat: 'PNG'});
    
        $('#clear_7').click(function(e) {
    
            e.preventDefault();
    
            sig_7.signature('clear');
    
            $("#signature64_7").val('');
    
        });

    $('#submit').click(function(e){
        
        if(sig.signature('isEmpty')){
            e.preventDefault();
            alert('Please sign your name and signature on the box');
    }else{
        console.log('ss');
        $('#userAccountSetupForm').submit();

    }
    });
        
    $('#addDivButton1').click(function(e){
        if(sig1.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
       $("#other_passenger2").removeClass('d-none');
       $("#addDivButton1").addClass('d-none');
            const firstNameOther2 = document.getElementById('other_name2');
            const lastNameOther2 = document.getElementById('other_surname2');
            const emailOther2 = document.getElementById('other_email2');
            const imagesOther2 = document.getElementById('other_images2');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther2.addEventListener('input', validateSixthStep);
            lastNameOther2.addEventListener('input', validateSixthStep);
            emailOther2.addEventListener('input', validateSixthStep);
            imagesOther2.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther2.value.trim() === '' ||
                lastNameOther2.value.trim() === '' ||
                imagesOther2.value.trim() === '' ||
                emailOther2.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
    
     $('#addDivButton2').click(function(e){
         if(sig_2.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
        $("#other_passenger3").removeClass('d-none');
        $("#addDivButton2").addClass('d-none');
        const firstNameOther3 = document.getElementById('other_name3');
            const lastNameOther3 = document.getElementById('other_surname3');
            const emailOther3 = document.getElementById('other_email3');
            const imagesOther3 = document.getElementById('other_images3');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther3.addEventListener('input', validateSixthStep);
            lastNameOther3.addEventListener('input', validateSixthStep);
            emailOther3.addEventListener('input', validateSixthStep);
            imagesOther3.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther3.value.trim() === '' ||
                lastNameOther3.value.trim() === '' ||
                imagesOther3.value.trim() === '' ||
                emailOther3.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
     $('#addDivButton3').click(function(e){
         if(sig_3.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
       $("#other_passenger4").removeClass('d-none');
       $("#addDivButton3").addClass('d-none');
       
            const firstNameOther4 = document.getElementById('other_name4');
            const lastNameOther4 = document.getElementById('other_surname4');
            const emailOther4 = document.getElementById('other_email4');
            const imagesOther4 = document.getElementById('other_images4');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther4.addEventListener('input', validateSixthStep);
            lastNameOther4.addEventListener('input', validateSixthStep);
            emailOther4.addEventListener('input', validateSixthStep);
            imagesOther4.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther4.value.trim() === '' ||
                lastNameOther4.value.trim() === '' ||
                imagesOther4.value.trim() === '' ||
                emailOther4.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
     $('#addDivButton4').click(function(e){
         if(sig_4.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
        $("#other_passenger5").removeClass('d-none');
        $("#addDivButton4").addClass('d-none');
            const firstNameOther5 = document.getElementById('other_name5');
            const lastNameOther5 = document.getElementById('other_surname5');
            const emailOther5 = document.getElementById('other_email5');
            const imagesOther5 = document.getElementById('other_images5');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther5.addEventListener('input', validateSixthStep);
            lastNameOther5.addEventListener('input', validateSixthStep);
            emailOther5.addEventListener('input', validateSixthStep);
            imagesOther5.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther5.value.trim() === '' ||
                lastNameOther5.value.trim() === '' ||
                imagesOther5.value.trim() === '' ||
                emailOther5.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
    $('#addDivButton5').click(function(e){
        if(sig_5.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
       $("#other_passenger6").removeClass('d-none');
       $("#addDivButton5").addClass('d-none');
       const firstNameOther6 = document.getElementById('other_name6');
            const lastNameOther6 = document.getElementById('other_surname6');
            const emailOther6 = document.getElementById('other_email6');
            const imagesOther6 = document.getElementById('other_images6');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther6.addEventListener('input', validateSixthStep);
            lastNameOther6.addEventListener('input', validateSixthStep);
            emailOther6.addEventListener('input', validateSixthStep);
            imagesOther6.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther6.value.trim() === '' ||
                lastNameOther6.value.trim() === '' ||
                imagesOther6.value.trim() === '' ||
                emailOther6.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
     $('#addDivButton6').click(function(e){
         if(sig_6.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
        $("#other_passenger7").removeClass('d-none');
        $("#addDivButton6").addClass('d-none');
        const firstNameOther7 = document.getElementById('other_name7');
            const lastNameOther7 = document.getElementById('other_surname7');
            const emailOther7 = document.getElementById('other_email7');
            const imagesOther7 = document.getElementById('other_images7');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther7.addEventListener('input', validateSixthStep);
            lastNameOther7.addEventListener('input', validateSixthStep);
            emailOther7.addEventListener('input', validateSixthStep);
            imagesOther7.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther7.value.trim() === '' ||
                lastNameOther7.value.trim() === '' ||
                imagesOther7.value.trim() === '' ||
                emailOther7.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
              
            }
        }
    });
     $('#addDivButton7').click(function(e){
         if(sig_7.signature('isEmpty')){
            alert('Sign full name and signature!');
        }else{
       $("#other_passenger8").removeClass('d-none');
       $("#addDivButton7").addClass('d-none');
        const firstNameOther8 = document.getElementById('other_name8');
            const lastNameOther8 = document.getElementById('other_surname8');
            const emailOther8 = document.getElementById('other_email8');
            const imagesOther8 = document.getElementById('other_images8');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther8.addEventListener('input', validateSixthStep);
            lastNameOther8.addEventListener('input', validateSixthStep);
            emailOther8.addEventListener('input', validateSixthStep);
            imagesOther8.addEventListener('input', validateSixthStep);
            
            function validateSixthStep() {

              const isAnyEmpty =
                firstNameOther8.value.trim() === '' ||
                lastNameOther8.value.trim() === '' ||
                imagesOther8.value.trim() === '' ||
                emailOther8.value.trim() === '' ;
            
              // Enable or disable the next button based on the validation result
              button6.disabled = isAnyEmpty;
            }
            }
    });
     $('#addDivButton8').click(function(e){
        $("#other_passenger9").removeClass('d-none');
        $("#addDivButton8").addClass('d-none');
    });

</script>


    </script>
   
    <!--<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>-->
    
 
    <script>

         function handleClickConn1(cb) {
            if (cb.checked == true) {
              $("#city_airport").addClass('d-none');
                
            }
            
        }
        function handleClickConn2(cb) {
            if (cb.checked == true) {
              $("#city_airport").removeClass('d-none');
                
            }
        }
        function handleFlight(cb) {
            if (cb.checked == true) {
              $("#delayed").removeClass('d-none');
                
            }
        }
        function handleDelayed(cb) {
            if (cb.checked == true) {
              $("#cancell_notification").removeClass('d-none');
                
            }
        }
        function handleNotification(cb) {
            if (cb.checked == true) {
              $("#caused_problem").removeClass('d-none');
                
            }
        }
        function handleTravelingNotAlone(cb) {
            if (cb.checked == true) {
              $("#other_passenger").removeClass('d-none');
              $("#addDivButton1").removeClass('d-none');
              
            const firstNameOther1 = document.getElementById('other_name');
            const lastNameOther1 = document.getElementById('other_surname');
            const emailOther1 = document.getElementById('other_email');
            const imagesOther1 = document.getElementById('other_images');
            var button6 = document.getElementById('button6');
              button6.disabled = true;
            
            // Add event listeners to the input fields
            firstNameOther1.addEventListener('input', validateSixthStep);
            lastNameOther1.addEventListener('input', validateSixthStep);
            emailOther1.addEventListener('input', validateSixthStep);
            imagesOther1.addEventListener('input', validateSixthStep);

                function validateSixthStep() {
    
                  const isAnyEmpty =
                    firstNameOther1.value.trim() === '' ||
                    lastNameOther1.value.trim() === '' ||
                    imagesOther1.value.trim() === '' ||
                    emailOther1.value.trim() === '' ;
                
                  // Enable or disable the next button based on the validation result
                  button6.disabled = isAnyEmpty;
                  
                }
                
            }
        }
        
        function handleTravelingAlone(cb) {
            if (cb.checked == true) {
              $("#other_passenger").addClass('d-none');
              $("#addDivButton1").addClass('d-none');
               $('#button6').prop('disabled', false);
            }
        }


           
       
    </script>
    
    <script>
        const departingInput = document.getElementById('departing');
        const destinationInput = document.getElementById('destination');
        const flightChanges = document.querySelectorAll('input[name="connecting"]');
        const nextButton = document.getElementById('button');

        // Disable the next button initially
        nextButton.disabled = true;

        // Add event listeners to the input fields
        departingInput.addEventListener('change', validateFirstStep);
        destinationInput.addEventListener('change', validateFirstStep);
        flightChanges.forEach(radio => radio.addEventListener('change', validateFirstStep));

        function validateFirstStep() {
        // Check if any of the input fields is empty
        const isAnyEmpty =
            departingInput.value.trim() === '' ||
            destinationInput.value.trim() === '' ||
            Array.from(flightChanges).every(radio => !radio.checked);

        // Enable or disable the next button based on the validation result
        nextButton.disabled = isAnyEmpty;
        }



// Add event listener to the next button to navigate to the next step
nextButton.addEventListener('click', () => {
  // Show the next step
  const currentStep = document.getElementById('step-1');
  const nextStep = document.getElementById('step-2');
  currentStep.style.display = 'none';
  nextStep.style.display = 'block';
});



// Get the input element and the next button
const dateInput = document.getElementById('date');
const nextButtonStep2 = document.getElementById('button2');

// Disable the next button initially
nextButtonStep2.disabled = true;

// Add event listener to the date input field
dateInput.addEventListener('input', validateSecondStep);

function validateSecondStep() {
  // Enable or disable the next button based on the input value
  nextButtonStep2.disabled = dateInput.value.trim() === '';
}

// Add event listener to the next button to navigate to the next step
nextButtonStep2.addEventListener('click', () => {
  // Show the next step
  const currentStep = document.getElementById('step-2');
  const nextStep = document.getElementById('step-3');
  currentStep.style.display = 'none';
  nextStep.style.display = 'block';
});

// Get the input elements and the next button
const airlineNameInput = document.getElementById('airline_name');
const flightNumberInput = document.getElementById('flight_number');
const dateFlightInput = document.getElementById('date_flight');
const nextButtonStep3 = document.getElementById('button3');

// Disable the next button initially
nextButtonStep3.disabled = true;

// Add event listeners to the input fields
airlineNameInput.addEventListener('input', validateThirdStep);
flightNumberInput.addEventListener('input', validateThirdStep);
dateFlightInput.addEventListener('input', validateThirdStep);

function validateThirdStep() {
  // Check if any of the input fields is empty
  const isAnyEmpty =
    airlineNameInput.value.trim() === '' ||
    flightNumberInput.value.trim() === '' ||
    dateFlightInput.value.trim() === '';

  // Enable or disable the next button based on the validation result
  nextButtonStep3.disabled = isAnyEmpty;
}

// Add event listener to the next button to navigate to the next step
nextButtonStep3.addEventListener('click', () => {
  // Show the next step
  const currentStep = document.getElementById('step-3');
  const nextStep = document.getElementById('step-4');
  currentStep.style.display = 'none';
  nextStep.style.display = 'block';
});

// Get the input elements and the next button
const flightDisruptionRadios = document.querySelectorAll('input[name="flight_disruption"]');
const delayedHoursRadios = document.querySelectorAll('input[name="delayed_hours"]');
const cancellationNotificationRadios = document.querySelectorAll('input[name="cancellation_notification"]');
// const causedProblemSelect = document.getElementById('caused');

const nextButtonStep4 = document.getElementById('button4');

// Disable the next button initially
nextButtonStep4.disabled = true;

// Add event listeners to the radio buttons and select field
flightDisruptionRadios.forEach(radio => radio.addEventListener('change', validateFourthStep));
delayedHoursRadios.forEach(radio => radio.addEventListener('change', validateFourthStep));
cancellationNotificationRadios.forEach(radio => radio.addEventListener('change', validateFourthStep));
// causedProblemSelect.addEventListener('change', validateFourthStep);

function validateFourthStep() {
  // Check if at least one option is selected from each group of radio buttons
  const isFlightDisruptionSelected = Array.from(flightDisruptionRadios).some(radio => radio.checked);
  const isDelayedHoursSelected = Array.from(delayedHoursRadios).some(radio => radio.checked);
  const isCancellationNotificationSelected = Array.from(cancellationNotificationRadios).some(radio => radio.checked);

  // Enable or disable the next button based on the validation result
  nextButtonStep4.disabled = !(isFlightDisruptionSelected && isDelayedHoursSelected && isCancellationNotificationSelected);
}


// Add event listener to the next button to navigate to the next step
nextButtonStep4.addEventListener('click', () => {
  // Show the next step
  const currentStep = document.getElementById('step-4');
  const nextStep = document.getElementById('step-5');
  currentStep.style.display = 'none';
  nextStep.style.display = 'block';
});

// Get the input elements and the next button
const firstNameInput = document.getElementById('name');
const lastNameInput = document.getElementById('surname');
const emailInput = document.getElementById('email');
const passportInput = document.getElementById('passport_image');
const agreeTermsCheckbox = document.getElementById('agree_terms');

const nextButtonStep5 = document.getElementById('button5');

// Disable the next button initially
nextButtonStep5.disabled = true;

// Add event listeners to the input fields
firstNameInput.addEventListener('input', validateFifthStep);
lastNameInput.addEventListener('input', validateFifthStep);
emailInput.addEventListener('input', validateFifthStep);
passportInput.addEventListener('input', validateFifthStep);
agreeTermsCheckbox.addEventListener('change', validateFifthStep);

function validateFifthStep() {
  // Check if any of the required fields are empty or the terms checkbox is not checked
  const isAnyEmpty =
    firstNameInput.value.trim() === '' ||
    lastNameInput.value.trim() === '' ||
    emailInput.value.trim() === '' ||
    passportInput.value.trim() === '' ||
    !agreeTermsCheckbox.checked;

  // Validate email using regular expression
  const isEmailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value);

  // Enable or disable the next button based on the validation result
  nextButtonStep5.disabled = isAnyEmpty || !isEmailValid;
}

// Add event listener to the next button to navigate to the next step
nextButtonStep5.addEventListener('click', () => {
  // Show the next step
  const currentStep = document.getElementById('step-5');
  const nextStep = document.getElementById('step-6');
  currentStep.style.display = 'none';
  nextStep.style.display = 'block';
});


// Get the input elements and the submit button
const addressInput = document.getElementById('address');
const cityInput = document.getElementById('city');
const postalCodeInput = document.getElementById('postal_code');
const countryInput = document.getElementById('country');
const phoneInput = document.getElementById('phone');
const naionalityInput = document.getElementById('nationality');
const pnrInput = document.getElementById('pnr');
const submitButton = document.getElementById('submit');

submitButton.disabled = true;

// Add event listeners to the input fields
addressInput.addEventListener('input', validateLastStep);
cityInput.addEventListener('input', validateLastStep);
postalCodeInput.addEventListener('input', validateLastStep);
countryInput.addEventListener('input', validateLastStep);
phoneInput.addEventListener('input', validateLastStep);
naionalityInput.addEventListener('input', validateLastStep);
pnrInput.addEventListener('input', validateLastStep);

function validateLastStep() {
  // Check if any of the required fields are empty
  const isAnyEmpty =
    addressInput.value.trim() === '' ||
    cityInput.value.trim() === '' ||
    postalCodeInput.value.trim() === '' ||
    countryInput.value.trim() === '' ||
    naionalityInput.value.trim() === '' ||
    pnrInput.value.trim() === '' ||
    phoneInput.value.trim() === '';

  // Enable or disable the submit button based on the validation result
  submitButton.disabled = isAnyEmpty;
}




/**
 * Define a function to navigate between form steps.
 * It accepts one parameter, the step number.
 */
const navigateToFormStep = (stepNumber) => {
  // Hide all form steps
  document.querySelectorAll('.form-step').forEach((formStepElement) => {
    formStepElement.classList.add('d-none');
  });

  // Show the current form step (as passed to the function)
  document.querySelector(`#step-${stepNumber}`).classList.remove('d-none');

  // Mark the current form step as active
  const formStepHeader = document.querySelector(`li[step="${stepNumber}"]`);
//   formStepHeader.classList.remove('form-stepper-unfinished');
//   formStepHeader.classList.add('form-stepper-active');

  // Loop through each form step circles
//   for (let index = 0; index < stepNumber; index++) {
    // Mark the form step as completed
    // const formStepCircle = document.querySelector(`li[step="${index}"]`);
    // formStepCircle.classList.remove('form-stepper-unfinished');
    // formStepCircle.classList.add('form-stepper-completed');
  }
// };

// Select all form navigation buttons and add event listeners
document.querySelectorAll('.btn-navigate-form-step').forEach((formNavigationBtn) => {
  formNavigationBtn.addEventListener('click', () => {
    const stepNumber = parseInt(formNavigationBtn.getAttribute('step_number'));

    // Validate the first step before navigating to the next step
    if (stepNumber === 2 && validateFirstStep() === false) {
      return; // Don't proceed if the first step is not valid
    }

    navigateToFormStep(stepNumber);
  });
});


 



    </script>
<!--<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</body>

</html>