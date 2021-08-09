<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spare Parts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <style>
     .CenterDiv{
  width: 100%;
  display : flex;
  align-items: center;
  justify-content: center;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
@include('sidebar')
<br>
<br>
  <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row CenterDiv">
            <div class="col-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Journal Voucher</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('/journalvoucher')}}" method="post">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input value="<?php echo date('Y-m-d'); ?>" type="date" name="date" class="form-control" id="exampleInputEmail1" required>
                      @if($vrno!=null)
                      <label for="">Vr.No</label>
                      <input type="text" name="vrno"class="form-control"  value="{{$vrno}}" readonly>
                      @endif
                      <label for="">Amount</label>
                      <input type="text" name="amount" class="form-control" required>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="">Debit Party Name</label>
                      <select name="debitpartyname" id="" class="form-control">
                        @foreach($partydata as $pd)
                        <option value="{{$pd->PartyName}}">{{$pd->PartyName}}</option>
                        @endforeach
                      </select>
                    </div>
                    <hr>
           
                
                    <div class="form-group">
          
                        <label for="">Credit Party Name</label>
                        <select name="creditpartyname" id="" class="form-control">
                          @foreach($partydata as $pd)
                          <option value="{{$pd->PartyName}}">{{$pd->PartyName}}</option>
                          @endforeach
                        </select>
                      </div>
                  <hr>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Narration</label>
                    <input type="text" class="form-control" name="narration" id="exampleInputPassword1" placeholder="">
                    
                  </div>
                  
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- Content Header (Page header) -->
  </div>
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}""></script>
<!-- DataTables  & Plugins -->
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


<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js')}}"></script>
<!-- Page specific script -->

</body>
</html>
