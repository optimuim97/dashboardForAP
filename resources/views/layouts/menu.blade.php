<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Tableau De Bord</span>
    </a>
</li>

<li class="side-menus {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-building"></i><span>Publications</span></a>
</li>

<li class="side-menus {{ Request::is('entities*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('entities.index') }}"><i class="fas fa-building"></i><span>Entités</span></a>
</li>

<li class="side-menus {{ Request::is('entityTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('entityTypes.index') }}"><i class="fas fa-building"></i><span>Type Entités</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Produits</span></a>
</li>



