<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Exif\Gps\Tags;

use Exifer\Exif\Gps\GpsTag;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
class MeasureMode extends GpsTag
{
    /**
     * Offset. 
     */
    const OFFSET = 0x000A;
            
    /**
     * {@inheritDoc} 
     */
    protected $name = 'GPS Measure Mode';
}
