// public/js/navbar-scroll.js
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    const handleScroll = () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            // Di paling atas
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
            // Jika ada teks yang perlu diubah warnanya
            updateTextColor('text-white');
        } else {
            // Saat di-scroll
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow-md');
            // Jika ada teks yang perlu diubah warnanya
            updateTextColor('text-gray-800');
        }

        lastScroll = currentScroll;
    };

    // Fungsi untuk mengupdate warna teks navbar
    const updateTextColor = (colorClass) => {
        // Sesuaikan selector ini dengan struktur navbar Anda
        const navLinks = navbar.querySelectorAll('a:not(.bg-primary-500)');
        const span = navbar.querySelectorAll('span');
        const hamburger = navbar.querySelectorAll('button');
        const oldColor = colorClass === 'text-white' ? 'text-gray-800' : 'text-white';
        
        navLinks.forEach(link => {
            link.classList.remove(oldColor);
            link.classList.add(colorClass);
        });
        span.forEach(span => {
            span.classList.remove(oldColor);
            span.classList.add(colorClass);
        });
        hamburger.forEach(hamburger => {
            hamburger.classList.remove(oldColor);
            hamburger.classList.add(colorClass);
        });
    };

    window.addEventListener('scroll', handleScroll);
    // Panggil sekali saat halaman dimuat
    handleScroll();
});