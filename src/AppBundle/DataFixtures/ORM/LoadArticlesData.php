<?php
namespace Acme\ArticleBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Article;

class LoadArticlesData extends AbstractFixture
{
    static public $articles = array();

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Un petit titre');
        $article1->setLeadingText('Premier petit article');
        $article1->setBody('Proinde die funestis interrogationibus praestituto imaginarius.');
        $article1->setCreatedBy('John Doe');

        $article2 = new Article();
        $article2->setTitle('Bonjour le monde');
        $article2->setLeadingText('Ce titre est nul!');
        $article2->setBody('Verum ad istam omnem orationem brevis est defensio.');
        $article2->setCreatedBy('Jane Doe');

        $manager->persist($article1);
        $manager->persist($article2);

        $manager->flush();
    }
}