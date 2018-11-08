<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package Simple Blog Theme
 */
 get_header(); ?>

<section>
    <div class="row">
        <div class="col-sm-12 box">
           <h3 class="box-header"><?php the_title(); ?></h3>
            <div class="col-sm-8" style="padding:0 !important">
                <div class="berita">
                   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="berita-single">
                        <a href="<?php the_permalink(); ?>" class="berita-thumbnail"><?php the_post_thumbnail(); ?>
                        <a href="#" class="berita-judul" style="margin-bottom:15px;">Lorem Ipsum Dolor Sit Amet</a>
                        <div style="margin-bottom:15px;"><span class="berita-tag"><a href="">Tag</a>  - </span><span class="berita-waktu"><?php the_time( 'j F Y, G:i' ); ?> . Oleh <?php the_author(); ?></span></div>
                            <?php the_content(); ?>
                    </div>
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, there doesn\'t appear to be anything here.' ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-12 box">
                     <h3 class="box-header">Baca Juga</h3>
                    <div class="berita">
                        <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <div class="berita-item">
                            <a href="<?php the_permalink(); ?>" class="berita-thumbnail"><?php the_post_thumbnail() ?></a>
                            <span class="berita-waktu"><?php the_time( 'j F Y, G:i' ); ?> . Oleh <?php the_author(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="berita-judul"><?php the_title(); ?></a>
                        </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="img/ads1.jpg" alt="" class="img-responsive" style="margin-bottom:15px;">
                <img src="img/ads1.jpg" alt="" class="img-responsive" style="margin-bottom:15px;">
                <div class="col-sm-12 box">
                    <h3 class="box-header">Topik Pilihan</h3>
                    <ul class="topik-pilihan">
                        <li><span class="number">1</span><a href="#">Judul Topik</a></li>
                        <li><span class="number">2</span><a href="#">Judul Topik</a></li>
                        <li><span class="number">3</span><a href="#">Judul Topik</a></li>
                        <li><span class="number">4</span><a href="#">Judul Topik</a></li>
                        <li><span class="number">5</span><a href="#">Judul Topik</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>