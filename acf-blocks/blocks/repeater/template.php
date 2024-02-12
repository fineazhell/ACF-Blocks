
<div id="repeater">
    <?php
    // Check if the repeater field has rows
    if( have_rows('repeater_field') ):
        // Loop through the rows of the repeater field
        while( have_rows('repeater_field') ): the_row();
            // Display the subfields within each row
            ?>
            <div class="repeater-row">
                <p><?php the_sub_field('repeater_name'); ?> <a href="<?php the_sub_field('repeater_link'); ?>"><?php the_sub_field('repeater_link'); ?></a></p>
                <!-- Add more subfields as needed -->
            </div>
            <?php
        endwhile;
    else :
        // No rows found
        echo 'No rows found';
    endif;
    ?>
</div>