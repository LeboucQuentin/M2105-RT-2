<?php

function getHeader($startSession,$title)
{


    if ($startSession)
        session_start();

    echo "
        <!doctype html>
        <html>
        <head>
            <meta charset='utf-8'>
            <title>{$title}</title>
            
</head>
</html>
<header>
    <h1>$title</h1>
    </header>";
}