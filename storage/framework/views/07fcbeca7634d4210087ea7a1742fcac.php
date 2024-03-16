<?php $__env->startSection("footer"); ?>
    <footer class="footer">
        <div class="container">
            <div class="social-network-block footer-social-network-block">

                <a href="<?php echo e(route("redirect:btn_name", "twitter")); ?>"
                   class="instagram-bg social-network-block__item-link">
                    <img src="img/icon/social/i_instagram.svg"
                         alt="instagram"
                         class="social-network-block__item-img">
                </a>

                <a href="<?php echo e(route("redirect:btn_name", "instagram")); ?>"
                   class="twiter-bg social-network-block__item-link">
                    <img src="img/icon/social/i_twiter.svg" alt="twiter"
                         class="social-network-block__item-img">
                </a>


            </div>

            <address class="footer-contact" id="contactSection">
                    <span class="footer-contact_for_contact">
                        for contact:
                    </span>
                <a href="" class="footer-contact__email"
                   onclick="copyToClipboard(event)">
                    Piar@dianarider.com
                </a>
                <div id="notification" style="display: none;">Copied to
                    clipboard!</div>
            </address>

            <span class="footer__made-with">
                    MADE WITH
                    <img src="/img/icon/i_heart.svg"
                         class="footer__made-with__icon" alt="heart">
                </span>
        </div>
    </footer>

<?php $__env->stopSection(); ?>
<?php /**PATH /Users/nikita/PhpstormProjects/hans/resources/views/elements/footer.blade.php ENDPATH**/ ?>