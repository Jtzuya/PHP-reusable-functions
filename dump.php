<?php
function dump($dump1, $dump2 = NULL) {
    if(!empty($dump1) || !empty($dump2)) {
        echo '<pre>';
        var_dump($dump1);
        echo '</pre>';
        
        if($dump2 !== NULL) {
            echo '<pre>';
            var_dump($dump2);
            echo '</pre>';
        }
    }
}
