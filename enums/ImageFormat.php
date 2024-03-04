<?php


enum ImageFormat: string
{
    case JPEG = 'jpeg';

    case JPG = 'jpg';

    case PNG = 'png';

    case WEBP = 'webp';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getCreateImageFunc(string $currentFormat): string
    {
        return match ($currentFormat) {
            'png' => 'imagecreatefrompng',
            'webp' => 'imagecreatefromwebp',
            default => 'imagecreatefromjpeg'
        };
    }

    public static function getSaveImageFunc(string $currentFormat): string
    {
        return match ($currentFormat) {
            'png' => 'imagepng',
            'webp' => 'imagewebp',
            default => 'imagejpeg'
        };
    }
}