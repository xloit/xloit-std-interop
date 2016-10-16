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
 * A {@link ParameterObjectInterface} interface.
 *
 * @package Xloit\Std\Interop\Container
 */
interface ParameterObjectInterface
{
    /**
     * Decide if an element exist.
     *
     * @param string $key
     *
     * @return bool
     */
    public function __isset($key);

    /**
     * Removes the specified element from this object.
     *
     * @param string $key
     *
     * @return void
     */
    public function __unset($key);

    /**
     * Returns the element at the specified key name in this class.
     *
     * @param string $index
     *
     * @return mixed
     */
    public function __get($index);

    /**
     * Sets the specified key name in this class with the specified element.
     *
     * @param string $index
     * @param mixed  $element
     *
     * @return void
     */
    public function __set($index, $element);
}
