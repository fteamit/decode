<div class="top-content">

    <?php if ($this->class_body === 'faq' || $this->class_body === 'contact'): ?>
        <div class="booking-now">
        </div>
        <a href="<?php echo $this->baseUrl('bookings/index/bookings') ?>" class="book-now">Book Now</a>
    <?php endif; ?>

    <?php if ($this->class_body === 'the-game' || $this->class_body === 'booking' || $this->class_body === 'faq' || $this->class_body === 'contact' || $this->class_body === 'booking-detail'): ?>
        <div class="relax-flag">
            <div class="flag-language">
                <ul>
                    <li class="en">
                        <a href="<?php echo $this->baseUrl($this->currentController . "/index/lang/en") ?>">
                            <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/top/flagen.png"/>
                        </a>
                    </li>
                    <li class="vn">
                        <a href="<?php echo $this->baseUrl($this->currentController . "/index/lang/vi") ?>">
                            <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/top/flagvn.png"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->class_body === 'home'): ?>
        <?php $options_home_video = $this->options_home_video ?>
        <?php if (count($options_home_video) > 0): ?>
            <div id="video-banner">
                <div class="embed-responsive embed-responsive-16by9"
                     style="border: 1px solid #ccc">
                    <iframe class="embed-responsive-item"
                            src="<?php echo $options_home_video['option_value']?>"></iframe>
                </div>
            </div>
        <?php endif; ?>
    <?php elseif ($this->class_body === 'the-game'): ?>
        <div id="video-banner">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://opencart-demos.org/OPC07/OPC070174/image/cache/data/main_banner_1-940x420w.jpg" alt="slide1">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="http://opencart-demos.org/OPC07/OPC070174/image/cache/data/main_banner_1-940x420w.jpg" alt="slide2">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    <?php else: ?>
    <?php endif; ?>
</div>