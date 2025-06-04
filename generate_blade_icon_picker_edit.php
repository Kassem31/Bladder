<?php

$iconsFile = 'all_bootstrap_icons.txt';
$outputFile = 'blade_icon_picker_edit.blade.php';

if (!file_exists($iconsFile)) {
    die("Icons file not found: $iconsFile\n");
}

$icons = file($iconsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$totalIcons = count($icons);

echo "Generating Blade-compatible icon picker for edit form with $totalIcons Bootstrap icons...\n";

$bladeHtml = '';

// Generate the icon picker dropdown structure compatible with Laravel Blade for edit forms
$bladeHtml .= '<div class="icon-select-dropdown" id="iconSelectDropdown">' . "\n";
$bladeHtml .= '    <div class="icon-search-container">' . "\n";
$bladeHtml .= '        <input type="text" id="iconSearchInput" placeholder="Search icons..." class="form-control form-control-sm">' . "\n";
$bladeHtml .= '        <i class="bi bi-search search-icon"></i>' . "\n";
$bladeHtml .= '    </div>' . "\n";
$bladeHtml .= '    <div class="icon-grid-container" id="iconGridContainer">' . "\n";
$bladeHtml .= '        <div class="icon-option" data-value="">' . "\n";
$bladeHtml .= '            <span class="text-muted">None</span>' . "\n";
$bladeHtml .= '        </div>' . "\n";

foreach ($icons as $icon) {
    $iconClass = trim($icon);
    $iconName = str_replace('bi bi-', '', $iconClass);
    
    $bladeHtml .= '        <div class="icon-option {{ old(\'IconClass\', $finding->IconClass) == \'' . $iconClass . '\' ? \'selected\' : \'\' }}"' . "\n";
    $bladeHtml .= '             data-value="' . $iconClass . '" data-search="' . $iconName . '">' . "\n";
    $bladeHtml .= '            <i class="' . $iconClass . '" style="font-size: 1.2rem; color: #0d6efd;"></i>' . "\n";
    $bladeHtml .= '            <span class="icon-name">' . $iconName . '</span>' . "\n";
    $bladeHtml .= '        </div>' . "\n";
}

$bladeHtml .= '    </div>' . "\n";
$bladeHtml .= '</div>' . "\n";

file_put_contents($outputFile, $bladeHtml);

echo "Blade-compatible icon picker for edit form generated and saved to $outputFile\n";
echo "Total HTML size: " . strlen($bladeHtml) . " characters\n";

?>
