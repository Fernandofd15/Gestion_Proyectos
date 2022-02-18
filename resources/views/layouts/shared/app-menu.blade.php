<ul class="metismenu" id="menu-bar">
    <li class="menu-title">NAVEGACIÓN</li>

    <li>
        <a href="{{ route('home') }}" class="{{ (request()->is('dashboard/home*')) ? 'active' : '' }}">
            <i data-feather="home"></i>
            <span> Inicio </span>
        </a>
    </li>
    @can('usuario')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Usuario </span>
        </a>
    </li>
    @endcan
    @can('menu_Desarrollador')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Mis Tareas </span>
        </a>
    </li>
    @endcan
    @can('menu_Desarrollador')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Mis Proyectos </span>
        </a>
    </li>
    @endcan
    
    @can('menu_Gerente')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Crear Tareas </span>
        </a>
    </li>
    @endcan
    @can('menu_Gerente')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Crear Proyectos </span>
        </a>
    </li>
    @endcan
    @can('menu_Gerente')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Asignar Tareas </span>
        </a>
    </li>
    @endcan
    @can('menu_Gerente')
    <li>
        <a href="{{ route('user') }}" class="{{ (request()->is('dashboard/user*')) ? 'active' : '' }}">
            <i data-feather="user"></i>
            <span> Ver Avances </span>
        </a>
    </li>
    @endcan
    @can('config')
    <li>
        <a href="javascript: void(0);" class="{{ (request()->is('dashboard/settings/*')) ? 'active' : '' }}">
            <i data-feather="settings"></i>
            <span> Configuración </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" class="{{ (request()->is('dashboard/settings/*')) ? 'active' : '' }}">
            <li>
                <a href="{{ route('settings') }}">Sistema</a>
            </li>
        </ul>
    </li>
    @endcan

</ul>