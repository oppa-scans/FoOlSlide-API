<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="table">
<?php
	if (isset($form_title)) echo '<h3 style="float: left">' . $form_title . '</h3>';
?>
	<span style="float: right; padding: 5px"><?php echo buttoner(); ?></span>
	<hr class="clear"/>
<?php
	if (isset($form_description)) echo '<span class="clearfix">' . $form_description . '</span>';
	echo buttoner();
	echo form_open_multipart("", array('class' => 'form-stacked'));
	echo $table;
	echo form_close();
?>
<script>
	CKEDITOR.replace( 'description' );
	CKEDITOR.config.width = '95%';
</script>
</div>