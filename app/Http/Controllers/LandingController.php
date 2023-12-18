<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Info;
use App\Models\Photo;
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
        return [
            $info,
            $contacts,
            $services
        ];
    }

    public function home()
    {
        [$info, $contacts, $services] = $this->general();
        $videos = Video::all();
        return view('landing.home', compact('info', 'contacts', 'services', 'videos'));
    }

    public function services()
    {
        [$info, $contacts, $services] = $this->general();
        return view('landing.services', compact('info', 'contacts', 'services'));
    }

    public function service($service)
    {
        [$info, $contacts, $services] = $this->general();
        $service = Service::findOrFail($service);
        $photos = Photo::where('service_id', $service->id)->get();
        return view('landing.service', compact('info', 'contacts', 'services', 'service', 'photos'));
    }

    public function contact()
    {
        [$info, $contacts, $services] = $this->general();
        return view('landing.contact', compact('info', 'contacts', 'services'));
    }
}
