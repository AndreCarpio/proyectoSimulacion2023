

<p class="titulo-seccion">▶ Analisis De Mercado</p>

<div class="mb-3">
    <label class="form-label" for="clientes">¿Quiénes serán los clientes que compraran su Producto o Servicio?
    </label>
    <textarea maxlength="500" class="form-control" id="clientes" rows="3" name="clientes">{{$mercadoCompetenciaEstrategias ->clientes ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="potencialesClientes">¿Por qué cree que estos potenciales clientes compraran su
        Producto o Servicio? </label>
    <textarea maxlength="500" class="form-control" id="potencialesClientes" rows="3" name="potencialesClientes">{{$mercadoCompetenciaEstrategias ->potencialesClientes ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="relacionClientesPotenciales">¿Actualmente tiene relaciones con clientes
        potenciales? ¿Quiénes son? </label>
    <textarea maxlength="500" class="form-control" id="relacionClientesPotenciales" rows="3"
        name="relacionClientesPotenciales">{{$mercadoCompetenciaEstrategias ->relacionClientesPotenciales ?? '' }}</textarea>
</div>

<p class="titulo-seccion">▶ Analisis De La Competencia</p>

<div class="mb-3">
    <label class="form-label" for="competidoresCercanos">¿Existen competidores cercanos al lugar donde se aperturará
        la nueva actividad? ¿quienes son? ¿donde se ubican? </label>
    <textarea maxlength="500" class="form-control" id="competidoresCercanos" rows="3"
        name="competidoresCercanos">{{$mercadoCompetenciaEstrategias ->competidoresCercanos ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="accionesFrenteCompetencia">¿Qué acciones realizará para hacerle frente a la
        competencia? </label>
    <textarea maxlength="500" class="form-control" id="accionesFrenteCompetencia" rows="3"
        name="accionesFrenteCompetencia">{{$mercadoCompetenciaEstrategias ->accionesFrenteCompetencia ?? '' }}</textarea>
</div>
