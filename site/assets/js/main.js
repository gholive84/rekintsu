/* ===== HEADER SCROLL ===== */
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 40);
}, { passive: true });

/* ===== HAMBURGER MENU ===== */
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

hamburger.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    hamburger.classList.toggle('open', isOpen);
    hamburger.setAttribute('aria-expanded', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
});

nav.querySelectorAll('a.nav__link').forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    });
});

/* ===== MEGAMENU ===== */
const megaItems = document.querySelectorAll('.nav__item--mega');
megaItems.forEach(item => {
    const btn = item.querySelector('.nav__link--has-sub');
    if (!btn) return;

    // Toggle on click (for touch/keyboard)
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = item.classList.toggle('open');
        btn.setAttribute('aria-expanded', isOpen);
        // Close other mega items
        megaItems.forEach(other => {
            if (other !== item) {
                other.classList.remove('open');
                const otherBtn = other.querySelector('.nav__link--has-sub');
                if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
            }
        });
    });
});

// Close megamenu when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav__item--mega')) {
        megaItems.forEach(item => {
            item.classList.remove('open');
            const btn = item.querySelector('.nav__link--has-sub');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });
    }
});

// Close on Escape
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        megaItems.forEach(item => {
            item.classList.remove('open');
            const btn = item.querySelector('.nav__link--has-sub');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });
    }
});

/* ===== SCROLL REVEAL ===== */
const revealEls = document.querySelectorAll('.fade-up');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const siblings = Array.from(entry.target.parentElement.children);
            const idx = siblings.indexOf(entry.target);
            entry.target.style.transitionDelay = `${idx * 0.08}s`;
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

revealEls.forEach(el => observer.observe(el));

/* ===== PHONE MASK ===== */
const phoneInput = document.getElementById('cf_phone');
if (phoneInput) {
    phoneInput.addEventListener('input', (e) => {
        let d = e.target.value.replace(/\D/g, '').substring(0, 11);
        if (d.length > 7)      d = `(${d.slice(0,2)}) ${d.slice(2,7)}-${d.slice(7)}`;
        else if (d.length > 2) d = `(${d.slice(0,2)}) ${d.slice(2)}`;
        else if (d.length > 0) d = `(${d}`;
        e.target.value = d;
    });
}

/* ===== CONTACT FORM VALIDATION ===== */
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    const validate = (field, test) => {
        const g = field.closest('.form-group');
        const ok = test(field.value.trim());
        g.classList.toggle('has-error', !ok);
        return ok;
    };

    contactForm.querySelectorAll('input').forEach(inp => {
        inp.addEventListener('input', () => inp.closest('.form-group').classList.remove('has-error'));
    });

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name  = document.getElementById('cf_name');
        const email = document.getElementById('cf_email');
        const phone = document.getElementById('cf_phone');

        const v1 = validate(name,  v => v.length >= 2);
        const v2 = validate(email, v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
        const v3 = validate(phone, v => v.replace(/\D/g,'').length >= 10);

        if (v1 && v2 && v3) {
            const btn = contactForm.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.textContent = 'Enviando...';

            fetch('/cms/leads/submit.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    nome:     name.value.trim(),
                    email:    email.value.trim(),
                    telefone: phone.value.trim(),
                    mensagem: '',
                    origem:   'formulario-site'
                })
            })
            .then(r => r.json())
            .then(data => {
                if (data.ok) {
                    contactForm.querySelector('.contact-form__fields').style.display = 'none';
                    document.getElementById('formSuccess').classList.add('visible');
                } else {
                    btn.disabled = false;
                    btn.textContent = 'Enviar mensagem';
                    alert(data.error || 'Erro ao enviar. Tente novamente.');
                }
            })
            .catch(() => {
                btn.disabled = false;
                btn.textContent = 'Enviar mensagem';
                alert('Erro de conexão. Tente novamente.');
            });
        }
    });
}

/* ===== REVIEWS CAROUSEL ===== */
const track = document.getElementById('reviewsTrack');
const prevBtn = document.getElementById('prevReview');
const nextBtn = document.getElementById('nextReview');

if (track && prevBtn && nextBtn) {
    const getCardWidth = () => {
        const card = track.querySelector('.testimonial-card');
        if (!card) return 0;
        const gap = parseInt(getComputedStyle(track).gap) || 20;
        return card.offsetWidth + gap;
    };

    nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -getCardWidth(), behavior: 'smooth' });
    });

    // Auto-avança a cada 5s, pausa ao hover
    let autoplay = setInterval(() => {
        const maxScroll = track.scrollWidth - track.clientWidth;
        if (track.scrollLeft >= maxScroll - 4) {
            track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            track.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
        }
    }, 5000);

    track.addEventListener('mouseenter', () => clearInterval(autoplay));
    track.addEventListener('mouseleave', () => {
        autoplay = setInterval(() => {
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 4) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
            }
        }, 5000);
    });
}

/* ===== SMOOTH SCROLL ===== */
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        const target = document.querySelector(link.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        const offset = header.offsetHeight + 16;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
    });
});
