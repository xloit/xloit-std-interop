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

namespace Xloit\Std\Interop\Stack;

/**
 * An {@link ElementRemovableInterface} interface must be implemented by any class whose instances are intended
 * to be able remove an element from those properties.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface ElementRemovableInterface
{
    /**
     * Removes the specified element from this {@link RemovableInterface} implementations, if it is present
     * (*optional-operation). Returns true if this {@link RemovableInterface} implementations contained the specified
     * element (or equivalently, if this {@link RemovableInterface} implementations changed as a result of the call).
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function remove($element);
}
