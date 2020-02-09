<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Tache;

class TacheFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i<=10; $i++){
        	$tache = new Tache();
        	$tache->setTitre("Titre de la tâche n°".$i)
        		  ->setDescription("Description de la tâche n°".$i)
        		  ->setStatut("A faire")
        		  ->setCreatedAt(new \DateTime());

        		$manager->persist($tache);
        }

        $manager->flush();
    }
}