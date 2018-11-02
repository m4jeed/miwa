<?php $this->load->view('header'); ?>
    <!-- Sidebar -->
    <section class="sidebar visible-xs">
        <ul class="sidebar__nav nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="" data-slide="slide" data-slide-target=".hero">Beranda</a></li>
            <li role="presentation"><a href="" data-slide="slide" data-slide-target=".feature">Fitur</a></li>
            <li role="presentation"><a href="" data-slide="slide" data-slide-target=".portfolio"><span class="circle"></span> Tujuan</a></li>
            <li role="presentation"><a href="" data-slide="slide" data-slide-target=".travels">Gambar</a></li>
            <li role="presentation"><a href="" data-slide="slide" data-slide-target=".maps">Maps</a></li>
        </ul>
    </section>
    
    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>
    
    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url(); ?>depan/img/create-trip.png" alt="Vacation Background" class="img-responsive" data-aos="fade-up" data-aos-delay="0">
                </div>
                <div class="col-md-6">
                    <div class="title huge" data-aos="fade-down" data-aos-delay="200">Cemilan rasa nano nano</div>
                    <div class="description" data-aos="fade-up" data-aos-delay="300">Kami adalah perusahaan yang bergerak di bidang makanan ringan
                    yang terjun langsung dengan pengerjaan secara profesional</div>
                    <a href="" data-aos="fade-down" data-aos-delay="400" class="btn btn-info btn-border">Download Brosur</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Feature -->
    <section class="feature">
        <div class="title medium">Fitur</div>
        <div class="container">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <img src="<?php echo base_url(); ?>depan/img/free.png" alt="Free Icon">
                    </div>
                    <div class="feature-title">Totaly Free</div>
                    <div class="feature-description">
                        This template is free for everyone, just download from repository if you want to use.
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-box" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-icon">
                        <img src="<?php echo base_url(); ?>depan/img/cools.png" alt="Customize Icon">
                    </div>
                    <div class="feature-title">Cools UI</div>
                    <div class="feature-description">
                        Build with Bootstrap 3 and jQuery combine with SASS and BEM CSS.
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-box" data-aos="fade-up" data-aos-delay="900">
                    <div class="feature-icon">
                        <img src="<?php echo base_url(); ?>depan/img/creative.png" alt="Code Icon">
                    </div>
                    <div class="feature-title">Customizable</div>
                    <div class="feature-description">
                        Customize with your imagination just change SASS file and build it with gulp & gulp-sass.
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-box" data-aos="fade-up" data-aos-delay="900">
                    <div class="feature-icon">
                        <img src="<?php echo base_url(); ?>depan/img/help.png" alt="Code Icon">
                    </div>
                    <div class="feature-title">Free to Ask</div>
                    <div class="feature-description">
                        You have question or found some bugs? Don't worry just submit your <a href="https://github.com/muhibbudins/vacations/issues">Issue.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Popular -->
    <section class="portfolio">
        <div class="title medium">Tujuan</div>
        <div class="popular__portofolio">
            <div class="portfolio__item">
                <div class="portofolio__item_overlay overlay_effect">
                    <div class="overlay__inner">
                        <div class="item__title">Tujuan Miwa Rengginang</div>
                        <div class="item__description">Tujuan kami adalah membantu masyrakat agar efisien menghemat waktu dalam bekerja ditengah kesibukan sehari sambil makan cemilan</div>
                        <a href="#" class="btn btn-default btn-border">Read More</a>
                    </div>
                </div>
                <img src="<?php echo base_url(); ?>depan/img/borobudur-400x400.jpg" alt="Borobudur">
            </div>
            <div class="portfolio__item">
                <div class="portofolio__item_overlay overlay_effect">
                    <div class="overlay__inner">
                        <div class="item__title">Some Title Here</div>
                        <div class="item__description">Reprehenderit ducimus consequuntur facilis nemo corporis dolor possimus quia tempore, aut ipsum id, perferendis totam voluptates repellendus non amet ipsam quos itaque.</div>
                        <a href="#" class="btn btn-default btn-border">Read More</a>
                    </div>
                </div>
                <img src="<?php echo base_url(); ?>depan/img/candiPrambanan-400x400.jpg" alt="CandiPrambanan">
            </div>
            <div class="portfolio__item">
                <div class="portofolio__item_overlay overlay_effect">
                    <div class="overlay__inner">
                        <div class="item__title">Some Title Here</div>
                        <div class="item__description">Reprehenderit ducimus consequuntur facilis nemo corporis dolor possimus quia tempore, aut ipsum id, perferendis totam voluptates repellendus non amet ipsam quos itaque.</div>
                        <a href="#" class="btn btn-default btn-border">Read More</a>
                    </div>
                </div>
                <img src="<?php echo base_url(); ?>depan/img/danauKelimutu-400x400.jpg" alt="DanauKelimutu">
            </div>
            <div class="portfolio__item">
                <div class="portofolio__item_overlay overlay_effect">
                    <div class="overlay__inner">
                        <div class="item__title">Some Title Here</div>
                        <div class="item__description">Reprehenderit ducimus consequuntur facilis nemo corporis dolor possimus quia tempore, aut ipsum id, perferendis totam voluptates repellendus non amet ipsam quos itaque.</div>
                        <a href="#" class="btn btn-default btn-border">Read More</a>
                    </div>
                </div>
                <img src="<?php echo base_url(); ?>depan/img/toraja-400x400.jpg" alt="Toraja">
            </div>
        </div>
    </section>
    
    <!-- Travels -->
    <section class="travels">
        <div class="title medium">Gambar</div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="swiper-container" id="swiper-travel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url(); ?>depan/img/120x120.png" alt="Dummy Travels" class="img-circle">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    
   
    <!-- Maps -->
    <section class="maps">
        <div class="title medium">Alamat Kami</div>
        <div class="maps__inner">
            <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ377GZZwHby4RLTjVf3xbb8E&key=AIzaSyAVtVZDz7WIFPBbg5B--zY-VM0_X0uWgZI" width="100%" height="400" frameborder="0" style="border: 0;"></iframe>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>
    <!-- Import Vendor Script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>depan/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>depan/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>depan/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>depan/js/aos.js"></script>

    <!-- Import Custom Script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>depan/js/script.js"></script>
</body>

</html>
