<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.speciality.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Специальности </p>
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.patient.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Пациенты </p>
                    </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.service.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Услуги </p>
                    </a>
            </li>

             <li class="nav-item">
                <a href="{{ route('admin.schedule.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Расписание </p>
                    </a>
            </li>

             <li class="nav-item">
                <a href="{{ route('admin.doctor.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Врачи </p>
                    </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.record.index') }}" class="nav-link">
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

            <li class="nav-item">
                <a href="{{ route('admin.record4.index') }}" class="nav-link">
                    <i class="nav-icon far fa-folder"></i>
                        <p> Записи на приём</p>
                    </a>
            </li>

        </ul>
    </div>

    <!-- /.sidebar -->
</aside>
