// public/js/sidebar.js
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const closeSidebar = document.getElementById('closeSidebar');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        overlay.classList.add('opacity-50');
    }

    function closeSidebarFunc() {
        sidebar.classList.add('translate-x-full');
        overlay.classList.remove('opacity-50');
        overlay.classList.add('opacity-0', 'pointer-events-none');
    }

    hamburger.addEventListener('click', openSidebar);
    closeSidebar.addEventListener('click', closeSidebarFunc);
    overlay.addEventListener('click', closeSidebarFunc);
});