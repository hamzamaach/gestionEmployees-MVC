<?php

    if (isset($_COOKIE['success'])){
        echo '<div class="alert alert-success">'.
            $_COOKIE['success'].'</div>';
    }

if (isset($_COOKIE['danger'])){
    echo '<div class="alert alert-danger">'.
        $_COOKIE['danger'].'</div>';
}

if (isset($_COOKIE['info'])){
    echo '<div class="alert alert-info">'.
        $_COOKIE['info'].'</div>';
}

?>


