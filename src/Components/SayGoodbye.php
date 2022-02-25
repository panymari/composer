<?php
namespace Panymari\Composer;
use Panymari\Framework\Components\Session;
class SayGoodbye{
    public function __construct(){
        Session::set('key','456');
        echo "goodbye";
    }
}