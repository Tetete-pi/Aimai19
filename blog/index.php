<?php
if (isset($_GET['post'])) {
    $file = "posts/" . basename($_GET['post']) . ".txt";
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo "<h1>" . htmlspecialchars($_GET['post']) . "</h1>";
        echo "<div>" . nl2br(htmlspecialchars($content)) . "</div>";
    } else {
        echo "記事が見つかりません。";
    }
}
?>
