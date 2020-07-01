<div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Filters :  </h4>
              </div>
              <div class="card-body ">
                <form method="get" class="form-horizontal">
                   
                  <div class="row">
                  
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-3">
                         
                        <div class="form-group">
                        <input type="text" name="filter[codePer]" placeholder="CODE" class="form-control">
                        </div>
                      </div>
                        <div class="col-md-3">
                         
                          <div class="form-group">
                          <input type="text" name="filter[dateNissance]" placeholder="Date Nissance" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                            
                          <div class="form-group">
                            <input type="text" name="filter[ville]" placeholder="Ville" class="form-control">
                          </div>
                        </div>
              
                        <div class="col-md-5">
                        
                          <div class="form-group">
                            <select name="filter[sexe]" class="selectpicker">
                    
                              <option value="homme">Homme</option>
                              <option value="femme">Femme</option>
                            </select>
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