<div class="bot-content">
    <?php if ($this->class_body === 'home'): ?>
        <ul class="inline">
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/tem-building.png" alt="team building" />
                <p>Team Building</p>	
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/family.png" alt="family" />
                <p>Friends/Family</p>	
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/student.png" alt="student" />
                <p>Students/Classes</p>
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/games.png" alt="Games" />
                <p>Gamers</p>
            </li>
        </ul>
        <?php elseif ($this->class_body === 'the-game'): ?>
        <ul class="inline">
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/item.png" alt="team building" />
                <p class="active">Team Building</p>	
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/item.png" alt="family" />
                <p>Friends/Family</p>	
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/item.png" alt="student" />
                <p>Students/Classes</p>
            </li>
            <li class="col-md-3">
                <img src="<?php echo BaseUrl_Template_Default(); ?>/_/component/images/Decode/icon/item.png" alt="Games" />
                <p>Gamers</p>
            </li>
        </ul>
        <?php elseif ($this->class_body === 'booking'): ?>
        <div class="bot-booking">
            <div class="center">
                <span class="price">PRICE</span>
                <ul class="col-md-12">
                    <li class="col-md-4 col-md-12"><p>OFF-PEAK</p><p>000000 VND</p></li>
                    <li class="col-md-4 col-md-12"><p>EVENING</p><p>000000 VND</p></li>
                    <li class="col-md-4 col-md-12"><p>WEEKEND</p><p>000000 VND</p></li>
                </ul>
                <p>* Off-peak (Before 17:00)</p>
            </div>
        </div>
        <?php elseif($this->class_body === 'contact'): ?>
        <div class="container">
            <div class="contact-map">
                <iframe width="1008" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=21.03557,105.776243&amp;hl=vi&amp;sll=10.777831,106.654501&amp;sspn=0.023777,0.025663&amp;t=m&amp;ie=UTF8&amp;z=14&amp;ll=21.03557,105.776243&amp;output=embed"></iframe>
            </div>

        </div>
    <?php endif; ?>
</div>