<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'     => 'rating',
    'value'    => 0,
    'disabled' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'     => 'rating',
    'value'    => 0,
    'disabled' => true,
]); ?>
<?php foreach (array_filter(([
    'name'     => 'rating',
    'value'    => 0,
    'disabled' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-star-rating
    <?php echo e($attributes); ?>

    name="<?php echo e($name); ?>"
    value="<?php echo e($value); ?>"
    disabled="<?php echo e($disabled); ?>"
>
</v-star-rating>

<?php if (! $__env->hasRenderedOnce('2b5cbff7-dcb9-4e29-92a1-4edbdebccdaf')): $__env->markAsRenderedOnce('2b5cbff7-dcb9-4e29-92a1-4edbdebccdaf');
$__env->startPush("scripts"); ?>
    <script
        type="text/x-template"
        id="v-star-rating-template"
    >
        <div class="flex">
            <span
                class="icon-star-fill cursor-pointer text-2xl"
                v-for="rating in availableRatings"
                v-if="! disabled"
                :style="[`color: ${appliedRatings >= rating ? '#ffb600' : '#7d7d7d'}`]"
                @click="change(rating)"
            ></span>

            <span
                class="icon-star text-lg"
                v-for="rating in availableRatings"
                :style="[`color: ${appliedRatings >= rating ? '#ffb600' : '#7d7d7d'}`]"
                v-else
            ></span>

            <v-field
                type="hidden"
                :name="name"
                v-model="appliedRatings"
            ></v-field>
        </div>
    </script>

    <script type="module">
        app.component("v-star-rating", {
            template: "#v-star-rating-template",

            props: [
                "name",
                "value",
                "disabled",
            ],

            data() {
                return {
                    availableRatings: [1, 2, 3, 4, 5],

                    appliedRatings: this.value,
                };
            },

            methods: {
                change(rating) {
                    this.appliedRatings = rating;

                    this.$emit('change', this.appliedRatings);
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /home/makbulmart/public_html/packages/Webkul/Admin/src/Providers/../Resources/views/components/star-rating/index.blade.php ENDPATH**/ ?>