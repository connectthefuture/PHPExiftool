<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v23;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PodcastCategory extends AbstractTag
{

    protected $Id = 'TCAT';

    protected $Name = 'PodcastCategory';

    protected $FullName = 'ID3::v2_3';

    protected $GroupName = 'ID3v2_3';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v2_3';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Podcast Category';
}
