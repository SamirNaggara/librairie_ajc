<?php 

class Support
{
    public static function debug(array $list)
    {
        ?>
        <pre>
        <?= print_r($list); ?>
        </pre>
        <?php
    }
}