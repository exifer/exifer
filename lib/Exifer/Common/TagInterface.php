<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Common;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
interface TagInterface
{
    function getTagName();
    
    function getTagType();
    
    function getTagOffset();
    
    function __invoke();
}