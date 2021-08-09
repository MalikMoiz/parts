@extends('base')
@section('section')
    
    <div class="content-wrapper">
        <br>
        @include('historymodal')
        <br>
        <br>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Details</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <tbody>
                    @if($result2!=null)
                    @foreach($result2 as $rs2)
                      <tr>
                        <td><label>Item No.</label></td>
                        <td>{{$rs2->ItemNo}}</td>
                        <td><label>Item Name</label></td>
                        <td>{{$rs2->EngName}}</td>
                        <td><label>Manufacturer</label></td>
                        <td>{{$rs2->Manufacturer}}</td>
                        <td><label>Category</label></td>
                        <td>{{$rs2->Category}}</td>
                        <td><label>Size</label></td>
                        <td>{{$rs2->Size}}</td>
                        <td><label>Make</label></td>
                        <td>{{$rs2->Make}}</td>
                        <td><label>Model</label></td>
                        <td>{{$rs2->Model}}</td>
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
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product History</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Inv. No.</th>
                        <th>Inv. Type</th>
                        <th>Date</th>
                        <th>Party No.</th>
                        <th>Party Name</th>
                        <th>Item No.</th>
                        <th>Item Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Fin Year</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($result!=null)
                    @foreach($result as $rs)
                      <tr>
                        <td>{{$rs->InvNo}}</td>
                        <td>{{$rs->InvType}}</td>
                        <td>{{$rs->tDate}}</td>
                        <td>{{$rs->PartyNo}}</td>
                        <td>{{$rs->PartyName}}</td>
                        <td>{{$rs->ItemNo}}</td>
                        <td>{{$rs->ItemName}}</td>
                        <td>{{$rs->Qty}}</td>
                        <td>{{$rs->Price}}</td>
                        <td>{{$rs->FinYear}}</td>
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
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Price Summary</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <tbody>
                    @if($result2!=null)
                      <tr>
                        <td><label>Sales Min Price</label></td>
                        <td>{{$rs2->SMinPr}}</td>
                        <td><label>Sales Max Price</label></td>
                        <td>{{$rs2->SMaxPr}}</td>
                        <td><label>Sales Avg Price</label></td>
                        <td>{{$rs2->SAvgPr}}</td>
                        <td><label>Sales Qty</label></td>
                        <td>{{$rs2->SQty}}</td>
                      </tr>
                      <tr>
                        <td><label>Purchase Min Price</label></td>
                        <td>{{$rs2->PMinPr}}</td>
                        <td><label>Purchase Max Price</label></td>
                        <td>{{$rs2->PMaxPr}}</td>
                        <td><label>Purchase Avg Price</label></td>
                        <td>{{$rs2->PAvgPr}}</td>
                        <td><label>Purchase Qty</label></td>
                        <td>{{$rs2->PQty}}</td>
                      </tr>
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

    @endsection