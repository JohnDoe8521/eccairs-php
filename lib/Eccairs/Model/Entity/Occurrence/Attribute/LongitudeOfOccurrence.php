<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class LongitudeOfOccurrence implements AttributeInterface
{
    private $name = 'Longitude_Of_Occ';

    private $attributes = [
        'attributeId' => '444',
    ];

    private $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }
}
