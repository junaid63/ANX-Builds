<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Blog;

class FrontendController extends Controller
{
    private function getBlogs()
    {
        return Blog::where('status', 1)->get();
    }
    public function index()
    {
        $view = 'frontend.index';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function about()
    {
        $view = 'frontend.about';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function process()
    {
        $view = 'frontend.process';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function service()
    {
        $view = 'frontend.services';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function price()
    {
        $view = 'frontend.prices';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }
    
    public function gallery()
    {
        $view = 'frontend.gallery';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }
    
    public function faq()
    {
        $view = 'frontend.faqs';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function blogs()
    {
        $view = 'frontend.blog';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function blogDeails($slug)
    {
        $view = 'frontend.blogdetail';
        $blogDetail = Blog::where('slug', $slug)->first();
        $popularblogs = Blog::where('id','!=', $blogDetail->id)->inRandomOrder()->take(4)->get();
        $blogs = $this->getBlogs();
        return view($view, compact('blogs','blogDetail','popularblogs'));
    }
    
    public function contact()
    {
        $view = 'frontend.contact';
        $blogs = $this->getBlogs();
        return view($view, compact('blogs'));
    }

    public function contactSubmit(request $request)
    {
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();

        return response()->json([
            "status" => "success",
            "message" => "Thank you for Contact Us!",
        ]);
    }

}
