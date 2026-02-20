@extends('layouts.app')

@section('title', 'Reyno Andrean Wijaksono - Front-End Developer & UI Designer')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center bg-gradient-to-br from-white to-blue-50">
    <div class="container mx-auto px-6 py-20">
        <div class="flex flex-col-reverse md:flex-row items-center justify-between">
            <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-4">
                    Hi, I'm <span class="text-blue-600">Reyno Andrean Wijaksono</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-6">
                    Front-End Developer & UI Designer
                </p>
                <p class="text-gray-600 mb-8 max-w-lg mx-auto md:mx-0">
                    Siswa SMK PPLG yang passionate dalam menciptakan website modern dan responsif dengan desain yang menarik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#projects" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition transform hover:scale-105">
                        Lihat Project
                    </a>
                    <a href="#contact" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-full hover:bg-blue-50 transition">
                        Hubungi Saya
                    </a>
                </div>
            </div>
            
            <!-- SESUDAH (DIPERBESAR) -->
<div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-left">
    <div class="relative flex justify-center">
        <!-- Lingkaran foto diperbesar -->
        <img src="{{ asset('assets/images/Profile.jpeg') }}" 
             alt="Reyno Andrean " 
             class="rounded-full w-72 h-72 md:w-96 md:h-96 lg:w-[28rem] lg:h-[28rem] mx-auto object-cover border-4 border-blue-600 shadow-xl">
        
        <!-- Icon di pojok juga diperbesar -->
        <div class="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 bg-white p-4 md:p-6 rounded-full shadow-lg">
            <i class="fas fa-code text-3xl md:text-4xl text-blue-600"></i>
        </div>
    </div>
</div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            About <span class="text-blue-600">Me</span>
        </h2>
        
        <div class="grid md:grid-cols-2 gap-12">
            <div data-aos="fade-right">
                <h3 class="text-2xl font-semibold mb-4">Siapa Saya?</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Saya Reyno Andrean Wijaksono, siswa kelas 11 jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK. Saya memiliki minat besar dalam pengembangan front-end dan desain antarmuka pengguna.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Tujuan karir saya adalah menjadi Front-End Developer profesional yang mampu menciptakan website tidak hanya fungsional tetapi juga indah secara visual. Saya percaya bahwa kombinasi antara kode yang bersih dan desain yang baik dapat menciptakan pengalaman pengguna yang luar biasa.
                </p>
                
                <div class="flex gap-4">
                    <div class="bg-blue-100 p-3 rounded-lg">
                        <i class="fas fa-smile text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">2+ Tahun</h4>
                        <p class="text-gray-500 text-sm">Pengalaman Belajar</p>
                    </div>
                </div>
            </div>
            
            <div data-aos="fade-left">
                <h3 class="text-2xl font-semibold mb-4">Pendidikan</h3>
                
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg h-fit">
                            <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">SMK - PPLG</h4>
                            <p class="text-blue-600">2023 - Sekarang</p>
                            <p class="text-gray-600">Mempelajari pengembangan web, mobile, dan desain UI/UX</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg h-fit">
                            <i class="fas fa-school text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">SMP Negeri 1</h4>
                            <p class="text-blue-600">2020 - 2023</p>
                            <p class="text-gray-600">Aktif dalam ekstrakurikuler komputer dan desain</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg h-fit">
                            <i class="fas fa-certificate text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Kursus Online</h4>
                            <p class="text-blue-600">2023 - Sekarang</p>
                            <p class="text-gray-600">Dicoding, Udemy, dan W3Schools - Web Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            My <span class="text-blue-600">Skills</span>
        </h2>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Front-End Skills -->
            <div data-aos="fade-right">
                <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2">
                    <i class="fas fa-code text-blue-600"></i>
                    Front-End Development
                </h3>
                
                @foreach($frontendSkills as $skill)
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="font-medium">{{ $skill->name }}</span>
                        <span>{{ $skill->percentage }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Design Skills -->
            <div data-aos="fade-left">
                <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2">
                    <i class="fas fa-paint-brush text-purple-600"></i>
                    UI Design
                </h3>
                
                @foreach($designSkills as $skill)
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="font-medium">{{ $skill->name }}</span>
                        <span>{{ $skill->percentage }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-purple-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Tools -->
        <div class="mt-12" data-aos="fade-up">
            <h3 class="text-2xl font-semibold mb-6 text-center">Tools & Technologies</h3>
            
            <div class="flex flex-wrap justify-center gap-6">
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <i class="fab fa-figma text-4xl text-purple-600"></i>
                    <p class="text-sm mt-2">Figma</p>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <i class="fab fa-git-alt text-4xl text-orange-600"></i>
                    <p class="text-sm mt-2">Git</p>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <i class="fab fa-laravel text-4xl text-red-600"></i>
                    <p class="text-sm mt-2">Laravel</p>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <i class="fas fa-palette text-4xl text-blue-600"></i>
                    <p class="text-sm mt-2">Canva</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            My <span class="text-blue-600">Projects</span>
        </h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition" data-aos="fade-up">
                <img src="{{ $project->image ? Storage::url($project->image) : 'https://via.placeholder.com/400x200' }}" 
                     alt="{{ $project->title }}" 
                     class="w-full h-48 object-cover">
                
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $project->description }}</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(explode(',', $project->technologies) as $tech)
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>
                    
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
        
        <div class="text-center mt-12">
        <a href="{{ route('projects.all') }}" 
        class="inline-block border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-full hover:bg-blue-50 transition transform hover:scale-105">
            Lihat Semua Project <i class="fas fa-arrow-right ml-2"></i>
        </a>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            Experience & <span class="text-blue-600">Achievement</span>
        </h2>
        
        <div class="max-w-3xl mx-auto">
            @foreach($experiences as $exp)
            <div class="relative pl-8 pb-8 border-l-2 border-blue-200 last:pb-0" data-aos="fade-up">
                <div class="absolute left-[-9px] top-0 w-4 h-4 bg-blue-600 rounded-full"></div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="flex flex-wrap items-center justify-between mb-2">
                        <h3 class="text-xl font-semibold">{{ $exp->title }}</h3>
                        <span class="text-sm text-blue-600">{{ $exp->type }}</span>
                    </div>
                    
                    <p class="text-gray-500 text-sm mb-2">{{ $exp->organization }}</p>
                    
                    <p class="text-gray-600">{{ $exp->description }}</p>
                    
                    <p class="text-sm text-gray-400 mt-3">
                        {{ date('M Y', strtotime($exp->start_date)) }} - 
                        {{ $exp->is_current ? 'Sekarang' : date('M Y', strtotime($exp->end_date)) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">
            Get In <span class="text-blue-600">Touch</span>
        </h2>
        
        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <!-- Contact Info -->
            <div data-aos="fade-right">
                <h3 class="text-2xl font-semibold mb-6">Let's talk about everything!</h3>
                <p class="text-gray-600 mb-8">
                    Saya terbuka untuk diskusi project, kolaborasi, atau sekedar ngobrol tentang teknologi dan desain.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-blue-600"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium">reynoandreanwijaksono@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-phone text-blue-600"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Phone</p>
                            <p class="font-medium">+62 888-2686-430</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-blue-600"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Location</p>
                            <p class="font-medium">Jepara, Indonesia</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-4 mt-8">
                    <a href="https://github.com/reyno" class="w-10 h-10 bg-gray-800 text-white rounded-full flex items-center justify-center hover:bg-gray-900 transition">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/reyno" class="w-10 h-10 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://instagram.com/reyno" class="w-10 h-10 bg-pink-600 text-white rounded-full flex items-center justify-center hover:bg-pink-700 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div data-aos="fade-left">
                <form action="{{ route('contact.send') }}" method="POST" class="bg-gray-50 p-6 rounded-xl">
                    @csrf
                    
                    @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('name') border-red-500 @enderror">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Subject</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('subject') border-red-500 @enderror">
                        @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Pesan</label>
                        <textarea name="message" rows="4" 
                                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection