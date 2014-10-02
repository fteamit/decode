<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
            </button>
            <h1 class="logo">
                <a class="navbar-brand" href="#"><img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/top/logo.png" /></a>
            </h1>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse"
             id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo $this->class_body === 'home' ? 'active':''?>"><a href="<?php echo $this->baseUrl('default'); ?>"><?php echo __('Home') ?></a></li>
                <li class="<?php echo $this->class_body === 'the-game' ? 'active':''?>"><a href="<?php echo $this->baseUrl('games'); ?>"><?php echo __('The game') ?></a></li>
                <li class="<?php echo ($this->class_body === 'booking' || $this->class_body === 'booking-detail') ? 'active':''?>"><a href="<?php echo $this->baseUrl('bookings'); ?>"><?php echo __('Booking') ?></a></li>
                <li class="<?php echo $this->class_body === 'faq' ? 'active':''?>"><a href="<?php echo $this->baseUrl('faqs'); ?>"><?php echo __('FAQs') ?></a></li>
                <li class="<?php echo $this->class_body === 'contact' ? 'active':''?>"><a href="<?php echo $this->baseUrl('options'); ?>"><?php echo __('Contact') ?></a></li>
            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>