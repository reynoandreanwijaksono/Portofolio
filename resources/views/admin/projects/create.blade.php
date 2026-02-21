@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-800">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-3xl font-bold text-gray-800">Tambah Project Baru</h1>
    </div>
    
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Judul Project <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('title') border-red-500 @enderror"
                       placeholder="Contoh: Website Portofolio">
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="5" 
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('description') border-red-500 @enderror"
                          placeholder="Jelaskan tentang project ini...">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Teknologi <span class="text-red-500">*</span></label>
                <input type="text" name="technologies" value="{{ old('technologies') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600 @error('technologies') border-red-500 @enderror"
                       placeholder="Laravel, Tailwind, MySQL (pisahkan dengan koma)">
                <p class="text-gray-500 text-sm mt-1">Pisahkan dengan koma (,)</p>
                @error('technologies')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Gambar Project</label>
                <input type="file" name="image" accept="image/*" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                       onchange="previewImage(this)">
                <p class="text-gray-500 text-sm mt-1">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                
                <div id="image-preview" class="mt-2 hidden">
                    <img src="" alt="Preview" class="w-48 h-32 object-cover rounded-lg border">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Project URL</label>
                    <input type="text" name="project_url" value="{{ old('project_url') }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                           placeholder="https://example.com">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">GitHub URL</label>
                    <input type="text" name="github_url" value="{{ old('github_url') }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                           placeholder="https://github.com/username/repo">
                </div>
            </div>
            
            <div class="mb-6">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                    <span class="text-gray-700">Tampilkan di halaman utama (Featured)</span>
                </label>
            </div>
            
            <div class="flex gap-3">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Simpan Project
                </button>
                <a href="{{ route('admin.projects.index') }}" 
                   class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const img = preview.querySelector('img');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            img.src = e.target.result;
            preview.classList.remove('hidden');
        }
        
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.classList.add('hidden');
    }
}
</script>
@endsection