document.addEventListener('DOMContentLoaded', () => {
    const catItems = document.querySelectorAll('.cat-item[data-category]');
    const chips = document.querySelectorAll('.chip[data-filter]');
    const cards = document.querySelectorAll('.article-card');
    const searchInput = document.getElementById('searchInput');
    const noResults = document.getElementById('noResults');

    let activeCategory = 'toutes';
    let activeSearch = '';

    const normalizeText = (value = '') => value
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .toLowerCase()
        .trim();

    function applyFilters() {
        let visibleCount = 0;
        const normalizedSearch = normalizeText(activeSearch);

        cards.forEach(card => {
            const matchesCategory = activeCategory === 'toutes' || card.dataset.category === activeCategory;
            const searchableText = normalizeText(
                `${card.dataset.title || ''} ${card.dataset.tag || ''} ${card.textContent || ''}`
            );
            const matchesSearch = normalizedSearch === '' || searchableText.includes(normalizedSearch);

            const visible = matchesCategory && matchesSearch;
            card.style.display = visible ? '' : 'none';
            if (visible) visibleCount++;
        });

        if (noResults) {
            noResults.hidden = visibleCount !== 0;
        }
    }

    // Sidebar category filtering
    catItems.forEach(item => {
        item.addEventListener('click', () => {
            catItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            activeCategory = item.dataset.category;
            applyFilters();
        });
    });

    // Live search
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            activeSearch = e.target.value;
            applyFilters();
        });
    }

});

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

    // Synchronise la sidebar avec la navbar
    if (!navbar.classList.contains('hidden')) {
        sidebar.classList.add('lower');
    } else {
        sidebar.classList.remove('lower');
    }

    lastScrollY = currentScrollY;
});

// accessibilité
(function (w, d, s, u, o) { w._cyA11yConfig = { "iconId": "default", "position": { "mobile": "bottom-right", "desktop": "bottom-right" }, "language": { "default": "fr", "selected": [] }, "keyboard": { "enabled": true, "shortcut": "alt+a" } }; var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0]; js.src = u; js.async = true; fjs.parentNode.insertBefore(js, fjs); })(window, document, "script", "https://cdn-cookieyes.com/widgets/accessibility.js?id=767a5141-1bc4-4f0a-9d2e-ef88543d9996");
