<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::where('is_featured', true)
                                   ->latest()
                                   ->take(6)
                                   ->get();
        
        $frontendSkills = Skill::where('category', 'frontend')->get();
        $designSkills = Skill::where('category', 'design')->get();
        $experiences = Experience::latest()->get();
        
        return view('home.index', compact(
            'featuredProjects', 
            'frontendSkills', 
            'designSkills',
            'experiences'
        ));
    }
  public function allProjects()
    {
        // Ambil SEMUA project dengan pagination (10 per halaman)
        $projects = Project::latest()->paginate(9);
        
        return view('projects.index', compact('projects'));
    }
    
    public function showProject(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}

