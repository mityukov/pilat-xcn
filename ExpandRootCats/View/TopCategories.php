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

namespace XLite\Module\Pilat\ExpandRootCats\View;

/**
 * Sidebar categories list
 */
abstract class TopCategories extends XLite\View\TopCategories implements \XLite\Base\IDecorator
{
    
    /**
     * Overwrite widget parameters
     *
     * @return void
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();
        $this->widgetParams[parent::PARAM_DISPLAY_MODE] = new \XLite\Model\WidgetParam\Set(
                'Display mode', static::DISPLAY_MODE_TREE, true, $this->displayModes
            );
    }
}