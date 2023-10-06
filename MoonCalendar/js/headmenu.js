let dropdownsContainer = document.querySelector('#dropdowns');
let dropdownsBtn = document.querySelector('.dropbtn');
    dropdownsBtn.addEventListener("click", function () {
    dropdownsContainer.classList.toggle("close")
    dropdownsContainer.classList.toggle("show")
});