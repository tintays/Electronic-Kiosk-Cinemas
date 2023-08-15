const d=document;

const iniciarCartelera = async()=>{
    try{
        const respuesta = await axios.get("./class/Peliculas.php?accion=getPeliculas");

        let peliculas="";

        respuesta.data.forEach(pelicula =>{
            peliculas +=`
                
            <div class="col-md-4">
                <img src="${pelicula.foto}" id="imagen_${pelicula.ID}" class="card-img-top event" width="100%" height="80%" data-toggle="modal" data-target="#modal">
                <div class="card text-white bg-dark mb-3">                  
                    <div class="card-body event" id="card_${pelicula.ID}" style="text-align: center" data-toggle="modal" data-target="#modal">
                        <h6 class="card-title" id="titulo_${pelicula.ID}">${pelicula.nombre}</h6>
                    </div>
                </div>
            </div>   
            `;
        });
        document.getElementById("pel").innerHTML=peliculas;
    }catch (err){
        console.log(err);
    }
};

const obtenerCartelera = async (id) =>{
    try{
        const respuesta = await axios.get(`./class/Peliculas.php?accion=getPelicula&ID=${id}`);
        return respuesta;
    }catch (err){
        return null;
    }
}

$(d).on('click', '.event', async function(e){
    var Id = e.target.id.split('_')[1]

    pelicula = await obtenerCartelera(Id)

    d.getElementById("labelModal").innerHTML = pelicula.data.nombre;
    d.getElementById("imagenMod").src = pelicula.data.foto;
    d.getElementById("sinopsis").innerHTML = pelicula.data.sinopsis;
    d.getElementById("ma").innerHTML = pelicula.data.tandaMa;
    d.getElementById("ta").innerHTML = pelicula.data.tandaTar;
    d.getElementById("no").innerHTML = pelicula.data.tandaNo;
    d.getElementById("ma").value = pelicula.data.tandaMa;
    d.getElementById("ta").value = pelicula.data.tandaTar;
    d.getElementById("no").value = pelicula.data.tandaNo;
    d.getElementById("precioU").innerHTML = pelicula.data.precio;
    d.getElementById("tituPeli").value = pelicula.data.nombre;

    act()
})


d.addEventListener("DOMContentLoaded", iniciarCartelera);


