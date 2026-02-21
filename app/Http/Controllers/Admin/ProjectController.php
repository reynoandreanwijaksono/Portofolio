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
    try {
        // HAPUS dd($request->all()) - SUDAH TIDAK PERLU
        
        // Validasi - HAPUS validasi url
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'technologies' => 'required',
            'image' => 'nullable|image|max:2048',
            'project_url' => 'nullable', // UBAH INI
            'github_url' => 'nullable',  // UBAH INI
        ]);
        
        // Handle upload gambar
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('projects', $imageName, 'public');
            $validated['image'] = $path;
        }
        
        // Generate slug
        $validated['slug'] = Str::slug($request->title);
        $validated['is_featured'] = $request->has('is_featured');
        
        // Simpan ke database
        $project = Project::create($validated);
        
        // HAPUS dd('Berhasil simpan!') - SUDAH TIDAK PERLU
        // dd('Berhasil simpan!', $project);
        
        return redirect()->route('admin.projects.index')
                        ->with('success', 'Project berhasil ditambahkan!');
                        
    } catch (\Exception $e) {
        dd('Error: ' . $e->getMessage());
    }
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
        
          $validated['is_featured'] = $request->has('is_featured') ? true : false;

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