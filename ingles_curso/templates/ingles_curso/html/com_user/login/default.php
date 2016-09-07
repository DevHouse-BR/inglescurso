<?php 


// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php if ($this->params->get( 'show_page_title', 1)) : ?>
<h1 class="pagetitle">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</h1>
<?php endif; ?>

<?php echo $this->loadTemplate($this->type); ?>

