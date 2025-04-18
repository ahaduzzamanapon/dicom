
<li class="nav-item">
    <a class="nav-link <?php echo Request::is('/') ? 'active' : ''; ?>" aria-current="page" href="<?php echo e(url('/')); ?>" >
        <i class="icon im im-icon-Home"></i>
        <span class="item-name">Dashboard</span>
    </a>
</li>
<?php if(can('patientreports')): ?>

<li class="nav-item">
    <a class="nav-link <?php echo Request::is('patientreports') ? 'active' : ''; ?>" aria-current="page" href="<?php echo e(route('patientreports.index')); ?>" >
        <i class="icon im im-icon-Radioactive"></i>
        <span class="item-name">Patient Reports</span>
    </a>
</li>

<?php endif; ?>


<?php if(can('user_management')): ?>
<li class="nav-item">
    <a class="nav-link <?php echo (Request::is('users*') || Request::is('roleAndPermissions*') ? 'active' : '' ); ?>" data-bs-toggle="collapse" href="#users_menu" role="button" aria-expanded="false" aria-controls="users_menu">
        <i class="icon im im-icon-User"></i>
        <span class="item-name">Manage Users</span>
        <i class="right-icon im im-icon-Arrow-Right"></i>
    </a>
    <ul class="sub-nav collapse <?php echo (Request::is('users*') || Request::is('roleAndPermissions*') ? 'show' : ''); ?>" id="users_menu" data-bs-parent="#sidebar-menu">
        <?php if(can('user')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('users*') ? 'active' : ''; ?>" href="<?php echo e(route('users.index')); ?>">
                <i class="icon im im-icon-User"></i>
                <i class="sidenav-mini-icon"> U </i>
                <span class="item-name">Users</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(can('roll_and_permission')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('roleAndPermissions*') ? 'active' : ''; ?>" href="<?php echo e(route('roleAndPermissions.index')); ?>">
                <i class="icon im im-icon-Security-Settings"></i>
                <i class="sidenav-mini-icon"> R </i>
                <span class="item-name">Role Management</span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>


<?php if(can('settings')): ?>
<li class="nav-item">
    <a class="nav-link <?php echo (Request::is('siteSettings*') || Request::is('districts*') ? 'active' : '' )|| (Request::is('designations*') || Request::is('chairmen*') || Request::is('notices*') ? 'active' : '' ); ?>" data-bs-toggle="collapse" href="#settings_menu" role="button" aria-expanded="false" aria-controls="settings_menu">
        <i class="icon im im-icon-Gear"></i>
        <span class="item-name">Settings</span>
        <i class="right-icon im im-icon-Arrow-Right"></i>
    </a>
    <ul class="sub-nav collapse <?php echo (Request::is('siteSettings*')|| Request::is('designations*')  || Request::is('districts*') || Request::is('chairmen*') || Request::is('notices*') ? 'show' : '' ); ?>" id="settings_menu" data-bs-parent="#sidebar-menu">
        <?php if(can('site_settings')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('siteSettings*') ? 'active' : ''; ?>" href="<?php echo e(route('siteSettings.index')); ?>">
                <i class="icon im im-icon-Settings-Window"></i>
                <i class="sidenav-mini-icon"> S </i>
                <span class="item-name">Site Settings</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(can('designations')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('designations*') ? 'active' : ''; ?>" href="<?php echo e(route('designations.index')); ?>">
                <i class="icon im im-icon-Teacher"></i>
                <i class="sidenav-mini-icon"> D </i>
                <span class="item-name">Designations</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(can('districts')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('districts*') ? 'active' : ''; ?>" href="<?php echo e(route('districts.index')); ?>">
                <i class="icon im im-icon-Structure"></i>
                <i class="sidenav-mini-icon"> D </i>
                <span class="item-name">Districts</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(can('notice')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('notices*') ? 'active' : ''; ?>" href="<?php echo e(route('notices.index')); ?>">
                <i class="icon im im-icon-Bell"></i>
                <i class="sidenav-mini-icon"> N </i>
                <span class="item-name">Notices</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(can('image_categories')): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo Request::is('imageCategories*') ? 'active' : ''; ?>" href="<?php echo e(route('imageCategories.index')); ?>">
                <i class="icon im im-icon-Structure"></i>
                <i class="sidenav-mini-icon"> C </i>
                <span class="item-name">Image Categories</span>
            </a>
        </li>
        <?php endif; ?>
       
        
    </ul>
</li>
<?php endif; ?>
<?php /**PATH C:\laragon\www\dicom\resources\views/layouts/leftmenu.blade.php ENDPATH**/ ?>