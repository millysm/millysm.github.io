<?php 

function nav($back, $back2) {
    echo 
    '<nav class="mainbox">
        <ul>
        <li><a href="', $back,'contact.php">Contact</a></li>
        <div class="dropdown">
            <li class="dropbutton"><a href="#">Projects</a></li>
                <div class="dropitems">
                    <a href="', $back2,'videos.php">Videos</a>
                    <a href="', $back2,'drawings.php">Drawings</a>
                    <a href="', $back2,'clientwork.php">Client Work</a>
                    <a href="', $back2,'sculptures.php">Sculptures</a>
                </div>
        </div>
        <li><a href="', $back,'shop.php">Shop</a></li>
    </ul>
    </nav>';
    }

?>