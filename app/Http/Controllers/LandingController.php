<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private function general()
    {
        $info = Info::first();
        $contacts = Contact::all();
        $services = Service::all();
        $products = Product::all();
        return [
            $info,
            $contacts,
            $services,
            $products
        ];
    }

    public function home()
    {
        [$info, $contacts, $services, $products] = $this->general();
        $videos = Video::all();
        return view('landing.home', compact('info', 'contacts', 'services', 'products', 'videos'));
    }

    public function services()
    {
        [$info, $contacts, $services, $products] = $this->general();
        return view('landing.services', compact('info', 'contacts', 'services', 'products'));
    }

    public function service($service)
    {
        [$info, $contacts, $services, $products] = $this->general();
        $service = Service::findOrFail($service);
        $photos = Photo::where('service_id', $service->id)->get();
        return view('landing.service', compact('info', 'contacts', 'services', 'products', 'service', 'photos'));
    }

    public function contact()
    {
        [$info, $contacts, $services, $products] = $this->general();
        return view('landing.contact', compact('info', 'contacts', 'services', 'products'));
    }

    public function products()
    {
        [$info, $contacts, $services, $products] = $this->general();
        return view('landing.products', compact('info', 'contacts', 'services', 'products'));
    }

    public function product($product)
    {
        [$info, $contacts, $services, $products] = $this->general();
        $product = Product::findOrFail($product);
        return view('landing.product', compact('info', 'contacts', 'services', 'products', 'product'));
    }

    public function blogs()
    {
        [$info, $contacts, $services, $products] = $this->general();
        $blogs = Blog::all();
        return view('landing.blogs', compact('info', 'contacts', 'services', 'products', 'blogs'));
    }

    public function blog($blog)
    {
        [$info, $contacts, $services, $products] = $this->general();
        $blog = Blog::findOrFail($blog);
        return view('landing.blog', compact('info', 'contacts', 'services', 'products', 'blog'));
    }

    public function video360()
    {
        [$info, $contacts, $services, $products] = $this->general();
        return view('landing.video360', compact('info', 'contacts', 'services', 'products'));
    }
}
