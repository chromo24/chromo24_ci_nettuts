<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?=$title?></title>
</head>
<body>
	<h1><?=$heading?></h1>

        <?php if ($query->num_rows() > 0): ?>
        
            <?php foreach($query->result() as $row):?>
    
                <p><?=$row->body?></p>
                <p><?=$row->author?></p>
    
                <hr>
            <?php endforeach; ?>
            
        <?php endif; ?>
        
        <p><?=anchor('blog','Back to Blog');?></p>
        
        <?=form_open('blog/comment_insert');?>
        
        <?=form_hidden('entry_id', $this->uri->segment(3));?>
        
        <p><textarea name="body" rows="10"></textarea></p>
        <p><input type="text" name="author" /></p>
        <p><input type="submit" value="Submit Comment" /></p>
        </form>
</body>
</html>