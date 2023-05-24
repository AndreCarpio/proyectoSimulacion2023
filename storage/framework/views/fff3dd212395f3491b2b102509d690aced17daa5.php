

<?php $__env->startSection('title'); ?>
    Simulacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
    <link rel="stylesheet" href='<?php echo e(asset('css/style-simulaciones.css')); ?>'>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenidoPrincipal'); ?>
    <p class="titulo-seccion-simulaciones">LISTA DE SIMULACIONES</p>
    <div class="barra-opciones">
        <button type="button" class="btn btn-primary btn-crear-simulacion">Crear Simulacion</button>
    </div>
    <div class="contenedor-lista-simulaciones">
        <table class="table caption-top tabla-simulaciones">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col" style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $n = 0;
                ?>
                <?php $__currentLoopData = $simulaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simulacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="fila-tabla-simulaciones">
                        <th class="celda-tabla-simulaciones" scope="row">
                            <p><?php echo e($n = $n + 1); ?></p>
                        </th>
                        <td class="celda-tabla-simulaciones celda-tabla-simulaciones-titulo">
                            <p><?php echo e($simulacion->title); ?></p>
                        </td>
                        <td class="celda-tabla-simulaciones">
                            <p><?php echo e($simulacion->created_at); ?></p>
                        </td>
                        <td>
                            <div class="seccion-btns">
                                <a href="<?php echo e(route('simulation.show', $simulacion->idSimulation)); ?>"
                                    class="btn btn-primary ">Ingresar</a>

                                <form action="<?php echo e(route('simulation.deleate')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="idSimulation" value=<?php echo e($simulacion->idSimulation); ?>>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('estas seguro de borrar?')"> Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('contenidoSecundario'); ?>
    <div class="contenedor-crear-simulacion oculto">
        <div class="card">
            <div class="card-body">
                <form class="formulario-crear-simulacion" class="row g-3" autocomplete="off" id="form-crear-simulacion">
                    <?php echo csrf_field(); ?>

                    <label for="input-nombre-simulacion" class="form-label-crear-simulacion">Nombre de la
                        Simulacion</label>
                    <input type="text" class="form-control" id="input-nombre-simulacion" name="input-nombre-simulacion"
                        placeholder="Ingresa el nombre" spellcheck="false">
                    <span class="badge text-danger errors-nombre"></span>
                    <div class="btns-form-crear-simuacion">


                        <button type="text" id="btn-enviar" class="btn btn-primary">
                            <i class="fa fa-spinner fa-spin loader-btn-aceptar oculto"></i> Aceptar
                        </button>
                        <button type="text" id="btn-cancelar" class="btn btn-secondary"> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src='<?php echo e(asset('js/script-simulations.js')); ?>'></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.templateType1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/newRoutes/simulations.blade.php ENDPATH**/ ?>