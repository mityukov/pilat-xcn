<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  Pilat
 * @author    Vladimir Mityukov <mityukov@gmail.com>
 * @copyright Copyright (c) 2011-2013 Vladimir Mityukov <mityukov@gmail.com>. All rights reserved
 * @link      http://twitter.com/pilat
 */

namespace XLite\Module\Pilat\DisableInventory\Model;

/**
 * Inventory
 */
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