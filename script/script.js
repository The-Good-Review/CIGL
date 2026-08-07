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

// Header getting smaller on scroll
const navbar = document.getElementById('navbar');
const sidebar = document.querySelector('.sidebar');

let lastScrollY = window.scrollY;
const scrollThreshold = 10;

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    const diff = currentScrollY - lastScrollY;

    if (Math.abs(diff) < scrollThreshold) return;

    if (diff > 0 && currentScrollY > 80) {
        // Cache la navbar
        navbar.classList.add('hidden');
    } else {
        // Affiche la navbar
        navbar.classList.remove('hidden');
    }

    lastScrollY = currentScrollY;
});



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
        const finishPoint = window.innerWidth < 800 ? 0.36 : 0.45;
        let prog = raw / finishPoint;
        if (prog > 1) prog = 1;

        // set each animation time with stagger based on index
        animations.forEach((anim, i) => {
            const itemOffset = i * containerDuration;
            const time = prog * totalDuration - itemOffset;
            anim.currentTime = Math.min(Math.max(time, 0), containerDuration);
        });

        // control the vertical line using CSS variable --line-height
        timeline.style.setProperty('--line-height', (prog * 100) + '%');
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

// Durée de l'animation de comptage (ms)
const DURATION = 1000;

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


/* ---------- Section 1 : Bilan social — capsule bar charts ---------- */
const palette = {
    orange: "#f2a33e", red: "#e8503a", green: "#8dc63f", teal: "#1793a1",
    darkred: "#b03a2e", yellow: "#f0c419", maroon: "#6b2b2b", gray: "#58595b"
};

function renderChart(chartId, legendId, data, maxHeight = 150) {
    const maxVal = Math.max(...data.map(d => d.value));
    const barsEl = document.getElementById(chartId);
    const legendEl = document.getElementById(legendId);
    barsEl.innerHTML = "";
    legendEl.innerHTML = "";
    data.forEach(d => {
        const h = Math.max(10, (d.value / maxVal) * maxHeight);
        const col = document.createElement("div");
        col.className = "bar-col";
        col.innerHTML = `<div class="bar" style="height:0px;background:${palette[d.color]}"></div>
                    <div class="bar-val">${d.value}</div>`;
        barsEl.appendChild(col);
        requestAnimationFrame(() => { col.querySelector(".bar").style.height = h + "px"; });
    });
    data.forEach(d => {
        const item = document.createElement("div");
        item.className = "legend-item";
        item.innerHTML = `<span class="point" style="background:${palette[d.color]}"></span>
                        <span>${d.label}${d.sub ? `<br><span class="sub">${d.sub}</span>` : ""}</span>`;
        legendEl.appendChild(item);
    });
}

renderChart("chart-contrats", "legend-contrats", [
    { value: 74, color: "orange", label: "Encadrants" },
    { value: 172, color: "red", label: "Bénéficiaires" },
    { value: 3, color: "green", label: "Apprenti" },
]);
document.getElementById("legend-contrats").insertAdjacentHTML("beforeend",
    `<div style="margin-top:4px;font-weight:700;font-family:'Poppins',sans-serif;">Effectif total : 249</div>`);

renderChart("chart-flux", "legend-flux", [
    { value: 102, color: "green", label: "Entrées", sub: "94 bénéficiaires, 8 encadrants" },
    { value: 99, color: "teal", label: "Sorties", sub: "95 bénéficiaires, 4 encadrants" },
]);

renderChart("chart-sexe", "legend-sexe", [
    { value: 102, color: "orange", label: "Femmes", sub: "69 bénéficiaires, 32 encadrants, 1 apprenti" },
    { value: 147, color: "red", label: "Hommes", sub: "103 bénéficiaires, 42 encadrants, 2 apprentis" },
]);

renderChart("chart-age", "legend-age", [
    { value: 22, color: "orange", label: "<30 ans", sub: "18 bénéficiaires, 4 encadrants" },
    { value: 67, color: "red", label: "30 à 39 ans", sub: "54 bénéficiaires, 13 encadrants" },
    { value: 60, color: "green", label: "40 à 50 ans", sub: "30 bénéficiaires, 27 encadrants, 3 apprentis" },
    { value: 100, color: "teal", label: ">50 ans", sub: "70 bénéficiaires, 30 encadrants" },
]);

renderChart("chart-departs", "legend-departs", [
    { value: 24, color: "orange", label: "Autre emploi" },
    { value: 21, color: "red", label: "Fin de contrat" },
    { value: 5, color: "green", label: "Résiliation avec effet immédiat" },
    { value: 4, color: "teal", label: "Pension de vieillesse" },
    { value: 1, color: "darkred", label: "Fin de contrat d'apprentissage" },
    { value: 39, color: "yellow", label: "Fin de parcours complet" },
    { value: 1, color: "maroon", label: "Résiliation du contrat à l'essai" },
], 150);

// graphique heures d'accueil en crèche
const mobile = window.innerWidth < 800;

new Chart(hours, {
    type: 'bar',

    data: {
        labels: ['2025', '2024', '2023', '2022', '2021', '2020'],
        datasets: [{
            data: [83206.25, 78474.92, 78007.95, 70853.25, 65714.95, 59463.66],
            backgroundColor: ['#1f9dc0', '#7da646', '#f6a63a', '#f25a46', '#7d7d7d', '#1f9dc0']
        }]
    },

    options: {
        responsive: true,
        maintainAspectRatio: false,

        indexAxis: mobile ? 'x' : 'y',

        plugins: {
            legend: {
                display: false
            }
        },

        scales: {
            x: {
                ticks: {
                    font: {
                        size: mobile ? 10 : 14
                    }
                }
            },
            y: {
                ticks: {
                    font: {
                        size: mobile ? 11 : 14
                    }
                }
            }
        }
    }
});


/* ---------- Section 2 : Formations ---------- */
const formationCards = [
    {
        color: "logo-blue", title: "Données clés",
        rows: [
            ["Heures de formation réalisées", "14 724 h"],
            ["Taux d'inscription par service", "90%"],
            ["Nombre de sessions de formations programmées dans le catalogue", "322"],
            ["Nombre de formation différentes", "196"],
        ]
    },
    {
        color: "middle-grey", title: "Type de participants",
        rows: [
            ["Heures de formations pour les bénéficiaires", "10 976 h"],
            ["Heures de formations pour les encadrants", "2 450 h"],
            ["Heures de formations pour les externes", "1 298 h"],
        ]
    },
    {
        color: "logo-red", title: "Formateurs (formations formalisées)",
        rows: [
            ["Heures de formations internes", "1 729 h"],
            ["Heures de formations externes", "12 995 h"],
        ]
    },
    {
        color: "logo-orange", title: "Organisateurs",
        rows: [
            ["Heures de formations organisées par le CIGL Esch", "9 029 h"],
            ["Heures RH de formations organisées par des instituts externes", "5 695 h"],
        ]
    },
    {
        color: "logo-green", title: "Types de formations - hors public externe",
        rows: [
            ["Professionnalisation (projet professionnel)", "8 000 h"],
            ["Adaptation au poste de travail (bénéficiaires + encadrants)", "5 427 h"],
        ]
    },
    {
        color: "logo-blue", title: "Catégories",
        rows: [
            ["Sécurité - Santé - Prévention / Qualité", "3 013 h"],
            ["Cours de langues", "8 310 h"],
            ["Informatique", "388 h"],
            ["Développement personnel / Management / RH", "217 h"],
            ["Droit / Comptabilité", "24 h"],
            ["Autres techniques métiers", "2 277 h"],
            ["Aspects sociaux", "72 h"],
            ["Séances d'information", "418 h"],
        ]
    },
];

const grid = document.getElementById("formations-grid");
formationCards.forEach(c => {
    const card = document.createElement("div");
    card.className = "card " + c.color;
    card.innerHTML = `
    <div class="card-head"><span>${c.title}</span><span class="year">2025</span></div>
    ${c.rows.map(r => `<div class="row"><span>${r[0]}</span><span class="val">${r[1]}</span></div>`).join("")}`;
    grid.appendChild(card);
});