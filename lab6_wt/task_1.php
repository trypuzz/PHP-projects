<?php

class FileManager {

    public function display(){
        $dir    = 'Files';
        $files = scandir($dir, 1);
        if (count($files)==2){
            echo "<h2>На сервере нет файлов</h2>";
        } else {
            for ($i = 0; $i<count($files)-2; $i++) {
                echo "<br>";
                echo "<h3 style='display: inline-block;'>";
                echo  $i+1 . ") " . $files[$i];
                echo "</h3>";
                echo "<form method='post' style='display: inline-block; margin-left: 10px;'>";
                echo "<input type='hidden' name='name' value='" . $i . "'/>";
                echo "<input type='submit' name='download' value='Скачать'/>";
                echo "</form>";
                echo "<form method='post' style='display: inline-block; margin-left: 10px'>";
                echo "<input type='hidden' name='name' value='" . $i . "'/>";
                echo "<input type='submit' name='delete' value='Удалить'/>";
                echo "</form>";
                echo "</div>";
            }
        }
    }

    public function upload($files){
        if ($files && $files["filename"]["error"]== UPLOAD_ERR_OK)
        {
            $name = "Files/" . $files["filename"]["name"];
            move_uploaded_file($files["filename"]["tmp_name"], $name);
            echo "Файл загружен<br>";
        }

    }

    public function download($name){
        $dir    = 'Files';
        $files =  scandir($dir, 1);
        $file = $files[$name];
        $file_path = 'Files/' . $file;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_path);
        header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
        header('Content-Type: '.$mime);
        header('Content-Length: '.filesize($file_path));
        header('Connection: close');
        echo file_get_contents($file_path);
    }

    public function delete($name){
        $dir    = 'Files';
        $files =  scandir($dir, 1);
        $file = $files[$name];
        $filepath = "Files/" . $file;
        unlink($filepath);
    }

    public function showTop(){
        echo "<!DOCTYPE html>
                <html>
                <head>
                    <title>Document</title>
                    <meta charset='utf-8' />
                </head>
                <body>";
        echo "<form method='post' enctype='multipart/form-data'>
          Выберите файл:
          <br>
          <input type='file' name='filename' size='10' />
          <br>
          <input type='submit' name='upload' value='Загрузить' style='  border: none;
            background-color: dodgerblue;
            color: white;
            margin-top: 5px;
            margin-left: 60px;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer'/>
          </form>";
    }

    public function showBot(){
        echo "</body>
            </html>";
    }


}