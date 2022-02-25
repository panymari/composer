<?php
namespace Panymari\Composer;
use Panymari\Framework\Components\Session;
class SayHello{
    public function __construct(){
        Session::set('key','123');
        echo "hello";
    }
}