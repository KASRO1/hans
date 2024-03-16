<?php echo $__env->make("elements.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("elements.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("elements.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hansel & Grettel — Amateur Porn by Real Couple </title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GRGS3J25QD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-GRGS3J25QD');
    </script>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/init.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-main.css">
    <link rel="stylesheet" href="css/media-components.css">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96201152, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/96201152" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>


<header class="header-all">
    <div class="container">
        <div class="social-network-block main-social-network-block">
            <a href="<?php echo e(route("redirect:btn_name", "instagram")); ?>" target="_blank"
               class="instagram-bg social-network-block__item-link"
               data-tooltip="Instagram">
                <img src="img/icon/social/i_instagram.svg"
                     alt="instagram"
                     class="social-network-block__item-img">
            </a>

            <a href="<?php echo e(route("redirect:btn_name", "twitter")); ?>" target="_blank"
               class="twiter-bg social-network-block__item-link"
               data-tooltip="Twitter">
                <img src="img/icon/social/i_twiter.svg" alt="twiter"
                     class="social-network-block__item-img">
            </a>

        </div>

        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__list__item">
                    <a href="<?php echo e(route("index")); ?>" class="header-nav__list__item-link-all">
                        home
                    </a>
                </li>
                <li class="header-nav__list__item">
                    <a href="#contactSection" class="header-nav__list__item-link-all">
                        contact
                    </a>
                </li>
            </ul>
        </nav>

        <div class="videos-block main-videos-block">
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route("video:id", $video['id'])); ?>"
                   class="videos-block-item videos-block-item__premium">
                    <img src="/storage/<?php echo e($video['path_preview']); ?>" alt="video" class="videos-block-item__img">



                    <div class="videos-block-item__row">
                        <div class="videos-block-item__row__name">
                            <h4 class="videos-block-item__title">
                               <?php echo e($video['title']); ?>

                            </h4>

                            <p class="videos-block-item__category">
                                <?php $__currentLoopData = json_decode($video['category']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category); ?>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>

                        <span class="videos-block-item__time">
                           <?php echo e(\Carbon\Carbon::parse($video['created_at'])->format("h:i")); ?>

                     </span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</header>


<div class="container" id="videoSection">


    <button class="btn-videos-block-show-more">
        show more
    </button>

</div>

<?php echo $__env->yieldContent("footer"); ?>
<script src="https://unpkg.com/scrollbooster@2/dist/scrollbooster.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?php /**PATH /Users/nikita/PhpstormProjects/hans/resources/views/all_videos.blade.php ENDPATH**/ ?>