 <?php if (strlen(session_id()) < 1) {
    session_start();
  } ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Asistencia</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3 -->
   <link rel="stylesheet" href="../public/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../public/css/font-awesome.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../public/css/_all-skins.min.css">

   <!-- DATATABLES -->
   <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
   <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet" />
   <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

 </head>

 <body class="hold-transition skin-blue sidebar-mini">
   <!-- Load Facebook SDK for JavaScript -->
   <div id="fb-root"></div>

   <!-- Your customer chat code -->
   <div class="fb-customerchat"
     attribution=setup_tool
     page_id="280144326139427"
     theme_color="#0084ff"
     logged_in_greeting="Hola! deseas compartir algún sistema o descargar ?"
     logged_out_greeting="Hola! deseas compartir algún sistema o descargar ?">
   </div>
   <div class="wrapper">

     <header class="main-header">
       <a href="escritorio.php" class="logo">
         <span class="logo-mini">T&T</span>
         <span class="logo-lg">ASISTENCIA T&T</span>
       </a>
       <nav class="navbar navbar-static-top">
         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
           <span class="sr-only">Navegación</span>
         </a>

         <div class="navbar-custom-menu">
           <ul class="nav navbar-nav">

             <li class="dropdown user user-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                 <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
               </a>
               <ul class="dropdown-menu">
                 <li class="user-header">
                   <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">

                   <p>
                     <?php echo $_SESSION['nombre'] .
                        ' ' .
                        $_SESSION['departamento']; ?>
                     <small></small>
                   </p>
                 </li>
                 <!-- Menu Footer-->
                 <li class="user-footer">
                   <div class="pull-left">
                     <a href="#" class="btn btn-default btn-flat">Perfil</a>
                   </div>
                   <div class="pull-right">
                     <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Salir</a>
                   </div>
                 </li>
               </ul>
             </li>

           </ul>
         </div>
       </nav>
     </header>
     <aside class="main-sidebar">
       <section class="sidebar">
        
         <ul class="sidebar-menu tree" data-widget="tree">
           <li class="header">MENÚ</li>


           <li><a href="escritorio.php"><i class="fa  fa-dashboard (alias)"></i> <span>Escritorio</span></a></li>

           <!--
      <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mensaje.php"><i class="fa fa-circle-o"></i> Mensaje</a></li>
          </ul>
      </li>

-->
           <?php if ($_SESSION['tipousuario'] == 'Administrador') { ?>
             <li class="treeview">
               <a href="#">
                 <i class="fa fa-folder"></i> <span>Acceso</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">
                 <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                 <li><a href="tipousuario.php"><i class="fa fa-circle-o"></i> Tipo Usuario</a></li>
                 <li><a href="departamento.php"><i class="fa fa-circle-o"></i> Departamento</a></li>
               </ul>
             </li>

             <li class="treeview">
               <a href="#">
                 <i class="fa fa-folder"></i> <span>Departamento</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">
                 <li><a href="departamento.php"><i class="fa fa-circle-o"></i> Departamento</a></li>
               </ul>
             </li>

             <li class="treeview">
               <a href="#">
                 <i class="fa fa-folder"></i> <span>Asistencias</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">
                 <li><a href="asistencia.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
                 <li><a href="rptasistencia.php"><i class="fa fa-circle-o"></i> Reportes</a></li>

               </ul>
             </li>
           <?php } ?>
           <?php if ($_SESSION['tipousuario'] != 'Administrador') { ?>
             <li class="treeview">
               <a href="#">
                 <i class="fa fa-folder"></i> <span>Mis Asistencias</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">
                 <li><a href="asistenciau.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
                 <li><a href="rptasistenciau.php"><i class="fa fa-circle-o"></i> Reportes</a></li>

               </ul>
             </li>
           <?php } ?>


         </ul>
       </section>
       <!-- /.sidebar -->
     </aside>