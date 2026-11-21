const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const revealTargets = document.querySelectorAll('main > section, main article');

if (!prefersReducedMotion && 'IntersectionObserver' in window && revealTargets.length > 0) {
    document.documentElement.classList.add('has-scroll-reveal');

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -6% 0px',
    });

    revealTargets.forEach((element) => {
        element.dataset.reveal = '';

        if (element.matches('article')) {
            const siblings = Array.from(element.parentElement.querySelectorAll(':scope > article'));
            const delay = Math.min(siblings.indexOf(element) * 90, 270);
            element.style.setProperty('--reveal-delay', `${delay}ms`);
        }

        revealObserver.observe(element);
    });
}

const lightbox = document.querySelector('#portfolio-lightbox');

if (lightbox && typeof lightbox.showModal === 'function') {
    const lightboxImage = lightbox.querySelector('[data-lightbox-image]');
    const lightboxTitle = lightbox.querySelector('[data-lightbox-title]');
    const imageLink = lightbox.querySelector('[data-lightbox-image-link]');
    const documentLink = lightbox.querySelector('[data-lightbox-document-link]');
    const closeButton = lightbox.querySelector('[data-lightbox-close]');
    let closeTimeout;

    const closeLightbox = () => {
        if (!lightbox.open || lightbox.classList.contains('is-closing')) {
            return;
        }

        if (prefersReducedMotion) {
            lightbox.close();

            return;
        }

        lightbox.classList.add('is-closing');
        window.clearTimeout(closeTimeout);
        closeTimeout = window.setTimeout(() => {
            if (lightbox.open) {
                lightbox.close();
            }

            lightbox.classList.remove('is-closing');
        }, 220);
    };

    document.addEventListener('click', (event) => {
        if (!(event.target instanceof Element)) {
            return;
        }

        const trigger = event.target.closest('[data-lightbox-trigger]');

        if (!trigger) {
            return;
        }

        event.preventDefault();

        lightboxImage.src = trigger.href;
        lightboxImage.alt = trigger.dataset.lightboxAlt || '';
        lightboxTitle.textContent = trigger.dataset.lightboxTitle || 'Preview';
        imageLink.href = trigger.href;
        documentLink.hidden = !trigger.dataset.lightboxDocument;

        if (trigger.dataset.lightboxDocument) {
            documentLink.href = trigger.dataset.lightboxDocument;
        }

        lightbox.classList.remove('is-closing');
        window.clearTimeout(closeTimeout);
        lightbox.showModal();
        closeButton.focus();
    });

    closeButton.addEventListener('click', closeLightbox);
    lightbox.addEventListener('cancel', (event) => {
        event.preventDefault();
        closeLightbox();
    });
    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });
    lightbox.addEventListener('close', () => {
        lightboxImage.removeAttribute('src');
        lightbox.classList.remove('is-closing');
    });
}
