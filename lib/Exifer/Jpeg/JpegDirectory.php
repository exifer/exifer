<?php
/*
 * This file is part of the Exifer package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Exifer\Jpeg;

use Exifer\Common\Directory;

/**
 * @author  Igor Golovanov <igor.golovanov@gmail.com>
 */
class JpegDirectory extends Directory
{
    public function addTag(TagInterface $tag)
    {
        if(!$tag instanceof JpegTagInterface) {
            throw new \InvalidArgumentException(sprintf(
            'The tag "%s" must be implement Exifer\Jpeg\JpegTagInterface', 
            $tag->getTagName()));
        }
        return parent::addTag($tag);
    }
}
