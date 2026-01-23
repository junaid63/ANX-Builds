<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Blog;
use App\Service;
use App\Faq;
use Str;

class FrontendController extends Controller
{
    private function getBlogs()
    {
        return Blog::where('status', 1)->get();
    }
    private function getServices()
    {
        return Service::where('status', 1)->get();
    }
    public function index()
    {
        $view = 'frontend.index';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function about()
    {
        $view = 'frontend.about';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function process()
    {
        $view = 'frontend.process';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function service()
    {
        $view = 'frontend.services';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }
    
    public function servicedetail($slug)
    {
        $view = 'frontend.servicedetail';
        $serviceDetails = Service::where('slug', $slug)->first();
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services','serviceDetails'));
    }

    public function price()
    {
        $view = 'frontend.prices';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }
    
    public function gallery()
    {
        $view = 'frontend.gallery';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }
    
    public function faq()
    {
        $view = 'frontend.faqs';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        $faqs = Faq::where('status', 1)->get();
        return view($view, compact('blogs','services','faqs'));
    }

    public function blogs()
    {
        $view = 'frontend.blog';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function blogDeails($slug)
    {
        $view = 'frontend.blogdetail';
        $blogDetail = Blog::where('slug', $slug)->first();
        $popularblogs = Blog::where('status',1)->where('id','!=', $blogDetail->id)->inRandomOrder()->take(4)->get();
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','blogDetail','popularblogs','services'));
    }
    
    public function contact()
    {
        $view = 'frontend.contact';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function paymentmilestone()
    {
        $view = 'frontend.milestone';
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view($view, compact('blogs','services'));
    }

    public function contactSubmit(request $request)
    {
        $refkey = Str::random(10);

        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->postcode = $request->postcode;
        $data->project_type = $request->project;
        $data->message = $request->message;
        $data->save();

        return response()->json([
            "status" => "success",
            "message" => "Thank you for Contact Us!",
            "redirect" => route('thankyouPage', $refkey)
        ]);
    }

    public function thankyouPage()
    {
        $blogs = $this->getBlogs();
        $services = $this->getServices();
        return view('frontend.contact-thankyou', compact('blogs', 'services'));
    }

}
