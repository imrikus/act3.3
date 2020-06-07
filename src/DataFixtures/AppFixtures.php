<?php

namespace App\DataFixtures;

use App\Entity\Empresa;
use App\Entity\Candidat;
use App\Entity\Oferta;
use DateTime;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $emp=new Empresa();
        $emp->setCorreu("a18aleestseg@inspedralbes.cat")
        ->setLogo("imagen.png")->setTipus("pintor");
        $manager->persist($emp);

        $of= new Oferta();
        $of->setDataPub(new DateTime())
        ->setDescripcio("Pintura")
        ->setEmpresa($emp);

        $manager->persist($of);

        $cand= new Candidat();
        $cand->setNom("Alex")
        ->setCognoms("Estrada")
        ->setTelefon(6666)
        ->addOferta($of);


        $manager->persist($cand);


        $manager->flush();
    }
}
