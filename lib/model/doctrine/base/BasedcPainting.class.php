<?php

/**
 * BasedcPainting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $medium
 * @property string $dimensions
 * @property string $year
 * @property string $thumbnail
 * @property string $image
 * @property integer $position
 * 
 * @method string     getTitle()      Returns the current record's "title" value
 * @method string     getMedium()     Returns the current record's "medium" value
 * @method string     getDimensions() Returns the current record's "dimensions" value
 * @method string     getYear()       Returns the current record's "year" value
 * @method string     getThumbnail()  Returns the current record's "thumbnail" value
 * @method string     getImage()      Returns the current record's "image" value
 * @method integer    getPosition()   Returns the current record's "position" value
 * @method dcPainting setTitle()      Sets the current record's "title" value
 * @method dcPainting setMedium()     Sets the current record's "medium" value
 * @method dcPainting setDimensions() Sets the current record's "dimensions" value
 * @method dcPainting setYear()       Sets the current record's "year" value
 * @method dcPainting setThumbnail()  Sets the current record's "thumbnail" value
 * @method dcPainting setImage()      Sets the current record's "image" value
 * @method dcPainting setPosition()   Sets the current record's "position" value
 * 
 * @package    danecarder
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasedcPainting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dc_painting');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('medium', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('dimensions', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('year', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('thumbnail', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('position', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}