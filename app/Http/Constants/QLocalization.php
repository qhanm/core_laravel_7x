<?php
namespace App\Http\Constants;

class QLocalization
{
    const LANG_VN = 'vn';
    const LANG_EN = 'en';

    const IMG_VN = 'vn.jpg';
    const IMG_EN = 'en.jpg';

    public static function getListLocalization()
    {
        return [
            self::LANG_VN,
            self::LANG_EN,
        ];
    }

    public static function getListImage()
    {
        return [
            self::LANG_VN => self::IMG_VN,
            self::LANG_EN => self::IMG_EN,
        ];
    }

    public static function getListName()
    {
        return [
            self::LANG_VN => 'Việt Nam',
            self::LANG_EN => 'English'
        ];
    }
}
