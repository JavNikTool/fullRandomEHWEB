"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let questions = document.querySelectorAll('.questions'),
        questions_display = document.querySelectorAll('.sub_wrapp'),
        questions_display_first = document.querySelector('.sub_wrapp'),
        questions_circle = document.querySelectorAll('.select'),
        first_checkbox = document.getElementById('checkbox1'),
        slider_value = document.querySelector('.slider_value'),
        slider = document.querySelector('.slider');






    questions.forEach((e,i) => {
        let addHover = function () {
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(0.9); background-color:white;';

                }
            })
        }
        let remHover = function (){
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(1); background-color:none;';
                }
            })
        }
        e.addEventListener('mouseover', addHover)
        e.addEventListener('mouseout', remHover)

        if(questions_display_first.classList.contains('active'))
        {
            questions_circle.forEach((elem, key) =>{
                if(key == 0){
                    elem.style.cssText = 'transform: scale(0.9); background-color:white;';
                }
            })
        }
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
                        e.addEventListener('mouseout', remHover)
                    }
                }
            })
        })
    })

    slider_value.textContent = slider.value;
    slider.addEventListener('input', e => {
        slider_value.textContent = e.target.value
    })

    if(first_checkbox.checked === false)
        first_checkbox.checked = true;

})