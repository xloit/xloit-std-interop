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
 * An {@link AppendableInterface} interface must be implemented by any class whose instances are intended to appendable
 * an element to this. An {@link AppendableInterface} is not necessarily safe for multi threaded access. Thread safety
 * is the responsibility of classes that extend and implement this interface. Since this interface may be implemented
 * by existing classes with different styles of error handling there is no guarantee that errors will be propagated
 * to the invoker.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface AppendableInterface
{
    /**
     * Appends the specified element to this {@link AppendableInterface}. Depending on which class implements the
     * element may not be appended.
     *
     * @param mixed $element
     *
     * @return $this This instance.
     */
    public function append($element);
}
