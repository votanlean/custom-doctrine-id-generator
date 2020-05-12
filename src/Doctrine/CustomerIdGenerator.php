<?php
//src/Doctrine/CustomerIdGenerator.php

namespace App\Doctrine;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;

class CustomerIdGenerator extends AbstractIdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        return random_int(200000, 899999);

    }
}
