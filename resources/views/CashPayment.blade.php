@extends('base')
@section('section')

<br>
<br>
  <div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-12">                 
                  <div class="row CenterDiv"> 
                    <div class="col-6 ">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Cash Payment</h3>
                </div>
                <form action="{{url('/cashpaymentvoucher')}}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input value="<?php echo date('Y-m-d'); ?>" type="date" name="date" class="form-control" id="exampleInputEmail1" required>
                      @if($vrno!=null)
                      <label for="">Vr.No</label>
                      <input type="text" name="vrno"class="form-control"  value="{{$vrno}}" readonly>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Amount</label>
                      <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="" required>
                      
                    </div>
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
                        <input type="text" name="creditpartyname" class="form-control" readonly value="{{$party->PartyName}}">
                      </div>
                  <hr>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Narration</label>
                    <input type="text" class="form-control" name="narration" id="exampleInputPassword1" placeholder="">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Send SMS</label>
                    <input type="checkbox" name="check" checked id="exampleInputPassword1" placeholder="">
                    
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
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- Content Header (Page header) -->
  </div>

  @endsection