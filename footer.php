<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stemchik
 */

?>
<footer class="footer">
    <div class="footer__container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="logo" loading="lazy" class="footer__logo">
        <a href="tel:+380503766285" class="footer__phone">
            <img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.svg" alt="phone" loading="lazy" width="50" height="53">
            +380 (50) 376 62 85
        </a>
        <a href="#!" target="_blank" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.svg" alt="instagram"
                                                                 loading="lazy"></a>
        <a href="#!" target="_blank" class="footer__social"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.svg" alt="facebook"
                                                                 loading="lazy"></a>
        <a href="#!" class="footer__cta btn-cta" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>франшиза</span></a>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заповніть форму</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="reg-form">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Прізвище та ім'я</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" required="">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" name="phone" id="phone" required="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                        <label class="form-check-label" for="exampleCheck1">Згода на обробку персональних
                            даних</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Надіслати">
                </form>
            </div>
        </div>
    </div>
</div>

</div> <!-- wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
