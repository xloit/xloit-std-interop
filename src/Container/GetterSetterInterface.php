<?php
/**
 * This source file is part of Xloit project.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * <http://www.opensource.org/licenses/mit-license.php>
 * If you did not receive a copy of the license and are unable to obtain it through the world-wide-web,
 * please send an email to <license@xloit.com> so we can send you a copy immediately.
 *
 * @license   MIT
 * @link      http://xloit.com
 * @copyright Copyright (c) 2016, Xloit. All rights reserved.
 */

namespace Xloit\Std\Interop\Container;

/**
 * A {@link GetterSetterInterface} interface.
 *
 * @package Xloit\Std\Interop\Container
 */
interface GetterSetterInterface
{
    /**
     * Sets the specified key name in this class with the specified element.
     *
     * @param string|int $index
     * @param mixed      $element
     *
     * @return static
     */
    public function set($index, $element);

    /**
     * Returns the element at the specified key name in this class.
     *
     * @param string|int $index
     *
     * @return mixed
     */
    public function get($index);
}
