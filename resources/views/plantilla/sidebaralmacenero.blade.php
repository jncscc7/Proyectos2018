<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li @click="menu=0" class="nav-item">
                <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
            </li>
            <li class="nav-title">
                Acciones
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i> Almacén</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=5" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-picture"></i> Categorías</a>
                    </li>

                    <li @click="menu=6" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-present"></i> Artículos</a>
                    </li>

                    <li @click="menu=7" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-present"></i> Movimientos</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Compras</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=8" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-wallet"></i> Ingresos</a>
                    </li>

                    <li @click="menu=9" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                    </li>

                    <li @click="menu=10" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bag"></i> Orden de Compra</a>
                    </li>

                </ul>
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=15" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ingresos</a>
                    </li>

                    <li @click="menu=17" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte xxx</a>
                    </li>


                </ul>
            </li>

            
            <li @click="menu=18" class="nav-item">
                <a class="nav-link" href="main.html"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
            </li>

            <li @click="menu=19" class="nav-item">
                <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
            </li>
        </ul>
        
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div> 