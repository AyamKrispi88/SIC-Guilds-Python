document.addEventListener('DOMContentLoaded', function () {
    const btnToggle = document.querySelector('.trigger-laporan');
    const containerLaporan = document.querySelector('.isi-laporan-masuk');

    if (btnToggle && containerLaporan) {
        btnToggle.addEventListener('click', function () {
            const isHidden = containerLaporan.classList.contains('hidden');

            if (isHidden) {
                containerLaporan.classList.remove('hidden');
                btnToggle.innerText = 'Tutup Laporan';
            } else {
                containerLaporan.classList.add('hidden');
                btnToggle.innerText = 'Lihat Laporan Masuk';
            }
        });
    }
});