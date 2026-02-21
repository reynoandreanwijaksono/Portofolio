@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-800">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-3xl font-bold text-gray-800">Edit Project</h1>
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
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Judul Project</label>
                <input type="text" name="title" value="{{ old('title', $project->title) }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                       required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="description" rows="5" 
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                          required>{{ old('description', $project->description) }}</textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Teknologi</label>
                <input type="text" name="technologies" value="{{ old('technologies', $project->technologies) }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                       placeholder="Laravel, Tailwind, MySQL"
                       required>
                <p class="text-gray-500 text-sm mt-1">Pisahkan dengan koma (,)</p>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Gambar Project</label>
                
                @if($project->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->image) }}" 
                         alt="Current image" 
                         class="w-48 h-32 object-cover rounded-lg border">
                    <p class="text-sm text-gray-500 mt-1">Gambar saat ini</p>
                </div>
                @endif
                
                <input type="file" name="image" accept="image/*" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                       onchange="previewImage(this)">
                <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
                
                <div id="image-preview" class="mt-2 hidden">
                    <p class="text-sm text-gray-500 mb-1">Preview:</p>
                    <img src="" alt="Preview" class="w-48 h-32 object-cover rounded-lg border">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Project URL</label>
                    <input type="text" name="project_url" value="{{ old('project_url', $project->project_url) }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                           placeholder="https://example.com">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">GitHub URL</label>
                    <input type="text" name="github_url" value="{{ old('github_url', $project->github_url) }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600"
                           placeholder="https://github.com/username/repo">
                </div>
            </div>
            
            <div class="mb-6">
                <label class="flex items-center gap-2">
                    @php
                        $isChecked = old('is_featured', $project->is_featured);
                    @endphp
                    <input type="checkbox" 
                        name="is_featured" 
                        value="1" 
                        {{ $isChecked ? 'checked' : '' }}>
                    <span class="text-gray-700">Tampilkan di halaman utama (Featured)</span>
                </label>
            </div>
            
            <div class="flex gap-3">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Update Project
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