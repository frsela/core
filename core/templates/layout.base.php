<!DOCTYPE html>
<!--[if lt IE 7]><html class="ng-csp ie ie6 lte9 lte8 lte7" data-placeholder-focus="false"><![endif]-->
<!--[if IE 7]><html class="ng-csp ie ie7 lte9 lte8 lte7" data-placeholder-focus="false"><![endif]-->
<!--[if IE 8]><html class="ng-csp ie ie8 lte9 lte8" data-placeholder-focus="false"><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9" data-placeholder-focus="false"><![endif]-->
<!--[if gt IE 9]><html class="ng-csp ie" data-placeholder-focus="false"><![endif]-->
<!--[if !IE]><!--><html class="ng-csp" data-placeholder-focus="false"><!--<![endif]-->

	<head>
		<title>
		<?php p($theme->getTitle()); ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>" />
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>" />
		<!-- WebApp integration -->
		<link rel="apple-touch-icon" href="icons/touch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icons/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icons/favicon.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icons/touch-icon-ipad-retina.png">
		<link rel="icon" href="icons/favicon.png">
		<meta name="msapplication-TileImage" content="icons/tileicon.png">
		<script type="text/javascript" src="3rdparty/add2home/js/add2home.js"></script>
		<link href="3rdparty/add2home/css/add2home.css" rel="stylesheet">
		<!-- EOF WebApp -->
		<?php foreach ($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		<?php foreach ($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>
		<?php foreach ($_['headers'] as $header): ?>
			<?php
				print_unescaped('<'.$header['tag'].' ');
				foreach ($header['attributes'] as $name => $value) {
					print_unescaped("$name='$value' ");
				};
				print_unescaped('/>');
			?>
		<?php endforeach; ?>
	</head>
	<?php flush(); ?>
	<body id="body-public">
		<?php print_unescaped($_['content']); ?>
	</body>
</html>
