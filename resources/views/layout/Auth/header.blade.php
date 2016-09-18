<!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="{{ URL::asset('images/vera_logo.png') }}" style="width:50px;" class="img-responsive"/></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Vera & Associates Bookkeeping Services</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{url('/get_user_images/')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{Auth::user()->username}}</span>
                </a>
                <ul class="dropdown-menu pull-right" style="width:auto;"> 

                  <li>
                    <a href="{{url('/profile')}}"><i class="glyphicon glyphicon-cog"></i> Profile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="{{ url('/logout')}}" ><i class="glyphicon glyphicon-off"></i> Sign out</a>
                  </li>                    

                </ul>
              </li>
             
            </ul>
          </div>
        </nav>
      </header>