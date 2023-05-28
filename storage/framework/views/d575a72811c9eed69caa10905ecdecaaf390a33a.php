

<?php $__env->startSection('titulo'); ?>
    Simulacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link rel="stylesheet" href='<?php echo e(asset('css/style-simulacion.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenidoPrincipal'); ?>
    <div class="contenedor-formulario-simulacion">
        <p class="titulo-simulacion">Titulo de la simulacion ID: <?php echo e($idSimulacion); ?></p>

        <?php echo $__env->make('templates.simulationForms.form1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('templates.simulationForms.form2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('templates.simulationForms.form3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('templates.simulationForms.form4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('templates.simulationForms.form5', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        
        
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src='<?php echo e(asset('js/script-simulacion.js')); ?>'></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.templateType1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/newRoutes/simulation.blade.php ENDPATH**/ ?>