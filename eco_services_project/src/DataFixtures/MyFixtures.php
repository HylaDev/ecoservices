<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\CustomerRole;
use App\Entity\ProductCategory;
use App\Repository\ProductCategoryRepository;
use App\Entity\Product;
use App\Entity\QrStatus;

class MyFixtures extends Fixture
{
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function load(ObjectManager $manager): void
    {
       $roleNames = [
            'Particulier',
            'Professionnel'
        ];

        foreach ($roleNames as $name) {
            $role = new CustomerRole();
            $role->setName($name);
            $manager->persist($role);
        }

        $statusNames = [
             'En cours',
             'Validé',
             'Rejeté'
         ];
 
         foreach ($statusNames as $name) {
             $status = new QrStatus();
             $status->setName($name);
             $manager->persist($status);
         }

        $categoryNames = [
            'Electroniques',
            'Appareils Electriques',
            'Produits de Nettoyage'
        ];
        $categoryDescriptions = [
            "Les appareils électroniques écologiques sont conçus pour 
            minimiser leur impact sur l'environnement à chaque étape de 
            leur cycle de vie, depuis la fabrication jusqu'à leur fin de 
            vie",
            "Ces appareils électriques écologiques illustrent comment la 
            technologie peut être utilisée pour promouvoir la durabilité,
             offrant des solutions pratiques et respectueuses de 
             l'environnement pour les consommateurs modernes.",
            "Les produits de nettoyage écologiques sont formulés pour 
            minimiser les impacts environnementaux tout en offrant une
             efficacité de nettoyage comparable aux produits 
             conventionnels."
        ];
        
        $categories = array_map(null,$categoryNames,$categoryDescriptions);

        foreach ($categories as [$name, $description]){
            $cate = new ProductCategory();
            $cate->setDesignation($name);
            $cate->setDescription($description);
            $manager->persist($cate);
        }

        $manager->flush();

        $productCategories = $this->productCategoryRepository->findAll();

        //electronics

        $electronicNames = ["Fairphone 5","Otovoltion Station d’Énergie Portable EcoFlow RIVER 2"];
        $electronicDescriptions = [
            "Ce smartphone intègre des matériaux recyclés et issus de 
            sources responsables, y compris pour des composants critiques
             comme l'or, le tungstène, et le cuivre.",
            "Compatible avec des panneaux solaires pour une recharge 
            écologique. Utilise des cellules de batterie au phosphate de 
            fer et de lithium (LiFePO4) qui sont plus durables et moins
             polluantes."
        ];
        $electronicPrices = [699,349];
        $electronics = array_map(null,$electronicNames,$electronicDescriptions,$electronicPrices);

        foreach ($electronics as [$name, $description, $price]){
            $product = new Product();
            $product->setDesignation($name);
            $product->setDescription($description);
            $product->setPrice($price);
            $product->setCategory($productCategories[0]);
            $manager->persist($product);
        }

        $manager->flush();

        //electrics

        $electricNames = ["Rowenta Eco Intelligence Fer à Repasser DW6010","Philips Hue White Ambiance Ampoule LED"];
        $electricDescriptions = [
            "Fer à repasser conçu pour offrir une efficacité énergétique 
            maximale. Il utilise une technologie unique de vapeur avec 
            une semelle Microsteam 400 pour une diffusion optimale de la
             vapeur, réduisant ainsi la consommation d'énergie jusqu'à 
             30% par rapport aux fers traditionnels.",
            "Ampoule LED intelligente conçue pour offrir une illumination
             adaptable tout en étant écoénergétique. Compatible avec des 
             systèmes de maison intelligente, elle permet de régler la 
             luminosité et la température de la lumière via une 
             application ou un assistant vocal, contribuant ainsi à la 
             réduction de la consommation d'énergie."
        ];
        $electricPrices = [80,20];
        $electrics = array_map(null,$electricNames,$electricDescriptions,$electricPrices);

        foreach ($electrics as [$name, $description, $price]){
            $product = new Product();
            $product->setDesignation($name);
            $product->setDescription($description);
            $product->setPrice($price);
            $product->setCategory($productCategories[1]);
            $manager->persist($product);
        }

        $manager->flush();

        //cleanings

        $cleaningNames = ["Rainett Nettoyant Multi-Usages Citron","Ecover Savon Noir à l'Huile d'Olive"];
        $cleaningDescriptions = [
            "Rainett Nettoyant Multi-Usages Citron est un nettoyant 
            polyvalent conçu pour nettoyer toutes les surfaces lavables 
            de la maison. Sa formule écologique, enrichie en extraits de
             citron, élimine efficacement la saleté tout en laissant un 
             parfum frais et naturel.",
            "Ecover Savon Noir est un nettoyant naturel à base d'huile
             d'olive, parfait pour le nettoyage des sols, des carrelages
              et autres surfaces dures. Sa formule est entièrement 
              biodégradable et sans composants pétrochimiques, respectant
               ainsi l'environnement."
        ];
        $cleaningPrices = [4,5];
        $cleanings = array_map(null,$cleaningNames,$cleaningDescriptions,$cleaningPrices);

        foreach ($cleanings as [$name, $description, $price]){
            $product = new Product();
            $product->setDesignation($name);
            $product->setDescription($description);
            $product->setPrice($price);
            $product->setCategory($productCategories[2]);
            $manager->persist($product);
        }

        $manager->flush();

    }
}
