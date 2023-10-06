
(function () {

    let container = document.querySelector('#listRef');
    let moreNewsBtn = document.querySelector('#butRef3'); // показать следующие
    
 
 
    if(!container || !moreNewsBtn)return; 

    let start = 0;
    let limit = 8;
    let count = 0;
    let refId = 0;
  
 

    let showListRef = function(data){
        let output = data.map(function(listItem){
            return `
            <li class= "listRefItem"><a id = ${listItem.idReference} class= "RefItem" href="#">${listItem.nameReference}</a> <p>${listItem.descriptionReference}</p> </li>`;
        }).join('');
        container.insertAdjacentHTML('beforeend', output);

        // при нажатии на ссылку в соседнем окне открывается видео:
        let linkBox = document.querySelectorAll('.RefItem')
        linkBox.forEach(function(link){
            link.addEventListener('click', function(event){
                event.preventDefault();
                refId = this.id
                async function getLink (){
                let response = await fetch(`data/serverRefId.php?refId=${refId}`);
                let result = await response.json();
                let videoTitle = document.querySelector("#videoTitle")
                videoTitle.textContent = `${result.nameReference}. ${result.descriptionReference}`
                let video = document.querySelector("#videoRefplay")
                let textVideo = document.querySelector("#textVideo")
                textVideo.classList.add("close")
                video.setAttribute("src", result.linkReference)
                video.setAttribute("autoplay", "autoplay")
                video.classList.remove("close")
                }
            
                
                getLink()
            })
        })
    
    }

    async function getPosts(){
        // отправляем запрос на наш файл php
        let response = await fetch(`data/serverReference.php?start=${start}&limit=${limit}`);
        let data = await response.json();
        count = data.count
        // вызывыем функцию для вывода данных в документ
        showListRef(data.listRef);
    }
    getPosts();

    moreNewsBtn.addEventListener('click', function(event){
       event.preventDefault();
       start += limit;
       if (start >= count){
        moreNewsBtn.style.display = 'none';
        return;
       }
       getPosts();
    });
 
})();