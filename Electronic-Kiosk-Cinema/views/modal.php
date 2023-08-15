<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Spider-Man: Into The Spiderverse</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="checkout.php" method="get">
                <div class="modal-body">
                    <input type="text" id="tituPeli" name="tPeli" style="display: none">
                    <div class="row">
                        <div class="col">
                            <div class="card" id="cardModal">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://terrigen-cdn-dev.marvel.com/content/prod/2x/MilesPoster.jpg" width="100%" height="100%" id="imagenMod">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title sinopsis">Sinopsis:</h5>
                                            <p class="card-text" align="justify" id="sinopsis">Tras ser picado por una araña y adquirir superpoderes, el adolescente Miles Morales se dedica a llevar una doble vida en la que compagina su rutina en el instituto con patrullar la ciudad y perseguir a villanos.</p>
                                            <p>
                                                <br>
                                            </p>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h5 class="card-title tanda">Tandas:</h5>
                                                    <div class="form-group">
                                                        <select  class="form-control form-control-lg col-md-12 text-white bg-secondary" id="FormControlSelect" name="tanda">
                                                            <option id="ma" value="">9:00 am a 11:00am</option>
                                                            <option id="ta" value="">9:00 am a 11:00am</option>
                                                            <option id="no" value="">9:00 am a 11:00am</option>
                                                        </select>
                                                    </div>
                                                    <br><br>
                                                    <p class="conteo" id="precio" name="precio">Precio total:</p>
                                                    <input type="text"  id="cobro"  name="cobro" style="display: none">
                                                    <h1 style="display: none" id="precioU"> </h1>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="contened_cont">
                                                            <h5 class="card-title boletos">N° boletos</h5>
                                                            <p class="conteo" id="conteo" name="contador">1</p>
                                                            <input type="text" id="numB" name="numB" style="display: none">
                                                            <div class="g_botones">
                                                                <div class="botones">
                                                                    <button type="button" class="btn btn-danger" id="decr"><span class="material-icons-round">remove</span></button>
                                                                    <button type="button" class="btn btn-warning" id="reset"><span class="material-icons-round">cached</span></button>
                                                                    <button type="button" class="btn btn-success" id="incr"><span class="material-icons-round">add</span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="precio" class="btn-lg btn-success btn-block" name="btn-enviar">Aceptar</button>
                    <button type="button"  id="cobro" class="btn-lg btn-danger btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </form>

        </div>
    </div>
</div>