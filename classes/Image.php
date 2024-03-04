<?php

class Image
{
    private string $path;

    private int $width;

    private int $height;

    private ?ImageFormat $format = null;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }

    public function convert(ImageFormat $newFormat): Image
    {
        $this->setFormat($newFormat);

        return $this;
    }

    public function resize(int $width, int $height): Image
    {
        $this->setWidth($width);
        $this->setHeight($height);

        return $this;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        if ($width <= 0) {
            throw new Exception('Invalid width');
        }
        $this->width = $width;
    }


    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        if ($height <= 0) {
            throw new Exception('Invalid height');
        }
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * @param ImageFormat $format
     */
    public function setFormat(ImageFormat $format): void
    {
        $this->format = $format;
    }

    /**
     * @return ImageFormat
     */
    public function getFormat(): ImageFormat|null
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }


    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        if (!file_exists($path)) {
            throw new Exception('File not found');
        }

        $this->checkFormat($path);

        $this->path = $path;
    }


    private function checkFormat(string $path): void
    {
        $format = $this->getImageFormat($path);
        $allowedFormats = ImageFormat::values();

        if (!in_array($format, $allowedFormats)) {
            throw new Exception('Format is invalid! Allowed formats:' . implode(', ', $allowedFormats));
        }
    }

    private function getImageFormat(string $path): string
    {
        return strtolower(pathinfo($path, PATHINFO_EXTENSION));
    }

    public function save(?string $newName = null)
    {
        //get current width and height
        [$oldWidth, $oldHeight] = getimagesize($this->getPath());

        //get current format for image
        $format = $this->getImageFormat($this->getPath());

        //check if need reformat image or use old format
        $newFormat = $this->getFormat() ? $this->getFormat()->value : $format;

        //get functions name
        $functionName = ImageFormat::getCreateImageFunc($format);
        $functionSaveName = ImageFormat::getSaveImageFunc($newFormat);

        $newImage = $functionName($this->getPath()); //imagecreatefromjpeg
        $newWidth = $this->getWidth() ?? $oldWidth;
        $newHeight = $this->getHeight() ?? $oldHeight;

        $tmp = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($tmp, $newImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

        $fileName = $this->getNewName($newFormat, $newName);
        $functionSaveName($tmp, $fileName);

        imagedestroy($tmp);
    }

    private function getNewName(string $newFormat, ?string $newName = null): string
    {
        $dir = pathinfo($this->getPath(), PATHINFO_DIRNAME);

        $name = $newName ?? ($dir === '.' ? '' : $dir . '/') . pathinfo($this->getPath(), PATHINFO_FILENAME);

        return "$name.$newFormat";
    }

}