"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let questions = document.querySelectorAll('.questions'),
        questions_display = document.querySelectorAll('.sub_wrapp'),
        questions_circle = document.querySelectorAll('.select'),
        first_checkbox = document.getElementById('checkbox1');

    questions.forEach((elem,i) => {

        elem.addEventListener('mouseover', () => {
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(0.9); background-color:white;';
                }
            })
        })

        elem.addEventListener('mouseout', () => {
            questions_circle.forEach((elem, i2) =>{
                if(i == i2){
                    elem.style.cssText = 'transform: scale(1); background-color:none;';
                }
            })
        })

        elem.addEventListener('click',() => {
            questions_display.forEach((elem,i2) => {
                if(i == i2){
                    elem.classList.toggle('active');
                }
            })
        })
    })
    if(first_checkbox.checked === false)
        first_checkbox.checked = true;

})