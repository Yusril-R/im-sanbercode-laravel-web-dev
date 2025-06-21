<h5>Komentar</h5>
@auth
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="book_id" value="{{ $books->id }}">
        <div class="form-group">
            <textarea name="content" class="form-control" placeholder="Tulis komentar..." required></textarea>
        </div>
        <button class="btn btn-primary btn-sm">Kirim</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Login</a> untuk menulis komentar.</p>
@endauth

