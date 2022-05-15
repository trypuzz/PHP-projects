<?php

class FileSystemObject
{
    const SOCKET = 0140000;
    const LINK = 0120000;
    const REGULAR_FILE = 0100000;
    const BLOCK_DEVICE = 0060000;
    const DIRECTORY = 0040000;
    const CHARACTER_DEVICE = 0020000;
    const FIFO = 0010000;

    const BYTES = "B";
    const KILOBYTES = "KB";
    const MEGABYTES = "MB";
    const GIGABYTES = "GB";
    const TERABYTES = "TB";
    const PETABYTES = "PB";

    private $name;
    private $size;
    private $type;

    public function __construct($filepath)
    {
        $info = stat($filepath);
        $mode = $info["mode"];

        $this->name = $filepath;
        $this->size = $info["size"];
        $this->type = $this->getType($mode);

    }

    public function getInfo($sizeFormat=self::MEGABYTES)
    {
        return "<p>$this->name | $this->type | ".$this->getSize($sizeFormat).$sizeFormat."</p>";

    }

    private function getSize($format)
    {
        switch ($format)
        {
            case self::BYTES:
                return $this->size;
            case self::KILOBYTES:
                return $this->size >> 10;
            case self::MEGABYTES:
                return $this->size >> 20;
            case self::GIGABYTES:
                return $this->size >> 30;
            case self::TERABYTES:
                return $this->size >> 40;
            case self::PETABYTES:
                return $this->size >> 50;
            default:
                return 0;
        }
    }

    private function getType($mode)
    {
        if (($mode & self::SOCKET) == self::SOCKET) return "socket";
        if (($mode & self::LINK) == self::LINK) return "link";
        if (($mode & self::REGULAR_FILE) == self::REGULAR_FILE) return "regular file";
        if (($mode & self::BLOCK_DEVICE) == self::BLOCK_DEVICE) return "block device";
        if (($mode & self::DIRECTORY) == self::DIRECTORY) return "directory";
        if (($mode & self::CHARACTER_DEVICE) == self::CHARACTER_DEVICE) return "character device";
        if (($mode & self::FIFO) == self::FIFO) return "fifo";
        return "unknown";
    }
}