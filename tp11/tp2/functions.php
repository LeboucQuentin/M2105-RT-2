<?php

function getHeader($startSession, $title){
        if ($startSession)
            session_start();
     echo "
	 <!doctype html>
	 <html>
	 <head>
	    <meta charset='utf-8'>
	    <title>{$title}</title>
	        <link rel='stylesheet' href='./bootstrap.min.css'>
	</head>
	<body>";
}
function getFooter(){
    echo "</body></html>";
}
