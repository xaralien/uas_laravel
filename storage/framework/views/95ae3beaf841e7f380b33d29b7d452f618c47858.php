<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/waves.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/morris.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/fa/css/font-awesome.min.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">  
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="logo d-flex justify-content-center">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?> 
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarSupportedContent " style="padding: 10px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <button class="bars waves-effect">
                            <i class="fa fa-bars"></i>
                        </button>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <?php if(Route::has('register')): ?>
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
        </nav>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo url('/') ?>" class="side-link waves-effect">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('/') ?>/gudang" class="side-link waves-effect">
                            <i class="fa fa-book"></i>
                            <span>Master Gudang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('/') ?>/barang" class="side-link waves-effect">
                            <i class="fa fa-user"></i>
                            <span>Master Barang</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <main class="py-4">
            <div class="admin">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
     <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script type="text/javascript" src="<?php echo e(asset('js/waves.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/morris.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/raphael.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
    
    <script type="text/javascript">
        
    </script>
</body>
</html>
        