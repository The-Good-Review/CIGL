const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
const servicesLink = document.getElementById('services-link');

if (burger && menu) {
    burger.addEventListener('change', () => {
        menu.classList.toggle('open', burger.checked);
    });
}

if (servicesLink) {
    const servicesButton = servicesLink.querySelector('.swallow__icon');

    servicesButton?.addEventListener('click', (event) => {
        if (window.innerWidth <= 1216) {
            event.preventDefault();
            servicesLink.classList.toggle('mobile-open');
        }
    });
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.presP').forEach(el => observer.observe(el));

(function () {
    const timeline = document.querySelector('.timeline');
    if (!timeline) return;

    const containers = Array.from(timeline.querySelectorAll('.container'));
    if (!containers.length) return;

    const containerDuration = 1000;
    const totalDuration = containers.length * containerDuration;

    // create paused animations for each container
    const animations = containers.map((el) => {
        const anim = el.animate([
            { opacity: 0, transform: 'translateY(-30px)' },
            { opacity: 1, transform: 'translateY(0)' }
        ], { duration: containerDuration, fill: 'forwards' });
        anim.pause();
        return anim;
    });

    function update() {
        const viewportHeight = window.innerHeight;
        const docHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
        const maxScroll = Math.max(docHeight - viewportHeight, 0);

        // Progression linéaire sur toute la page: 0 (haut) -> 1 (bas)
        let raw = maxScroll > 0 ? window.scrollY / maxScroll : 0;
        raw = Math.min(Math.max(raw, 0.02), 1);

        const finishPoint = 0.4;
        let prog = raw / finishPoint;
        if (prog > 1) prog = 1;

        // légère courbe d'accélération
        prog = Math.pow(prog, 0.8);

        // set each animation time with stagger based on index
        animations.forEach((anim, i) => {
            const itemOffset = i * containerDuration;
            const time = prog * totalDuration - itemOffset;
            anim.currentTime = Math.min(Math.max(time, 0), containerDuration);
        });

        // control the vertical line using CSS variable --line-height
        timeline.style.setProperty('--line-height', (prog * 101) + '%');
    }

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(() => { update(); ticking = false; });
        }
    }, { passive: true });

    window.addEventListener('resize', update);
    update();
})();

// accessibilité
(function (w, d, s, u, o) { w._cyA11yConfig = { "iconId" : "default", "position": { "mobile": "bottom-right", "desktop": "bottom-right" }, "language": { "default": "fr", "selected": [] }, "keyboard": { "enabled": true, "shortcut": "alt+a" } }; var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0]; js.src = u; js.async = true; fjs.parentNode.insertBefore(js, fjs); })(window, document, "script", "https://cdn-cookieyes.com/widgets/accessibility.js?id=767a5141-1bc4-4f0a-9d2e-ef88543d9996");