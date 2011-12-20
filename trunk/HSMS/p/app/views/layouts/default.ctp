<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->

<?php echo $scripts_for_layout ?>

</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<div id="header">
 	<div id="logo">
    
    
    </div>
    <div id="menu">
    	<ul>
    	<li><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>        
        <li><?php echo $this->Html->link('Services', array('controller' => 'services', 'action' => 'viewPublic')); ?></li>        
        
        <li><?php echo $this->Html->link('Admin', array('controller' => 'users', 'action' => 'index')); ?></li>
        </ul>
    </div>    
    
</div>

<!-- Here's where I want my views to be displayed -->
<?php echo $content_for_layout ?>

<!-- Add a footer to each displayed page -->
<div id="footer">...</div>

</body>
</html>
