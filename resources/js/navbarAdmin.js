// Toggle saat avatar diklik
document.getElementById('avatar-btn').addEventListener('click', function (e) {
    e.stopPropagation();
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
});

// Tutup saat klik di luar
document.addEventListener('click', function (e) {
    if (!e.target.closest('#mobile-avatar-wrapper')) {
        const menu = document.getElementById('mobile-menu');
        menu.classList.add('hidden');
        menu.classList.remove('flex');
    }
});

// Tutup saat scroll
window.addEventListener('scroll', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.add('hidden');
    menu.classList.remove('flex');
}, true);


 console.log("test");
