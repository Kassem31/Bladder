<?php

// Read the original edit.blade.php file
$editFile = 'resources/views/findings/edit.blade.php';
$content = file_get_contents($editFile);

// Find the start of the icon dropdown section
$startPattern = '<div class="icon-select-dropdown" id="iconSelectDropdown">';
$startPos = strpos($content, $startPattern);

if ($startPos === false) {
    die("Could not find the icon dropdown section to replace.\n");
}

// Find the end pattern - look for the last hand-thumbs-up icon and its closing div
$endPattern = '</div>
                                        </div>
                                    </div>';

// Find the pattern that comes after all the icons
$afterIconsPattern = '@error(\'IconClass\')';
$afterIconsPos = strpos($content, $afterIconsPattern, $startPos);

if ($afterIconsPos === false) {
    die("Could not find the end of the icon section.\n");
}

// Find the closing divs before the @error directive
$searchStart = $afterIconsPos - 200; // Look back 200 characters
$searchArea = substr($content, $searchStart, 200);
$localEndPos = strrpos($searchArea, '</div>
                                    </div>');

if ($localEndPos === false) {
    die("Could not find the proper closing div structure.\n");
}

$endPos = $searchStart + $localEndPos + strlen('</div>
                                    </div>');

// Replace the icon dropdown section with the include statement
$beforeDropdown = substr($content, 0, $startPos);
$afterDropdown = substr($content, $endPos);

$newContent = $beforeDropdown . "@include('findings.partials.icon-picker-edit')
                                    </div>" . $afterDropdown;

// Write the updated content back to the file
file_put_contents($editFile, $newContent);

echo "Successfully updated edit.blade.php with comprehensive icon picker!\n";
echo "Replaced icon dropdown section from position $startPos to $endPos\n";

?>
