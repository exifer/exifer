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
abstract class Directory implements DirectoryInterface
{
    /**
     * Name of directory.
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Map.
     * 
     * @var \ArrayObject 
     */
    protected $map;
    
    public function __construct()
    {
        $this->map = new \ArrayObject(array());
    }
    
    /**
     * Name of directory.
     *
     * @return string 
     */
    public function getDirectoryName()
    {
        return $this->name;
    }

    
    public function addTag(TagInterface $tag)
    {
        $this->map[(int)$tag->getTagOffset()] = $tag;
    }
    
        
    public function getTagCount()
    {
        return $this->map->count();
    }
    
    /**
     * Get list of tag names.
     * 
     * @return array
     */
    public function getTagNameList()
    {
        return array_map(function ($v) { 
            return ($v instanceof TagInterface)? $v->getTagName() : null;
        }, $this->map->getArrayCopy());
    }
 
    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getDirectoryName();
    }
}
