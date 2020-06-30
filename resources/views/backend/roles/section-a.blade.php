<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
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
                   
                        <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                          <i class="fa fa-phone"></i>
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
    </div>
  </div>