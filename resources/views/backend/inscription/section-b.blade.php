<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Inscription Lists</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                          <th class="text-center">
                            Code
                          </th>
                          <th>
                            Nom complet
                          </th>
                          <th>
                            Date Nissance
                          </th>
                          <th class="text-center">
                            Sexe
                          </th>
                          <th class="text-right">
                            Telephone
                          </th>
                          <th class="text-right">
                            Email
                          </th>
                          <th class="text-right">
                            Adresse
                          </th>
                          <th class="text-right">
                            Ville
                          </th>
                          <th class="text-right">
                            Diplome
                          </th>
                          <th class="text-right">
                            CNSS
                          </th>
                          <th class="text-right">
                            Date Cnss
                          </th>
                          <th class="text-right">
                            Cart CNI
                          </th>
                          <th class="text-right">
                            Actions
                          </th>
                    </tr>
                  </thead>
        
                  <tbody>
                    @foreach($customers as $customer)
                    <tr>
                      <td class="text-center">
                        {{$customer->codePer}}
                      </td>
                      <td>
                        {{$customer->nomComplet}}
                      </td>
                      <td>
                        {{$customer->dateNissance}}
                      </td>
                      <td class="text-center">
                        {{$customer->sexe}}
                      </td>
                      <td class="text-right">
                        {{$customer->telephone}}
                      </td>
                      <td class="text-right">
                        {{$customer->email}}
                      </td>
                      <td class="text-right">
                        {{$customer->adresse}}
                      </td>
                      <td class="text-right">
                        {{$customer->ville}}
                      </td>
                      <td class="text-right">
                        {{$customer->diplome}}
                      </td>
                      <td class="text-right">
                        {{$customer->cnss}}
                      </td>
                      <td class="text-right">
                        {{$customer->dateCnss}}
                      </td>
                      <td class="text-right">
                        {{$customer->cartCNI}}
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
              </div><!-- end content-->
            </div><!--  end card  -->
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->