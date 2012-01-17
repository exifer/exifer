<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Exif\Interop;

use Exifer\Common\Tag;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
abstract class InteropTag extends Tag implements InteropTagInteface
{
    /**
     * {@inheritDoc} 
     */
    protected $name = 'Interop Unknown Tag';
    
}
