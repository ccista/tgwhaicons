<?php

/**
 * The home manager controller for tgwhaicons.
 *
 */
class tgwhaiconsHomeManagerController extends modExtraManagerController
{
    /** @var tgwhaicons $tgwhaicons */
    public $tgwhaicons;


    /**
     *
     */
    public function initialize()
    {
        $this->tgwhaicons = $this->modx->getService('tgwhaicons', 'tgwhaicons', MODX_CORE_PATH . 'components/tgwhaicons/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['tgwhaicons:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('tgwhaicons');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->tgwhaicons->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/tgwhaicons.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->tgwhaicons->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        tgwhaicons.config = ' . json_encode($this->tgwhaicons->config) . ';
        tgwhaicons.config.connector_url = "' . $this->tgwhaicons->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "tgwhaicons-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="tgwhaicons-panel-home-div"></div>';

        return '';
    }
}