<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Message;
use App\Models\Notifications;
use App\Models\Privacy;
use App\Models\Quote;
use Vinkla\Instagram\Instagram;
use App\Models\ReplyMessage;
use App\Models\ServiceRequest;
use App\Models\Services;
use App\Models\Slider;
use App\Models\Subscriber;
use App\Models\RFP;
use App\Models\Term;
use App\Models\Product;
use App\Models\Delivery;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Portfolio;
use Session;
use App\Models\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenGraph;
use SEOMeta;
use Twitter;

class HomeController extends Controller
{


    public function index()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $SEO = '
            <title>Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta property="og:url" content="'.url('/').'" />
            <meta property="og:site_name" content="Edition Investments | Premier Supplier of Quality Wood Based Interiors." />
            <meta property="og:locale" content="en_US" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="Edition Investments | Premier Supplier of Quality Wood Based Interiors." />
            <meta property="og:description" content="Inspiring and warm interiors" />
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="Edition Investments | Premier Supplier of Quality Wood Based Interiors." />
            <meta name="twitter:description" content="Inspiring and warm interiors" />
            <link rel="canonical" href="'.url('/').'" />
            ';

            $page_name = 'homepage';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';


            return view('front.index', compact( 'keywords', 'page_title', 'page_name','SEO'));
        }
    }

    public function about()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $About = DB::table('about')->get();

            $page_name = 'About Us';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>About us | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="About Us Edition Investments is the premier supplier of quality wood based construction material. We mainly supply to retailers and property developers.  Learn more Edition Investments Our story Quality Hardwood The best quality hardwood products Over the years, we have built valuable relationships with architects and interior designers who trust&hellip;" />
            <link rel="canonical" href="'.url('/about-us').'" />
            ';

            return view('front.about', compact('SEO', 'keywords', 'page_title', 'page_name','About'));
        }
    }

    public function services()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $Services = DB::table('services')->get();

            $page_name = 'Our Services';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>Products and Services | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Products and Services Edition Investments is the premier supplier of quality wood based construction material. We mainly supply to retailers and property developers.  Learn more Edition Investments Our story Quality Hardwood The best quality hardwood products Over the years, we have built valuable relationships with architects and interior designers who trust&hellip;" />
            <link rel="canonical" href="'.url('/products-and-services').'" />
            ';

            return view('front.services', compact('SEO', 'keywords', 'page_title', 'page_name','Services'));
        }
    }

    public function sitemaps(){
        return response()->file('sitemap.xml');
    }


    public function csr()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $SEO = '
            <title>Edition Investments CSR | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta property="og:url" content="'.url('/csr').'" />
            <meta property="og:site_name" content="Edition Investments CSR | Premier Supplier of Quality Wood Based Interiors." />
            <meta property="og:locale" content="en_US" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="Edition Investments CSR | Premier Supplier of Quality Wood Based Interiors." />
            <meta property="og:description" content="At Edition Investments, we believe in the profound impact businesses can have on society and the environment. " />
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:title" content="Edition Investments CSR | Premier Supplier of Quality Wood Based Interiors." />
            <meta name="twitter:description" content="At Edition Investments, we believe in the profound impact businesses can have on society and the environment. s" />
            <link rel="canonical" href="'.url('/csr').'" />
            ';

            $page_name = 'csr';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';


            return view('front.csr', compact( 'keywords', 'page_title', 'page_name','SEO'));
        }
    }

    public function portfolio()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $Portfolio = DB::table('portfolio')->orderBy('id','DESC')->paginate('20');

            $page_name = 'Our Portfolio';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>Our Portfolio | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Portfolio Edition Investments is the premier supplier of quality wood based construction material. We mainly supply to retailers and property developers.  Learn more Edition Investments Our story Quality Hardwood The best quality hardwood products Over the years, we have built valuable relationships with architects and interior designers who trust&hellip;" />
            <link rel="canonical" href="'.url('/portfolio').'" />
            ';

            return view('front.portfolio', compact( 'SEO', 'keywords', 'page_title', 'page_name','Portfolio'));
        }
    }

    public function our_work($category)
    {
        $Category = DB::table('category')->where('cat',$category)->get();
        foreach($Category as $cat){

            $SEOSettings = DB::table('seosettings')->get();
            foreach ($SEOSettings as $Settings) {
                $Portfolio = DB::table('portfolio')->where('service',$cat->id)->paginate(24);

                SEOMeta::setTitle('' . $category . ' - ' . $Settings->intro . '');
                SEOMeta::setDescription('Best interior Fitouts in Nairobi');
                SEOMeta::setCanonical('' . $Settings->url . '');
                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $category . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '');
                OpenGraph::addProperty('type', 'articles');
                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');

                $page_name = 'Our Portfolio';
                $page_title = $category;

                $keywords = 'Hardwoord Fitouts';
                $SEO = '
                <title>'.$category.' | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="Portfolio Edition Investments is the premier supplier of quality wood based construction material. We mainly supply to retailers and property developers.  Learn more Edition Investments Our story Quality Hardwood The best quality hardwood products Over the years, we have built valuable relationships with architects and interior designers who trust&hellip;" />
                <link rel="canonical" href="'.url('/our-work').'" />
                ';

                return view('front.portfolios', compact( 'SEO', 'keywords', 'page_title', 'page_name','Portfolio'));
            }
        }
    }



    public function folio($slug)
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $Portfolio = DB::table('portfolio')->where('slug',$slug)->get();
            foreach ($Portfolio as $key => $value) {
                # code...
                $page_name = $value->title;
                $page_title = $value->title;

                $keywords = 'Hardwoord Fitouts';

            $SEO = '
            <title> '.$page_name.' | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Portfolio Edition Investments is the premier supplier of quality wood based construction material. We mainly supply to retailers and property developers.  Learn more Edition Investments Our story Quality Hardwood The best quality hardwood products Over the years, we have built valuable relationships with architects and interior designers who trust&hellip;" />
            <link rel="canonical" href="'.url('/portfolio').'" />
            ';
            }
            return view('front.folio', compact('SEO', 'keywords', 'page_title', 'page_name','Portfolio'));
        }
    }

    public function contact()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $SiteSettings = DB::table('sitesettings')->get();

            $page_name = 'Contact Us';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';

            $SEO = '
            <title>Contact us | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Contact us We are always on hand to give you the professional, expert and friendly support that you need. Contact us today to and get started.  Contact us anytime We always strive to respond to inquiries as soon as we can." />
            <link rel="canonical" href="'.url('/contact-us').'" />
            ';

            return view('front.contact', compact('SEO', 'keywords', 'page_title', 'page_name','SiteSettings'));
        }
    }


    public function news()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');
            $Blog = DB::table('blog')->limit(9)->orderBy('id','DESC')->get();

            $page_name = 'News';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>News and Blogs | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="News and Blogs Edition Investments is always on hand to give you the professional, expert and friendly support that you need. Contact us today to and get started.  Contact us anytime We always strive to respond to inquiries as soon as we can." />
            <link rel="canonical" href="'.url('/news-and-blog').'" />
            ';

            return view('front.news', compact('SEO', 'keywords', 'page_title', 'page_name','Blog'));
        }
    }

    public function copyright()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $copyright = DB::table('copyright')->get();

            $page_name = 'copyright Statement';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>Copyright | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Copyright Edition Investments is always on hand to give you the professional, expert and friendly support that you need. Contact us today to and get started.  Contact us anytime We always strive to respond to inquiries as soon as we can." />
            <link rel="canonical" href="'.url('/copyright').'" />
            ';

            return view('front.copyright', compact('SEO', 'keywords', 'page_title', 'page_name','copyright'));
        }
    }

    public function terms()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $Terms = DB::table('terms')->get();

            $page_name = 'Terms and Conditions';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>Terms and Conditions | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Terms and Conditions Edition Investments is always on hand to give you the professional, expert and friendly support that you need. Contact us today to and get started.  Contact us anytime We always strive to respond to inquiries as soon as we can." />
            <link rel="canonical" href="'.url('/terms-and-conditions').'" />
            ';

            return view('front.terms', compact('SEO', 'keywords', 'page_title', 'page_name','Terms'));
        }
    }

    public function privacy()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Best interior Fitouts in Nairobi');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'articles');
            Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            Twitter::setSite('' . $Settings->twitter . '');

            $Terms = DB::table('privacy')->get();

            $page_name = 'Privacy Policy';
            $page_title = 'Home Page';

            $keywords = 'Hardwoord Fitouts';
            $SEO = '
            <title>Privacy Policy | Edition Investments | Premier Supplier of Quality Wood Based Interiors.</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Privacy Policy Edition Investments is always on hand to give you the professional, expert and friendly support that you need. Contact us today to and get started.  Contact us anytime We always strive to respond to inquiries as soon as we can." />
            <link rel="canonical" href="'.url('/privacy-policy').'" />
            ';


            return view('front.privacy', compact('SEO', 'keywords', 'page_title', 'page_name','Terms'));
        }
    }





    public function submitMessage(Request $request)
    {
        if($request->verify_contact == $request->verify_contacts){
            if ($request->faxonly) {
                Session::flash('message', "Your Message Has Been Sent");
                return Redirect::back();
            }else{
                $email = $request->email;
                $name = $request->name;
                $phone = $request->phone;
                $message = $request->message;
                $subject = $request->subject;



                $Message = new Message;
                $Message->name = $name;
                $Message->email = $email;
                $Message->mobile = $phone;
                $Message->subject = $subject;
                $Message->content = $message;

                //Send Mail Notification
                ReplyMessage::mailNotificaton($name, $email, $subject, $message);




                Session::flash('message', "Your Message Has Been Sent");
                return Redirect::back();
            }
        }else{
            Session::flash('message', "Your Message Has Been Sent");
            return Redirect::back();
        }
    }

    public function getQuote(Request $request)
    {


            $email = $request->email;
            $name = $request->name;
            $phone = $request->phone;
            $message = $request->message;
            $type = $request->type;
            $services = $request->services;
            $subject = 'Get Quote';



            $Message = new Message;
            $Message->name = $name;
            $Message->email = $email;
            $Message->mobile = $phone;
            $Message->subject = $subject;
            $Message->content = $message;

             //Send Mail Notification
            //  ReplyMessage::mailNotificatons($name, $email, $subject, $message, $phone, $services, $type);


            $Message->save();
            $Notifications = new Notifications;
            $Notifications->type = 'Quotation';
            $Notifications->content = 'You have a new Quotation Request';
            $Notifications->save();

            Session::flash('message', "Your Message Has Been");
            $CallBackMessage = "Success!";
            return $CallBackMessage;



    }



    public function subscribe(Request $request)
    {
        $FindMail = DB::table('subscribers')->where('email', $request->email)->get();
        $Countmails = count($FindMail);
        if ($Countmails == 0) {
            $email = $request->email;
            $Subscriber = new Subscriber;
            $Subscriber->email = $email;
            $Subscriber->save();
            $results = "You have successfully subscribed to our news letters";
            return $results;

        } else {
            $results =  "You are already in our subscribers list thank you for staying with us";

            return $results;

        }


    }



}
