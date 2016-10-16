<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 16.10.2016
 * Time: 22:32
 */

namespace BlogBundle\DataFixtures\ORM;


use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $blog = new Blog();
            $blog->setTitle('Title ' . ($i + 1));
            $blog->setSummary('Summary lorem ' . ($i + 1));
            $blog->setBody('<div><div>Lorem ipsum dolor sit amet.</div><div>Inventore possimus quae repudiandae voluptatum.</div><div>Ipsum maxime reprehenderit temporibus tenetur.</div><div>Aliquid labore magni pariatur voluptates.</div></div>');

            $manager->persist($blog);
            $manager->flush();
        }
    }
}