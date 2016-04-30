<?php
    $cSession = curl_init(); 
    curl_setopt($cSession,CURLOPT_URL,"https://docs.google.com/viewerng/viewer?url=http://kmmc.in/wp-content/uploads/2014/01/lesson2.pdf&hl=bn&embedded=true");
    curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($cSession,CURLOPT_HEADER, false); 
    $result=curl_exec($cSession);
    curl_close($cSession);

    $result = str_replace('</head>','<link rel="stylesheet" href="http://localhost/test/style.css" /></head>', $result);
    $result = str_replace('</title>','</title><base href="https://docs.google.com/" />', $result);
    echo $result;