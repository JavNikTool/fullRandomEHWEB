"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let questions = document.querySelectorAll('.questions'),
        questions_display = document.querySelectorAll('.questions_body'),
        questions_display_first = document.querySelector('.questions_body'),
        questions_circle = document.querySelectorAll('.select-btn'),
        playersCountOut = document.getElementsByTagName("output"),
        playersCount = document.querySelector('.playersCount'),
        resWindow = document.querySelector('.res_wrap');


    // функция-обработчик ответа с сервера, выводим результирующие данные на страницу
    function AjaxResp(data){
        let htmlRes = document.querySelector('.res_wrap__value');
        let preludes = 'preludes' in data ? `Прелюдия: <br> ${data['preludes']}` : ''; // делаем проверку, игра будет с прелюдиями или нет

        htmlRes.innerHTML =
        `${data['onePlayer'] ? 'Ваш сыщик:' : 'Ваши сыщики:'} <br>
        ${data['detectives']}`  + "<br>" + "<br>" +
        `Древний, которого предстоит одолеть: <br>
        ${data['monster']}` + "<br>" + "<br>" + preludes;
    }

    // отправляем данные с формы на сервер
    $('.main_wrap__form').submit(function (e){
        e.preventDefault();
        resWindow.classList.add('res-active');
        let form_data = $(this).serialize();
        $.ajax({
            type: "POST", // метод запроса
            url: "app/server.php", // адрес
            data: form_data,
            dataType: 'json',
            success: function(response) {
                AjaxResp(response); // обработка ответа
            },
        });

    })

    //При нажатии esc закрываем форму с результатами
    $(document).on('keydown', (e) => {
        if(e.key == 'Escape'){
            resWindow.classList.remove('res-active')
        }
    })
    //При клике на крестик закрываем форму с результатами
    $('.res_wrap__close').click(() => {
        resWindow.classList.remove('res-active')
    })

    //выводим количество игроков
    playersCountOut[0].textContent = playersCount.value;
    playersCount.addEventListener('input', e => {
        playersCountOut[0].textContent = e.target.value;
    })


    // различная косметика

    questions.forEach((e,i) => {
        e.addEventListener('click',() => {
            questions_display.forEach((elem,i2) => {
                if(i == i2){
                    elem.classList.toggle('active');
                    if(elem.classList.contains('active'))
                    {
                        questions_circle.forEach((elem, i2) =>{
                            if(i == i2){
                                e.removeEventListener('mouseout', remHover)
                                elem.style.cssText = 'transform: scale(0.9); background-color:white;';
                            }
                        })
                    }
                    else {
                        e.addEventListener('mouseout', remHover);
                    }
                }
            })
        })
        let addHover = function () {
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(0.9); background-color:white;';

                }
            })
        };
        let remHover = function (){
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(1); background-color:none;';
                }
            })
        };
        e.addEventListener('mouseover', addHover);
        e.addEventListener('mouseout', remHover);

        if(questions_display_first.classList.contains('active'))
        {
            questions_circle.forEach((elem, key) =>{
                if(key == 0){
                    elem.style.cssText = 'transform: scale(0.9); background-color:white;';
                }
            })
        };

    })
})