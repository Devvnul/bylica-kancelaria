function handleNavbarScroll(scrollY) {
    const $navbar = jQuery('nav.navbar');

    if (scrollY > 70) {
        $navbar.addClass('navbar-scrolled');
    } else {
        $navbar.removeClass('navbar-scrolled');
    }
}

function handleScrollToTopButton(scrollY) {
    const $scrollToTopButton = jQuery('#scroll-top-id');

    if (scrollY > 250) {
        $scrollToTopButton.addClass('visible');
    } else {
        $scrollToTopButton.removeClass('visible');
    }
}

function handleAsideContactMobileButton(scrollY) {
    const $contactMobileButton = jQuery('#aside-contact-mobile-id');

    if (scrollY > 250) {
        $contactMobileButton.addClass('visible');
    } else {
        $contactMobileButton.removeClass('visible');
    }
}

jQuery(window).on('scroll', function () {
    const scrollY = jQuery(this).scrollTop();

    handleNavbarScroll(scrollY);
    handleScrollToTopButton(scrollY);
    handleAsideContactMobileButton(scrollY);
});