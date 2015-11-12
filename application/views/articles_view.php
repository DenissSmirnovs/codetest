<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Untitled 6</title>
</head>

<body>

<?php foreach($articles as $item):?>
<p><?=$item['title'];?></p>
<p><?=$item['text'];?></p>
<p></p><?=$item['data'];?></p>
<?php endforeach;?>

</body>
</html>