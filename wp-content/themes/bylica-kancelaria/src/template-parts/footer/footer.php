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
                            <li>
                                <a href="<?php echo get_permalink(11); ?>">O nas</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(14); ?>">Kontakt</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(3); ?>">Polityka prywatności</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(55); ?>">
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
                                <a href="tel:+48602444206">
                                    <i class="ph-thin ph-phone"></i>
                                    <span class="data">
                                        +48 602 444 206
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:j_bylica@poczta.onet.pl">
                                    <i class="ph-thin ph-envelope"></i>
                                    <span class="data email">
                                        j_bylica@poczta.onet.pl
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <a class="footer__cta-button" href="<?php echo get_permalink(55); ?>">
                            Umów spotkanie
                            <i class="ph-thin ph-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>