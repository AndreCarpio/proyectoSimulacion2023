<p class="titulo-seccion">▶ Datos personales</p>
<div class="row">
    <div class="col cotenedor-fieldset">
        <p class="cotenedor-legenda"> Deudor </p>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="inptu_deudor_nombre" class="form-label">Nombres y Apellidos:</label>
                <input type="text" class="form-control input-grande" id="inptu_deudor_nombre"
                    name="deudor_nombre_apellidos" value="{{ $deudor->nombre ?? '' }}">
            </div>
            <div class="col">
                <label for="deudor_ci" class="form-label">CI:</label>
                <input type="text" class="form-control input-mediano" id="deudor_ci" name="deudor_ci"
                    value="{{ $deudor->ci ?? '' }}">
            </div>
            <div class="col">
                <label for="deudor_ci_extension" class="form-label">Extensión</label>
                <input maxlength="4" type="text" class="form-control input-pequenio"
                    id="deudor_ci_extension"name="deudor_extension" value="{{ $deudor->extension ?? '' }}">
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="deudor_edad" class="form-label">Edad:</label>
                <input type="number" min="0" class="form-control input-pequenio" id="deudor_edad"
                    name="deudor_edad" value="{{ $deudor->edad ?? '' }}">
            </div>
            <div class="col">
                <label for="deudor_estado_civil" class="form-label">Estado civil:</label>
                <input type="text" class="form-control input-mediano" id="deudor_estado_civil"
                    name="deudor_estado_civil" value="{{ $deudor->estadoCivil ?? '' }}">
            </div>
            <div class="col">
                <label for="deudor_telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control input-mediano" id="deudor_telefono" name="deudor_telefono"
                    value="{{ $deudor->telefono ?? '' }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="deudor_direccion" class="form-label">Dirección Domicilio :</label>
            <input type="text" class="form-control input-grande" id="deudor_direccion" name="deudor_direccion"
                value="{{ $deudor->direccion ?? '' }}">
        </div>
    </div>

    <div class="col cotenedor-fieldset">
        <p class="cotenedor-legenda"> Codeudor</p>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="codeudor_nombre" class="form-label">Nombres y Apellidos:</label>
                <input type="text" class="form-control input-grande" id="codeudor_nombre"
                    name="codeudor_nombre_apellidos" value="{{ $codeudor->nombre ?? '' }}">
            </div>
            <div class="col">
                <label for="codeudor_ci" class="form-label">CI:</label>
                <input type="text" class="form-control input-mediano" id="codeudor_ci" name="codeudor_ci"
                    value="{{ $codeudor->ci ?? '' }}">
            </div>
            <div class="col">
                <label for="codeudor_ci_extension" class="form-label">Extensión</label>
                <input maxlength="4" type="text" class="form-control input-pequenio" id="codeudor_ci_extension"
                    name="codeudor_extension" value="{{ $codeudor->extension ?? '' }}">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col">
                <label for="codeudor_edad" class="form-label">Edad:</label>
                <input type="number" min="0" class="form-control input-pequenio" id="codeudor_edad"
                    name="codeudor_edad" value="{{ $codeudor->edad ?? '' }}">
            </div>
            <div class="col">
                <label for="codeudor_estado_civil" class="form-label">Estado civil:</label>
                <input type="text" class="form-control input-mediano" id="codeudor_estado_civil"
                    name="codeudor_estado_civil" value="{{ $codeudor->estadoCivil ?? '' }}">
            </div>
            <div class="col">
                <label for="codeudor_telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control input-mediano" id="codeudor_telefono"
                    name="codeudor_telefono" value="{{ $codeudor->telefono ?? '' }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="codeudor_direccion" class="form-label">Dirección Domicilio:</label>
            <input type="text" class="form-control input-grande" id="codeudor_direccion"name="codeudor_direccion"
                value="{{ $codeudor->direccion ?? '' }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col cotenedor-fieldset">
        <p class="cotenedor-legenda"> Persona Juridica</p>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="persona_juridica_razon_social" class="form-label">Razon Social</label>
                <input type="text" class="form-control input-grande" id="persona_juridica_razon_social"
                    name="persona_juridica_razon_social" value="{{ $personaJuridica->razonSocial ?? '' }}">
            </div>
            <div class="col">
                <label for="deudor_ci" class="form-label">NIT:</label>
                <input type="text" class="form-control input-mediano" id="deudor_ci" name="persona_juridica_nit"
                    value="{{ $personaJuridica->nit ?? '' }}">
            </div>
            <div class="col">
                <label for="persona_juridica_" class="form-label">Sigla</label>
                <input type="text" class="form-control input-pequenio" id="persona_juridica_"
                    name="persona_juridica_sigla" value="{{ $personaJuridica->sigla ?? '' }}">
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="persona_juridica_tipo_sociedad" class="form-label">Tipo y Forma de Sociedad:</label>
                <input type="text" class="form-control input-pequenio" id="persona_juridica_tipo_sociedad"
                    name="persona_juridica_tipo_sociedad" value="{{ $personaJuridica->tipoSociedad ?? '' }}">
            </div>
            <div class="col">
                <label for="persona_juridica_representante" class="form-label">Representante Legal:</label>
                <input type="text" class="form-control input-mediano" id="persona_juridica_representante"
                    name="persona_juridica_representante" value="{{ $personaJuridica->repreLegales ?? '' }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="persona_juridica_domicilio" class="form-label"> Domicilio Legal :</label>
            <input type="text" class="form-control input-grande" id="persona_juridica_domicilio"
                name="persona_juridica_domicilio" value="{{ $personaJuridica->domicilio ?? '' }}">
        </div>
    </div>

    <div class="col cotenedor-fieldset">
        <p class="cotenedor-legenda"> Emprendimiento</p>

        <div class="mb-3">
            <label for="emprendimiento_actividad" class="form-label">Actividad:</label>
            <input type="text" class="form-control input-grande" id="emprendimiento_actividad"
                name="emprendimiento_actividad" value="{{ $emprendimiento->actividad ?? '' }}">
        </div>

        <div class="row g-3 mb-3">
            <div class="col">
                <label for="emprendimiento_departamento" class="form-label">Departamento:</label>
                <input type="text" class="form-control input-pequenio" id="emprendimiento_departamento"
                    name="emprendimiento_departamento" value="{{ $emprendimiento->departamento ?? '' }}">
            </div>
            <div class="col">
                <label for="emprendimiento_municipio" class="form-label">Municipio:</label>
                <input type="text" class="form-control input-mediano" id="emprendimiento_municipio"
                    name="emprendimiento_municipio" value="{{ $emprendimiento->municipio ?? '' }}">
            </div>
            <div class="col">
                <label for="emprendimiento_telefono" class="form-label">Telefono:</label>
                <input type="text" class="form-control input-mediano" id="emprendimiento_telefono"
                    name="emprendimiento_telefono" value="{{ $emprendimiento->telefono ?? '' }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="emprendimiento_direccion" class="form-label">Dirección del Emprendimiento:</label>
            <input type="text" class="form-control input-grande" id="emprendimiento_direccion"
                name="emprendimiento_direccion" value="{{ $emprendimiento->direccion ?? '' }}">
        </div>
    </div>

</div>

<p class="titulo-seccion">▶ Descripcion del plan de negocios</p>
<div class="mb-3">
    <label class="form-label" for="descripcion_actividad">Describa la actividad que quiere emprender</label>
    <textarea class="form-control" id="descripcion_actividad" rows="2" name="descripcion_actividad">{{ $descripcionPlanNegocios->descripcion ?? '' }}</textarea>
</div>
<div class="row g-3 mb-3">
    <div class="col">
        <label for="actividad_en_funcionamiento" class="form-label">La actividad ya está funcionando ? </label>
        <select class="form-select" aria-label="Default select example" id="actividad_en_funcionamiento"
            name="actividad_en_funcionamiento">
            @if ($descripcionPlanNegocios != null && $descripcionPlanNegocios->enFuncionando != null)
                @if ($descripcionPlanNegocios->enFuncionando == 1)
                    <option value="1" selected>si</option>
                    <option value="0">no</option>
                @else
                    <option value="1">si</option>
                    <option value="0" selected>no</option>
                @endif
            @else
                <option value="1">si</option>
                <option value="0" selected>no</option>
            @endif
        </select>
    </div>
    <div class="col">
        <label for="hace_cuanto_inicio" class="form-label">¿Hace cuántos meses inició ?</label>
        <input type="number" min="0" class="form-control input-mediano" id="hace_cuanto_inicio"
            name="hace_cuanto_inicio"
            @if ($descripcionPlanNegocios != null && $descripcionPlanNegocios->mesesFuncionando != null) value = "{{ $descripcionPlanNegocios->mesesFuncionando ?? '' }}"
            @else
                value = "0" @endif>
    </div>
</div>
<div class="mb-3">
    <label class="form-label" for="que_inversiones_necesita">¿Qué inversiones necesita para la
        actividad?</label>
    <textarea class="form-control" id="que_inversiones_necesita" name="que_inversiones_necesita" rows="2">{{ $descripcionPlanNegocios->descripcionInversiones ?? '' }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label" for="porque_sera_rentable">Describa los motivos por la que el proyecto será
        rentable</label>
    <textarea class="form-control" id="porque_sera_rentable" name="porque_sera_rentable" rows="2">{{ $descripcionPlanNegocios->descripcionRentabilidades ?? '' }}</textarea>
</div>

<p class="titulo-seccion">▶ Descripcion del producto o servicio</p>

<div class="mb-3">
    <label class="form-label">Descripción detallada del Producto o Servicio</label>

    <table class="table">
        <thead>
            <tr>
                <th class="titulo-tabla-tipo1" scope="col">Producto o Servicio</th>
                <th class="titulo-tabla-tipo1" scope="col">Proceso de elaboración</th>
                <th class="titulo-tabla-tipo1" scope="col">Características Comerciales</th>
            </tr>
        </thead>
        <tbody class="body-table-descripcion-producto-servico">

          

            @foreach ($descripcionProductoServicio as $item)
                <tr class="fila-descripcion-producto-servico">
                   
                    <td>
                        <textarea spellcheck="false" class="nombre-producto-servico form-control" rows="4">{{ $item->nombre }}</textarea>
                    </td>
                    <td>
                        <textarea spellcheck="false" class="proceso-elaboracion form-control" rows="4">{{ $item->proceso }}</textarea>
                    </td>
                    <td>
                        <textarea spellcheck="false" class="caracteristicas form-control" rows="4">{{ $item->caracteristicas }}</textarea>
                    </td>

                    <td style="text-align: center; vertical-align: middle;">
                        <button onclick="eliminarFilaDescripcionProductoServicio(this);" type="button" id=""
                            class="btn btn-danger btn-eliminar-descripcion-producto-servico">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
               
            @endforeach



        </tbody>
    </table>
    <div style="width: 100%; display: flex">
        <button type="button" class="btn btn-primary btn-agregar-tabla-tipo1 btn-agregar-descripcion-producto-servico" onclick="agregarFilaDescripcionProductoServicio();">
            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
        </button>
    </div>

</div>
