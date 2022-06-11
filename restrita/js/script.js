var btnTable  = document.querySelectorAll('.botoestable');
var btnFechar = document.querySelectorAll('.close-clientes');
var box = document.querySelectorAll('.box');
var box_menu = document.querySelector('.box-menu');

let retorno;

let totalBtnTable  = document.getElementsByClassName("botoestable").length;
let totalBtnFechar = document.getElementsByClassName("close-clientes").length;
let totalBox = document.getElementsByClassName("box").length;

for(let i=0; i<=totalBtnTable; i++){
    btnTable[i].addEventListener('click', function(){
        retorno = AlternarMenuClientes();
    })

    if (retorno){
        retorno = false;
        break;
    }
}

for(let i=0; i<=totalBtnFechar + 1; i++){
    btnFechar[i].addEventListener('click', function(){
        retorno = AlternarMenuClientes();
    })

    if (retorno){
        retorno = false;
        break;
    }
}


function AlternarMenuClientes(){

    let ocultarMenu = false;

    if(box[0].style.display == 'block') {
        ocultarMenu = false;
    }else{
        ocultarMenu = true;
    }

    for(let o=0; o<=totalBox; o++){
        if(ocultarMenu) {
            box[o].style.display = 'block';
            box_menu.style.display = 'none';
        }else{
            box[o].style.display = 'none';
            box_menu.style.display = 'block';
        }
    }
    return true;
}