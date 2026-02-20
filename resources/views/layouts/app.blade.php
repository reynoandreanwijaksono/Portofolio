<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Reyno Andrean Wijaksono - Front-End Developer & UI Designer">
    <title>@yield('title', 'Reyno Andrean - Portofolio')</title>
    
    <!-- Tailwind CSS via CDN (untuk development cepat) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="bg-gray-50 font-sans antialiased">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-800">Reyno<span class="text-blue-600">.</span></a>
                
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-blue-600 transition">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                    <a href="#skills" class="text-gray-600 hover:text-blue-600 transition">Skills</a>
                    <a href="#projects" class="text-gray-600 hover:text-blue-600 transition">Projects</a>
                    <a href="#experience" class="text-gray-600 hover:text-blue-600 transition">Experience</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
                </div>
                
                <button class="md:hidden text-gray-600" id="menu-btn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="flex flex-col space-y-4 pt-4 pb-3">
                    <a href="#home" class="text-gray-600 hover:text-blue-600">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600">About</a>
                    <a href="#skills" class="text-gray-600 hover:text-blue-600">Skills</a>
                    <a href="#projects" class="text-gray-600 hover:text-blue-600">Projects</a>
                    <a href="#experience" class="text-gray-600 hover:text-blue-600">Experience</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-2xl font-bold">Reyno Andrean</h3>
                    <p class="text-gray-400">Front-End Developer & UI Designer</p>
                </div>
                
                <div class="flex space-x-4">
                    <a href="https://github.com/reyno" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/reyno" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="https://instagram.com/reyno" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
            
            <hr class="border-gray-800 my-6">
            
            <p class="text-center text-gray-400">
                © 2024 Reyno Andrean Wijaksono. All rights reserved.
            </p>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Mobile menu toggle
        document.getElementById('menu-btn')?.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    
    @stack('scripts')
</body>
</html>