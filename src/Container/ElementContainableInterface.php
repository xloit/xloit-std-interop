<?php
/**
 * This source file is part of Xloit project.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the New BSD License that is bundled with this package in the file
 * LICENSE. It is also available through the world-wide-web at this URL:
 * <http://opensource.org/licenses/BSD-3-Clause>
 * If you did not receive a copy of the license and are unable to obtain it through the world-wide-web,
 * please send an email to <license@xloit.com> so we can send you a copy immediately.
 *
 * @license   BSD
 * @link      http://xloit.com
 * @copyright Copyright (c) 2016, Xloit. All rights reserved.
 */

namespace Xloit\Std\Interop\Container;

/**
 * An {@link ElementContainableInterface} interface.
 *
 * @package Xloit\Std\Interop\Container
 */
interface ElementContainableInterface
{
    /**
     * Whether this contains the specified element. More formally, returns true if and only if this contains at least
     * one element.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function hasElement($element);
}
