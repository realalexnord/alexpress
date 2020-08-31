<div class="row <?php echo (get_row_index() % 2) ? 'bg-white' : 'bg-light'; ?>" data-layout="half">
    <div class="col-lg-6 <?php echo (get_sub_field('reversed')) ? 'order-2 order-lg-2' : 'order-2 order-lg-1'; ?> p-lg-5 d-flex align-items-center">
        <section>
            <h2><?php echo get_sub_field('heading'); ?></h2>
            <?php echo get_sub_field('content'); ?>
        </section>
    </div>
    <div class="col-lg-6 <?php echo (get_sub_field('reversed')) ? 'order-1 order-lg-1' : 'order-1 order-lg-2'; ?>" style="background: url(<?php echo get_sub_field('image')['sizes']['large']; ?>) no-repeat center bottom / cover; min-height: 80vh;">
    </div>
</div>