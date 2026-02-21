<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Reyno Andrean Wijaksono - Front-End Developer & UI Designer">
    <title>@yield('title', 'Reyno Andrean - Portofolio')</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Dark Mode Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#7c3aed'
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS untuk Dark Mode -->
    <style>
        /* Transisi halus saat ganti mode */
        * {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased transition-colors duration-300">
    
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm fixed w-full z-50 transition-colors duration-300">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-800 dark:text-white">Reyno<span class="text-blue-600 dark:text-blue-400">.</span></a>
                
                <div class="flex items-center space-x-4">
                    <!-- Dark Mode Toggle Button -->
                    <button id="darkModeToggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                        <i id="darkModeIcon" class="fas fa-moon"></i>
                    </button>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a>
                        <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">About</a>
                        <a href="#skills" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Skills</a>
                        <a href="#projects" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Projects</a>
                        <a href="#experience" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Experience</a>
                        <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Contact</a>
                    </div>
                </div>
                
                <button class="md:hidden text-gray-600 dark:text-gray-300" id="menu-btn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu (sama, tambahin dark mode) -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="flex flex-col space-y-4 pt-4 pb-3">
                    <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                    <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">About</a>
                    <a href="#skills" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Skills</a>
                    <a href="#projects" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Projects</a>
                    <a href="#experience" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Experience</a>
                    <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-gray-950 text-white py-12 transition-colors duration-300">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-2xl font-bold">Reyno Andrean Wijaksono</h3>
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
                © 2026 Reyno Andrean Wijaksono. All rights reserved.
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
        
        // DARK MODE TOGGLE
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const html = document.documentElement;
        
        // Cek preferensi user di localStorage
        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
            darkModeIcon.classList.remove('fa-moon');
            darkModeIcon.classList.add('fa-sun');
        } else {
            html.classList.remove('dark');
            darkModeIcon.classList.remove('fa-sun');
            darkModeIcon.classList.add('fa-moon');
        }
        
        // Toggle dark mode
        darkModeToggle.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                darkModeIcon.classList.remove('fa-sun');
                darkModeIcon.classList.add('fa-moon');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                darkModeIcon.classList.remove('fa-moon');
                darkModeIcon.classList.add('fa-sun');
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>