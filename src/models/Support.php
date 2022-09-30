<?php

    class Support
    {
        public static function Debug(array $list)
        {
            echo "<pre>";
                print_r($list);
            echo "</pre>";
        }
    }