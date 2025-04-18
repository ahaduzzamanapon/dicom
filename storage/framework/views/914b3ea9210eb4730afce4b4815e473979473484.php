<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php
    if (!Auth::check()) {
        // dd("Please login first");
        // redirect(route('welcome'));
    }
    $setting = DB::table('sitesettings')->first();
?>

    <title><?php echo e(!empty($setting) ? $setting->name : 'Title'); ?> -
      <?php echo e(!empty($setting) ? $setting->slogan : 'Slogan'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/core/libs.min.css')); ?>" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/aos/dist/aos.css')); ?>" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/hope-ui.min.css?v=5.0.0')); ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.min.css?v=5.0.0')); ?>" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/customizer.min.css?v=5.0.0')); ?>" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/rtl.min.css?v=5.0.0')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('fonts/iconmind.css')); ?>">

    <?php echo $__env->make('layouts/datatables_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <style>
      .btn:hover {
        color: #ffffff !important;
        background-color: #2962ff !important;
        border-color: #2962ff !important;
      }
      .nav-item {
          margin-top: 7px !important;
      }
      * {
            padding: 0;
            margin: 0;
            font-family: monospace;
            font-size: 12px;
        }
        .border {
            border: var(--bs-border-width) var(--bs-border-style) #4e4e4e !important;
        }
    </style>

</head>

    <?php if(Auth::user()): ?>
        <?php
            $user = Auth::user();
            \Illuminate\Support\Facades\DB::table('users')->where('id', $user->id)->update(['last_activity' => \Illuminate\Support\Carbon::now()]);
        ?>
    <?php endif; ?>



<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>

    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                <div class="logo-main">

                </div>
                <h4 class="logo-title"><?php echo e(!empty($setting) ? $setting->name : 'Title'); ?></h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <?php echo $__env->make('layouts/leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="../dashboard/index.html" class="navbar-brand">
                        <h4 class="logo-title">Hope UI</h4>
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <!-- Navbar Toggle Button -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
    <span class="mt-2 navbar-toggler-bar bar1"></span>
    <span class="navbar-toggler-bar bar2"></span>
    <span class="navbar-toggler-bar bar3"></span>
</span>
</button>

<!-- Navbar Content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
    <li class="nav-item dropdown custom-drop">
        <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo e(asset('assets/images/avatars/01.png')); ?>" alt="User-Profile"
                class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded" />
            <div class="caption ms-3 d-none d-md-block">
                <h6 class="mb-0 caption-title">
                    <?php echo e(Auth::user()->name ?? 'Guest'); ?>

                </h6>
                <p class="mb-0 caption-sub-title">
                    <?php echo e(Auth::user()->role ?? 'User'); ?>

                </p>
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <?php if(!empty(Auth::user()) && Auth::user()->member_id != null): ?>
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('members.details', ['id' => Auth::user()->member_id])); ?>">
                        Profile
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        </ul>
    </li>
</ul>
</div>

                </div>
            </nav>
            <!-- Nav Header Component End -->
            <!--Nav End-->
            <div style="margin: 8px;height: 100%;width: 98%;">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- Footer Section Start -->
        
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('assets/js/core/libs.min.js')); ?>"></script>

    <!-- External Library Bundle Script -->
    <script src="<?php echo e(asset('assets/js/core/external.min.js')); ?>"></script>

    <!-- Widgetchart Script -->
    <script src="<?php echo e(asset('assets/js/charts/widgetcharts.js')); ?>"></script>

    <!-- mapchart Script -->
    <script src="<?php echo e(asset('assets/js/charts/vectore-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/charts/dashboard.js')); ?>"></script>

    <!-- fslightbox Script -->
    <script src="<?php echo e(asset('assets/js/plugins/fslightbox.js')); ?>"></script>

    <!-- Settings Script -->
    <script src="<?php echo e(asset('assets/js/plugins/setting.js')); ?>"></script>

    <!-- Slider-tab Script -->
    <script src="<?php echo e(asset('assets/js/plugins/slider-tabs.js')); ?>"></script>

    <!-- Form Wizard Script -->
    <script src="<?php echo e(asset('assets/js/plugins/form-wizard.js')); ?>"></script>

    <!-- AOS Animation Plugin-->
    <script src="<?php echo e(asset('assets/vendor/aos/dist/aos.js')); ?>"></script>

    <!-- App Script -->
    <script src="<?php echo e(asset('assets/js/hope-ui.js')); ?>" defer></script>

    <?php echo $__env->make('layouts/datatables_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('script'); ?>




</body>

</html>
<?php /**PATH C:\laragon\www\dicom\resources\views/layouts/default.blade.php ENDPATH**/ ?>