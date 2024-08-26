<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <div class="flex gap-10">
        <img src="storage/img/pict1.png" alt="Paseo Tissue" width="300">
        <div
            class="block max-w-screen p-6 bg-white border border-gray-200 rounded-lg shadow">

            <p class="mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start"
                style="text-align:justify">
                Insightful Ink Artikel appears to be a brand or entity focused on providing insightful articles,
                likely
                related to a specific domain or a variety of topics. Here's a breakdown of what each component of
                the
                name suggests</p>
            <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without the
                complexity
                of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy
                changes
                with ease, with a complete audit trail for every change.</p>

            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
            <ul class="ml-6 text-gray-500 dark:text-gray-400">
                <li class="list-decimal font-bold pt-4">
                    Insightful Ink
                </li>
                <ul class="list-disc">
                    <li class="text-sm mb-2 mt-2">
                        This word indicates that the content produced by this entity is intended to be deeply
                        informative, thoughtful, and likely offers unique perspectives or in-depth analysis. It
                        implies a high level of expertise or understanding in the subject matter.

                    <li class="text-sm mb-2 mt-2">
                        Traditionally associated with writing and publishing, "ink" here symbolizes the production of
                        written content. It evokes a sense of traditional, well-crafted, and possibly artistic creation
                        of written materials.
                    </li>
                </ul>
                </li>
                <li class="list-decimal my-2 font-bold">
                    Artikel
                </li>
                <ul class="list-disc">
                    <li class="text-sm mb-2 mt-2">
                        This is the Indonesian word for "article." It suggests that the primary medium of content
                        provided is in the form of written articles. It also indicates that the target audience or
                        the primary language of publication might be Indonesian.
                    </li>
                </ul>
            </ul>
        </div>



    </div>
    </div>
    

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\myLaravel\resources\views/about.blade.php ENDPATH**/ ?>