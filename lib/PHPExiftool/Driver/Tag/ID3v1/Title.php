<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Title extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'Title';

    protected $FullName = 'ID3::v1';

    protected $GroupName = 'ID3v1';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v1';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Title';

    protected $MaxLength = 30;
}
