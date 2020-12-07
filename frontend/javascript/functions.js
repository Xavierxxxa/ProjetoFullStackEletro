function exibecategoria(categoria){
    let elementos = document.getElementsByClassName('eletrodomesticos');
    for(var i=0; i<elementos.length; i++){
        if(categoria==elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}
let exibetodos = () => {
    let elementos = document.getElementsByClassName('eletrodomesticos');
    for(var i=0; i<elementos.length; i++){
            elementos[i].style = "display:block";
    }
}
 let destaque = (imagem) => {
     console.log(imagem);
     if (imagem.width==240)
        imagem.width = 120;
    else 
        imagem.width = 240;
 }