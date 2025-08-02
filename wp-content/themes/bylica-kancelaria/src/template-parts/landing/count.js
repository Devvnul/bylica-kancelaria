addEventListener('load', () => {
    const options = {
        duration: 5,
        useGrouping: false,
    };

    const items = [
        { id: 'years', target: 15 },
        { id: 'clients', target: 104 },
        { id: 'cases', target: 346 },
    ];

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const item = items.find(i => i.id === el.id);
                if (item) {
                    const counter = new countUp.CountUp(item.id, item.target, options);
                    if (!counter.error) {
                        counter.start();
                    } else {
                        console.error(counter.error);
                    }
                    obs.unobserve(el);
                }
            }
        });
    }, {
        threshold: 0.9
    });

    items.forEach(item => {
        const el = document.getElementById(item.id);
        if (el) {
            observer.observe(el);
        }
    });
});