<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$app =& JFactory::getApplication();
$templateDir = JURI::base() . 'templates/' . $app->getTemplate();
?>
<style type="text/css">
	ul.mostread<?php echo $params->get('moduleclass_sfx'); ?> {
		float: left;
		width: 100%; /* width is changed */
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	li.mostread<?php echo $params->get('moduleclass_sfx'); ?> {
		float: left;
		width: 45%;
		margin: 0;
		background-image: url(<?=$templateDir?>/images/seta.png);
		background-position: 0 3px;
		background-repeat: no-repeat;
		padding: 0 0 0 1.5em; /* left padding moves the text away from the bullet */
	} 
</style>
<img src="<?=$templateDir?>/images/mais_lidos.png" /><br />
<ul class="mostread<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) : ?>
	<li class="mostread<?php echo $params->get('moduleclass_sfx'); ?>">
		<a href="<?php echo $item->link; ?>" class="mostread<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php echo $item->text; ?></a>
	</li>
<?php endforeach; ?>
</ul>