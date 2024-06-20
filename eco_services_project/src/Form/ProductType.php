<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductCategory;
use App\Entity\Stock;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('designation')
            ->add('price')
            ->add('description')
            ->add('category', EntityType::class, [
                'class' => ProductCategory::class,
                'choice_label' => 'designation',
            ])
            ->add('stock_quantity', NumberType::class, [
                'mapped' => false, 
                'data' => $options['stock_quantity'], // Set initial data from the stock
                'label' => 'Quantité en stock',
            ]);
            // ->add('stock', EntityType::class, [
            //     'class' => Stock::class,
            //     'choice_label' => 'id',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'stock_quantity' => 0,
        ]);
    }
}
