@extends('base')

@section('section')
    

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

    @endsection