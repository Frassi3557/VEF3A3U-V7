<div class="news-box">
    <a href="/verk7/posts/1">
        <img src="<?= $persons[0][1] ?>">
        <li><?= $persons[0][0]; ?></li>
    </a>
</div>
<div class="news-box">
    <a href="/verk7/posts/2">
        <img src="<?= $persons[1][1] ?>">
        <li><?= $persons[1][0]; ?></li>
    </a>
</div>
<div class="news-box">
    <a href="/verk7/posts/3">
        <img src="<?= $persons[2][1] ?>">
        <li><?= $persons[2][0]; ?></li>
    </a>
</div>
<?php  
/*for($i = 0; $i < count($persons); ++$i) {
    echo "<div class='news-box'>";
        echo "<a href='/verk7/posts/1'>";
            echo "<img src='$persons[$i][1]'>";
            echo "<li> $persons[$i][0] </li>"
        echo "</a>";
    echo "</div>";
}*/
?> 