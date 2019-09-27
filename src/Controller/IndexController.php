<?php


namespace App\Controller;


use App\Repository\ArticlesRepository;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function showIndex(ArticlesRepository $articlesRepository, NewsRepository $newsRepository){

        $threeLastArticles = $articlesRepository->getTheLastThreeArticles();
        $threeLastNews = $newsRepository->getTheLastThreeNews();


        return $this->render('home.html.twig', [
            'articles' => $threeLastArticles,
            'news' => $threeLastNews
        ]);
    }

    /**
     * @Route("/articles", name="all_articles")
     */
    public function showAllArticles(){
        return $this->render('Blocks/Articles/allArticles.html.twig');
    }

    /**
     * @Route("/disclaimer", name="disclaimer")
     */
    public function showDisclaimer() {
        return $this->render('PartialFiles/disclaimer.html.twig');
    }


}