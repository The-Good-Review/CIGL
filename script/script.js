const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
const btn = document.getElementById('btn');
const servicesLink = document.getElementById('services-link');

if (burger && menu) {
    burger.addEventListener('change', () => {
        menu.classList.toggle('open', burger.checked);
        if (btn.style.display == 'flex') {
            btn.style.display = 'none';
        } else {
            btn.style.display = 'flex';
        }
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

(function () {
    if (!menu) return;

    const MOBILE_BREAKPOINT = 1216;

    function setDrill(level) {
        if (level === 0) {
            menu.removeAttribute('data-drill');
        } else {
            menu.setAttribute('data-drill', String(level));
        }
    }

    function resetDrill() {
        menu.querySelectorAll('.drill-active').forEach((el) => el.classList.remove('drill-active'));
        menu.querySelectorAll('.submenu-toggle[aria-expanded="true"]').forEach((btn) => btn.setAttribute('aria-expanded', 'false'));
        setDrill(0);
    }

    // Level 1: top-level nav-item toggle -> its dropdown replaces the main list
    menu.querySelectorAll(':scope > .nav-item > .submenu-toggle').forEach((btn) => {
        btn.addEventListener('click', (event) => {
            if (window.innerWidth > MOBILE_BREAKPOINT) return;
            event.preventDefault();
            const navItem = btn.closest('.nav-item');
            navItem.classList.add('drill-active');
            btn.setAttribute('aria-expanded', 'true');
            setDrill(1);
        });
    });

    // Level 2: dd-item toggle -> its submenu replaces the dropdown's list
    menu.querySelectorAll('.dd-item.has-sub > .submenu-toggle').forEach((btn) => {
        btn.addEventListener('click', (event) => {
            if (window.innerWidth > MOBILE_BREAKPOINT) return;
            event.preventDefault();
            const ddItem = btn.closest('.dd-item');
            ddItem.classList.add('drill-active');
            btn.setAttribute('aria-expanded', 'true');
            setDrill(2);
        });
    });

    // "Retour" goes back exactly one level
    const backBtn = document.getElementById('navBack');
    if (backBtn) {
        backBtn.addEventListener('click', () => {
            const currentDrill = menu.getAttribute('data-drill');
            if (currentDrill === '2') {
                const activeDd = menu.querySelector('.dd-item.drill-active');
                if (activeDd) {
                    activeDd.classList.remove('drill-active');
                    const toggle = activeDd.querySelector(':scope > .submenu-toggle');
                    if (toggle) toggle.setAttribute('aria-expanded', 'false');
                }
                setDrill(1);
            } else if (currentDrill === '1') {
                const activeItem = menu.querySelector(':scope > .nav-item.drill-active');
                if (activeItem) {
                    activeItem.classList.remove('drill-active');
                    const toggle = activeItem.querySelector(':scope > .submenu-toggle');
                    if (toggle) toggle.setAttribute('aria-expanded', 'false');
                }
                setDrill(0);
            }
        });
    }

    // reset the drill state whenever the mobile menu is closed or the burger is unchecked
    if (burger) {
        burger.addEventListener('change', () => {
            if (!burger.checked) resetDrill();
        });
    }

    // reset if the viewport grows back into desktop size
    window.addEventListener('resize', () => {
        if (window.innerWidth > MOBILE_BREAKPOINT) resetDrill();
    });
})();

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
(function (w, d, s, u, o) { w._cyA11yConfig = { "iconId": "default", "position": { "mobile": "bottom-right", "desktop": "bottom-right" }, "language": { "default": "fr", "selected": [] }, "keyboard": { "enabled": true, "shortcut": "alt+a" } }; var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0]; js.src = u; js.async = true; fjs.parentNode.insertBefore(js, fjs); })(window, document, "script", "https://cdn-cookieyes.com/widgets/accessibility.js?id=767a5141-1bc4-4f0a-9d2e-ef88543d9996");

// candidature spontanée à faire
//// const form = document.getElementById('candidature-form');
//// const confirmBox = document.getElementById('confirm');

//// function bindFileName(inputId, labelId) {
////     const input = document.getElementById(inputId);
////     const label = document.getElementById(labelId);
////     input.addEventListener('change', () => {
////         label.textContent = input.files.length ? input.files[0].name : '';
////     });
//// }
//// bindFileName('cv', 'cv-name');
//// bindFileName('lettre', 'lettre-name');

//// form.addEventListener('submit', function (e) {
////     e.preventDefault();
////     if (!form.checkValidity()) {
////         form.reportValidity();
////         return;
////     }
////      Ici : remplacer par un envoi réel (fetch vers votre backend, service d'emailing, etc.)
////     confirmBox.classList.add('show');
////     confirmBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
////     form.reset();
////     document.getElementById('cv-name').textContent = '';
////     document.getElementById('lettre-name').textContent = '';
//// });

// Durée de l'animation de comptage (ms)
const DURATION = 2000;

// Fonction qui anime un chiffre de 0 à sa valeur cible
function animateCounter(el) {
    const cible = parseInt(el.getAttribute('data-target'), 10);
    const start = performance.now();

    function step(now) {
        const progress = Math.min((now - start) / DURATION, 1);
        // easing "ease-out" pour un rendu plus naturel
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.floor(eased * cible);
        el.textContent = value.toLocaleString('fr-FR');

        if (progress < 1) {
            requestAnimationFrame(step);
        } else {
            el.textContent = cible.toLocaleString('fr-FR');
        }
    }
    requestAnimationFrame(step);
}


// Fonction qui anime un chiffre de 0 à sa valeur cible
function animateCounter(el) {
    const cible = parseInt(el.getAttribute('data-target'), 10);
    const bar = el.closest('.stat-card')?.querySelector('.stat-bar-fill');
    if (bar) bar.style.width = '100%';
    const start = performance.now();

    function step(now) {
        const progress = Math.min((now - start) / DURATION, 1);
        // easing "ease-out" pour un rendu plus naturel
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.floor(eased * cible);
        el.textContent = value.toLocaleString('fr-FR');

        if (progress < 1) {
            requestAnimationFrame(step);
        } else {
            el.textContent = cible.toLocaleString('fr-FR');
        }
    }
    requestAnimationFrame(step);
}

// IntersectionObserver : déclenche l'animation uniquement
// quand l'élément devient visible à l'écran, jamais avant
const observateur = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            // on arrête d'observer pour ne pas relancer l'animation
            // à chaque fois que l'élément re-rentre dans l'écran
            observateur.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.4 // se déclenche quand 40% du chiffre est visible
});

document.querySelectorAll('.stat-number').forEach(el => {
    observateur.observe(el);
});