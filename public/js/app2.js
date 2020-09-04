



$(document).ready(function(){

    $("#boton").click(function(){
      $("#panel").slideToggle(200);
    });



const arrText = document.querySelectorAll('.description-1')

var arr2 = document.querySelectorAll('.description')


console.log(arrText);

for (let index = 0; index < arrText.length; index++) {


    const element = arrText[index];


    // console.log(arrText[index].innerHTML);

    var content = arrText[index].innerHTML

    var  textClear = content.trim()
    var  textDiv = textClear.split(" ", 30)

    const arr1 = [". . . ."]

    textDiv.push(arr1)

    var result = textDiv.toString()

        result = result.replace(/,/g," ")
        console.log(result);

     arr2[index].innerHTML = ( result )

// // Crear nodo de tipo Element
// var parrafo = document.createElement("p");

// // Crear nodo de tipo Text
// var contenido = document.createTextNode(result);

// // Añadir el nodo Text como hijo del nodo Element
// parrafo.appendChild(contenido);

// // Añadir el nodo Element como hijo de la pagina
// document.body.appendChild(parrafo);


}






  });

