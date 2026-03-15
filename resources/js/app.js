document.addEventListener('DOMContentLoaded', () => {
    const scrollTarget = "{{ session('scroll') }}";
    if (scrollTarget) {
        const el = document.getElementById(scrollTarget);
        if (el) el.scrollIntoView({ behavior: 'smooth' });
    }
});
