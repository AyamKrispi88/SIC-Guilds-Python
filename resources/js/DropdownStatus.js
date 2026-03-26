document.addEventListener('click', function (event) {
    const wrapper = event.target.closest('.dropdown-status-wrapper');
    if (!wrapper) {
        document.querySelectorAll('.dropdown-status-menu').forEach(m => m.classList.add('hidden'));
        return;
    }

    const trigger = event.target.closest('.dropdown-status-trigger');
    const item = event.target.closest('.status-item');
    const menu = wrapper.querySelector('.dropdown-status-menu');

    if (trigger) {
        menu.classList.toggle('hidden');
    }

    if (item) {
        const newStatus = item.innerText;
        const previewText = wrapper.querySelector('.selected-status-text');
        
        if (previewText) {
            previewText.innerText = newStatus;
        }

        menu.classList.add('hidden');
    }
});