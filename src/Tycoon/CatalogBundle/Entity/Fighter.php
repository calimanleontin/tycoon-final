<?php

namespace Tycoon\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Fighter extends Product
{
    const STAT1 = 'Agility';

    const STAT2 = 'Intelligence';

    const STAT3 = 'Stamina';

    const STAT4 = 'Strength';

    /**
     * @return string
     */
    public function className()
    {
        return 'Fighter';
    }
}
