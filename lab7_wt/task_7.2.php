
<?php
//error_reporting(E_ERROR | E_PARSE);
include('simple_html_dom.php');
$url="http://wallpaperswide.com";
$dumpDir="downloads/";
$html=file_get_html($url);
foreach($html->find("a") as $a){
    $href=$a->href;
    if(!$href || strlen($href)==1){
        $href="";
        continue;
    }
    echo $href;
    $dirName=$a->plaintext;
    if (!file_exists($dumpDir.$dirName)) {
        mkdir("{$dumpDir}{$dirName}", 0700);
    }
    $link="{$url}{$href}";
    echo $link;
    $link=file_get_html($link);
    foreach($link->find("img") as $img){
        $src=$img->src;
        $filename=substr($img->src,strrpos($img->src,"/")+1);
        if (strtolower(substr($src, 0, 5)) != 'http:' && strtolower(substr($src, 0, 6)) != 'https:') $src = $url.$src;
        file_put_contents("{$dumpDir}{$dirName}/{$filename}", file_get_contents($src));
    }
}


?>
