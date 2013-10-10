<?php/*
TODO:
- enable mod rewrite
- plug in font
- apply background image
*/?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
        KirkaBlog
	</title>
	<?php
        echo $this->Html->meta('icon', $this->Html->url('/files/favicon.ico'));
		echo $this->Html->css('cake.generic');
        echo $this->Html->script('jquery.js');
        echo $this->Html->script('jquery.color.js');
        echo $this->Html->script('kirkablog.start.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div id="main_container">
        <div id="header">
            <h2>KirkaBlog - Dead Simple Blogging Engine</h2>
        </div>
        <div id="left_sidebar">
            <ul id="menu_list">
                <li><a href="/">home</a></li>
                <li><a href="/posts/index">blog</a></li>
                <li><a href="#">resume</a></li>
                <li><a href="#">schedule</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
    </div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
