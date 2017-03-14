<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
    <div class="carousel-inner" role="listbox">
        <?php $dem=0; foreach($slides as $slide){ ?>
        <div class="item<?=++$dem==1?' active':''?>">
            <img src="<?=$slide['slide_image']?>" />
        </div>
        <?php } ?>
    </div>
</div>