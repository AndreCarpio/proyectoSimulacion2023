

<?php $__env->startSection('title'); ?>
    Simulacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link rel="stylesheet" href='<?php echo e(asset('css/style-simulacion.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="contenedor-formulario-simulacion">
        <p class="titulo-simulacion">Titulo de la simulacion ID: <?php echo e($idSimulacion); ?></p>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombres y Apellidos (deudor/a):</label>
            <input type="text" class="form-control" id="formGroupExampleInput" >
        </div>

        <div class="row g-3 mb-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Documento de Identidad No:</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Extensión</label>
                <input type="text" class="form-control"  aria-label="Last name">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Edad:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" >
        </div>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Estado civil:</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Teléfono:</label>
                <input type="text" class="form-control"  aria-label="Last name">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Dirección Domicilio (deudor):</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" >
        </div>



    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src='<?php echo e(asset('js/script-simulacion.js')); ?>'></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.templateType1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/newRoutes/simulation.blade.php ENDPATH**/ ?>