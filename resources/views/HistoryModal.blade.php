
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Product History
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Product History</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      
            <div class="container">
                      <form   action="{{url('/history')}}"  method="get" class="">
                       
                        <div class="form-group">
                          <label for="">Item Number</label>
                          <input  id="search" name="search" class="form-control" type="text">
                        </div>
                          <hr>
                          <label>Please Select Invoice Type</label>
                          <hr>
                          <div class="form-group">
                          <input  id="" name="radio"  type="Radio" value="Sales" >
                          <label for="" >Sales</label >
                          </div>
                          <div class="form-group">
                          <input  id="" name="radio" type="Radio" value="Purchase" >
                          <label for="" >Purchase</label>
                          </div>
                          <div class="form-group">
                          <input  id="" name="radio" type="Radio" value="Sales Return" >
                          <label for="" >Sales Return</label>
                          </div>
                          <div class="form-group">
                          <input  id="" name="radio"  type="Radio" value="Purchase Return" >
                          <label for="" >Purchase Return</label>
                          </div>
                          <div class="form-group">
                            <input  id="" name="radio"  type="Radio" value="All" >
                            <label for="" >All</label>
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