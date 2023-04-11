const toggleBtn = document.querySelector('.toggle_bar');
const menu = document.querySelector('.menu_list');

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
});