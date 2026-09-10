// resources/js/app.js

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

console.log('✅ Alpine.js تم تحميله بنجاح');

// =============================================
// تفعيل Intersection Observer للعناصر
// =============================================
document.addEventListener('DOMContentLoaded', () => {
    // ===== Fade Up =====
    const fadeElements = document.querySelectorAll('.fade-up, .reveal');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show', 'visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        fadeElements.forEach((el) => {
            observer.observe(el);
        });
    } else {
        // Fallback للمتصفحات القديمة
        fadeElements.forEach((el) => {
            el.classList.add('show', 'visible');
        });
    }

    // ===== Counter Animation =====
    const counters = document.querySelectorAll('.counter');

    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.dataset.target) || 0;
                    let current = 0;
                    const increment = Math.max(1, target / 60);
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            entry.target.textContent = target + '+';
                            clearInterval(timer);
                        } else {
                            entry.target.textContent = Math.floor(current) + '+';
                        }
                    }, 25);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach((el) => {
            counterObserver.observe(el);
        });
    } else {
        // Fallback
        counters.forEach((el) => {
            el.textContent = el.dataset.target + '+';
        });
    }
});

// =============================================
// التعامل مع الأخطاء العامة
// =============================================
window.addEventListener('error', function(e) {
    console.warn('⚠️ تم تجاوز خطأ:', e.message);
    // منع تعطل الصفحة بسبب أي خطأ
    return true;
});

console.log('✅ app.js تم تحميله بنجاح');