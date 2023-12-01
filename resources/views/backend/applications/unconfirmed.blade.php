@extends('layouts.backend.app1')

@section('title', 'Aplikime te zgjidhura')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Aplikimet</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Aplikimet e zgjidhura</li>
                    </ol>
                </div>
    
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                 <div class="form-group ms-3 mt-1">
                    <label><strong>Filtro sipas Statusit :</strong></label>
                    <select id='approved' class="form-control" style="width: 200px">
                        <option value="null">Statuset</option>
                        <option value="">Te reja</option>
                        <option value="1">Zgjidhur</option>
                        <option value="2">Ne Shqyrtim</option>
                        <option value="3">Derguar ne linjen ajrore</option>
                        <option value="0">Refuzuar Aplikimi</option>
                    </select>
                </div>
                <div class="card-header border-0">
    
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
      
          var table = $('.yajra-datatable').DataTable({
            responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
              processing: true,
              serverSide: true,
             ajax: {
                  url: "{{ route('unconfirmed_application_search') }}",
                  data: function (d) {
                        d.approved = $('#approved').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                  {data: 'name', name: 'name'},
                  {data: 'surname', name: 'surname'},
                  {data: 'email', name: 'email'},
                  { 
                    data: 'created_at', 
                    name: 'created_at',
                    render: function (data) {
                        return moment(data, 'YYYY-MM-DDTHH:mm:ss').format('YYYY-MM-DD');
                    }
                },
                  {
                      data: 'action', 
                      name: 'action', 
                      orderable: true, 
                      searchable: true
                  },
              ]
          });
           $('#approved').change(function(){
                table.draw();
            });
      
        });
      </script>
@endsection


