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
        <?php get_sidebar(); ?>
        <div class="col-sm-8 col-sm-offset-1 box">
           <div id="myCarousel" class="carousel slide" style="max-width: 900px; margin: 0px -15px;">
                <div class="carousel-inner">
                    <div class="active item" align="center"><a href="#"><img src="http://lorempixel.com/1920/1080/city/" class="" alt="PS3 reparatie Haarlem"></a>
                        <div class="carousel-caption">
                            <h3>Judul Berita 1</h3>
                            <p>Powder chocolate carrot cake. Applicake tart icing chupa chups marshmallow apple pie candy canes gingerbread croissant.</p>
                        </div>
                    </div>
                    <div class="item" align="center"><a href="#"><img src="http://lorempixel.com/1920/1080/nature/" class="" alt="Blu-ray Lens reparatie"></a>
                        <div class="carousel-caption">
                            <h3>Judul Berita 2</h3>
                            <p>Pudding fruitcake chocolate pastry caramels dessert powder cupcake. Marzipan sweet roll jelly macaroon brownie.</p>
                        </div>
                    </div>
                    <div class="item" align="center"><a href="#"><img src="http://lorempixel.com/1920/1080/food/" class="" alt="Yellow Light of Death"></a>
                        <div class="carousel-caption">
                            <h3>Judul Berita 3</h3>
                            <p>Ice cream pie marzipan cookie macaroon dragée cookie. Caramels tootsie roll danish chocolate cake pastry icing.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
           </div>
           <script>
                // Add this to let the carousel start automatic
                $('.carousel').carousel();
            </script>    
           <h3 class="box-header">Berita</h3>
            <div class="col-sm-7" style="padding:0 !important">
                <div class="berita">
                    <div class="berita-first">
                        <a href="#" class="berita-thumbnail"><img src="img/thumbnail.png" alt=""></a>
                        <a href="#" class="berita-judul">Judul Berita</a>
                        <span class="berita-tag"><a href="">Tag</a>  - </span><span class="berita-waktu">8 Agustus 2017</span>
                        <p class="berita-deskripsi">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, veritatis, fuga. Atque a labore cumque, est consequatur culpa temporibus quos accusantium iste, minima laboriosam corporis facere. Amet praesentium, dolorem corporis.
                        </p>
                    </div>
                    <div class="berita-item">
                        <a href="#" class="berita-thumbnail"><img src="img/thumbnail.png" alt=""></a>
                        <span class="berita-waktu">Beberapa menit yang lalu</span>
                        <a href="#" class="berita-judul">Judul Berita</a>
                    </div>
                    <div class="berita-item">
                        <a href="#" class="berita-thumbnail"><img src="img/thumbnail.png" alt=""></a>
                        <span class="berita-waktu">Beberapa menit yang lalu</span>
                        <a href="#" class="berita-judul">Judul Berita</a>
                    </div>
                    <div class="berita-item">
                        <a href="#" class="berita-thumbnail"><img src="img/thumbnail.png" alt=""></a>
                        <span class="berita-waktu">Beberapa menit yang lalu</span>
                        <a href="#" class="berita-judul">Judul Berita</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
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