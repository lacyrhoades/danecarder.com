<?php

/**
 * dcPaintingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class dcPaintingTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object dcPaintingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('dcPainting');
    }

    public function fetchSorted()
    {
      return $this->createQuery()->orderBy('position ASC');
    }
}