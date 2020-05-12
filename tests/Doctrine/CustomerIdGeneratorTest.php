<?php
//tests/Doctrine/CustomerIdGeneratorTest.php

namespace App\Tests\Doctrine;

use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CustomerIdGeneratorTest extends KernelTestCase
{
    public function testGenerator()
    {
        self::bootKernel();
        $customer = new Customer();
        /** @var EntityManagerInterface $em */
        $em = self::$container->get(EntityManagerInterface::class);
        $em->persist($customer);
        $this->assertRegExp('/[2-8][0-9]{5}/', $customer->getId());
    }
}
