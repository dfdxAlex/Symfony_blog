<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * php bin/console make:entity
 */
class BlogController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function home()
    {
        return $this->render('blog/home.html.twig');
    }

    #[Route('/all', name: 'all_news')]
    public function all()
    {
        return $this->render('blog/AllNews.html.twig');
    }

    #[Route('/user/{id}', name: 'user_id')]
    public function indexUser($id)
    {
        return $this->render('blog/NewsUser.html.twig', ['id'=>$id]);
    }

    #[Route('/add/{id}', name: 'add_post')]
    public function addPost($id)
    {
        return $this->render('blog/AddPost.html.twig', ['id'=>$id]);
    }

    #[Route('/edit/{id}', name: 'edit_post')]
    public function editPost($id)
    {
        return $this->render('blog/EditPost.html.twig', ['id'=>$id]);
    }

    #[Route('/post/{id}', name: 'post_id')]
    public function postId($id)
    {
        return $this->render('blog/PostId.html.twig', ['id'=>$id]);
    }



    #[Route('/toogleFollowStatus/{id}', name: 'toogleFollowStatus_id')]
    public function indexToogleFollowStatus($id)
    {
        return new Response('
            <h1>
              Отслеживаем автора:'.$id.'
            </h1>
            <h3>
              Link:
              '.$this->generateUrl('toogleFollowStatus_id', ['id' => $id]).'
            </h3>
        ');
    }

    #[Route('/delete/{id}', name: 'delete_id')]
    public function deleteId($id)
    {
        return new Response('
            <h1>
              Удаление поста:'.$id.'
            </h1>
            <h3>
              Link:
              '.$this->generateUrl('delete_id', ['id' => $id]).'
            </h3>
        ');
    }
}
