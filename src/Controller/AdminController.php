<?php


namespace App\Controller;


use App\Entity\Articles;
use App\Entity\News;
use App\Form\ArticlesType;
use App\Form\NewsType;
use App\Repository\ArticlesRepository;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function showAdmin()
    {
        return $this->render('Admin/home_admin.html.twig');
    }



    /*This is the route and the method I create in order to INSERT DATA in the database in the ENTITY "ARTICLES"*/
    /*here is a rough way to insert = no form created yet*/

    /**
     * @Route("/admin/articles/insert", name="admin_articles_insert")
     */
    public function insertArticles(EntityManagerInterface $entityManager)
    {
        $article = new Articles();
        $article->setTitle('test titre 4ème article');
        $article->setSubheading('test sous-titre 4ème article');
        $article->setMaintext('test corps du text 4ème article... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam condimentum odio et porttitor vestibulum. Pellentesque non placerat orci. Fusce sit amet nunc tempor, vestibulum purus in, sollicitudin sapien. In elementum massa eros. Nunc sit amet dui ultricies, laoreet neque ut, egestas orci. Cras vel tempor eros. Etiam ac porta metus, sit amet vulputate ante. Sed tempor erat odio, vitae pulvinar orci molestie a. Ut cursus et erat sit amet vehicula.

Vivamus sed sem non nibh fringilla sollicitudin in id lacus. Ut congue quam enim, at ultrices dui accumsan vitae. Integer ut odio id ante ullamcorper hendrerit. Vivamus aliquet ultricies ex, id varius ipsum gravida vel. Vestibulum eros sem, fermentum et pellentesque non, volutpat ut velit. Cras nec tincidunt est. Donec non eros et urna iaculis tincidunt. Proin elementum lobortis lacus, at laoreet nibh dapibus a. Mauris non pellentesque nisi. Curabitur vel convallis turpis, vitae dictum ante. Vestibulum lobortis risus at nunc egestas aliquet. Maecenas porta pulvinar enim vitae dignissim. Nulla facilisi.

In aliquet purus eu tellus mollis condimentum. Mauris nec posuere eros. Integer eget nulla sed erat tincidunt consectetur quis ac urna. Quisque a dui aliquam, egestas risus ac, posuere metus. Etiam vulputate a magna vel euismod. Vestibulum neque ipsum, commodo sed ex faucibus, tincidunt viverra augue. Phasellus massa augue, malesuada vel tortor vel, tristique congue purus. Maecenas consectetur sem a mi elementum auctor. Ut et diam auctor, vehicula eros ac, ullamcorper nulla. Ut bibendum tempor turpis. In scelerisque porta gravida. Cras vulputate neque et dolor vulputate, in mattis est rutrum. Aenean malesuada sem est, eu porta arcu feugiat eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Ut tincidunt, libero rutrum ullamcorper euismod, nulla ipsum iaculis nisi, quis scelerisque est nulla varius purus. Nulla eu mi sit amet mauris maximus laoreet. Phasellus suscipit turpis sed erat euismod porta. Curabitur semper lobortis nisl id interdum. Cras lobortis sit amet tortor ac ullamcorper. Fusce condimentum dui quis enim iaculis, sed condimentum diam rhoncus. Integer faucibus odio non dui hendrerit vulputate. Aliquam sollicitudin facilisis molestie. In sollicitudin mauris eu lectus eleifend, sit amet congue magna consectetur. Ut nec pellentesque nulla, quis dictum enim. Donec vel diam vel elit suscipit pretium sed vitae arcu. Suspendisse et leo ut leo eleifend venenatis. Nam vel sagittis velit.');

        $entityManager->persist($article);
        $entityManager->flush();

        dump('article 4 enregistré'); die;
    }




    /*This is the route and the method I create in order to INSERT DATA in the database in the ENTITY "NEWS"*/
    /*here is a rough way to insert = no form created yet*/

    /**
     * @Route("/admin/news/insert", name="admin_news_insert")
     */
    public function insertNewss(EntityManagerInterface $entityManager)
    {
        $news = new News();
        $news->setTitle('test titre 4ème news');
        $news->setSubheading('test sous-titre 4ème news');
        $news->setMaintext('test corps du text 4ème news... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam condimentum odio et porttitor vestibulum. Pellentesque non placerat orci. Fusce sit amet nunc tempor, vestibulum purus in, sollicitudin sapien. In elementum massa eros. Nunc sit amet dui ultricies, laoreet neque ut, egestas orci. Cras vel tempor eros. Etiam ac porta metus, sit amet vulputate ante. Sed tempor erat odio, vitae pulvinar orci molestie a. Ut cursus et erat sit amet vehicula.

Vivamus sed sem non nibh fringilla sollicitudin in id lacus. Ut congue quam enim, at ultrices dui accumsan vitae. Integer ut odio id ante ullamcorper hendrerit. Vivamus aliquet ultricies ex, id varius ipsum gravida vel. Vestibulum eros sem, fermentum et pellentesque non, volutpat ut velit. Cras nec tincidunt est. Donec non eros et urna iaculis tincidunt. Proin elementum lobortis lacus, at laoreet nibh dapibus a. Mauris non pellentesque nisi. Curabitur vel convallis turpis, vitae dictum ante. Vestibulum lobortis risus at nunc egestas aliquet. Maecenas porta pulvinar enim vitae dignissim. Nulla facilisi.

In aliquet purus eu tellus mollis condimentum. Mauris nec posuere eros. Integer eget nulla sed erat tincidunt consectetur quis ac urna. Quisque a dui aliquam, egestas risus ac, posuere metus. Etiam vulputate a magna vel euismod. Vestibulum neque ipsum, commodo sed ex faucibus, tincidunt viverra augue. Phasellus massa augue, malesuada vel tortor vel, tristique congue purus. Maecenas consectetur sem a mi elementum auctor. Ut et diam auctor, vehicula eros ac, ullamcorper nulla. Ut bibendum tempor turpis. In scelerisque porta gravida. Cras vulputate neque et dolor vulputate, in mattis est rutrum. Aenean malesuada sem est, eu porta arcu feugiat eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Ut tincidunt, libero rutrum ullamcorper euismod, nulla ipsum iaculis nisi, quis scelerisque est nulla varius purus. Nulla eu mi sit amet mauris maximus laoreet. Phasellus suscipit turpis sed erat euismod porta. Curabitur semper lobortis nisl id interdum. Cras lobortis sit amet tortor ac ullamcorper. Fusce condimentum dui quis enim iaculis, sed condimentum diam rhoncus. Integer faucibus odio non dui hendrerit vulputate. Aliquam sollicitudin facilisis molestie. In sollicitudin mauris eu lectus eleifend, sit amet congue magna consectetur. Ut nec pellentesque nulla, quis dictum enim. Donec vel diam vel elit suscipit pretium sed vitae arcu. Suspendisse et leo ut leo eleifend venenatis. Nam vel sagittis velit.');

        $entityManager->persist($news);
        $entityManager->flush();

        dump('news 4 enregistrée'); die;
    }



    /*    This is the route and the method created to INSERT DATA into the database in the ENTITY "ARTICLES" with a FORM*/
    /**
     * @Route("/admin/articles/form_insert", name="admin_articles_form_insert")
     */
    public function articlesFormInsert(Request $request, EntityManagerInterface $entityManager)
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $formArticle = $form->createView();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $file */
                $file = $form['image']->getData();

                // this condition is needed because the 'brochure' field is not required
                // so the PDF file must be processed only when a file is uploaded
                if ($file) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    try {
                        $file->move(
                            $this->getParameter('articles_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $article->setImage($newFilename);
                }

                $entityManager->persist($article);
                $entityManager->flush();
            }
        }
        return $this->render('Admin/form_admin_insert_article.html.twig',[
            'formArticle' => $formArticle
        ]);
    }

    /*    This is the route and the method created to INSERT DATA into the database in the ENTITY "NEWS" with a FORM*/
    /**
     * @Route("/admin/news/form_insert", name="admin_news_form_insert")
     */
    public function newsFormInsert(Request $request, EntityManagerInterface $entityManager)
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $formNews = $form->createView();
        if ($request->isMethod('Post')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $file */
                $file = $form['image']->getData();

                // this condition is needed because the 'brochure' field is not required
                // so the PDF file must be processed only when a file is uploaded
                if ($file) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    try {
                        $file->move(
                            $this->getParameter('news_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $news->setImage($newFilename);
                }

                $entityManager->persist($news);
                $entityManager->flush();
            }
        }
        return $this->render('Admin/form_admin_insert_news.html.twig',[
            'formNews' => $formNews
        ]);
    }

    /*This is the route and the method created to LIST all the articles contained in the ENTITY "ARTICLES"*/
    /**
     * @Route("/admin/list/articles", name="admin_list_articles")
     */
    public function listArticles(EntityManagerInterface $entityManager)
    {
        $articlesRepository = $entityManager->getRepository(Articles::class);
        return $this->render('Admin/form_admin_list_articles.html.twig', [
            'articles' => $articlesRepository->findAll()
        ]);
    }

    /*This is the route and the method created to LIST all the news contained in the ENTITY "NEWS"*/
    /**
     * @Route("/admin/list/news", name="admin_list_news")
     */
    public function listNews(EntityManagerInterface $entityManager)
    {
        $newsRepository = $entityManager->getRepository(News::class);
        return $this->render('Admin/form_admin_list_news.html.twig', [
            'news' => $newsRepository->findAll()
        ]);
    }

    /*This is the route and method created to DELETE the article, selected by its wild card ($id) contained in the ENTITY "ARTICLES"*/
    /**
     * @Route("/admin/article/{id}/delete", name="admin_article_delete")
     */
    public function deleteArticle($id, ArticlesRepository $articlesRepository, EntityManagerInterface $entityManager)
    {
        $article = $articlesRepository->find($id);
        $entityManager->remove($article);
        $entityManager->flush();
        var_dump('article supprimé'); die;
    }

    /*This is the route and method created to DELETE the news, selected by its wild card ($id) contained in the ENTITY "NEWS"*/
    /**
     * @Route("/admin/news/{id}/delete", name="admin_news_delete")
     */
    public function deleteNews($id, NewsRepository $newsRepository, EntityManagerInterface $entityManager)
    {
        $news = $newsRepository->find($id);
        $entityManager->remove($news);
        $entityManager->flush();
        var_dump('news supprimée'); die;
    }


    /*This is the route and method created to MODIFY the article, selected by its wild card ($id) contained in the ENTITY "ARTICLES"*/
    /**
     * @Route("/admin/articles/{id}/modify", name="admin_article_modify")
     */
    public function modifyArticle($id, ArticlesRepository $articlesRepository, EntityManagerInterface $entityManager, Request $request)
    {
        $article = $articlesRepository->find($id);
        $form = $this->createForm(ArticlesType::class, $article);
        $formArticle = $form->createView();
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $file */
                $file = $form['image']->getData();

                // this condition is needed because the 'brochure' field is not required
                // so the PDF file must be processed only when a file is uploaded
                if ($file) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    try {
                        $file->move(
                            $this->getParameter('articles_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }
                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $article->setImage($newFilename);
                }
                $entityManager->persist($article);
                $entityManager->flush();
                var_dump('article mis à jour'); die;
            }
        }
        return $this->render('Admin/form_admin_modify_article.html.twig', [
            'formArticle' => $formArticle
        ]);
    }

    /*This is the route and method created to MODIFY the news, selected by its wild card ($id) contained in the ENTITY "NEWS"*/
    /**
     * @Route("/admin/news/{id}/modify", name="admin_news_modify")
     */
    public function modifyNews($id, NewsRepository $newsRepository, EntityManagerInterface $entityManager, Request $request)
    {
        $news = $newsRepository->find($id);
        $form = $this->createForm(NewsType::class, $news);
        $formNews = $form->createView();
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $file */
                $file = $form['image']->getData();

                // this condition is needed because the 'brochure' field is not required
                // so the PDF file must be processed only when a file is uploaded
                if ($file) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    try {
                        $file->move(
                            $this->getParameter('news_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'brochureFilename' property to store the PDF file name
                    // instead of its contents
                    $news->setImage($newFilename);
                }

                $entityManager->persist($news);
                $entityManager->flush();
                var_dump('news mise à jour'); die;
            }
        }
        return $this->render('Admin/form_admin_modify_news.html.twig', [
            'formNews' => $formNews
        ]);
    }






}