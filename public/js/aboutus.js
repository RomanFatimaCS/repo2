(function () {
    "use strict";

    const section = document.querySelector('.about-us-section');
    if (!section) return;

    const imageWrap = section.querySelector('.about-us-image-wrap');
    const image     = section.querySelector('.about-us-image');

    // 3D tilt on image (desktop only)
    const isDesktop = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (isDesktop && imageWrap && image) {
        imageWrap.addEventListener('mousemove', (e) => {
            const rect = imageWrap.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const cx = rect.width / 2;
            const cy = rect.height / 2;

            const rotateY = ((x - cx) / cx) * 10;
            const rotateX = -((y - cy) / cy) * 10;

            image.style.transform =
                `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
        });

        imageWrap.addEventListener('mouseleave', () => {
            image.style.transform = '';
        });
    }

    console.log("✅ About Us page loaded");
})();