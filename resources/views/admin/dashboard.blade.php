@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <!-- Card Projects -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-project-diagram text-2xl text-blue-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Projects</p>
                    <p class="text-2xl font-bold">{{ \App\Models\Project::count() }}</p>
                </div>
            </div>
        </div>
        
        <!-- Card Skills -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-code text-2xl text-green-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Skills</p>
                    <p class="text-2xl font-bold">{{ \App\Models\Skill::count() }}</p>
                </div>
            </div>
        </div>
        
        <!-- Card Experiences -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-briefcase text-2xl text-purple-600"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Pengalaman</p>
                    <p class="text-2xl font-bold">{{ \App\Models\Experience::count() }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Projects -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold mb-4">Project Terbaru</h2>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Teknologi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Featured</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach(\App\Models\Project::latest()->take(5)->get() as $project)
                    <tr>
                        <td class="px-6 py-4">{{ $project->title }}</td>
                        <td class="px-6 py-4">{{ $project->technologies }}</td>
                        <td class="px-6 py-4">
                            @if($project->is_featured)
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded">Ya</span>
                            @else
                                <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded">Tidak</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection