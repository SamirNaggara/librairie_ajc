<?php 

class MessageManager
{
    public static function displaySuccess(string $msg)
    {
        $_SESSION["msg"] .= "<div class=\"alert alert-success\" role=\"alert\">
        $msg
      </div>";
    }

    public static function displayError(string $msg)
    {
        $_SESSION["msg"] .= "<div class=\"alert alert-danger\" role=\"alert\">
        $msg
      </div>";
    }
}