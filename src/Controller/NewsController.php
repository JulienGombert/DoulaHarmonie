<?php


namespace App\Controller;


use App\Entity\News;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
/*use App\Repository\NewsRepository;*/
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{

    /**
     * @Route("/news", name="news")
     */
    /*public function showNews(EntityManagerInterface $entityManager)
    {
        $newsRepository = $entityManager->getRepository(News::class);

        return $this->render('Blocks/News/_allNews.html.twig',
            [
                'news' => $newsRepository->findAll()
            ]);
    }*/
    public function showNews(NewsRepository $newsRepository)
    {
        $newsPublished = $newsRepository->getAllNews();

        return $this->render('Blocks/News/_allNews.html.twig',
        [
            'news' => $newsPublished
        ]);
    }

}