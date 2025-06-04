<?php
$content = file_get_contents('create_page_icons.html');
preg_match_all('/data-value="(bi bi-[^"]+)"/', $content, $matches);
$icons = array_unique($matches[1]);
sort($icons);

echo "Found " . count($icons) . " unique Bootstrap icons\n";
file_put_contents('all_bootstrap_icons.txt', implode("\n", $icons));

echo "First 20 icons:\n";
for($i = 0; $i < min(20, count($icons)); $i++) {
    echo $icons[$i] . "\n";
}

echo "\nLast 10 icons:\n";
for($i = max(0, count($icons) - 10); $i < count($icons); $i++) {
    echo $icons[$i] . "\n";
}

echo "\nTotal: " . count($icons) . " icons extracted and saved to all_bootstrap_icons.txt\n";
?>
