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

namespace Xloit\Std\Interop\Comparison;

/**
 * An {@link IdenticalInterface} interface imposes a total ordering on the objects of each class that implements it.
 * This ordering is referred to as the class's natural ordering, and the class's isIdenticalTo method is referred to
 * as its natural comparison method.
 *
 * @package Xloit\Std\Interop\Comparison
 */
interface IdenticalInterface
{
    /**
     * Checks if this instance is equal to the given object.
     *
     * @param ComparableInterface $element
     *
     * @return boolean
     */
    public function isIdenticalTo(ComparableInterface $element);
}
