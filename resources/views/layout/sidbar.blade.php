<aside>
    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar Menu -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview ">
             <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Categories
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="{{route('categories.create')}}" class="nav-link active">
                   <i class="far fa-circle nav-icon"></i>
                   <p>add </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="{{route('categories.index')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>view </p>
                 </a>
               </li>
   
             </ul>
           </li>
           <li class="nav-item has-treeview ">
             <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Products
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="{{route('products.create')}}" class="nav-link active">
                   <i class="far fa-circle nav-icon"></i>
                   <p>add </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="{{route('products.index')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>view </p>
                 </a>
               </li>
   
             </ul>
           </li>
           <li class="nav-item has-treeview ">
             <a href="{{route('orders.index')}}" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 orders
                 <i class="right fas fa-angle-left"></i>
               </p>
             </a>
         
           </li>
           
           <li class="nav-item has-treeview ">
            <a href="{{route('users.all')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
             
            </ul>
          </li>
       </nav>
       <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
   </aside>