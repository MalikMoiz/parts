@extends('base')

@section('section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              @if($data==null)
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ledger</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{url('/data')}}" method="get">
                  <div class="card-body">
                    @if((session()->get('logininfo.Type'))=="Web")
                    <div class="form-group">
                      <label for="exampleInputEmail1">Party Number</label>
                      <input value="{{session()->get('logininfo.UserName')}}" type="text" name="partyno" class="form-control" id="exampleInputEmail1" readonly>
                    </div>
                    @endif
                    @if(!((session()->get('logininfo.Type'))=="Web"))
                    <div class="form-group">
                      <label for="exampleInputEmail1">Party Name</label>
                      
                      <select name="partyname" class="form-control select2bs4">
                        @foreach($partyname as $partyname)
                        <option value="{{$partyname->PartyName}}">{{$partyname->PartyName}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                    <div class="form-group">
                      <label for="exampleInputPassword1">Date From</label>
                      <input type="date" name="datefrom" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Date To</label>
                      <input type="date" name="dateto" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              @endif
              @if($data==null)
              <label for="" >{{$msg}}</label>
              @endif
              @if($data!=null)
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Party Ledger</h3>
                </div>
                <!-- /.card-header -->
               
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Serial No.</th>
                      <th>trDate</th>
                      <th>InvType</th>
                      <th>InvNo</th>
                      <th>Narration</th>
                      <th>Debit</th>
                      <th>Credit</th>
                      <th>Balance</th>
                      <th>BalType</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                      <tr>
                      <td>{{$dt->SerialNo}}</td>
                      <td>{{date('d-m-Y', strtotime($dt->trDate))}}</td>
                      <td>{{$dt->InvType}}</td>
                      <td>{{$dt->InvNo}}</td>
                      <td>{{$dt->Narration}}</td>
                      <td>{{number_format($dt->Debit,2)}}</td>
                      <td>{{number_format($dt->Credit,2)}}</td>
                      <td>{{number_format($dt->Balance,2)}}</td>
                      <td>{{$dt->BalType}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              @endif
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
