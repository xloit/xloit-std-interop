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
 * An {@link AddableInterface} interface.
 *
 * @package Xloit\Std\Interop\Stack
 */
interface AddableInterface
{
    /**
     * Add new element at the end of this with the specified element (*optional-operation). The {@link AddableInterface}
     * implementation that support this operation may place limitations on what elements may be added to this.
     * In particular, some {@link AddableInterface} implementation will refuse to add null elements, and others will
     * impose restrictions on the type of elements that may be added. If an {@link AddableInterface} implementation
     * refuses to add a particular element for any reason other than that it already contains the element, it must
     * throw an exception. This preserves the invariant that an {@link AddableInterface} implementation always contains
     * the specified element after this call returns.
     *
     * @param mixed $element
     *
     * @return static
     */
    public function add($element);
}
