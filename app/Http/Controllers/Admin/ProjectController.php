<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }
    
    public function create()
    {
        return view('admin.projects.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'technologies' => 'required',
            'image' => 'nullable|image|max:2048',
            'project_url' => 'nullable|url',
            'github_url' => 'nullable|url',
        ]);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }
        
        // Generate slug
        $validated['slug'] = Str::slug($validated['title']);
        
        Project::create($validated);
        
        return redirect()->route('admin.projects.index')
                        ->with('success', 'Project berhasil ditambahkan!');
    }
    
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }
    
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'technologies' => 'required',
            'image' => 'nullable|image|max:2048',
            'project_url' => 'nullable|url',
            'github_url' => 'nullable|url',
        ]);
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }
        
        $project->update($validated);
        
        return redirect()->route('admin.projects.index')
                        ->with('success', 'Project berhasil diupdate!');
    }
    
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects.index')
                        ->with('success', 'Project berhasil dihapus!');
    }
}