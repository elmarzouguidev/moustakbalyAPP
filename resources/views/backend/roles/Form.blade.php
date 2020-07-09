<div class="row">
<div class="col-md-6">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Add Role :  </h4>
              </div>
              <div class="card-body ">
              <form method="post" action="{{route('admin.role')}}" class="form-horizontal">
                   
                  <div class="row">
                   @csrf
                    <div class="col-md-10">
                      <div class="row">
                        <div class="col-md-12">
                          
                          <div class="form-group">
                          <input type="text" name="role" value="{{old('role')}}" class="form-control" placeholder="nom du role">
                          </div>
                        </div>
                      </div>
                   
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">Add</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Add permission:  </h4>
              </div>
              <div class="card-body ">
              <form method="post" action="{{route('admin.permission.store')}}" class="form-horizontal">
                   
                  <div class="row">
                   @csrf
                    <div class="col-md-10">
                      <div class="row">
                        <div class="col-md-12">
                          
                          <div class="form-group">
                          <input type="text" name="permission" value="{{old('permission')}}" class="form-control" placeholder="nom du permission">
                          </div>
                        </div>
                      </div>
                   
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">Add</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>