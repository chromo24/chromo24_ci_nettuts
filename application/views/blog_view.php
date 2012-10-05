<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?=$title?></title>
</head>
<body>
	<h1><?=$heading?></h1>
        <?php foreach($query->result() as $row):?>
            <h3><?=$row->title?></h3>
            <p><?=$row->body?></p>
            
            <p><?=anchor('blog/comments/'.$row->id, 'Comments');?></p>
            <hr>
        <?php endforeach; ?>
</body>
</html>