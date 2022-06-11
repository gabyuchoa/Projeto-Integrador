var btnTable = document.querySelectorAll('.botoestable');
var btnFechar = document.querySelectorAll('.close');
var box = document.querySelectorAll('.box');
var box_menu = document.querySelector('.box-menu');

let totalBtnTable = document.getElementsByClassName("botoestable").length;
let totalBtnFechar = document.getElementsByClassName("close").length;
let totalBox = document.getElementsByClassName("box").length;

for(let i=0; i<=totalBtnTable; i++){
    btnTable[i].addEventListener('click', AlternarMenuClientes())
}

for(let i=0; i<=totalBtnFechar; i++){
    btnFechar[i].addEventListener('click', AlternarMenuClientes())
}

function AlternarMenuClientes(){
    for(let o=0; o<=totalBox; o++){
        if(box[o].style.display == 'block') {
            box[o].style.display = 'block';
            box_menu.style.display = 'none';
        }else{
            box[o].style.display = 'none';
            box_menu.style.display = 'block';
        }
    }
}

/* */

var btnTable = document.querySelectorAll('.botoestable');
var btnFechar = document.querySelectorAll('.close');
var box = document.querySelectorAll('.box');
var box_menu = document.querySelector('.box-menu');

let totalBtnTable = document.getElementsByClassName("botoestable").length;
let totalBtnFechar = document.getElementsByClassName("close").length;
let totalBox = document.getElementsByClassName("box").length;

// for(let i=0; i<=totalBtnTable; i++){
//     btnTable[i].addEventListener('click', function(){
//         for(let o=0; o<=totalBox; o++){
//             if(box[o].style.display == 'block') {
//                 box[o].style.display = 'block';
//                 box_menu.style.display = 'none';
//             }else{
//                 box[o].style.display = 'none';
//                 box_menu.style.display = 'block';
//             }
//         }
//     })
// }

for(let i=0; i<=totalBtnTable; i++){
    btnTable[i].addEventListener('click', AlternarMenuClientes())
}

function AlternarMenuClientes(){
    for(let o=0; o<=totalBox; o++){
        if(box[o].style.display == 'block') {
            box[o].style.display = 'block';
            box_menu.style.display = 'none';
        }else{
            box[o].style.display = 'none';
            box_menu.style.display = 'block';
        }
    }
}