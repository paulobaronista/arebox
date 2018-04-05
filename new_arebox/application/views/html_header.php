<?php echo doctype('html5'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<title><?php echo $title; ?></title>
		<?php 
		$meta = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => $description),
			array('name' => 'keywords', 'content' => $keywords),
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
		);
		echo meta($meta);
		//echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('assets/css/materialize.css');
		echo link_tag('assets/css/style.css');
		echo link_tag('assets/css/project.css');
		?>
	</head>

<body>