<div class="col-md-12">
    <div class="card ">
      <div class="card-header ">
        <h4 class="card-title">Filters :  </h4>
      </div>
      <div class="card-body ">
        <form method="post" action="{{route('advanced.excel')}}" class="form-horizontal">
            @csrf
          <div class="row">
          
            <div class="col-sm-10">
              <div class="row">
           
                <div class="col-md-3">
                 
                  <div class="form-group">
                  <input type="text" name="createdAt" placeholder="Date d'inscription exmple: 2020" class="form-control">
                  </div>
                </div>
        
              </div>
           
            </div>
            <div class="card-footer ">
                <button type="submit" class="btn btn-info btn-round">export</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>