@foreach($materi as $mat)
    <div class="col-lg-3 mb-3">
        <div class="card shadow" style="border-radius: 25px">
            <img src="/img/materi/{{ $mat->picture_card }}" class="card-img-top" style="border-radius: 25px 25px 10px 10px">
            <div class="card-body">
                <span class="badge bg-primary text-white mb-3">{{ $mat->category->category}}</span>
                <h5 class="card-title">
                    <a href="/penguji/materi/{{ $mat->id }}" style="text-decoration: none;">{{ $mat->title_card  }}</a>
                    @if($mat->is_active == 'active')<small><i class="fas fa-check-circle"></i></small>@endif
                </h5>
                <p class="card-text"><img src="/img/profile/{{ $mat->user->picture }}" class="img-fluid rounded-circle" width="25"> <a href="/bio/{{ str_replace(' ', '-', strtolower($mat->user->name)) }}" style="text-decoration: none; color:black">{{ $mat->user->name }}</a></p>
                <a href="/penguji/materi/{{ $mat->id }}" class="btn btn-primary"><i class="fas fa-book-reader"></i> Tinjau</a>
            </div>
        </div>
    </div>
@endforeach