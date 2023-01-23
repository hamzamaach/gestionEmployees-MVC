<?php

    class Session{
        static public function set($type,$message){
            setcookie($type,$message,time()+5,"/");
        }
    }

?>