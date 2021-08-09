@extends('base')
@section('section')

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

@endsection