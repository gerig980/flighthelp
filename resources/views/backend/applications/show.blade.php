@extends('layouts.backend.app1')

@section('title', 'Aplikim')
@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                
            </div>

            <div class="row">
              
                <!--end col-->
                <div class="col-xxl-12">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i> Detajet e Aplikuesit
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
  
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Emri</label>
                                                    <input type="text" class="form-control" id="firstnameInput" value="{{ $application->name }}" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="lastnameInput" class="form-label">Mbiemri</label>
                                                    <input type="text" class="form-control" id="lastnameInput" value="{{ $application->surname }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <img class="img-fluid" src="{{ URL::asset('images/passport_images/' . $application->passport_image) }}" >
                                                    <a class="btn btn-success mt-2 mb-2" href="{{ URL::asset('images/passport_images/' . $application->passport_image) }}" download>Shkarko Foton</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    @php
                                                        $details = json_decode($application->address,true);
                                                    @endphp
                                                    <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phonenumberInput"  value="{{ $details['phone'] }}" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="emailInput"  value="{{ $application->email }}" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="JoiningdatInput" class="form-label">Nisur nga Aeroporti</label>
                                                    <input type="text" class="form-control" value="{{ $application->departing }}" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="JoiningdatInput" class="form-label">Mberritur ne Aeroportin</label>
                                                    <input type="text" class="form-control" value="{{ $application->destination }}" disabled/>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            @php
                                                $airline = json_decode($application->airlines,true);
                                            @endphp
                                            <div class="col-lg-6 mb-3">
                                                <label for="airline_name">Linja Avionit</label>
                                                <input class="form-control" type="text" value="{{ $airline[0]['airline_name'] }}" disabled>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label for="flight_number">Numri Fluturimit</label>
                                                <input class="form-control" type="text" value="{{ $airline[0]['flight_number'] }}" disabled>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label for="data_nisjes">Data e nisjes</label>
                                                <input class="form-control" type="text" value="{{ $airline[0]['date'] }}" disabled>
                                            </div>
                                            @php
                                                $airport_change = json_decode($application->airport_change,true);
                                            @endphp
                                            @if ($application->connecting == 1)
                                            
                                                
                                                <div class="col-lg-6 ">
                                                    <h5>Ndryshimi i Avionit </h5>
                                                @foreach ($airport_change[0]['airport_name'] as $change)                        
                                                    <input type="text" class="form-control mb-3" value="{{ $change }}" disabled>
                                                @endforeach
                                                 </div>
                                            @endif
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="flight_diruption" class="form-label">Shkaqet e Nderprerjes</label>
                                                    @if ($application->flight_disruption == 0)
                                                        <input type="text" class="form-control"  value="Fluturimi u vonua" disabled>      
                                                    @elseif ($application->flight_disruption == 1)    
                                                        <input type="text" class="form-control"  value="Fluturimi u anullua" disabled>    
                                                    @else
                                                        <input type="text" class="form-control"  value="Nuk u pranova ne avion" disabled>                                          
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="delayed_hours" class="form-label">Orari Shtyrjes</label>
                                                    @if ($application->delayed_hours == 0)
                                                        <input type="text" class="form-control"  value="0 - 1 ore" disabled>      
                                                    @elseif ($application->delayed_hours == 1)    
                                                        <input type="text" class="form-control"  value="1 - 2 ore" disabled>  
                                                    @elseif ($application->delayed_hours == 2)    
                                                        <input type="text" class="form-control"  value="2 - 3 ore" disabled> 
                                                    @elseif ($application->delayed_hours == 3)    
                                                        <input type="text" class="form-control"  value="3 - 4 ore" disabled> 
                                                    @elseif ($application->delayed_hours == 4)    
                                                        <input type="text" class="form-control"  value="4+ ore" disabled>      
                                                    @else
                                                        <input type="text" class="form-control"  value="Nuk u nis fare" disabled>                                          
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="cancellation_notification" class="form-label">Sa kohe me pare u kontaktuat per shtyrjen</label>
                                                    @if ($application->cancellation_notification == 0)
                                                        <input type="text" class="form-control"  value="Me pak se 14 dit" disabled>          
                                                    @else
                                                        <input type="text" class="form-control"  value="Me shume se 14 dit" disabled>                                          
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="caused" class="form-label">Cfare e shkaktoje shtyrjen</label>
                                                    @if ($application->caused == 0)
                                                        <input type="text" class="form-control"  value="Nuk me kujtohet" disabled> 
                                                    @elseif ($application->caused == 1)
                                                        <input type="text" class="form-control"  value="Probleme Teknike" disabled> 
                                                    @elseif ($application->caused == 2)
                                                        <input type="text" class="form-control"  value="Koha e keqe" disabled> 
                                                    @elseif ($application->caused == 3)
                                                        <input type="text" class="form-control"  value="U shkaktua nga fluturimet e tjera" disabled>  
                                                    @elseif ($application->caused == 4)
                                                        <input type="text" class="form-control"  value="Probleme ne Aeroport" disabled>   
                                                    @elseif ($application->caused == 5)
                                                        <input type="text" class="form-control"  value="Greve ose Proteste" disabled> 
                                                    @elseif ($application->caused == 6)
                                                        <input type="text" class="form-control"  value="Nuk na dhane arsye" disabled>      
                                                    @else
                                                        <input type="text" class="form-control"  value="Force madhore (covid19)" disabled>                                          
                                                    @endif

                                                </div>
                                            </div>
                                            <!--end col-->
                                            @if ($application->traveling_alone == 1)
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="websiteInput1" class="form-label">Pasagjere te tjere</label>
                                                   
                                                        @php
                                                            $other_passenger = json_decode($application->other_person,true);
                                                        @endphp
                                                        @foreach ($other_passenger as $passenger )

                                                        <input type="text" class="form-control mb-1"   value="Nen 18 Vjec: @if ($passenger['under_age'] == 0) Jo @else Po  @endif" disabled />
                                                        <input type="text" class="form-control mb-1"   value="Emri: {{ $passenger['name'] }}" disabled />
                                                        <input type="text" class="form-control mb-1"   value="Mbiemri: {{ $passenger['surname'] }}" disabled />
                                                        <input type="text" class="form-control mb-1"   value="Email: {{ $passenger['email'] }}" disabled />
                                                        
                                                            @if(isset($passenger['image_path']))
                                                                <img class="img-fluid" src="{{ URL::asset('images/passport_images/' . $passenger['image_path']) }}" >
                                                                <a class="btn btn-success mt-2 mb-2" href="{{ URL::asset('images/passport_images/' . $passenger['image_path']) }}" download>Shkarko Foton</a>
                                                            @endif
                                                        @endforeach
                                                        <a class="btn btn-primary mt-1" href="{{ route('createPDF_others', $application->id) }}">Shkarko si PDF Aplikantet</a>
                                                </div>
                                            </div>
                                            @endif
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="cityInput" class="form-label">Qyteti</label>
                                                    <input type="text" class="form-control"  value="{{ $details['city'] }}" disabled />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="countryInput" class="form-label">Shteti</label>
                                                    <input type="text" class="form-control"  value="{{ $details['country'] }}" disabled />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="zipcodeInput" class="form-label">Kodi Postal</label>
                                                    <input type="text" class="form-control"  value="{{ $details['postal_code'] }}" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="addresscodeInput" class="form-label">Adresa</label>
                                                    <input type="text" class="form-control"  value="{{ $details['address'] }}" disabled>
                                                </div>
                                            </div>
                                            @if ($details['address2'] != "")
                                                
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="addresscodeInput" class="form-label">Adresa 2</label>
                                                    <input type="text" class="form-control"  value="{{ $details['address2'] }}" disabled>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="natcodeInput" class="form-label">Nacionaliteti</label>
                                                    <input type="text" class="form-control"  value="{{ $details['nationality'] }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="pnrcodeInput" class="form-label">PNR</label>
                                                    <input type="text" class="form-control"  value="{{ $application->pnr }}" disabled>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="firma">Firma</label>
                                                    <img src="{{ URL::asset('images/' . $application->signature) }}" alt="">
                                                </div>
                                            </div>
                                            
                                               
                                            <form action="{{ route('statusUpdate', $application->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                
                                                    <div class="col-lg-4 col-sm-12">
                                                        <label for="status" class="form-label">Statusi Aplikimit</label>
                                                        
                                                        <select name="status" class="form-control" onchange="handleStatusChange(this);">
                                                            <option @if ($application->status == null) selected @endif disabled value="">Zgjidh statusin e aplikimit</option>
                                                            <option value="1" @if ($application->status == 1) selected @endif>Zgjidhur</option>
                                                            <option value="3" @if ($application->status == 3) selected @endif>U dergua tek linja ajrore</option>
                                                            <option value="0" @if ($application->status === 0) selected @endif>U Refuzua Rimbursimi</option>
                                                            <option value="2" @if ($application->status == 2) selected @endif>Ne Shqyrtim</option>
                                                            <option value="4" @if ($application->status == 4) selected @endif>Duplikuar</option>
                                                            <option value="5" @if ($application->status == 5) selected @endif>Incomplete Data</option>
                                                        </select>

                                                    </div>
                                                    @php
                                                    $options = [
                                                    [
                                                        'value' => 'DELAY_UNDER_3_HOURS',
                                                        'label' => 'Delay under 3 hours',
                                                        'description' => "After thoroughly investigating your case, we can confirm that the delay of your flight was less than 3 hours. Please be kindly informed that passengers are entitled to the compensation specified in Regulation (EC) No 261/2004 of the European Parliament and of the Council when there is an arrival delay of minimum 3 hours."
                                                    ],
                                                    [
                                                        'value' => 'ANOTHER_ENTITY_CLAIM',
                                                        'label' => 'Another entity has filed a claim',
                                                        'description' => "Please be kindly informed that another entity has already filed an official claim for the same flight and the same reservation code, and the compensation in accordance with the EU Regulation 261/2004 of the European Parliament has been paid through them. Please contact the entity for any further details."
                                                    ],
                                                    [
                                                        'value' => 'EXTRAORDINARY_REASONS',
                                                        'label' => 'Extraordinary reasons',
                                                        'description' => "After thoroughly investigating your case, we confirm that the flight didn't operate successfully as a result of extraordinary circumstances. This falls into the category of Extraordinary Circumstances according to European Regulation 261/2004. No compensation is due in such circumstances, which may occur due to political instability, meteorological conditions, security risks, flight safety shortcomings, and strikes."
                                                    ],
                                                    ];
                                                    @endphp
                                                    
                                                    @if($application->cancelled_explain != null)
                                                    @php
                                                    $validDescription = false;
                                                    foreach ($options as $option) {
                                                        if ($application->cancelled_explain == $option['description']) {
                                                            $validDescription = true;
                                                            break;
                                                        }
                                                    }
                                                    @endphp
                                                    
                                                    @if ($validDescription)
                                                        <div class="col-lg-4 col-sm-12 mt-2 ">
                                                            <select name="cancelled_explain" class="form-control">
                                                                <option disabled value="" selected>Zgjidh arsyen e refuzimit</option>
                                                                @foreach ($options as $option)
                                                                    <option value="{{ $option['description'] }}" @if ($application->cancelled_explain == $option['description']) selected @endif>
                                                                        {{ $option['label'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @else
                                                        <div class="col-lg-4 col-sm-12 mt-2">
                                                            <label>Arsye Refuzimi</label>
                                                            <textarea style="width:100%;"  name="cancelled_explain" rows="4" cols="50">{{$application->cancelled_explain}}</textarea>
                                                        </div>
                                                    @endif
                                                    @else
                                                    <div class="col-lg-4 col-sm-12 mt-2 d-none" id="explain">
                                                        <select name="cancelled_explain" class="form-control">
                                                            <option disabled value="" selected>Zgjidh arsyen e refuzimit</option>
                                                            @foreach ($options as $option)
                                                                <option value="{{ $option['description'] }}" @if ($application->status == $option['value']) selected @endif>
                                                                    {{ $option['label'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @endif

                                                    @if($application->paid != null)
                                                    <div class="col-lg-4 col-sm-12 mt-2 ">
                                                        <label class="form-label" for="paid">Pagesa</label>
                                                        <input name="paid" class="form-control" type="text" id="paid" value="{{$application->paid}}">
                                                    </div>
                                                    @else
                                                    <div class="col-lg-4 col-sm-12 d-none mt-2" id="paid_div">
                                                        <label class="form-label" for="paid">Pagesa</label>
                                                        <input name="paid" class="form-control" type="text" id="paid" value="{{$application->paid}}">
                                                    </div>
                                                    @endif
                                                    <button type="submit" class="mt-4  btn btn-md btn-success" >Ndrysho Statusin</button>
                                                 
                                            </form>
                                            
                                            
                                        </div>
                                        <!--end row-->
                                </div>
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <a class="btn btn-primary" href="{{ route('createPDF', $application->id) }}">Shkarko si PDF Aplikantin</a>
        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>

    function handleStatusChange(selectElement) {
    var selectedValue = selectElement.value;

    // Reset the visibility of elements before applying new changes
    $("#explain").addClass('d-none');
    $("#paid_div").addClass('d-none');

    // Apply specific visibility changes based on the selected value
    if (selectedValue === "0") {
        $("#explain").removeClass('d-none');
    } else if (selectedValue === "1") {
        $("#paid_div").removeClass('d-none');
    }
}

</script>
@endsection