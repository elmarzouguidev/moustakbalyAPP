<div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Administrateurs list</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">
                    #
                  </th>
                  <th>
                    Nom complet
                  </th>
                  <th>
                    email
                  </th>

                  <th>
                    roles
                  </th>
            
                  <th class="text-right">
                    Actions
                  </th>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td class="text-center">
                        {{$user->id}}
                      </td>
                      <td>
                        {{$user->name}}
                      </td>
                      <td>
                        {{$user->email}}
                      </td>
                   
                      <td>
                       
                        @foreach($user->roles as $role)
                          <p>{{$role->name}}</p>
                        @endforeach
                      </td>
                      <td class="text-right">
                   
                        <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                          <i class="fa fa-trash-o"></i>
                        </button>
                  
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
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Ajouter</h4>
              </div>
              <div class="card-body ">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form class="form-horizontal" action="{{route('admin.users.add')}}" method="post">
                  <div class="row">
                      @csrf
                    <label class="col-md-3 col-form-label">Nom complet</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="nom complet">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Password</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-3">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" id="role">
                      @foreach($roles as $role)
                         <option value="{{$role->name}}">{{$role->name}}</option>
                      @endforeach()
                    </select>
                  </div>
                </div>
                  <div class="card-footer ">
                    <div class="row">
                      <label class="col-md-3"></label>
                      <div class="col-md-9">
                        <button type="submit" class="btn btn-info btn-round">Ajouter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
   
            </div>
          </div>
    </div>
  </div>