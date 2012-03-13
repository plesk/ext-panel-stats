<?php

require_once('pm/Loader.php');
pm_Loader::registerAutoload();
pm_Context::init('panel-stats');

$reporter = new Modules_PanelStats_Reporter();

header("Content-Type: text/xml");
echo $reporter->getResults();

