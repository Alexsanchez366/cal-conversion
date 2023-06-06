<?php
//srp 


class DataConverter
{
    public static function convertMegabyteToGigabyte($megabyte)
    {
        return $megabyte / 1024;
    }

    public static function convertMegabyteToTerabyte($megabyte)
    {
        return $megabyte / (1024 * 1024);
    }

    public static function convertMegabyteToPetabyte($megabyte)
    {
        return $megabyte / (1024 * 1024 * 1024);
    }
}

?>