<?php

function siteheader($back, $header) {
    echo 
    '<div id="top">
        <div id="logo" class="box">
            <a href="', $back,'index.php"><img src="', $back,'assets/images/logo.png" id="logopic"></a>
        </div>
        <header class="box">
            <h1>', $header,'</h1>
        </header>
    </div>';
    }

?>