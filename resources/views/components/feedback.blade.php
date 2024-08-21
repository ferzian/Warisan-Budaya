    <!-- Kritik dan Saran Start -->
    <div class="container-saran">
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <h2 class="fw-bold">FEEDBACK</h2>
            <div class="mb-3">
                <label for="namaUser" class="form-label">Name :</label>
                <input type="text" id="namaUser" class="form-control" name="namaUser" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address :</label>
                <input required type="email" id="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="name@example.com">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="komentar" class="form-label">Feedback :</label>
                <textarea class="form-control" id="komentar" name="komentar" rows="5" required></textarea>
            </div>

            <button type="submit" name="sent" class="btn btn-primary">Send</button>
        </form>
    </div>
    <!-- Kritik dan Saran End -->
