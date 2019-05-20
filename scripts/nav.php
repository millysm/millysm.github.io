<?php 

function nav($back, $back2) {
    echo 
    '<nav class="mainbox">
        <ul>
        <li><a href="', $back,'contact.php">Contact</a></li>
        <div class="dropdown">
            <li class="dropbutton"><a href="#">Projects</a></li>
                <div class="dropitems">
                    <div class="dropcol1">
                        <a href="', $back2,'videos.php">Videos</a>
                        <a href="', $back2,'drawings.php">Drawings</a>
                        <a href="', $back2,'animations.php">Animations</a>
                        <a href="', $back2,'rb3k.php">The RB3K</a>
                    </div>
                    <div class="dropcol2">
                        <a href="', $back2,'a-b.php">The "-" in A-B</a>
                        <a href="', $back2,'clientwork.php">Client Work</a>
                        <a href="', $back2,'sculptures.php">Sculptures</a>
                        <a href="', $back2,'game.php">WIP : Game</a>
                    </div>
                </div>
        </div>
        <li><a href="', $back,'shop.php">Shop</a></li>
    </ul>
    </nav>';
    }

?>