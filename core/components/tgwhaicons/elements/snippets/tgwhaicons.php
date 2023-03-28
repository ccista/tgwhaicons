<?php
$tgwhaicons = $modx->getService('tgwhaicons', 'tgwhaicons', MODX_CORE_PATH . 'components/tgwhaicons/model/', $scriptProperties);
if (!$tgwhaicons) {
    return 'Could not load tgwhaicons class!';
}
$modx->regClientHTMLBlock('<link rel="stylesheet" href="assets/components/tgwhaicons/css/web/style.css" ');
$tgLogin = $modx->getOption('tgwhaicons_tgLogin');
$whaPhone = $modx->getOption('tgwhaicons_whaPhone');
$tpl = $modx->getOption('tpl', $scriptProperties, 'Item');
$output = $modx->getChunk($tpl, ['tgLogin' => $tgLogin, 'whaPhone' => $whaPhone, 'assetsUrl' => MODX_ASSETS_URL]);
return $output;