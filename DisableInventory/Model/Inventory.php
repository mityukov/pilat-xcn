<?php

namespace XLite\Module\Pilat\DisableInventory\Model;

abstract class Inventory extends \XLite\Model\Inventory implements \XLite\Base\IDecorator
{
    
    /**
     * Overwrite Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return false;
    }
}