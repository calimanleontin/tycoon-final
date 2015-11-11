<?php

namespace Tycoon\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Subscription extends Product
{
    const STAT1 = 'Validity-Days';

    const STAT2 = 'Validity-Hours';

    /**
     * @return string
     */
    public function className()
    {
        return 'Subscription';
    }
}
