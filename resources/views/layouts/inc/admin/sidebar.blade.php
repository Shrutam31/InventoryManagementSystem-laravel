<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/category')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/product')}}">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">Show Products</a></li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="{{url('/dispatch')}}">Dispacth Supplies</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_returned_products')}}">Returned Supplies</a></li>
                
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_sent_products')}}">Sent Supplies</a></li>
<!--                 
                <li class="nav-item"> <a class="nav-link" href="{{url('')}}">Show Incoming Products</a></li>
                
                <li class="nav-item"> <a class="nav-link" href="{{url('')}}">Show Outgoing Products</a></li>
              </ul> -->
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
           
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Supplier</span>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="{{url('show_dispatched_products')}}">Supplies</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/return_supply')}}">Return Supplies</a></li>
                
                 </ul>
            </div>
          </li>
          
          
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Status</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>