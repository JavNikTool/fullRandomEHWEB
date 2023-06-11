"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let questions = document.querySelectorAll('.questions'),
        questions_display = document.querySelectorAll('.sub_wrapp'),
        questions_display_first = document.querySelector('.sub_wrapp'),
        questions_circle = document.querySelectorAll('.select'),
        prelude = document.querySelectorAll('.prelude'),
        slider_value = document.querySelector('.slider_value'),
        slider = document.querySelector('.slider'),
        submit = document.querySelector('.submit'),
        resWindow = document.querySelector('.res_wrap');

    $('.main_wrap__form').submit(function (e){
        e.preventDefault();
        resWindow.classList.add('active2');
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST", // Метод отправки
            url: "app/server.php", // Путь до php файла отправителя
            data: form_data,
            dataType: 'json', // указываем, что ждем ответ в формате JSON
            success: function(response) {
                console.log();
                AjaxResp(response);
            },
            error: function(response) { // обработчик ошибок запроса
                console.log(response); // выводим информацию об ошибке в консоль
            },
        });

    })

    function AjaxResp(data){
        let dataTest = document.querySelector('.ajax');
        if('preludes' in data){
            dataTest.innerHTML = 'Ваши сыщики: ' + "<br>" + data['detectives'] + "<br>" + "<br>" + 'Древний, которого предстоит одолеть:' + "<br>" + data['monster'] + "<br>" + "<br>" + 'Прелюдия:'  + "<br>" + data['preludes'];
        }else{
            dataTest.innerHTML = 'Ваши сыщики: ' + "<br>" + data['detectives'] + "<br>" + "<br>" + 'Древний, которого предстоит одолеть:' + "<br>" + data['monster'];
        }
    }

    $('.res_wrap__close').click(function (){
        resWindow.classList.remove('active2')
    })
    prelude.forEach(element => {
        element.addEventListener('click', () => {
                if(prelude[1].checked){
                 prelude[0].checked = false;
                }
            if(prelude[0].checked){
                prelude[1].checked = false;
            }
        })
    })
    questions.forEach((e,i) => {
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
    })

    slider_value.textContent = slider.value;
    slider.addEventListener('input', e => {
        slider_value.textContent = e.target.value;
    })


})