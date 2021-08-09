
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
        Search Product
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Search Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      
            <div class="container">
                      <form   action="{{url('/search')}}"  method="get" class="">
                       
                        <div class="form-group">
                            
              
                          <label for="">Category</label>
                          <input  id="search" name="category" class="form-control" type="text">
                          <label for="">Manufacturer</label>
                          <input  id="search" name="manufacturer" class="form-control" type="text">
                          <label for="">Car Name</label>
                          <input  id="search" name="make" class="form-control" type="text">
                          
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