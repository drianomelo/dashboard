require('./bootstrap');

const toggleButtonMenu = document.getElementById("menu");
const aside = document.querySelector("aside");
const asideItems = document.querySelectorAll('.item p');
const asideName = document.querySelector('.name');


toggleButtonMenu.addEventListener('click', () => {
    aside.classList.toggle('w-52');
    aside.classList.toggle('w-[75px]');
    asideItems.forEach(item => {
        item.classList.toggle('opacity-0');
    })
    const shortName = createShortName(asideName);
    asideName.classList.toggle("hidden");
    shortName.classList.toggle("block");
})

function createShortName(name) {
    let shortName = document.createElement("h2");
    const fullName = name.textContent;
    shortName = `${fullName[0] + fullName[1] + fullName[2]}`;

    return shortName;
}
