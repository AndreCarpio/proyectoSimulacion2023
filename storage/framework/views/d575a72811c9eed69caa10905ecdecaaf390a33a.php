

<?php $__env->startSection('titulo'); ?>
    Simulacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link rel="stylesheet" href='<?php echo e(asset('css/style-simulacion.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="contenedor-formulario-simulacion">

        <div class="pestaniaSimulacion">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option value="0" selected>Informacion</option>
                <option value="1">Presupuesto</option>
                <option value="2">Presupuesto Total</option>
                <option value="3">Costos</option>
                <option value="4">Flujo</option>
            </select>
        </div>


        <p class="titulo-simulacion">Titulo de la simulacion ID: <?php echo e($idSimulacion); ?></p>

        <div class="seccion-informacion">
            <?php echo $__env->make('templates.simulationForms.informacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="seccion-presupuesto oculto">
            <?php echo $__env->make('templates.simulationForms.presupuesto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="seccion-presupuesto-total oculto">
            <?php echo $__env->make('templates.simulationForms.presupuestoTotal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="seccion-costos oculto">
            <?php echo $__env->make('templates.simulationForms.costos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="seccion-flujo oculto">
            <?php echo $__env->make('templates.simulationForms.flujo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>



    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src='<?php echo e(asset('js/script-simulacion.js')); ?>' ></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.templateType1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/newRoutes/simulation.blade.php ENDPATH**/ ?>