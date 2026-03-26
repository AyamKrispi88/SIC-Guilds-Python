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
        
        if (previewText) {
            previewText.innerText = newStatus;
        }

        menu.classList.add('hidden');
    }
});