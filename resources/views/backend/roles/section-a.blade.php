<div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Roles</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">
                    #
                  </th>
                  <th>
                    Nom du role
                  </th>
                </thead>
                <tbody>
                  @foreach($roles as $role)
                    <tr>
                      <td class="text-center">
                        {{$role->id}}
                      </td>
                      <td>
                        {{$role->name}}
                      </td>
              
                      <td class="text-right">
                      <form action="{{route('admin.action.delete')}}" method="post">
                        @method('DELETE')
                        @csrf
                         <input type="hidden" name="role_id" value="{{$role->id}}">
                         <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                       </form>
                  
                      </td>
                    </tr>
                  @endforeach
         
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Persmission</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th class="text-center">
                  #
                </th>
                <th>
                  Nom
                </th>
              </thead>
              <tbody>
                @foreach($permissions as $permission)
                  <tr>
                    <td class="text-center">
                      {{$permission->id}}
                    </td>
                    <td>
                      {{$permission->name}}
                    </td>
            
                    <td class="text-right">
                 
                      <form action="{{route('admin.action.delete')}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="permission_id" value="{{$permission->id}}">
                        <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                         <i class="fa fa-trash" aria-hidden="true"></i>
                       </button>
                      </form>
                
                    </td>
                  </tr>
                @endforeach
       
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
    </div>
  </div>