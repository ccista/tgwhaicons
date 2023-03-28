<?php

class tgwhaiconsItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'tgwhaiconsItem';
    public $classKey = 'tgwhaiconsItem';
    public $languageTopics = ['tgwhaicons'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('tgwhaicons_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('tgwhaicons_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'tgwhaiconsItemCreateProcessor';