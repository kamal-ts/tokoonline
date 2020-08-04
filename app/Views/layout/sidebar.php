        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $title == 'Dashboard' ? 'active' : ''; ?>">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
            <li class="nav-item <?= $title == "User Data" ? 'active' : ''; ?>">
                <a class="nav-link" href="/users">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>

            <?php
            $c = "";
            $sc = "";
            if ($title == "Sub Category Data") {
                $sc = "active";
            } else if ($title == "Category Data") {
                $c = "active";
            } ?>
            <li class="nav-item <?= $c, $sc ?>">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-stream"></i>
                    <span>Category</span>
                </a>
                <div id="collapsePages" class="collapse <?= $sc != "" || $c != "" ? 'show' : ''; ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= $c; ?>" href="/category">Category</a>
                        <a class="collapse-item <?= $sc; ?>" href="/subCategory">Sub Category</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= $title == 'Product Data' || $title == 'Product Detail' || $title == 'Product Added Form' ? 'active' : ''; ?>">
                <a class="nav-link" href="/product">
                    <i class="fab fa-product-hunt"></i>
                    <span>Product</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->