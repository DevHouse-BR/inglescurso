<?php


// no direct access
defined('_JEXEC') or die('Restricted access');

// example: module with rounded corners and additional rounded corners inside

?>
<div class="module <?php echo $style; ?> <?php echo $color; ?> <?php echo $yootools; ?> <?php echo $first; ?> <?php echo $last; ?>">
	
	<?php echo $badge; ?>

	<div class="box-t1">
		<div class="box-t2">
			<div class="box-t3">
			
				<?php if ($showtitle) : ?>
				<h3 class="header"><span class="header-2"><span class="header-3"><?php echo $title; ?></span></span></h3>
				<?php endif; ?>
			
			</div>
		</div>
	</div>

	<div class="box-1">
		<div class="box-2 deepest">
			<?php echo $content; ?>
		</div>
	</div>

	<div class="box-b1">
		<div class="box-b2">
			<div class="box-b3"></div>
		</div>
	</div>
		
</div>