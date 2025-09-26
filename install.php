<?php
// Host-root path to _footer.php
$footerFile = $_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/_footer.php';

// Markers for injected code
$startMarker = "<!-- MyPlugin JS START -->";
$endMarker   = "<!-- MyPlugin JS END -->";

// JS snippet to inject
$jsSnippet = "\n$startMarker\n";
$jsSnippet .= '<script id="aioa-adawidget" src="https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?colorcode=#420083&token=&position=bottom_right" defer></script>';
$jsSnippet .= "\n$endMarker\n";

// Read current content
$footerContent = file_get_contents($footerFile);

// Append only if not already present
if (strpos($footerContent, $startMarker) === false) {
    file_put_contents($footerFile, $footerContent . $jsSnippet);
}
