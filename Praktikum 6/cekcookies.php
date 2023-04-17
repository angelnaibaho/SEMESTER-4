<?php
if (isset($variabel_cookies)) {
    echo 'Variable cookiesnya "$variable_cookies"_nilainya adalah'.$_COOKIES['variable_cookies'];
} else {
    echo "Variable cookies belum diterapkan";
}
?>