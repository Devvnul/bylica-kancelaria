const lenis = new Lenis({ lerp: 0.1, smooth: true, anchors: true, stopInertiaOnNavigate: true });

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);