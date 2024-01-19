<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function index()
    {
        return view('home', [
            'title' => '',
            'isService' => 0,
            'isHome' => 1,
        ]);
    }


    public function services()
    {
        $services = getStaticData();
        return view('services', [
            'title' => 'Services',
            'isService' => 0,
            'isHome' => 0,
            'services' => $services,
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'à propos de DR KACI',
            'isService' => 0,
            'isHome' => 0,
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'contactez-nous',
            'isService' => 0,
            'isHome' => 0,
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'title' => 'Blog',
            'isService' => 0,
            'isHome' => 0,
        ]);
    }

    public function serviceDetails($service)
    {
        $serviceDetails = getServiceByID($service);
        if ($serviceDetails) {
            return view('service-details', [
                'title' => $serviceDetails->title,
                'isService' => 1,
                'isHome' => 0,
                'data' => $serviceDetails,
            ]);
        } else {
            //return 404
            return 'Erreur 404';
        }
    }

    public function article($articleId)
    {
        $post = getArticleByID($articleId);
        $view_name = 'static-posts.' . $post->id;
        if ($post) {
            return view($view_name , [
                'title' => $post->title,
                'isService' => 1,
                'isHome' => 0,
                'isArticle' => 1,
                'data' => []
            ]);
        } else {
            //return 404
            return 'Erreur 404';
        }
    }
}
