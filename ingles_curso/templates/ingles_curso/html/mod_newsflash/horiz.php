<?php


defined('_JEXEC') or die('Restricted access'); ?>

<?php if (count($list) == 1) : ?>
	<?php $item = $list[0]; ?>
	<div class="module-newsflash">
		<?php modNewsFlashHelper::renderItem($item, $params, $access); ?>
	</div>
<?php elseif (count($list) > 1) : ?>
	<div class="module-newsflash">
		<div class="horizontal <?php echo $params->get('moduleclass_sfx'); ?>">
			<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
			<div class="item <?php if ($i == $n - 1) echo 'last'; ?>">
				<?php modNewsFlashHelper::renderItem($list[$i], $params, $access); ?>
			</div>
			<?php endfor; ?>
		</div>
	</div>
<?php endif; ?>
