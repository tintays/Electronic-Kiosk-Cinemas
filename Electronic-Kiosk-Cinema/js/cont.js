const contador = document.getElementById("conteo");
const sumar = document.getElementById("incr");
const restar = document.getElementById("decr");
const reset = document.getElementById("reset");
const precioU = document.getElementById("precioU");
const precio = document.getElementById( "precio");
const cobro = document.getElementById("cobro");
const nboletos = document.getElementById("numB");


let numero = 1;

sumar.addEventListener("click", ()=>{
    if(numero>=10){}
    else{
        numero++;
        contador.innerHTML = numero;
    }
    act()
});

restar.addEventListener("click", ()=>{

    if(numero==1){}
    else{
        numero--;
        contador.innerHTML = numero;

    }
    act()

});

reset.addEventListener("click", ()=>{
    numero = 1;
    contador.innerHTML = numero;
    act()
});

$(document).on('click', '.event', async function(e){
    numero = 1;
    contador.innerHTML = numero;

})
function act() {
    precio.innerHTML = "Precio total: C$" + precioU.innerHTML * numero;
    cobro.value = precioU.innerHTML * numero;
    nboletos.value = numero;
}

