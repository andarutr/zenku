<div>
    <form action="{{ route('admin.kategori.store') }}" method="POST">@csrf
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}">
            @error('category')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>