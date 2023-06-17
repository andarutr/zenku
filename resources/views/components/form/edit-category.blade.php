<div>
    <form action="{{ route('admin.kategori.update', ['kategori' => $id]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="name_category">Nama Menu</label>
            <input type="text" class="form-control" name="name_category" id="name_category" value="{{ $category->name_category }}">
            @error('name_category')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>