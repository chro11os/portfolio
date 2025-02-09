const toggles = document.querySelectorAll('.tree-toggle');

toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        const content = toggle.nextElementSibling;

        // Toggle visibility
        if (content.classList.contains('show')) {
            content.classList.remove('show');
            toggle.textContent = toggle.textContent.replace('▼', '▶');
        } else {
            content.classList.add('show');
            toggle.textContent = toggle.textContent.replace('▶', '▼');
        }
    });
});
