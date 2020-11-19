<?php $__env->startSection('body'); ?>
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-12">
        <div class="mt-8">
            <h1 id="intro-docs-template"><?php echo e($page->siteName); ?></h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4"><?php echo e($page->siteDescription); ?></h2>


            <p class="text-lg">Green is yes; red is no; grey hasn't been tested yet.</p>
            <p>Source here, in case you want to make PRs: <a href="https://github.com/tighten/laravelm1">github.com/tighten/laravelm1</a></p>
            <p>Another resource here: <a href="https://roaringapps.com/collections/list-of-apple-silicon-native-apps">https://roaringapps.com/collections/list-of-apple-silicon-native-apps</a></p>
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <?php echo $__env->make('_partials.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('_partials.live-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mattstauffer/Sites/laravelm1/source/index.blade.php ENDPATH**/ ?>