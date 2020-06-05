

<?php $__env->startSection('content'); ?>
<div class="dashboard">
    <div class="dash row">
        <div class="dash-menu">
            <a class="r-link menu__link" href="<?php echo e(route('abonnementen.overzicht')); ?>"><h3 class="dash-menu-text">Abonnement aanpassen</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('product.add')); ?>"><h3 class="dash-menu-text">Product toevoegen</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('password.request')); ?>"><h3 class="dash-menu-text">Wachtwoord resetten</h3></a>
            <a class="r-link menu__link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <h3 class="dash-menu-text">Uitloggen</h3>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                    </form>
            
        </div>
        <div class="vertical-line"></div>
        <div class="vertical-line-mobile"></div>
        <div class="dash-info">
            <h1>Welkom, <?php echo e(Auth::user()->name); ?></h1>
            <hr class="hr2">
            <h3><span>-</span> Abonnement: Boosted PowerCrate (<span>€4.49</span>)</h3>
            <h3><span>-</span> Dit is uw eerste week </h3>
            <h3><span>-</span> Dit is een wekelijks abonnement </h3>
            <div class="h4-4">
                <h3><span>-</span> U heeft de volgende energie drankjes gekozen in uw Crate:</h3>
            </div>

            <h3 class="drinks"><span>></span> x1 Redbull</h3>
            <h3 class="drinks"><span>></span> x2 Monster</h3>
            <h3 class="drinks"><span>></span> x3 Slammers</h3>
            <h3 class="drinks"><span>></span> x1 Bling</h3>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ma\bewijzenmap\periode2.3\k_id\boosted-delivery\resources\views/profiel.blade.php ENDPATH**/ ?>