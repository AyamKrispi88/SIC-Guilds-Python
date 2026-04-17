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
        // 1. Ambil teks untuk ditampilkan di layar (misal: "Laporan Kriminal")
        const newStatus = item.innerText;
        const previewText = wrapper.querySelector('.selected-statuslaporan-text');
        
        // 2. Ambil nilai asli untuk database (misal: "Kasus Kriminal")
        const realValue = item.getAttribute('data-value');
        
        // 3. Cari hidden input di dalam wrapper ini
        const hiddenInput = wrapper.querySelector('input[name="jenis_laporan"]');
        
        // Ganti teks di layar
        if (previewText) {
            previewText.innerText = newStatus;
        }

        // Isi nilai hidden input agar dikirim ke Laravel saat disubmit
        if (hiddenInput && realValue) {
            hiddenInput.value = realValue;
        }

        menu.classList.add('hidden');
    }
});