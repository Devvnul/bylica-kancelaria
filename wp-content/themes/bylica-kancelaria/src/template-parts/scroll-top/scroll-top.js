jQuery(document).ready(function () {
    jQuery('#scroll-top-id').on('click', function (e) {
        e.preventDefault();

        lenis.scrollTo(0, {
            duration: 1.2,
            easing: (t) => 1 - Math.pow(1 - t, 4)
        });
    });
});