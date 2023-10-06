let spanBtn = document.querySelectorAll('.rolesDescriptionSpan');
let pCont = document.querySelectorAll('.dropdowns');
spanBtn.forEach(function(span){
    span.addEventListener("click", function () {
    span.nextElementSibling.classList.toggle("close");
    span.nextElementSibling.classList.toggle("show");
})
});
// Получаем все элементы span с классом "closeP"
let closeButtons = document.querySelectorAll('.closeP');

// Добавляем обработчик события для каждого элемента span
closeButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    // Получаем родительский элемент p
    let parentP = this.parentNode;

    // Добавляем класс "close"
    parentP.classList.add('close');
  });
});

let btnOpen = document.querySelectorAll('.btnIndexRoles')
btnOpen.forEach(function(btn, index){
    if (index == 0){
        btn.addEventListener("click", function(){
            window.open("/MoonCalendar/MoonCalendar/calendar.php", "_self")
          }) 
        }
        else {
        btn.addEventListener("click", function(){
        window.open("/MoonCalendar/MoonCalendar/registration.php", "_self");
    })
}
    
})

let linkBox = document.querySelectorAll('.RefItem')
linkBox.forEach(function(link){
  console.log (link)
  link.addEventListener('click', function(event){
      event.preventDefault();
      refId = this.id
      async function getLink (){
      let response = await fetch(`data/serverRefId.php?refId=${refId}`);
      let result = await response.json();
      let videoTitle = document.querySelector("#videoTitle")
      videoTitle.textContent = `${result.nameReference}. ${result.descriptionReference}`
      let video = document.querySelector("#videoMain")
      video.setAttribute("src", result.linkReference)
      video.setAttribute("autoplay", "autoplay")
      let butClose = document.querySelector("#butClose")
      butClose.classList.remove("close")
      butClose.addEventListener("click", function(){
        videoTitle.textContent = "Скоро я расскажу о том, что такое лунный календарь. И как он может помочь нам в нашей реально-повседневной жизни. А чтобы ожидание стало интересным, Вы можете приоткрыть завесу тайны Солнечной системы с научно-популярным каналом КОСМО. Приятного просмотра!"
        video.setAttribute("src", "videoRef/video.mp4")
        video.removeAttribute("autoplay", "autoplay")
        butClose.classList.add("close")

      })
      }
  
      
      getLink()
  })
})