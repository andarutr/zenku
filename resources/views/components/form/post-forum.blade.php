<div>
    <form action="{{ route('user.forum.store') }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="name">Judul Diskusi</label>
            <input type="text" class="form-control" name="title_forum" id="name" value="{{ old('title_forum') }}">
            @error('title_forum')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea name="description" id="editor1" rows="10" cols="80">{{ old('description') }}</textarea>
            @error('description')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>