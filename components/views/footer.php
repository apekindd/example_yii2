<?php
if ($this->beginCache($cache['key'],$cache['options'])) {
    echo $menu;
    $this->endCache();
}
?>