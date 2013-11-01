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

namespace XLite\Module\Pilat\DisableInventory;

/**
 * Module description
 *
 * @package XLite
 */
abstract class Main extends \XLite\Module\AModule
{
    /**
     * Author name
     *
     * @return string
     */
    public static function getAuthorName()
    {
        return 'Vladimir Mityukov';
    }

    /**
     * Module name
     *
     * @return string
     */
    public static function getModuleName()
    {
        return 'Disable Inventory';
    }

    /**
     * Get module major version
     *
     * @return string
     */
    public static function getMajorVersion()
    {
        return '5.0';
    }

    /**
     * Module version
     *
     * @return string
     */
    public static function getMinorVersion()
    {
        return '0';
    }

    /**
     * Module description
     *
     * @return string
     */
    public static function getDescription()
    {
        return 'This module sets inventory tracking to disabled for all products.';
    }

    /**
     * Determines if we need to show settings form link
     *
     * @return boolean
     */
    public static function showSettingsForm()
    {
        return false;
    }
}
