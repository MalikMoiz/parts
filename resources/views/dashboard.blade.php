
  
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spare Parts</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
      <style>
        body {
              overflow-y: hidden; /* Hide vertical scrollbar */
              overflow-x: hidden; /* Hide horizontal scrollbar */
              }
      </style>
    </head>
    <body class="hold-transition sidebar-mini">
      @include('sidebar')
        <div class="content-wrapper">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Search Performance
          </button>
          <br>
          <br>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Search User Performance</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="container">
                          <form   action="{{url('/userperformance')}}"  method="get" class="form-inline">
                            <div class="form-group">
                              <label for="">FROM DATE</label>
                              <input  type="date" id="search" name="fromdate" class="form-control" type="text">
                              <label for="">TO DATE</label>
                              <input  type="date" id="searchselect" name="todate" class="form-control" id="sel1"> 
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="searchButton">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
                  <div class="row">
@foreach ($recovery as $rv)
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h2 class="widget-user-username">Username</h2>
                <h3 class="widget-user-username">{{$rv->UserName}}</h3>
               
              </div>
              
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{$rv->Amount}}</h5>
                      <span class="description-text">Amount</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                 
                  <!-- /.col -->
    
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
         @endforeach
        </div>
        <!-- /.row -->
          <!-- /.widget-user -->
        </div>
      <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}""></script>
      <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}""></script>
      <script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
      <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
      <script src="{{asset('/dist/js/demo.js')}}"></script>
    </body>
  </html>
  
 