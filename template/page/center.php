<div class="row <?php echo (get_row_index() % 2) ? 'bg-white' : 'bg-light'; ?>" data-layout="center">
    <div class="col-lg-4 offset-lg-4 p-lg-5">
        <section>
            <h2><?php echo get_sub_field('heading'); ?></h2>
            <?php echo get_sub_field('content'); ?>
        </section>
    </div>
</div>