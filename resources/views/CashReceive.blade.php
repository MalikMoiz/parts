@extends('base')

@section('section')
  
<br><br>
  <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                
                  <div class="row CenterDiv">
                    <div class="col-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Cash Recieve</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('/cashreceivevoucher')}}" method="post">
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
                      <input type="text" name="debitpartyname" class="form-control" value="{{$party->PartyName}}" readonly>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for=""> Credit Party Name</label>
                       <select class="form-control" name="creditpartyname" id="">
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
                  <div class="form-group">
                    <label for="exampleInputPassword1">Send SMS</label>
                    <input type="checkbox" name="check" id="exampleInputPassword1" placeholder="" checked>
                    
                  </div>
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
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

@endsection