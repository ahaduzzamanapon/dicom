<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" />
    <!--page level css -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">


    <link href="<?php echo e(asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/auth.css')); ?>" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-up" class="login_backimg">
    <div class="container mt-3rem">
        <div class="card ">
            <div class="row ">
                <div class="col-lg-6 col-12 card-align bg-white">
                    <div class="row">
                        <div class="col-12  signup-form">
                            <div class="card-header border-bottom-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center">
                                            <?php
                                            $setting = DB::table('sitesettings')->first();
                                            ?>

                                            <span><?php echo e(!empty($setting) ? $setting->name : 'Title'); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-12 signup-header-text">
                                        <span class="active fs-18">SIGN IN</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo e(route('login')); ?>" id="authentication" method="post"
                                            class="sign_validator">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="email"> <?php echo e(__('E-Mail Address')); ?></label>
                                                <input type="email"
                                                    class="form-control  form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="email" name="email" placeholder="E-mail"
                                                    value="<?php echo e(old('email')); ?>" required />
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>


                                            <div class="form-group">
                                                <label for="password"><?php echo e(__('Password')); ?></label>
                                                <input type="password"
                                                    class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="password" name="password" placeholder="Password" required />

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group checkbox d-none">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="remember"
                                                        id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label class="custom-control-label" for="remember">Remember
                                                        Me</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <input type="submit" value="<?php echo e(__('Sign In')); ?>"
                                                    class="btn btn-primary btn-block" />
                                            </div>

                                        </form>
                                        <div class="d-none">New Member?
                                            <a href="<?php echo e(route('register')); ?>">
                                                <strong>Sign Up</strong>
                                            </a>
                                            | <small><a href="<?php echo e(route('password.request')); ?>"
                                                    class="text-decoration-none text-muted">Forgot your
                                                    password?</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <!-- begining of page level js -->
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>

    <script src="<?php echo e(asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendors/jquery.backstretch/js/jquery.backstretch.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/pages/register.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\dicom\resources\views/auth/login.blade.php ENDPATH**/ ?>