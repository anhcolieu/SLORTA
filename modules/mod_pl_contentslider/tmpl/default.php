<?php

// no direct access
defined('_JEXEC') or die('Restricted access');
if($modal){JHTML::_('behavior.modal');}
$document = JFactory::getDocument();
if(count($list)>0){?>
<div id="plcontentslider<?php echo $module->id; ?>" style="display:none;width:<?php echo $moduleWidthWrapper;?>" class="pl-cs<?php echo $moduleclass_sfx? ' pl-cs'.$params->get('moduleclass_sfx'):'';?>">
	<?php if( $next_back && $totalPages  > 1  ) : ?>
	<a class="prev" href="#">Prev</a><a class="next" href="#">Next</a> 
	<?php endif; ?>
	<?php 
		$add_style = "";
		if( trim($params->get('content_title')) ){
		$add_style= "border: 1px solid #CFCFCF;padding:10px 0px;";
	?>
	<h3 style="width:<?php echo $moduleWidth;?>">
		<?php if($params->get('content_link')) {?>
			<a href="<?php echo $params->get('content_link');?>"><span><?php echo $params->get('content_title') ?> </span></a>
		<?php } else { ?>
			<span><?php echo $params->get('content_title') ?> </span>                    
		<?php   }?>
	</h3>
	<?php } ?>
	<div class="slides_container" style="width:<?php echo $moduleWidth.";".$add_style;?>">

	<?php foreach( $pages as $key => $list ): ?>
		<div class="slide" style="width:<?php echo $moduleWidth;?>">
		<?php foreach( $list as $i => $row ): ?>
			<div class="pl-row <?php if($i==0) echo 'pl-row-first'; else if($i==count($list)-1) echo 'pl-row-last' ?>"  style="width:<?php echo $itemWidth;?>%" >
				<div class="pl-inner">
				<?php if( $row->thumbnail && $align_image != "center"): ?>
					<a target="<?php echo $openTarget; ?>" class="pl-image-link<?php echo $modal? ' modal':''?>" title="<?php echo $row->title;?>" href="<?php echo $modal?$row->mainImage:$row->link;?>">
					  <img <?php echo $imgClass ?>  src="<?php echo $row->thumbnail; ?>" alt="<?php echo $row->title?>"  style="width:<?php echo $thumbWidth ;?>px; float:<?php echo $align_image;?>;margin-<?php echo $align_image=="left"? "right":"left";?>:5px" title="<?php echo $row->title?>" />
					</a> 
				<?php endif ; ?>
				<?php if( $show_category_name ): ?>
				<?php if($show_category_name_as_link) : ?>
					<a class="pl-category" target="<?php echo $openTarget; ?>"
						title="<?php echo $row->category_title; ?>"
						href="<?php echo $row->categoryLink;?>"> <?php echo $row->category_title; ?>
					</a>
					<?php else :?>
					<span class="pl-category"> <?php echo $row->category_title; ?> </span>
					<?php endif; ?><br />
					<?php endif; ?>

					<?php if( $showTitle ): ?>
					<a class="pl-title" target="<?php echo $openTarget; ?>"
						title="<?php echo $row->title; ?>"
						href="<?php echo $row->link;?>"> <?php echo $row->title_cut; ?> </a><br />
					<?php endif; ?>
					<?php if( $row->thumbnail && $align_image == "center" ): ?>
					<div class="pl-center">
					<a target="<?php echo $openTarget; ?>"
						class="pl-image-link<?php echo $modal? ' modal':''?>"
						title="<?php echo $row->title;?>" href="<?php echo $modal?$row->mainImage:$row->link;?>">
						<img <?php echo $imgClass ?> src="<?php echo $row->thumbnail; ?>" alt="<?php echo $row->title?>"  style="width:<?php echo $thumbWidth ;?>px;" title="<?php echo $row->title?>" />
					</a>
					</div>
					<?php endif ; ?>
					<?php if( $showAuthor || $showDate ): ?>
					<div class="pl-extra">
					<?php if( $showAuthor ): ?>
						<span class="pl-author"><?php 	echo JText::sprintf('PL_CREATEDBY' ,
						JHtml::_('link',JRoute::_($row->authorLink),$row->author)); ?>
						</span>
						<?php endif; ?>
						<?php if( $showDate ): ?>
						<span class="pl-date"><?php echo JText::sprintf('PL_CREATEDON', $row->date); ?>
						</span>
						<?php endif; ?>
					</div>
					<?php endif; ?>

					<?php if( $show_intro ): ?>
					<div class="pl-introtext">
					<?php echo $row->description; ?>
					</div>
					<?php endif; ?>

					<?php if( $showReadmore ) : ?>
					<p class="readmore">
						<a target="<?php echo $openTarget; ?>"
							title="<?php echo $row->title;?>"
							href="<?php echo $row->link;?>"> <?php echo JText::_('READ_MORE');?>
						</a>
					</p>
					<?php endif; ?>

				</div>
				<!--end pl-inner -->
			</div>
			<!--end pl-row -->
			<?php
			if($itemsPerCol > 1 && $i < count($list)-1){
				if(($i+1)%$itemsPerRow ==0){
					echo '<div class="pl-row-separate"></div>';
				}
			}
			?>
			<?php endforeach; ?>
			<div style="clear: both;"></div>

		</div>
		<!--end pl-main-item page	-->
		<?php endforeach; ?>
	</div>
</div>
<!--end pl-container -->
<div style="clear: both;"></div>

<script type="text/javascript">	
	if(typeof(plcModuleIds)=='undefined'){var plcModuleIds = new Array();var plcModuleOpts = new Array();}
	plcModuleIds.push(<?php echo $module->id; ?>);
	plcModuleOpts.push({
			slideEasing : '<?php echo $slideEasing; ?>',
			fadeEasing : '<?php echo $slideEasing; ?>',
			effect: '<?php echo $effect; ?>',
			preloadImage: '<?php echo $preloadImg; ?>',
			generatePagination: <?php echo $paging ?>,
			play: <?php echo $play; ?>,						
			hoverPause: <?php echo $hoverPause; ?>,	
			slideSpeed : <?php echo $duration; ?>,
			autoHeight:<?php echo $autoHeight ?>,
			fadeSpeed : <?php echo $fadeSpeed ?>,
			equalHeight:<?php echo $equalHeight; ?>,
			width: <?php echo $moduleWidth=='auto'? "'auto'":$params->get( 'module_width', 0 ); ?>,
			height: <?php echo $moduleHeight=='auto'? "'auto'":$params->get( 'module_height', 0 ); ?>,
			pause: 100,
			preload: true,
			paginationClass: '<?php echo $butlet==1 ? 'pl_handles': 'pl_handles_num' ?>',
			generateNextPrev:false,
			prependPagination:true,
			touchScreen:<?php echo $touchScreen ?>
	});
</script>
<?php 
	// set position for bullet
	if($butlet) {
		$nav_top = (-1)*(int)$params->get( 'navigation_top', 0 );
		$nav_right = (-1)*(int)$params->get( 'navigation_right', 0 )+5;
		if(trim($params->get('content_title'))) $nav_top += 13;
		$document->addStyleDeclaration(
			$modid . ' ' . ($butlet == 1 ? '.pl_handles' : '.pl_handles_num') . '{'.
				'top: ' . $nav_top .'px !important;'.
				'right: ' . $nav_right . 'px !important'.
			'}'
		);

	}
	// set responsive for mobile device
	if($moduleWidth=='auto'){
	$document->addStyleDeclaration(
		'
		@media screen and (max-width: 480px){.pl-cs .pl-row{width:100%!important;}}'
	);
	}
}
else
{ 
	echo '<div>No result...</div>'; 
} ?>