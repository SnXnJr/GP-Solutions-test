<?php 
  get_header();
?>
	<div class="page-content">
		<?php
			the_title('<h1>', '</h1>');
			the_content();
		?>
	</div>
<?php
  get_footer();
?>