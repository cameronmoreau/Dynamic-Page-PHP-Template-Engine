<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php require("php/inc/page_setup.php"); ?>
</head>
<body>
	<!-- Page Header -->
	<?php include("php/inc/page_header.php") ?>

		<!-- Page Sub Header -->
	<section class="sub_head">
		<div class="wrapper">
			<h1><?php $page->printTitle(); ?></h1>
		</div>
	</section>
	<div class="clear"></div>

	<div class="wrapper">
		<!-- Page Sub Navigation -->
		<?php include_once($page->getSubNav()) ?>

		<!-- Page Content -->
		<section class="content_right">
			<?php $page->printContent(); ?>
		</section>
	</div>
	<div class="clear"></div>

	<!-- Page Footer -->
	<?php include("php/inc/page_footer.php"); ?>
</body>
</html>
