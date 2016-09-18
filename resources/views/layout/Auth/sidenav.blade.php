<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->


          <!-- search form (Optional) -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            
            @if(Auth::user()->admin)
              <li class="{{ set_active(['page', 'dashboard']) }}">
                  <a href="{{url('/dashboard')}}">
                      <i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span>
                  </a>
              </li>
              <li class="{{ set_active(['page', 'request']) }}">
                  <a href="{{url('/request')}}">
                      <i class="glyphicon glyphicon-comment"></i> <span>Request(s)</span>
                  </a>
              </li>
              
              <li class="treeview {{ set_active(['page', 'file/*']) }}">
                  <a href="#"><i class="glyphicon glyphicon-file"></i> <span >File(s) </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu" style="width:auto">
                      <li class="treeview">
                        <a href="#"> <span>B.I.R. Form(s) </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          @foreach($filetype as $filetypes)
                              @if($filetypes->type == 1)
                          <li>
                              <a href="{{url('/file',$filetypes->id)}}">{{$filetypes->form_title}}</a>
                          </li>
                              @endif    
                          @endforeach
                        </ul>
                      </li>
                      <!--end bir  -->
                      <li class="treeview">
                        <a href="#"> <span>S.E.C. Form(s)</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          @foreach($filetype as $filetypes)
                              @if($filetypes->type == 2)
                          <li>
                              <a href="{{url('/file',$filetypes->id)}}">{{$filetypes->form_title}}</a>
                          </li>
                              @endif    
                          @endforeach
                        </ul>
                      </li>
                      <!-- 2nd treeview end -->
                      <li class="treeview">
                        <a href="#"> <span>Licenses & Permits / Others</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                          @foreach($filetype as $filetypes)
                              @if($filetypes->type == 3)
                          <li>
                              <a href="{{url('/file',$filetypes->id)}}">{{$filetypes->form_title}}</a>
                          </li>
                              @endif    
                          @endforeach
                        </ul>
                      </li>
                      <!-- 2nd treeview end -->                    
                    </ul>
              </li>
              <li class="treeview {{ set_active(['company', 'system-users/*']) }}">
                  <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i> <span> Company-Client(s)</span> 
                    <i class="fa fa-angle-left pull-right"></i> 
                  </a>
                    <ul class="treeview-menu" style="width:auto"> 

                          <li>
                              <a href="{{url('/add-company')}}"><span> Add Company-Client(s)</span></a>
                          </li>
                         

                          <li>
                              <a href="{{url('/company')}}"><span> Show All Company-Client(s)</span></a>
                          </li>

                    </ul>                   
              </li>
              <li class="treeview {{ set_active(['page', 'system-users/*']) }}">
                  <a href="#"><i class="glyphicon glyphicon-user"></i> <span> System User(s)</span> <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="treeview-menu" style="width:auto">
                          <li>
                              <a href="{{url('/system-users/add-new-user')}}">Add User</a>
                          </li>                    
                          <li>
                              <a href="{{url('/system-users/show-all')}}">Show All User(s)</a>
                          </li>                                             
                    </ul>                   
              </li>
              <li>
                  <a href="#">
                      <i class="glyphicon glyphicon-globe"></i> <span> Web Page(s)</span>
                  </a>
              </li>            
            @else
              <li class="{{ set_active(['page', 'my-company-profile']) }}">
                  <a href="{{url('/my-company-profile')}}"><i class="glyphicon glyphicon-briefcase"></i> <span>My Company Profile</span></a>
              </li>
              <li class="{{ set_active(['page', 'my-files']) }}">
                  <a href="{{url('/my-files')}}">
                      <i class="glyphicon glyphicon-folder-open"></i> <span> My Company File(s)</span>
                  </a>
              </li>

              <li class="{{ set_active(['page', 'my-request/*']) }}">
                <a href="#">
                  <i class="glyphicon glyphicon-comment"></i> <span> My Request(s)</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                    <ul class="treeview-menu" style="width:auto">
                          <li>
                              <a href="{{url('/my-request/add')}}">Create New Request</a>
                          </li>                    
                          <li>
                              <a href="{{url('/my-request/showall')}}">Show All Request(s)</a>
                          </li>
                          <li>
                              <a href="{{url('/my-request/approved')}}">Approved Request(s)</a>
                          </li>
                          <li>
                              <a href="{{url('/my-request/pending')}}">Pending Request(s)</a>
                          </li>
                          <li>
                              <a href="{{url('/my-request/rejected')}}">Rejected Request(s)</a>
                          </li>                                                                         
                    </ul>


              </li>            

            @endif  
              <li class="treeview {{ set_active(['page', 'my-blog/*']) }}">

                  <a href="#"><i class="fa fa-rss"></i> <span> My Blog(s)</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu" style="width:auto">
                          <li>
                              <a href="{{url('/my-blog/create-new-post')}}">Create New Post</a>
                          </li>                    
                          <li>
                              <a href="{{url('/my-blog/showall')}}">Show All Posts</a>
                          </li>
                          <li>
                              <a href="{{url('/my-blog/my-posts')}}">Published Posts</a>
                          </li>
                          <li>
                              <a href="{{url('/my-blog/my-drafts')}}">Posts in Draft</a>
                          </li>                                              
                    </ul>                  
              </li>                                
<!--             <li><a href="#"><i class="glyphicon glyphicon-paste"></i> <span>Purchase Request</span></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Requisition & Issue Slip</span></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-bookmark"></i> <span>Project Procurement <br> Management Plan</span></a></li> -->
            <!-- <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li> -->
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>