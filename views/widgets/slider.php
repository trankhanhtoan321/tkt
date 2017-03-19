<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* input $slides = array(
		slide_link,
		slide_image
*	);
*/
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
    <div class="carousel-inner" role="listbox">
        <?php
        $dem=0;
        foreach($slides as $slide){
        	if($slide['slide_link']!=''){
                ?>
                    <div class="item<?=++$dem==1?' active':''?>">
                        <a href="<?=$slide['slide_link']?>">
                            <img src="<?=$slide['slide_image']?>" />
                        </a>
                    </div>
                <?php
            } else {
            ?>
            <div class="item<?=++$dem==1?' active':''?>">
                <img src="<?=$slide['slide_image']?>" />
            </div>
            <?php } } ?>
    </div>
</div>