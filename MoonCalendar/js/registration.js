(function () {
    let showRegPassword = document.querySelectorAll('.showRegPassword');
    
    // перебираем список с кнопками
    showRegPassword.forEach(function(button, index){
        // на каждую кнопку вешаем обработчик события по клику
        button.addEventListener('click', function(event){
            event.preventDefault();// отменяем перезагрузку при нажатии на кнопку

            let inputEl = button.previousElementSibling;// получаем поле для ввода пароля
            if(inputEl.type === 'password'){// если тип поля password
                inputEl.type = 'text';
                button.setAttribute('src', 'img/command/passHide.png')
                button.setAttribute('alt', 'Скрыть пароль')
                button.setAttribute('title', 'Скрыть пароль')
                
                
            }else{ // если тип поля text
                inputEl.type = 'password';
                button.setAttribute('src', 'img/command/passShow.png')
                button.setAttribute('alt', 'Показать пароль')
                button.setAttribute('title', 'Показать пароль')
            
            }
        });
    });
})();

(function () {
    // получаем элементы
    let regPassword1 = document.querySelector('#reg-password-1');
    let regPassword2 = document.querySelector('#reg-password-2');
    let regPasswordError = document.querySelector('#reg-password-error');

    if(!regPassword1 || !regPassword2 || !regPasswordError)return; // если элемента нет, прерываем работу функции

    let password = '';// задаем переменную для введенного пароля

    // получаем значение пароля
    regPassword1.addEventListener('blur', function(){
        password = regPassword1.value.trim();
    });

    // получаем значение подтверждения пароля
    regPassword2.addEventListener('blur', function(){
        let confirmPassword = regPassword2.value.trim();

        // сравниваем пароли
        if(password !== confirmPassword){// если пароли не совпадают
            regPasswordError.textContent = 'Пароли не совпадают';// выводим в спан ошибку
            
        }else{// если совпадают
            regPasswordError.textContent = '';// ошибку убираем
        }
    });
})();