 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/images/logots.png') ?>" alt="logo" class="img-fluid w-75 shadow-lg">
            
         </div>
         <div class="sidebar-brand-text mx-3">Tiga Serangkai</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="index.html">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('cuti') ?>">
             <i class="fas fa-fw fa-calendar"></i>
             <span>cuti</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('pegawai') ?>">
             <i class="fas fa-fw fa-users"></i>
             <span>Pegawai</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user') ?>">
             <i class="fas fa-fw fa-user-cog"></i>
             <span>User</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('level') ?>">
             <i class="fas fa-fw fa-th"></i>
             <span>Level</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('detailLevel') ?>">
             <i class="fas fa-fw fa-cogs"></i>
             <span>Detail Level</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('jeniscuti') ?>">
             <i class="fas fa-fw fa-list-alt"></i>
             <span>Jenis Cuti</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->