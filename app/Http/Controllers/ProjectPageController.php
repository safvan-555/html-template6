<?php

namespace App\Http\Controllers;

use App\Models\ProjectPage;
use App\Models\ProjectItem;
use App\Models\AboutUsPage;
use App\Models\HomePage;
use App\Models\ServiceItem;
use App\Models\Testimonials;

use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    public function index()
    {
        $pageData = ProjectPage::first();
        $projects = ProjectItem::with('service')->orderBy('created_at', 'desc')->paginate(9);
        return view('pages.projects', compact('pageData', 'projects'));
    }

    public function aboutuspage()
{
    $aboutData = AboutUsPage::first();

    $moreServices = ServiceItem::orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
        
    $moreProjects = ProjectItem::with('service')
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
      return view('pages.about', compact('aboutData', 'moreServices', 'moreProjects'));
    }
    
    public function show($id)
    {
        $project = ProjectItem::with('service')->findOrFail($id);
            $moreProjects = ProjectItem::with('service')
        ->where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
        return view('pages.project-detail', compact('project', 'moreProjects'));
    }

    public function homepage()
    {
    $homeData = HomePage::first();

    $moreServices = ServiceItem::orderBy('created_at', 'desc')
        ->get();
        
    $moreProjects = ProjectItem::with('service')
        ->orderBy('created_at', 'desc')
        ->limit(6)
        ->get();

    $moreTestimonials = Testimonials::orderBy('created_at', 'desc')
        ->get();
        
      return view('home', compact('homeData','moreServices','moreProjects','moreTestimonials'));
    }
  
}