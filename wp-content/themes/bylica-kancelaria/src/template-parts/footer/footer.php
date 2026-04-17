<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__content-wrapper">
                    <div class="footer__menu-wrapper">
                        <h3 class="h3 footer__menu-header line-header line-header--white line-header--short">
                            Menu
                        </h3>

                        <ul class="footer__menu">
                            <li>
                                <a href="<?php echo home_url(); ?>">Strona główna</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo get_permalink(8); ?>">O nas</a>
                            </li> -->
                            <li>
                                <a href="<?php echo get_permalink(44); ?>">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(10); ?>">Kontakt</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(3); ?>">Polityka prywatności</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(12); ?>">
                                    Umów się
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__logo-wrapper">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/alternatywne/1.svg'); ?>"
                                alt="Logo" class="footer__logo-image">
                        </a>
                    </div>

                    <div class="footer__info-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/poziome/logo-horizontal.png'); ?>"
                            alt="Logo Bylica" class="footer__info-logo">

                        <p class="footer__info-description">
                            Porozmawiajmy o Twojej księgowości – zapraszamy na kawę u nas <i
                                class="ph-thin ph-coffee"></i>
                        </p>

                        <ul class="footer__info-contact-list">
                            <li>
                                <a href="tel:+48338168294">
                                    <i class="ph-thin ph-phone"></i>
                                    <span class="data">
                                        +48 33 816 82 94
                                    </span>
                                </a>
                                <a href="tel:+48668342959">
                                    <i class="ph-thin ph-device-mobile-speaker" style="transform: rotate(180deg);"></i>
                                    <span class="data">
                                        +48 668 342 959
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:t.bylica@kancelaria-bylica.pl">
                                    <i class="ph-thin ph-envelope"></i>
                                    <span class="data email">
                                        t.bylica@kancelaria-bylica.pl
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <a class="footer__cta-button" href="<?php echo get_permalink(12); ?>">
                            Umów spotkanie
                            <i class="ph-caret-right ph-thin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>