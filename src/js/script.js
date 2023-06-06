"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let questions = document.querySelectorAll('.questions'),
        questions_display = document.querySelectorAll('.sub_wrapp'),
        questions_circle = document.querySelectorAll('.select'),
        first_checkbox = document.getElementById('checkbox1');





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

        questions_display.forEach((item, key) => {
            if(item.classList.contains('active'))
            {
                questions_circle.forEach((elem, i2) =>{
                    if(key == i2){
                        e.removeEventListener('mouseout', remHover)
                        elem.style.cssText = 'transform: scale(0.9); background-color:white;';
                    }
                })
            }
        })



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


    if(first_checkbox.checked === false)
        first_checkbox.checked = true;

})