<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for articles.." title="Type in a name">
<?php
$length = count($persons);
for ($i = 0; $i < $length; $i++) { ?>
<div id="news-box">
	<a href="/verk7/posts/<?= $i+1 ?>"><img src="<?= $persons[$i][1] ?>"></a>
	<li><a href="/verk7/posts/<?= $i+1 ?>"><?= $persons[$i][0]; ?></a></li>
</div>
<?php } ?>