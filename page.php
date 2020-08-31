<?php
    get_header();
    if (have_rows('rows')) {
        while (have_rows('rows')) {
            the_row();
            get_template_part('template/page/' . get_row_layout());
        }
    }
    get_footer();
?>