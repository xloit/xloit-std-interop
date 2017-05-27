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

use Closure;

/**
 * A {@link PartitioningInterface} interface.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface PartitioningInterface
{
    /**
     * Returns all the elements of this {@link PartitioningInterface} implementation that satisfy in two collections
     * according to a predicate. Keys are preserved in the resulting collections.
     *
     * @param Closure $predicate The predicate on which to partition.
     *
     * @return $this A {@link PartitioningInterface} implementation with two elements. The first element contains the
     *               collection of elements where the predicate returned TRUE, the second element contains the
     *               collection of elements where the predicate returned FALSE.
     */
    public function partition(Closure $predicate);
}
