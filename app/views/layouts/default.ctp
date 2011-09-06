<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout ?> | Mikey's Pastebin</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/css/concurrance.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="/" class="first">Add Paste</a></li>
            <li><a href="#">You are here:</a></li>
			<li class="current_page_item"><a href="#"><?php echo $title_for_layout ?></a></li>
		</ul>
	</div>
	<!-- end #menu -->
</div>
<!-- end #header -->
<div id="logo">
	<h1><?php if (!empty($title_for_layout)): ?><?php echo $title_for_layout ?> <?php else: ?> <a href="/">Mikey's Pastebin</a><?php endif; ?></h1>
	<p><em></em></p>
</div>
<hr />
<!-- end #logo -->
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<h1 class="title"><a href="#"><?php echo $title_for_layout ?></a></h1>
							<p class="meta"><?php echo $this->Session->flash(); ?></p>
							<div class="entry">
							 <?php echo $content_for_layout ?>	
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<h2>Latest Public Pastes</h2>
						<ul>
                            <!-- foreach -->
                            <?php foreach($latestpastes as $latestpaste): ?>
							<li><a href="/<?php echo $latestpaste['Paste']['baseid'] ?>"><?php echo $latestpaste['Paste']['baseid'] ?></a></li>
                            <?php endforeach; ?>
                            <!-- endforeach -->
						</ul>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->
		</div>
	</div>
</div>
<div id="footer">
	<p><a href="http://www.freecsstemplates.org/">DESIGN</a> - <a href="http://mikeylicio.us">CODE<a> - <a href="http://cakephp.org">CAKE</a></p>
</div>
<!-- end #footer -->
</body>
</html>
