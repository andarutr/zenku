@foreach($materi as $mat)
    <div class="col-lg-3 mb-3">
        <div class="card shadow" style="border-radius: 25px">
            <img src="/img/materi/{{ $mat->picture_card }}" class="card-img-top" style="border-radius: 25px 25px 10px 10px">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/user/materi/{{ $mat->id_card }}/{{ $mat->url_card }}">{{ $mat->title_card  }}</a>
                    @if($mat->is_active == 'active')<small><i class="fas fa-check-circle"></i></small>@endif
                </h5>
                <p class="card-text">{{ $mat->name }}</p>
                <a href="/user/like/materi/{{ $mat->id_card }}" class="btn btn-md"><i class="fas fa-heart text-danger"></i></a>
                <a href="/user/materi/{{ $mat->id_card }}/{{ $mat->url_card }}" class="btn btn-md"><i class="fas fa-comment text-secondary"></i></a>
                <a href="/user/materi/{{ $mat->id_card }}/{{ $mat->url_card }}" class="btn btn-primary"><i class="fas fa-book-reader"></i> Belajar</a>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12">
    {{ $materi->links() }}
</div>