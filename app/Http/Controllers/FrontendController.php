<?php

namespace App\Http\Controllers;

use App\Job;
use App\Service;
use App\Company;
use App\Contact;
use App\ContentSection;
use App\Notifications\JobApplicationSent;
use App\Notifications\ContactSent;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\StoreContactRequest;
class FrontendController extends Controller
{
	public function index() 
	{
		return view('home');
	}

    public function loadContent($page = 'home')
    {
    	//Estilos definidos por defectos para las demas paginas (excepto home)
    	$navbar_intelix_class = 'white z-depth-4 animated fadeIn';
    	$button_class = 'grey-text';
    	$navbar_position_class = 'fixed-navbar-home';
        $menu_option = $page;
        $services = null;
        $data = ContentSection::OfModule($page);
        $company = Company::first();
    	switch ($page) {
    		case 'nosotros':
            case 'empleos':
            case 'servicios':
    			break;
            case 'contacto':
                $services = Service::all();
                break;
    		//home
    		default:
    			$navbar_intelix_class = 'transparent z-depth-0';
    			$navbar_position_class = 'navbar-home-bottom';
    			$button_class = 'nav-menu';
                $menu_option = 'home';
    			break;
    	}

        return view($page, compact('navbar_position_class','navbar_intelix_class','button_class','menu_option', 'services','data','company'));

    }

    public function sendCV(StoreJobRequest $request) {

        $data = [
                    'email' => $request->email,
                    'names' => strtoupper($request->names),
                    'residence' => (strtoupper($request->residence))?:null,
                    'telephone' => ($request->telephone)?:null,
                    'link_social_network' => ($request->link_social_network)?:null,
                    'url_document' => null,
                ];
        
        $job = Job::firstOrCreate(['email' => $request->email], $data);

        if ($request->document) {
            $path = $request->file('document')->storeAs(
                'contacts', 'contact-'.$job->id.'.'.$request->file('document')->extension());
            $data['url_document'] = $path;
            $job->url_document = $data['url_document'];
            $job->update();
        }

        $job->notify(new JobApplicationSent($data));
        return back();
    }

    public function contacto(StoreContactRequest $request) {

        $data = [
                    'names' => strtoupper($request->names),
                    'email' => $request->email,
                    'company' => (strtoupper($request->company))?:null,
                    'telephone' => ($request->telephone)?:null,
                    'more_info' => (strtoupper($request->more_info))?:null,
                    'service_required' => Service::find($request->service_required)->first()->description,
                ];
        
        $contact = Contact::firstOrCreate(['email' => $request->email], $data);
        $contact->notify(new ContactSent($data));
        return back();
    }
}
