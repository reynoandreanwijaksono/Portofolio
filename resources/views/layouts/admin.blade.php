<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Reyno Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-blue-600">Reyno.</h2>
                <p class="text-sm text-gray-500">Admin Panel</p>
            </div>
            
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <i class="fas fa-dashboard w-5"></i> Dashboard
                </a>
                <a href="{{ route('admin.projects.index') }}" class="block px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <i class="fas fa-project-diagram w-5"></i> Projects
                </a>
                <a href="{{ route('admin.skills.index') }}" class="block px-6 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <i class="fas fa-code w-5"></i> Skills
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-6 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600">
                        <i class="fas fa-sign-out-alt w-5"></i> Logout
                    </button>
                </form>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>