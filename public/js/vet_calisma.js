const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const timeSelects = document.querySelectorAll('.time-select');

checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        const startSelect = document.querySelector(`#${this.id}-start`);
        const endSelect = document.querySelector(`#${this.id}-end`);

        startSelect.disabled = !this.checked;
        endSelect.disabled = !this.checked;

        if (!this.checked) {
            startSelect.value = '';
            endSelect.value = '';
        }
    });
});

timeSelects.forEach(select => {
    select.addEventListener('change', function() {
        const endSelect = document.querySelector(`#${this.id.replace('-start', '-end')}`);
        const startIndex = this.selectedIndex;

        for (let i = 0; i < endSelect.options.length; i++) {
            if (i <= startIndex) {
                endSelect.options[i].disabled = true;
                endSelect.options[i].selected = false;
            } else {
                endSelect.options[i].disabled = false;
            }
        }
    });
});
