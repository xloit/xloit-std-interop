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
 * A {@link SlicingInterface} interface.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface SlicingInterface
{
    /**
     * Extracts a slice of $length elements starting at position $offset from the Collection.
     *
     * If $length is null it returns all elements from $offset to the end of the Collection. Keys have to be
     * preserved by this method. Calling this method will only return the selected slice and NOT change the
     * elements contained in the collection slice is called on.
     *
     * @param int $offset The offset to start from.
     * @param int $length The maximum number of elements to return, or null for no limit.
     *
     * @return $this A {@link SlicingInterface} implementation with the new results of the slice operation.
     */
    public function slice($offset, $length = null);
}
