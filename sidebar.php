<div class="col-sm-3 box">
    <h3 class="box-header">Terbaru</h3>
    <ul id="aktual">
        <?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li>
            <?php $thumbnail = get_the_post_thumbnail_url($post->ID, $size); ?>
            <div class="newsthumb" style="background:url(<?php echo ${thumbnail} ?>) center no-repeat #fff;background-size:cover"></div>
            <div class="text">
                <span class="newstime"><?php the_time( 'j F Y, G:i' ); ?></span>
                <a href="<?php the_permalink() ?>" class="newstitle"><?php the_title(); ?></a>
            </div>

        </li>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
<!--
        <img src="img/ads1.jpg" alt="" class="img-responsive" style="margin-bottom:15px;">
        <img src="img/ads1.jpg" alt="" class="img-responsive" style="margin-bottom:15px;">
-->
</div>