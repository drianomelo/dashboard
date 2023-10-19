require('./bootstrap');

const toggleButtonMenu = document.getElementById("menu");
const aside = document.querySelector("aside");
const asideItems = document.querySelectorAll('.item p');
const asideName = document.querySelectorAll('.name');

toggleButtonMenu.addEventListener('click', () => {
    aside.classList.toggle('w-52');
    aside.classList.toggle('w-[75px]');
    asideItems.forEach(item => {
        item.classList.toggle('opacity-0');
    })
    asideName.forEach(name => {
        let fullName = name.textContent;
        let shortName = name.nextElementSibling;
        shortName.innerHTML = fullName[0] + fullName[1];
        name.classList.toggle('hidden');
        shortName.classList.toggle('hidden');
    })

})


