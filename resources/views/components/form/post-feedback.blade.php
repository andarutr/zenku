<div>
    <form action="{{ route('user.feedback.store') }}" method="POST">@csrf
        <div class="form-group">
            <label for="pesan">Pesan</label>
            <input type="text" class="form-control" name="message">
            @error('message')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>