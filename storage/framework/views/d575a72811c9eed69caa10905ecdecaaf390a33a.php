

<?php $__env->startSection('titulo'); ?>
    Simulacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link rel="stylesheet" href='<?php echo e(asset('css/style-simulacion.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="contenedor-formulario-simulacion">
        <p class="titulo-simulacion">Titulo de la simulacion ID: <?php echo e($idSimulacion); ?></p>
        <p class="titulo-seccion">Datos personales</p>

        <div class="row">
            <div class="col cotenedor-fieldset">
                <p class="cotenedor-legenda"> Deudor</p>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="inptu_deudor_nombre" class="form-label">Nombres y Apellidos:</label>
                        <input type="text" class="form-control input-grande" id="inptu_deudor_nombre">
                    </div>
                    <div class="col">
                        <label for="deudor_ci" class="form-label">CI:</label>
                        <input type="text" class="form-control input-mediano" id="deudor_ci" name="deudor_ci">
                    </div>
                    <div class="col">
                        <label for="deudor_ci_extension" class="form-label">Extensión</label>
                        <input type="text" class="form-control input-pequenio" id="deudor_ci_extension"
                            name="deudor_ci_extension">
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="deudor_edad" class="form-label">Edad:</label>
                        <input type="text" class="form-control input-pequenio" id="deudor_edad" name="deudor_edad">
                    </div>
                    <div class="col">
                        <label for="deudor_estado_civil" class="form-label">Estado civil:</label>
                        <input type="text" class="form-control input-mediano" id="deudor_estado_civil"
                            id="deudor_estado_civil">
                    </div>
                    <div class="col">
                        <label for="deudor_telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control input-mediano" id="deudor_telefono"
                            name="deudor_telefono">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deudor_direccion" class="form-label">Dirección Domicilio :</label>
                    <input type="text" class="form-control input-grande" id="deudor_direccion" name="deudor_direccion">
                </div>
            </div>

            <div class="col cotenedor-fieldset">
                <p class="cotenedor-legenda"> Codeudor</p>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="codeudor_nombre" class="form-label">Nombres y Apellidos:</label>
                        <input type="text" class="form-control input-grande" id="codeudor_nombre">
                    </div>
                    <div class="col">
                        <label for="codeudor_ci" class="form-label">CI:</label>
                        <input type="text" class="form-control input-mediano" id="codeudor_ci" name="codeudor_ci">
                    </div>
                    <div class="col">
                        <label for="codeudor_ci_extension" class="form-label">Extensión</label>
                        <input type="text" class="form-control input-pequenio" id="codeudor_ci_extension"
                            name="codeudor_ci_extension">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="codeudor_edad" class="form-label">Edad:</label>
                        <input type="text" class="form-control input-pequenio" id="codeudor_edad" name="codeudor_edad">
                    </div>
                    <div class="col">
                        <label for="codeudor_estado_civil" class="form-label">Estado civil:</label>
                        <input type="text" class="form-control input-mediano" id="codeudor_estado_civil"
                            id="codeudor_estado_civil">
                    </div>
                    <div class="col">
                        <label for="codeudor_telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control input-mediano" id="codeudor_telefono"
                            name="codeudor_telefono">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="codeudor_direccion" class="form-label">Dirección Domicilio:</label>
                    <input type="text" class="form-control input-grande" id="codeudor_direccion"
                        name="codeudor_direccion">
                </div>
            </div>
        </div>

        <p class="titulo-seccion">Descripcion del plan de negocios</p>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Describa la actividad que quiere emprender</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="codeudor_edad" class="form-label">La actividad ya está funcionando ? </label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1" selected>si</option>
                    <option value="2">no</option>
                  </select>
            </div>
            <div class="col">
                <label for="codeudor_estado_civil" class="form-label">¿Hace cuánto tiempo inició ?</label>
                <input type="text" class="form-control input-mediano" id="codeudor_estado_civil"
                    id="codeudor_estado_civil">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">¿Qué inversiones necesita para la
                actividad?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Describa los motivos por la que el proyecto será
                rentable</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>

        <p class="titulo-seccion">Descripcion del producto o servicio</p>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src='<?php echo e(asset('js/script-simulacion.js')); ?>'></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.templateType1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/newRoutes/simulation.blade.php ENDPATH**/ ?>