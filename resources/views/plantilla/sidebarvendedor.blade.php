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
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-drawer"></i> Produccion</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=1" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-paper-plane"></i> Contrato</a>
                    </li>

                    <li @click="menu=2" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-paper-clip"></i> Ficha Tecnica</a>
                    </li>

                    <li @click="menu=3" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-calendar"></i> Cronogramas</a>
                    </li>

                    <li @click="menu=4" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-directions"></i> Orden de Servicio</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=11" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Ventas</a>
                    </li>

                    <li @click="menu=12" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-diamond"></i> Clientes</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                <ul class="nav-dropdown-items">

                    <li @click="menu=15" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ingresos</a>
                    </li>

                    <li @click="menu=16" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
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