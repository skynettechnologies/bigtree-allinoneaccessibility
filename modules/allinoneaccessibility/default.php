<?php
// Determine protocol and base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host     = $_SERVER['HTTP_HOST'];
$baseUrl  = $protocol . $host . '/';  // add slash at the end

// Current directory of this PHP file
$currentDir = __DIR__;

// Find the position of 'extensions' in the path
$pos = strpos($currentDir, DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR);

if ($pos !== false) {
    // Extract folder name after 'extensions/'
    $afterExtensions = substr($currentDir, $pos + strlen(DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR));
    $parts = explode(DIRECTORY_SEPARATOR, $afterExtensions);
    $vendorFolder = $parts[0]; // e.g., com.skynettechnologies.allinoneaccessibility
    $moduleFolder = $parts[2]; // e.g., allinoneaccessibility
}

// Construct dynamic iframe src
$iframeSrc = $baseUrl . 'extensions/' . $vendorFolder . '/modules/' . $moduleFolder . '/index.php';
?>

<iframe src="<?php echo $iframeSrc; ?>" style="width: 100%; height: 600px;" frameborder="0"></iframe>
