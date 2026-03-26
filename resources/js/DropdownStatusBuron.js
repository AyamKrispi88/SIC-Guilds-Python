document.addEventListener('click', function (event) {
    const wrapper = event.target.closest('.dropdown-statusburon-wrapper');
    if (!wrapper) {
        document.querySelectorAll('.dropdown-statusburon-menu').forEach(m => m.classList.add('hidden'));
        return;
    }

    const trigger = event.target.closest('.dropdown-statusburon-trigger');
    const item = event.target.closest('.statusburon-item');
    const menu = wrapper.querySelector('.dropdown-statusburon-menu');

    if (trigger) {
        menu.classList.toggle('hidden');
    }

    if (item) {
        const newStatus = item.innerText;
        const previewText = wrapper.querySelector('.selected-statusburon-text');
        
        if (previewText) {
            previewText.innerText = newStatus;
        }

        menu.classList.add('hidden');
    }
});