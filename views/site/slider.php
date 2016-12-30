<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php
            foreach($slides as $slide)
            {
            	if($slide['slide_link']!='')
            	{
            		?>
            		<a href="<?=$slide['slide_link']?>">
            			<img src="<?=$slide['slide_image']?>" <?=$slide['slide_caption']==''?'':"title='".$slide['slide_caption']."'"?> />
            		</a>
            		<?php
            	}
            	else
            	{
            		?>
            		<img src="<?=$slide['slide_image']?>" <?=$slide['slide_caption']==''?'':"title='".$slide['slide_caption']."'"?> />
            		<?php
            	}
            }
            ?>
        </div>
    </div>