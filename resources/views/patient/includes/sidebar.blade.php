<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class             with font-awesome or any other icon font library -->



            <li class="nav-item">
                <a href="{{ route('patient.account.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Личный кабинет </p>
                    </a>
            </li>



<!--
            <li class="nav-item">
                <a href="{{ route('patient.record.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Записи на приём 1</p>
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.record2.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Записи на приём 2</p>
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.record3.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Записи на приём 3</p>
                    </a>
            </li>
-->

            <li class="nav-item">
                <a href="{{ route('patient.record4.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Записи на приём</p>
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> На главную страницу</p>
                    </a>
            </li>

        </ul>
    </div>

    <!-- /.sidebar -->
</aside>
