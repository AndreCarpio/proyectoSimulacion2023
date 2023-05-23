<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>

    <link rel="stylesheet" type="text/css" href=<?php echo e(asset('css/style-sesion.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('css/style-particles.css')); ?>>
</head>

<body>
    <div id="particles-js">


    </div>

    <div class="contenedor-sesion">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.authentication-card','data' => []]); ?>
<?php $component->withName('jet-authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('logo', null, []); ?> 
             <?php $__env->endSlot(); ?>
            
            <?php if(session('status')): ?>
                <div class="mb-4 font-medium text-sm text-green-600">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form class="login-form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route("welcome")); ?>" class="logo">UMSS</a>
                <h2>Iniciar sesión</h2>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4 mensaje-error']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4 mensaje-error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <input class="input-correo" type="text" placeholder="Correo Electronico" id="email"
                    type="email" name="email" :value="old('email')" required autofocus>
                <input class="input-password" type="password" placeholder="Contraseña" id="password" type="password"
                    name="password" required autocomplete="current-password">


                <div class="opcion-remenber">
                    <label for="remember_me" class="flex items-center">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                    </label>
                </div>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'ml-4']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-4']); ?>
                    <?php echo e(__('Iniciar sesión')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </form>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        
        <div class="register-link">
            ¿No tienes una cuenta? <a href="<?php echo e(route('register')); ?>">Regístrate</a>
        </div>
    </div>



    <script src=<?php echo e(asset('js/particles.js')); ?>></script>
    <script src=<?php echo e(asset('js/scrip-particles.js')); ?>></script>
</body>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\proyectoSimulacion2023\resources\views/auth/login.blade.php ENDPATH**/ ?>