<?php

function default_url($newURL) {
    if (!$_GET['view']) {
        header('Location: '.'index.php?view='.$newURL);
    }
}

function nav_smart($nav, $add) {
    $lines = explode("\n", $nav);
    foreach($lines as $line) {
        if(preg_match('/href="([^"]+)"/', $line, $url)) {
            if($_SERVER['QUERY_STRING'] == substr($url[1], 1)) {
                $line = str_replace('><a', ' '.$add.'><a', $line);
            }
        }
        echo $line . "\n";
    };
}
