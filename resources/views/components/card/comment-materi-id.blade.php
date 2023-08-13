<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-1 col-sm-4"><img src="/img/profile/{{ Auth::user()->picture }}" class="img-fluid rounded-circle" width="50"></div>
            <div class="col-lg-10">
            <form action="{{ route('user.comment.store', $materi->id) }}" method="POST">@csrf
                <div class="form-row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="comment" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                @error('comment')<p class="text-danger">{{ $message }}</p>@enderror
            </form>
            </div>
        </div>
        <hr/>
        <!-- List of Comment -->
        @foreach($comments as $comment)
        <div class="row">
            <div class="col-lg-1">
                <img src="/img/profile/{{ $comment->user->picture }}" class="img-fluid rounded-circle" width="50">
            </div>
            <div class="col-lg-10">
                <h5>{{ $comment->user->name }}</h5>
                <p>{{ $comment->comment }}</p>
                <p>{{ \Carbon\Carbon::parse($comment->updated_at)->format('d F Y H:i') }}</p>
            </div>
        </div>
        <hr/>
        @endforeach
    </div>
</div>