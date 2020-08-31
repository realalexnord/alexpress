<div class="row <?php echo (get_row_index() % 2) ? 'bg-white' : 'bg-light'; ?>" data-layout="columns">
    <?php
        if (have_rows('columns')) {
            while (have_rows('columns')) {
                the_row();
                ?>
                    <div class="col-lg-4 p-lg-5">
                        <section>
                            <h2><?php echo get_sub_field('heading'); ?></h2>
                            <?php echo get_sub_field('content'); ?>
                        </section>
                    </div>
                <?php
            }
        }
    ?>
</div>