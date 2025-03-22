<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'  => '',
    'entity' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'  => '',
    'entity' => null,
]); ?>
<?php foreach (array_filter(([
    'name'  => '',
    'entity' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mt-[34px] flex justify-start max-lg:hidden">
    <div class="flex items-center gap-x-3.5">        
        <?php echo e(Breadcrumbs::view('shop::partials.breadcrumbs', $name, $entity)); ?>

    </div>
</div>
<?php /**PATH /home/makbulmart/public_html/packages/Webkul/Shop/src/Providers/../Resources/views/components/breadcrumbs/index.blade.php ENDPATH**/ ?>