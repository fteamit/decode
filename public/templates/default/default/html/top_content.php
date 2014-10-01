<div class="top-content">

    <?php if ($this->class_body === 'faq' || $this->class_body === 'contact'): ?>
        <div class="booking-now">
        </div>
        <a href="#" class="book-now">Book Now</a>
    <?php endif; ?>

    <?php if ($this->class_body === 'the-game' || $this->class_body === 'booking' || $this->class_body === 'faq' || $this->class_body === 'contact' || $this->class_body === 'booking-detail'): ?>
        <div class="relax-flag">
            <div class="flag-language">
                <ul>
                    <li class="en"><img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/top/flagen.png"/></li>
                    <li class="vn"><img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/top/flagvn.png"/></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->class_body === 'home'): ?>
        <div id="video-banner">
            <div class="embed-responsive embed-responsive-16by9"
                 style="border: 1px solid #ccc">
                <iframe class="embed-responsive-item"
                        src="//www.youtube.com/embed/jbPW10koNj0?rel=0&amp;controls=0&amp;modestbranding=1&amp;showinfo=0"></iframe>
            </div>
        </div>
    <?php elseif ($this->class_body === 'the-game'): ?>
        <div id="video-banner">
            <div class="embed-responsive embed-responsive-16by9"
                 style="border: 1px solid #ccc">
                <iframe class="embed-responsive-item"
                        src="//www.youtube.com/embed/jbPW10koNj0?rel=0&amp;controls=0&amp;modestbranding=1&amp;showinfo=0"></iframe>
            </div>
        </div>
    <?php else: ?>
    <?php endif; ?>
</div>