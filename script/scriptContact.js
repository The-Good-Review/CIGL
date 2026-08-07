function bindFileName(inputId, labelId) {
    const input = document.getElementById(inputId);
    const label = document.getElementById(labelId);
    input.addEventListener('change', () => {
        label.textContent = input.files.length ? input.files[0].name : '';
    });
}
bindFileName('doc', 'doc-name');
