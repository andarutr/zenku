<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="/img/profile/{{ Auth::user()->picture }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
                <a href="/{{ strtolower($user->name_role) }}/profile" class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2 text-secondary"></i> Profile</a>
                <a href="/{{ strtolower($user->name_role) }}/ganti-password" class="dropdown-item"><i class="fas fa-lock fa-sm fa-fw mr-2 text-secondary"></i> Ganti Password</a>
                <a href="/{{ Request::segment(1) }}/chat" class="dropdown-item"><i class="fas fa-comment-alt fa-sm fa-fw mr-2 text-secondary"></i> Chatting</a>
                @if(Auth::user()->id_role === 3)
                <a href="{{ route('user.like.index') }}" class="dropdown-item"><i class="fas fa-heart fa-sm fa-fw mr-2 text-secondary"></i> Like ({{ $like_count }})</a>
                <a href="{{ route('user.comment.index') }}" class="dropdown-item"><i class="fas fa-comment fa-sm fa-fw mr-2 text-secondary"></i> Comment ({{ $comment_count }})</a>
                @endif
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                    data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-secondary"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- Topbar -->