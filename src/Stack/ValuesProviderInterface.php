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
 * A {@link ValuesProviderInterface} interface.
 *
 * @package Xloit\Std\Stack\Container
 */
interface ValuesProviderInterface
{
    /**
     * Gets all values of this {@link ValuesProviderInterface} implementation.
     *
     * @return mixed The values of all elements in this {@link ValuesProviderInterface} implementation,
     *               in the order they appear in this implementation.
     */
    public function getValues();
}
