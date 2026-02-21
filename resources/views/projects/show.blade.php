@extends('layouts.app')

@section('title', $project->title . ' - Reyno Andrean')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">{{ $project->title }}</h1>
            <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="100">
                @foreach(explode(',', $project->technologies) as $tech)
                <span class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm">
                    {{ trim($tech) }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Project Detail -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Gambar Project -->
            <div class="mb-12 rounded-2xl overflow-hidden shadow-2xl" data-aos="fade-up">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" 
                         alt="{{ $project->title }}" 
                         class="w-full h-auto">
                @else
                    <div class="w-full h-96 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-code text-white text-6xl"></i>
                    </div>
                @endif
            </div>
            
            <!-- Deskripsi -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang Project</h2>
                <p class="text-gray-600 leading-relaxed">{{ $project->description }}</p>
            </div>
            
            <!-- Links -->
            <div class="flex flex-wrap gap-4" data-aos="fade-up">
                @if($project->project_url)
                <a href="{{ $project->project_url }}" target="_blank" 
                   class="flex-1 bg-blue-600 text-white text-center px-6 py-4 rounded-xl hover:bg-blue-700 transition transform hover:scale-105">
                    <i class="fas fa-external-link-alt mr-2"></i>
                    Kunjungi Website
                </a>
                @endif
                
                @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" 
                   class="flex-1 bg-gray-800 text-white text-center px-6 py-4 rounded-xl hover:bg-gray-900 transition transform hover:scale-105">
                    <i class="fab fa-github mr-2"></i>
                    Lihat Kode Sumber
                </a>
                @endif
            </div>
            
            <!-- Tombol Kembali -->
            <div class="text-center mt-12">
                <a href="{{ route('projects.all') }}" 
                   class="inline-flex items-center gap-2 text-gray-600 hover:text-blue-600 transition">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Semua Project
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Project Lainnya -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            Project <span class="text-blue-600">Lainnya</span>
        </h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach(\App\Models\Project::where('id', '!=', $project->id)->latest()->take(3)->get() as $other)
            <a href="{{ route('projects.show', $other) }}" class="group" data-aos="fade-up">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    @if($other->image)
                        <img src="{{ asset('storage/' . $other->image) }}" 
                             alt="{{ $other->title }}" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-48 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                            <i class="fas fa-code text-white text-4xl"></i>
                        </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $other->title }}</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">{{ $other->description }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush