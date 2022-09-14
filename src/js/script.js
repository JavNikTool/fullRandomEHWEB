"use strict";

document.addEventListener('DOMContentLoaded', () => {
    
    let q1Selector = document.querySelectorAll('.select'),
    q1 = document.querySelectorAll('.sub_wrapp');


    q1Selector.forEach((elem,i) => {
        elem.addEventListener('click',() => {
            q1.forEach((elem,i2) => {
                if(i == i2){
                    elem.classList.toggle('active');
                }
            })
        })
    })




})