let DataContainer = document.querySelector("#data");
function dataToday(){
    let newData = new Date();
    let day = newData.getDate();
    let month = newData.getMonth()+1;
    let year = newData.getFullYear();
    let dataToday;
    if (month ==1) 
        {dataToday = `${day} января ${year} года`}
            else if (month==2)
            {dataToday =`${day} февраля ${year} года`}
                else if (month==3)
                    {dataToday =`${day} марта ${year} года`}
                        else if (month==4)
                        {dataToday =`${day} апреля ${year} года`}
                            else if (month==5)
                            {dataToday =`${day} мая ${year} года`}
                                else if (month==6)
                                {dataToday =`${day} июня ${year} года`}
                                    else if (month==7)
                                    {dataToday =`${day} июля ${year} года`}
                                        else if (month==8)
                                        {dataToday =`${day} августа ${year} года`}
                                            else if (month==9)
                                            {dataToday =`${day} сентября ${year} года`}
                                                else if (month==10)
                                                {dataToday =`${day} октября ${year} года`}
                                                    else if (month==11)
                                                    {dataToday =`${day} ноября ${year} года`}
                                                        else if (month==12)
                                                        {dataToday =`${day} декабря ${year} года`}
    return dataToday;
}
DataContainer.textContent = `Сегодня:    ${dataToday()}`; 

let dropdownsContainer = document.querySelector('#dropdowns');
let dropdownsBtn = document.querySelector('.dropbtn');
dropdownsBtn.addEventListener("click", function () {
    dropdownsContainer.classList.toggle("close")
    dropdownsContainer.classList.toggle("show")
});

