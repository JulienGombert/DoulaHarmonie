<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
/*use App\Repository\ArticlesRepository;*/
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function showArticles(ArticlesRepository $articlesRepository)
    {
        $articlesPublished = $articlesRepository->getAllArticles();

        return $this->render('Blocks/articles/_allArticles.html.twig', [
            'articles' => $articlesPublished
        ]);
    }
}