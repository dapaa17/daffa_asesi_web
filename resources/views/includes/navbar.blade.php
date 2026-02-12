<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="navbar-brand" href="/dashboard">Dashboard</a>
            <li class="nav-item">
                <a class="nav-link" href="/pelanggan">Pelanggan</a>&nbsp;
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/barang">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/penjualan">Penjualan</a>
            </li>
        </ul>
        <form action="/logout" method="post">
            @csrf
            
        </form>
    </div>
</nav>