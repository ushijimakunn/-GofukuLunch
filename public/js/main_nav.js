const btn = document.getElementById('menu_btn');
const nav = document.getElementById('main_nav');

btn.addEventListener('click', function() {
    nav.classList.toggle('w-full');
    nav.classList.toggle('w-0');
    if(btn.querySelector('span').innerText === 'menu') {
        btn.querySelector('span').innerText = 'close';
    } else {
        btn.querySelector('span').innerText = 'menu';
    }
});
