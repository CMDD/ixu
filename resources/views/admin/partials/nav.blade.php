<ul class="sidebar-menu" data-widget="tree">
  <li class="header">NAVEGACIÓN</li>
  <!-- Optionally, you can add icons to the links -->
<li><a href="{{url('ixtus')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

  <li class="treeview">
    <a href="#"><i class="fa fa-book"></i> <span>Suscripcion</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li ><router-link to="/suscripcion/lista" ><i class="fa fa-eye" ></i> Mis Suscripciones</a></router-link></li>
      <li ><router-link to="/suscripcion/crear" ><i class="fa fa-pencil" ></i>Crear Suscripcion</router-link> </li>
    </ul>

  </li>
  <li class="treeview {{ request()->is('articulos') ? 'active' : ''}}">
    <a href="#"><i class="fa fa-bars"></i> <span>Titulares</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li {{ request()->is('articulos') ? 'class=active' : ''}}><a href=""><i class="fa fa-eye" ></i> Mis Titulares</a></li>
      <li><a href="{{url('titulares/crear')}}"> <i class="fa fa-pencil" ></i> Crear Titulares</a></li>
    </ul>
  </li>
</ul>
