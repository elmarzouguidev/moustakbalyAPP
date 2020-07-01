<div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Filters :  </h4>
              </div>
              <div class="card-body ">
                <form method="get" action="" class="form-horizontal">
                   
                  <div class="row">
                  
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-3">
                          <label class="col-sm-2 col-form-label">CODE</label>
                        <div class="form-group">
                        <input type="text" name="filter[codePer]" value="" class="form-control">
                        </div>
                      </div>
                        <div class="col-md-3">
                            <label class="col-sm-2 col-form-label">Date Nissance</label>
                          <div class="form-group">
                          <input type="text" name="filter[dateNissance]" value="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                            <label class="col-sm-2 col-form-label">ville</label>
                          <div class="form-group">
                            <input type="text" name="filter[ville]" value="{{old('filter[ville]')}}" class="form-control">
                          </div>
                        </div>
              
                        <div class="col-md-3">
                            <label class="col-sm-2 col-form-label">sexe</label>
                          <div class="form-group">
                            <input type="text" name="filter[sexe]" class="form-control" >
                          </div>
                        </div>
                     
                      </div>
                   
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">filter</button>
                         <a href="{{route('admin.inscriptions')}}" class="btn btn-info btn-round">Reset Filter</a>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>