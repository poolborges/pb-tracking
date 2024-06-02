<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>KriolOS :: krTracks</title><meta charset="utf-8" /></head><body>
<?php

$dir_to_scan = 'tracks';
$Directory = new RecursiveDirectoryIterator($dir_to_scan);
$Iterator = new RecursiveIteratorIterator($Directory);
$files = new RegexIterator($Iterator, '/^.+\.gpx$/i', RecursiveRegexIterator::GET_MATCH);

echo "<ul>";
foreach ($files as $file) {
    $fileUrlPath = str_replace('\\', '/', $file[0]);
	$fileUrlPath = utf8_encode($fileUrlPath);
    echo '<li><a href="index.html?track=' . $fileUrlPath . '">' . $fileUrlPath . '</a></li>';
}
echo "</ul>";
?>
</body></html>