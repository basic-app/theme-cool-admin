<!-- BREADCRUMB-->
<section class="au-breadcrumb m-b-20">
    <div class="section__content" style="padding-left: 15px; padding-right: 15px;">                  
        <div class="au-breadcrumb-content">
        	<div class="au-breadcrumb-left">
	        	<?php if($items):?>
	                
	                <span class="au-breadcrumb-span d-none d-sm-inline"><?= PHPTheme::t('You are here:');?></span>	             
	                
	                <ul class="list-unstyled list-inline au-breadcrumb__list">
					
					<?php

						echo '<li class="list-inline-item"><a href="' . site_url('admin') . '">' . PHPTheme::t('Admin') . '</a></li>';

						echo '<li class="list-inline-item seprate"><span>/</span></li>';

						foreach($items as $item)
						{
							if (isset($item['url']))
							{
								echo '<li class="list-inline-item"><a href="' . $item['url'] . '">' . $item['label'] . '</a></li>';

								echo '<li class="list-inline-item seprate"><span>/</span></li>';
							}
							else
							{
								echo '<li class="list-inline-item active">' . $item['label'] .'</li>';
							}
						}
					?>
	                
	                </ul>	        	
	        	<?php endif;?>
			</div>
			
			<div class="d-none d-lg-block">
				<?= PHPTheme::widget('layoutActionMenu', $actionMenu);?>
        	</div>
        
        </div>                   
    </div>
</section>
<!-- END BREADCRUMB-->