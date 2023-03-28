<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/tgwhaicons/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/tgwhaicons')) {
            $cache->deleteTree(
                $dev . 'assets/components/tgwhaicons/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/tgwhaicons/', $dev . 'assets/components/tgwhaicons');
        }
        if (!is_link($dev . 'core/components/tgwhaicons')) {
            $cache->deleteTree(
                $dev . 'core/components/tgwhaicons/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/tgwhaicons/', $dev . 'core/components/tgwhaicons');
        }
    }
}

return true;