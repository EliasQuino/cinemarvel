<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="login-container">
        <div>
            <img src="/img/logo.png" alt="Logo" class="logo"> <!-- Añade el logo aquí -->
        </div>
        
        <h2>Iniciar Sesión</h2>
        
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
        
            <div class="form-group">
                <label for="email" value="<?php echo e(__('Email')); ?>">correo electronico</label>
                <input type="email" id="email" name="email" required   class="block mt-1 w-full"  name="email" :value="old('email')" required autofocus autocomplete="username">
                
            </div>
        
            <div class="form-group">
                <label for="password" value="<?php echo e(__('Password')); ?>" >Contraseña</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"  required>
                
                
            </div>
        
            <div >

                


                <label for="remember_me" class="flex items-center">
                    <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $attributes = $__attributesOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__attributesOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $component = $__componentOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__componentOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
                    <span class="ms-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                    Recordarme
                </label>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <?php if(Route::has('password.request')): ?>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot your password?')); ?>

                    </a>
                <?php endif; ?>
        
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'ms-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ms-4']); ?>
                    <?php echo e(__('Log in')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
            </div>
        </form>

        <div class="links">
            <a href="#">Olvidaste tu contraseña?</a>
            <a href="#">¿No tienes una cuenta? Regístrate</a>
        </div>
    </div>
</body>
</html>


<?php /**PATH C:\Users\PC\Downloads\proyecto1.0\proyecto1.0\resources\views/auth/login.blade.php ENDPATH**/ ?>