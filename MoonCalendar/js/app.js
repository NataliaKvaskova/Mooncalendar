let MoonPhaseContainer = document.querySelector("#MoonPhase");

const url = 'https://moon-phase1.p.rapidapi.com/?city=budapest';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'a50be92839msh92fdf27b7cf5c1bp12f8b8jsn1b7587b2bee3',
		'X-RapidAPI-Host': 'moon-phase1.p.rapidapi.com'
	}
};

async function MoonCalendar (){
    let info = await fetch(url, options);
    let result = await info.json();
        if (result.moon.phase === "Waning Gibbous"){
            MoonPhaseContainer.setAttribute ("src", "img/phasa/full_moon.jpg") 
        }else {MoonPhaseContainer.setAttribute ("src", "img/phasa/I.png")
               MoonPhaseContainer.setAttribute ("alt", result.moon.phase) }
    console.log(result.moon.phase)
}

MoonCalendar ()

let main = document.querySelector("#main")
console.log(main)
// // Получить модальный
let modal = document.getElementById("zodiacModal");

// Получить кнопку, которая открывает модальный
let btnZod = document.querySelectorAll(".zodiacButLeft");
console.log(btnZod)

// Получить элемент <span>, который закрывает модальный
let span = document.querySelectorAll(".closeS")[0];

// Когда пользователь нажимает на кнопку, откройте модальный
btnZod.forEach(function(btn){
btn.onclick = function() {
  modal.style.display = "block";
btn.addEventListener('blur', function(){
  main.focus();
})
}
})

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function() {
  modal.style.display = "none";
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none"
  }
}