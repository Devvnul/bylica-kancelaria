<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->

        <a href="<?php echo home_url(); ?>" class="navbar__logo"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/poziome/poziome-dark-brown.svg');">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo home_url(); ?>">
                        Strona główna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(11); ?>">
                        O nas
                    </a>
                </li>
                <li class="nav-item nav-item__dropdown">
                    <div class="dropdown">
                        <button class="navbar__dropdown-button dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Zakres Usług Prawnych
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?php echo get_permalink(32); ?>">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Pełna obsługa firm
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Księgowość
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Obsługa spółek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Obsługa JDG
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Outsourcing usług księgowych
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="ph-fill ph-caret-right"></i>
                                    Kadry i płace
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(8); ?>">Kontakt</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link nav-cta" href="<?php echo get_permalink(55); ?>">
                        Umów się
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>