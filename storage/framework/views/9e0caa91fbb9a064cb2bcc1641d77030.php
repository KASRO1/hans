<?php $__env->startSection("aside"); ?>
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <!-- Logo -->

                <!-- End Logo -->


                <!-- End Navbar Vertical Toggle -->

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">


                        <span class="dropdown-header mt-4">Страницы</span>
                        <small class="bi-three-dots nav-subtitle-replacer"></small>

                        <!-- Collapse -->
                        <div class="navbar-nav nav-compact">

                        </div>
                        <div id="navbarVerticalMenuPagesMenu">
                            <!-- Collapse -->
                            <div class="nav-item">
                                <a class="nav-link  " href="<?php echo e(route("admin")); ?>" role="button">
                                    <i class="bi-people nav-icon"></i>
                                    <span class="nav-link-title">Статистика</span>
                                </a>


                            </div>
                            <!-- End Collapse -->
                            <div class="nav-item">
                                <a class="nav-link  " href="<?php echo e(route("settings.videos")); ?>" role="button">
                                    <i class="bi-camera-video nav-icon"></i>
                                    <span class="nav-link-title">Видео</span>
                                </a>


                            </div>
                            <div class="nav-item">
                                <a class="nav-link  " href="<?php echo e(route("settings")); ?>" role="button">
                                    <i class="bi-gear nav-icon"></i>
                                    <span class="nav-link-title">Настройки</span>
                                </a>


                            </div>

                        </div>
                        <!-- End Content -->


                    </div>
                </div>
    </aside>
<?php $__env->stopSection(); ?>
<?php /**PATH /Users/nikita/PhpstormProjects/hans/resources/views/admin/elements/aside.blade.php ENDPATH**/ ?>