<div>
    <form action="{{ route('admin.kategori.update', ['kategori' => $id]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" class="form-control" name="category" id="category" value="{{ $category->category }}">
            @error('category')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>