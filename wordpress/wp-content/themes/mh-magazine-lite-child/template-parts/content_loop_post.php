<div class="section">

    <?php
    foreach ($posts as $post) {

        setup_postdata($post);
        ?>
        <article class="articles">
            <p><?php the_post_thumbnail('Full'); ?></p>
            <p><a href= <?php the_permalink(); ?>><?php the_title(); ?></a></p>
            <!-- <p><?php echo edit_post_link('Editer');?> </p> -->
            <p><?php the_content(); ?></p>
        </article>

    <?php } ?>
</div>
