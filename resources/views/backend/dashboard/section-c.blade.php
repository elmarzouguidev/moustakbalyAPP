<div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
        
          <p class="card-category">Tous les villes</p>
        </div>
        <div class="card-body ">
          <div class="row">
            <div class="col-md-6">
              <div class="table-responsive">
                
                <table class="table">
                  <tbody>
                  
                    @foreach($villes as $ville)
                      <tr>
                        <td>
                          <div class="flag">
                            <img src="{{asset('assets/ma.png')}}" width="32" height="32">
                          </div>
                        </td>
                        <td>{{$ville->ville}}</td>
                        <td class="text-right">
                          {{$allCounters[$loop->index]}}
                        </td>

                        <td class="text-right">
                          {{($allCounters[$loop->index]/$counters['total'])*100}} %
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6 ml-auto mr-auto">
              <div id="worldMap" style="height: 300px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>