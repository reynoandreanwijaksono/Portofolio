@extends('layouts.app')

@section('title', 'Semua Project - Reyno Andrean')

@section('content')
<!-- Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Semua Project</h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Kumpulan project yang telah saya kerjakan selama belajar dan berkarir di dunia web development
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Filter (opsional) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
            <button class="filter-btn active px-6 py-2 bg-blue-600 text-white rounded-full" data-filter="all">Semua</button>
            <button class="filter-btn px-6 py-2 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50" data-filter="laravel">Laravel</button>
            <button class="filter-btn px-6 py-2 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50" data-filter="javascript">JavaScript</button>
            <button class="filter-btn px-6 py-2 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50" data-filter="design">UI Design</button>
        </div>
        
        <!-- Grid Project -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            @foreach($projects as $project)
            <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-2" 
                 data-aos="fade-up"
                 data-technologies="{{ strtolower($project->technologies) }}">
                
                <!-- Gambar Project -->
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" 
                         alt="{{ $project->title }}" 
                         class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-code text-white text-5xl"></i>
                    </div>
                @endif
                
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $project->description }}</p>
                    
                    <!-- Teknologi -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(explode(',', $project->technologies) as $tech)
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>
                    
                    <!-- Tombol Aksi -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', $project) }}" 
                           class="text-blue-600 hover:text-blue-700 font-medium">
                            Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        
                        <div class="flex gap-3">
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="text-gray-600 hover:text-gray-800">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            @endif
                            
                            @if($project->project_url)
                            <a href="{{ $project->project_url }}" target="_blank" class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-12">
            {{ $projects->links() }}
        </div>
    </div>
</section>

<!-- Call to Action -->
<!-- SESUDAH (BENAR) -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Tertarik dengan project saya?</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Saya terbuka untuk diskusi, kolaborasi, atau opportunity freelance
        </p>
        <!-- GANTI href="#contact" MENJADI href="/#contact" -->
        <a href="/#contact" 
           class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition transform hover:scale-105 inline-flex items-center gap-2"
           data-aos="fade-up" 
           data-aos-delay="200">
            <i class="fas fa-comment"></i>
            Hubungi Saya
        </a>
    </div>
</section>

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Animasi filter */
    .project-card {
        transition: all 0.3s ease;
    }
    
    .filter-btn.active {
        background-color: #2563eb;
        color: white;
        border-color: #2563eb;
    }
    
    /* Pagination styling */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .pagination a, .pagination span {
        padding: 0.5rem 1rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        color: #374151;
        text-decoration: none;
    }
    
    .pagination a:hover {
        background-color: #f3f4f6;
    }
    
    .pagination .active span {
        background-color: #2563eb;
        color: white;
        border-color: #2563eb;
    }
</style>
@endpush

@push('scripts')
<script>
    // Filter functionality (opsional)
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active class
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('active', 'bg-blue-600', 'text-white');
                b.classList.add('border', 'border-blue-600', 'text-blue-600');
            });
            this.classList.add('active', 'bg-blue-600', 'text-white');
            this.classList.remove('border', 'border-blue-600', 'text-blue-600');
            
            const filter = this.dataset.filter;
            const projects = document.querySelectorAll('.project-card');
            
            projects.forEach(project => {
                if (filter === 'all') {
                    project.style.display = 'block';
                } else {
                    const tech = project.dataset.technologies.toLowerCase();
                    if (tech.includes(filter)) {
                        project.style.display = 'block';
                    } else {
                        project.style.display = 'none';
                    }
                }
            });
        });
    });
</script>
@endpush
@endsection