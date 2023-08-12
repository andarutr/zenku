<div>
    <form action="{{ route('user.comment.update', ['id_comment' => $comment->id_comment]) }}" method="POST">@csrf @method('put')
        <div class="form-group">
            <label for="comment">Komentar</label>
            <input type="text" class="form-control" name="comment" id="comment" value="{{ $comment->comment }}">
            @error('comment')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>