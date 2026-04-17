document.addEventListener('click', function (event) {
    const wrapper = event.target.closest('.dropdown-statuslaporan-wrapper');
    if (!wrapper) {
        document.querySelectorAll('.dropdown-statuslaporan-menu').forEach(m => m.classList.add('hidden'));
        return;
    }

    const trigger = event.target.closest('.dropdown-statuslaporan-trigger');
    const item = event.target.closest('.statuslaporan-item');
    const menu = wrapper.querySelector('.dropdown-statuslaporan-menu');

    if (trigger) {
        menu.classList.toggle('hidden');
    }

if (item) {
        const newStatus = item.innerText;
        const previewText = wrapper.querySelector('.selected-statuslaporan-text');
        const realValue = item.getAttribute('data-value');
        
        // ==========================================
        // LOGIKA REDIRECT 2 ARAH (PINTAR)
        // ==========================================
        // Cek apakah kita sedang berada di halaman form orang hilang
        const isHalamanOrangHilang = window.location.pathname.includes('/isiLaporanOrangHilangUser');

        if (realValue === 'Orang Hilang' && !isHalamanOrangHilang) {
            // Jika pilih Orang Hilang, tapi posisinya BUKAN di halaman orang hilang -> Redirect ke Orang Hilang
            window.location.href = '/isiLaporanOrangHilangUser'; 
            return;
        } else if (realValue !== 'Orang Hilang' && isHalamanOrangHilang) {
            // Jika pilih laporan BUKAN Orang Hilang, tapi posisinya di halaman orang hilang -> Redirect balik ke form biasa
            window.location.href = '/Buatlaporan';
            return;
        }
        // ==========================================

        const hiddenInput = wrapper.querySelector('input[name="jenis_laporan"]');
        
        if (previewText) {
            previewText.innerText = newStatus;
        }

        if (hiddenInput && realValue) {
            hiddenInput.value = realValue;
        }

        menu.classList.add('hidden');
    }
});