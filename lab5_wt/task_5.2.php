<?php
echo "Enter directory:\n";
$string = readline();
$dfs = disk_free_space($string);
$dts = disk_total_space($string);
echo "Полный суммарный объем файлов в этой директории ", $dts-$dfs;

function getDirectorySize($folderPath)
{
    $files = scandir($folderPath);
    unset($files[0], $files[1]);
    $size = 0;
    foreach ($files as $file) {
        if (file_exists($folderPath . '/' . $file)) {
            $size += filesize($folderPath . '/' . $file);
            if (is_dir($folderPath . '/' . $file)) {
                $size += getDirectorySize($folderPath . '/' . $file);
            }
        }

    }
    return $size;
}

$pie=explode("\\", $string);
if($pie[1]!=null)
{echo "\n", getDirectorySize($string);}
