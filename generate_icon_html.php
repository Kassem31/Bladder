<?php
// Read all bootstrap icons from the extracted file
$icons = file('all_bootstrap_icons.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "Generating HTML for " . count($icons) . " Bootstrap icons...\n";

$html = '';
foreach ($icons as $icon) {
    $iconName = str_replace('bi bi-', '', $icon);
    $html .= "                                <div class=\"icon-option\" data-value=\"{$icon}\">\n";
    $html .= "                                    <i class=\"{$icon}\"></i>\n";
    $html .= "                                    <span>{$iconName}</span>\n";
    $html .= "                                </div>\n";
}

// Save the generated HTML
file_put_contents('all_bootstrap_icons_html.html', $html);

echo "HTML generated and saved to all_bootstrap_icons_html.html\n";
echo "Total HTML size: " . strlen($html) . " characters\n";

// Show first few icons as sample
echo "\nFirst 5 icons preview:\n";
$lines = explode("\n", trim($html));
for ($i = 0; $i < min(20, count($lines)); $i++) {
    echo $lines[$i] . "\n";
}
?>
