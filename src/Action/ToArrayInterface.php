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

namespace Xloit\Std\Interop\Action;

/**
 * A {@link ToArrayInterface} interface must be implemented by any class whose instances are intended to represented
 * as an array. The returned array will be "safe" in that no references to it are maintained by this object.
 * In other words, this method must allocate a new array even if this object is backed by an array.
 *
 * @package Xloit\Std\Interop\Action
 */
interface ToArrayInterface
{
    /**
     * Get the array representation of this object.
     *
     * @return array
     */
    public function toArray();
}
