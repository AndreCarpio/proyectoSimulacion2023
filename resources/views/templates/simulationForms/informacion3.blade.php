
<p class="titulo-seccion">▶ Estrategia De Mercado (4P`s: Producto , Precio, Plaza y Promoción)</p>
<label class="form-label"> - Producto o Servicio</label>
<div class="mb-3">
    <label class="form-label" for="caracteristicasBenficiosas">¿Qué características del Producto o Servicio son
        beneficiosas para el cliente? ¿Qué es lo que mas valorará el cliente? </label>
    <textarea maxlength="500" class="form-control" id="caracteristicasBenficiosas" rows="3"
        name="caracteristicasBenficiosas">{{$mercadoCompetenciaEstrategias ->caracteristicasBenficiosas ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="generaMayorIngreso">¿Cuál de los productos o Servicios generará mayor ingreso, cuál
        será el producto o servicio estrella? </label>
    <textarea maxlength="500" class="form-control" id="generaMayorIngreso" rows="3" name="generaMayorIngreso">{{$mercadoCompetenciaEstrategias ->generaMayorIngreso ?? ''}}</textarea>
</div>

<label class="form-label"> - Precios </label>
<div class="mb-3">
    <label class="form-label" for="precioProductoServicio">¿Cuál será el precio del Producto o Servicio y cuál la forma
        de pago? </label>
    <textarea maxlength="500" class="form-control" id="precioProductoServicio" rows="3"
        name="precioProductoServicio">{{$mercadoCompetenciaEstrategias ->precioProductoServicio ?? ''}}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="comoDeterminaPrecio">¿Cómo se ha determinado el precio del producto o Servicio?
        ¿Cuál será el costo para el consumidor? </label>
    <textarea maxlength="500" class="form-control" id="comoDeterminaPrecio" rows="3" name="comoDeterminaPrecio">{{$mercadoCompetenciaEstrategias ->comoDeterminaPrecio ?? ''}}</textarea>
</div>

<label class="form-label"> - Plaza (Lugar y Distribución) </label>

<div class="mb-3">
    <label class="form-label" for="lugarVenta">Si el Producto o Servicio se vende de manera directa, ¿cuál será el
        lugar de venta? </label>
    <textarea maxlength="500" class="form-control" id="lugarVenta" rows="3" name="lugarVenta">{{$mercadoCompetenciaEstrategias ->lugarVenta ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="intermediarios">Si el Producto o Servicio se vende de manera indirecta, ¿quienes
        son los intermediarios y/o distribuidores?, ¿donde son sus lugares de venta? </label>
    <textarea maxlength="500" class="form-control" id="intermediarios" rows="3" name="intermediarios">{{$mercadoCompetenciaEstrategias ->intermediarios ?? ''}}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="otraFormaVenta">¿Existe otra forma de venta del producto o servicio que no sea en
        un lugar físico?</label>
    <textarea maxlength="500" class="form-control" id="otraFormaVenta" rows="3" name="otraFormaVenta">{{$mercadoCompetenciaEstrategias ->otraFormaVenta ?? ''}}</textarea>
</div>

<label class="form-label"> - Promocion </label>

<div class="mb-3">
    <label class="form-label" for="comunicarExistencia">¿De qué manera comunicara a los clientes potenciales la
        existencia del Producto o Servicio?</label>
    <textarea maxlength="500" class="form-control" id="comunicarExistencia" rows="3" name="comunicarExistencia">{{$mercadoCompetenciaEstrategias ->comunicarExistencia ?? ''}}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="accionesAtraerCliente">¿Qué acciones pretende implementar para atraer más
        clientes?</label>
    <textarea maxlength="500" class="form-control" id="accionesAtraerCliente" rows="3"
        name="accionesAtraerCliente">{{$mercadoCompetenciaEstrategias ->accionesAtraerCliente ?? ''}}</textarea>
</div>
