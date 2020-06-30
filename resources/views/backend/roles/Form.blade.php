<div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Ajouter Roles :  </h4>
              </div>
              <div class="card-body ">
              <form method="post" action="{{route('admin.role')}}" class="form-horizontal">
                   
                  <div class="row">
                   @csrf
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-3">
                            <label class="col-sm-2 col-form-label">Nom </label>
                          <div class="form-group">
                          <input type="text" name="name" value="{{old('name')}}" class="form-control">
                          </div>
                        </div>
                      </div>
                   
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">Ajouter</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>