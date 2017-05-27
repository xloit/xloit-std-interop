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

namespace Xloit\Std\Interop\Stack;

/**
 * A {@link RemovableInterface} interface must be implemented by any class whose instances are intended to be able
 * remove an element from those properties.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface RemovableInterface
{
    /**
     * Removes the specified element by key from this {@link RemovableInterface} implementations, if it is present
     * (*optional-operation). Returns true if this {@link RemovableInterface} implementations contained the specified
     * element (or equivalently, if this {@link RemovableInterface} implementations changed as a result of the call).
     *
     * @param string|int $key
     *
     * @return mixed The removed element.
     */
    public function remove($key);
}
