<?php

class  Redirect
{
    static public function to($page)
    {
        header('location:' . $page);
    }
}

?>