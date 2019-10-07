<?php
(function () {
    echo "Automatic calling this function here<br/>";
    $country = 'Bangladesh';
    echo "Country name inside closure: $country";
})();
//echo "Country Name outside closure " . $country;