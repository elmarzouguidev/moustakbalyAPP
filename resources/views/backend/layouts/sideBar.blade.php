<div class="sidebar" data-color="default" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
    -->
    <div class="logo">
      <a href="https://www.moustakbaly.ma/" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="{{asset('assets/img/logo-small.png')}}">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="https://www.moustakbaly.ma/" target="_blank" class="simple-text logo-normal">
       Moutakbaly
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="photo">
          <img src="{{asset('assets/img/faces/ayo-ogunseinde-2.jpg')}}" />
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" class="collapsed">
            <span>
           {{Auth::user()->name}}
              <b class="caret"></b>
            </span>
          </a>
          <div class="clearfix"></div>
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="#">
                  <span class="sidebar-mini-icon">S</span>
                  <span class="sidebar-normal">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="active">
          <a href="{{route('admin.dash')}}">
            
            <p>Dashboard</p>
          </a>
        </li>
        <li class="active">
          <a href="{{route('admin.inscriptions')}}">
            
            <p>Inscriptions</p>
          </a>
        </li>

        <li class="active">
          <a href="{{route('admin.users')}}">
            
            <p>Administrator</p>
          </a>
        </li>

        <li class="active">
          <a href="{{route('admin.role')}}">
            
            <p>Roles & Permission</p>
          </a>
        </li>

        <li class="active">
          <a href="{{route('advanced.excel')}}">
            
            <p>Advanced export import</p>
          </a>
        </li>
      </ul>
    </div>
  </div>