<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Exif\Interop\Tags;

use Exifer\Exif\Interop\InteropTag;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
class InteropVersion extends InteropTag
{
    /**
     * Offset. 
     */
    const OFFSET = 0x0002;
    
    /**
     * {@inheritDoc} 
     */
    protected $name = 'Interoperability Version';
}