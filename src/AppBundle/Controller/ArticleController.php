<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\ArticleFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ArticleController.
 *
 * @package AppBundle\Controller
 *
 * @Route("/article")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/", name="article_index")
     *
     * @return Response
     */
    public function indexAction()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

        return $this->render('article/list.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @param Request $request
     *
     * @Route("/create", name="article_new")
     *
     * @return Response
     */
    public function createAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            // Save article
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            // Redirection
            $this->addFlash('success', 'Article created successfully');
            $this->redirectToRoute('article_list');
        }

        return $this->render('article/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
