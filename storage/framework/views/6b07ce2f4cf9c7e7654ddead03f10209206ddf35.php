<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(asset('backend/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?> </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
   

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item ">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              
            </p>
          </a>
          
        </li>

        <?php if(auth()->user()->role=='Admin'): ?>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              User Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/all-user')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/add-user-index')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add User</p>
              </a>
            </li>
            
          
          
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/all-user-material')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>all material</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/add-user-material')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>add material</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/view-type')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(URL::to('/show-map')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>charts graphique</p>
              </a>
            </li>
            
            
          </ul>
        </li>
       
        
      
    
        

        <?php endif; ?>



        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
      
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>

            
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/backend/layouts/sideBar.blade.php ENDPATH**/ ?>