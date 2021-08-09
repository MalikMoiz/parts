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
      
    </style>
  </head>
  <body class="hold-transition sidebar-mini">
    @include('sidebar')
    <div class="content-wrapper">
        <br>
        @include('modal')
        <br>
        <br>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Prices</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Qty.</th>
                        <th>Shop Rate</th>
                        <th>Workshop Rate</th>
                        <th>Counter Rate</th>
                        <th>Special Rate</th>
                        <th>Purchase Rate</th>
                        <th>Size</th>
                        <th>Manufacturer</th>
                        <th>Category</th>
                        <th>Car Name</th>
                        <th>Modal</th>
                        <th>CArticle</th>
                        <th>Barcode</th>
                        <th>Godam</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if($result!=null)
                        @foreach($result as $rs)
                      <tr>
                        <td>{{$rs->ItemNo}}</td>
                        <td>{{$rs->EngName}}</td>
                        <td>{{$rs->Qty}}</td>
                        <td>{{$rs->ShopRate}}</td>
                        <td>{{$rs->WorkShopRate}}</td>
                        <td>{{$rs->CounterRate}}</td>
                        <td>{{$rs->SpecialRate}}</td>
                        <td>{{$rs->PurchRate}}</td>
                        <td>{{$rs->Size}}</td>
                        <td>{{$rs->Manufacturer}}</td>
                        <td>{{$rs->Category}}</td>
                        <td>{{$rs->Make}}</td>
                        <td>{{$rs->Model}}</td>
                        <td>{{$rs->CArticle}}</td>
                        <td>{{$rs->BarCode}}</td>
                        <td>{{$rs->Godam}}</td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
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

    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>
</html>
