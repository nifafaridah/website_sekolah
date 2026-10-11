document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('schoolSidebar');
    const toggle = document.getElementById('sidebarToggle');
    if (toggle && sidebar) toggle.addEventListener('click', () => sidebar.classList.toggle('show'));
});
