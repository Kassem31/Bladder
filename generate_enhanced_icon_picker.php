<?php

$iconsFile = 'all_bootstrap_icons.txt';
$outputFile = 'enhanced_icon_picker.html';

if (!file_exists($iconsFile)) {
    die("Icons file not found: $iconsFile\n");
}

$icons = file($iconsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$totalIcons = count($icons);

echo "Generating enhanced icon picker for $totalIcons Bootstrap icons...\n";

$html = '';

// Add the enhanced icon picker structure
$html .= '<div class="icon-select-container">' . "\n";
$html .= '    <div class="icon-search-box">' . "\n";
$html .= '        <input type="text" id="iconSearchInput" placeholder="Search icons..." class="form-control">' . "\n";
$html .= '        <i class="bi bi-search"></i>' . "\n";
$html .= '    </div>' . "\n";
$html .= '    <div class="icon-grid-container" id="iconGridContainer">' . "\n";
$html .= '        <div class="icon-option" data-value="">' . "\n";
$html .= '            <span class="text-muted">None</span>' . "\n";
$html .= '        </div>' . "\n";

foreach ($icons as $icon) {
    $iconClass = trim($icon);
    $iconName = str_replace('bi bi-', '', $iconClass);
    
    $html .= '        <div class="icon-option" data-value="' . $iconClass . '" data-search="' . $iconName . '">' . "\n";
    $html .= '            <i class="' . $iconClass . '" style="font-size: 1.2rem; color: #0d6efd;"></i>' . "\n";
    $html .= '            <span class="icon-name">' . $iconName . '</span>' . "\n";
    $html .= '        </div>' . "\n";
}

$html .= '    </div>' . "\n";
$html .= '</div>' . "\n";

// Add the CSS for the enhanced picker
$css = '
<style>
.icon-select-container {
    max-height: 400px;
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    background: white;
}

.icon-search-box {
    padding: 10px;
    border-bottom: 1px solid #eee;
    position: relative;
}

.icon-search-box input {
    padding-right: 30px;
}

.icon-search-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
}

.icon-grid-container {
    max-height: 300px;
    overflow-y: auto;
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    gap: 8px;
}

.icon-option {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 8px;
    border: 1px solid #e9ecef;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: center;
}

.icon-option:hover {
    background-color: #f8f9fa;
    border-color: #0d6efd;
}

.icon-option.selected {
    background-color: #e7f3ff;
    border-color: #0d6efd;
}

.icon-option.hidden {
    display: none;
}

.icon-name {
    font-size: 0.75rem;
    margin-top: 4px;
    color: #6c757d;
    word-break: break-word;
}

.icon-option i {
    margin-bottom: 2px;
}
</style>';

$javascript = '
<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("iconSearchInput");
    const iconOptions = document.querySelectorAll(".icon-option[data-search]");
    
    // Search functionality
    searchInput.addEventListener("input", function() {
        const searchTerm = this.value.toLowerCase();
        
        iconOptions.forEach(option => {
            const searchText = option.getAttribute("data-search").toLowerCase();
            if (searchText.includes(searchTerm)) {
                option.classList.remove("hidden");
            } else {
                option.classList.add("hidden");
            }
        });
    });
    
    // Clear search when clicking the search icon
    document.querySelector(".icon-search-box i").addEventListener("click", function() {
        searchInput.value = "";
        iconOptions.forEach(option => {
            option.classList.remove("hidden");
        });
        searchInput.focus();
    });
});
</script>';

$fullHtml = $css . "\n" . $html . "\n" . $javascript;

file_put_contents($outputFile, $fullHtml);

echo "Enhanced icon picker generated and saved to $outputFile\n";
echo "Total HTML size: " . strlen($fullHtml) . " characters\n";
echo "Features included:\n";
echo "- Search functionality\n";
echo "- Grid layout for better organization\n";
echo "- Responsive design\n";
echo "- Icon names displayed\n";
echo "- Scrollable container\n";

?>
