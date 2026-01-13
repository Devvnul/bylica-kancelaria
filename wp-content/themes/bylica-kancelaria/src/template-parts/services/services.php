<?php
$service_id_object = get_field('service');
if ($service_id_object):
    $service_post_id = $service_id_object[0];

    $title = get_the_title($service_post_id);
    $thumbnail = get_the_post_thumbnail($service_post_id, 'large', array('class' => 'services__thumbnail'));
    $subheader = get_field('subheader', $service_post_id);
    $introduction = get_field('introduction', $service_post_id);
    $good_to_know = get_field('good_to_know', $service_post_id);
    $service_list = get_field('service_list', $service_post_id);
    $faq_list = get_field('faq_list', $service_post_id);
    ?>

    <div class="services-page layout__page">

        <div class="services__introduction-container">
            <!-- <img class="services__background-image"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-alternative-white.svg"
                alt="Bylica - Biuro Rachunkowe (Logo)" /> -->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">

                        <div class="services__introduction-wrapper">
                            <div class="services__header-wrapper">
                                <h1 class="h2 services__header">
                                    <?php echo $title; ?>
                                </h1>
                                <p class="services__subheader">
                                    <?php echo $subheader; ?>
                                </p>
                            </div>

                            <p class="services__introduction">
                                <?php echo $introduction; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="services__introduction-image-wrapper mt-4 mt-lg-0">
                            <?php echo $thumbnail; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 pt-4 mt-lg-5 pt-lg-4">
                <div class="col-12">
                    <div class="services__good-to-know-wrapper">
                        <h2 class="h2 services__good-to-know-header h__eyebrow h__eyebrow--small mb-4 mb-lg-5 pb-2">
                            <span class="pb-2">Kompleksowa obsługa</span>
                            Zakres świadczonej pomocy prawnej
                        </h2>

                        <div class="services__good-to-know-description">
                            <?php echo $good_to_know; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 pt-4 mt-lg-5 pt-lg-5">
                <div class="col-12">
                    <h2 class="h2 services__list-header h__eyebrow h__eyebrow--small mb-4 mb-lg-5 pb-2">
                        <span>Praktyczne korzyści</span>
                        Co otrzymujesz
                    </h2>

                    <div class="services__list-wrapper">
                        <ul class="services__list">
                            <?php foreach ($service_list as $service): ?>
                                <li class="services__list-item">
                                    <i class="ph-fill ph-check-circle"></i>
                                    <span class="services__list-item-name"><?php echo $service['service_list_item']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row mt-4 pt-4 mt-lg-5 pt-lg-5">
                <div class="col-12">
                    <div class="services__contact-wrapper">
                        <div class="services__contact-content">
                            <h2 class="services__contact-header">Nie musisz działać sam.</h2>
                            <p class="services__contact-description mt-4 mb-5">
                                Oferujemy kompleksowe wsparcie w zakresie prawa, podatków oraz usług finansowych. Skontaktuj
                                się z nami, aby uzyskać fachową pomoc dostosowaną do Twoich potrzeb.
                            </p>

                            <div>
                                <a class="services__contact-cta"
                                    href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">
                                    Umów spotkanie
                                    <i class="ph-thin ph-caret-right"></i>
                                </a>

                                <a class="services__contact-cta"
                                    href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">
                                    Kontakt
                                    <i class="ph-thin ph-caret-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="services__contact-image-wrapper">
                            <img class="services__contact-image"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/services/contact.webp"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class=" col-12">
                    <h2 class="h2 services__faq-header h__eyebrow mb-4 pb-2">
                        <span>(FAQ)</span>
                        Najczęściej zadawane pytania
                    </h2>

                    <div class="accordion services__faq-list" id="faqAccordion">
                        <img class="services__faq-background-image"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/services/faq-woman.webp"
                            alt="" />

                        <?php foreach ($faq_list as $index => $faq): ?>
                            <?php
                            $heading_id = 'faqHeading' . $index;
                            $collapse_id = 'faqCollapse' . $index;
                            $is_first = $index === 0;
                            ?>

                            <div class="accordion-item services__faq-item">
                                <h3 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                    <button
                                        class="accordion-button d-flex justify-content-between align-items-center<?php echo $is_first ? '' : ' collapsed'; ?>"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                        aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                        aria-controls="<?php echo esc_attr($collapse_id); ?>">

                                        <?php echo $index + 1; ?>. <?php echo esc_html($faq['faq_question']); ?>

                                        <i class="ph ph-caret-down ms-auto transition-icon"></i>
                                    </button>
                                </h3>

                                <div id="<?php echo esc_attr($collapse_id); ?>"
                                    class="accordion-collapse collapse<?php echo $is_first ? ' show' : ''; ?>"
                                    aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body services__faq-answer">
                                        <b>Odpowiedź:</b> <?php echo esc_html($faq['faq_answear']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

        </div>
    </div>

<?php endif; ?>