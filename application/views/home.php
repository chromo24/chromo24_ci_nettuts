<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>home</title>
	
</head>

<body>
	<div id="container">
		<p>My view has been loaded</p>

		<?php foreach ($records as $row): ?>
			<h1><?php echo $row->title; ?></h1>
		<?php endforeach; ?>

	</div>
	

</body>
</html>
