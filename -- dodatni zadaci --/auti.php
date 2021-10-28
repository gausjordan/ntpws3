<?php

    $auti = array("Moskvitch", "Trabant", "Zastava", "AvtoVAZ");

    echo "<ol >";
        for ($i=0; $i<count($auti); $i++) {
            echo '<li>' . $auti[$i] . '</li>';
        }
    echo "</ol>";

?>