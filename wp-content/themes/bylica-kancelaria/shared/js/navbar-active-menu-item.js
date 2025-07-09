jQuery(function () {
    const currentUrl = window.location.href;
    jQuery('.navbar a').each(function () {
        if (this.href === currentUrl) {
            jQuery(this).addClass('active');
        }
    });
});