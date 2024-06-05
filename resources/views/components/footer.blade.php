    <!-- Kritik dan Saran Start -->
    <div class="container-saran">
        <form method="post" action="">
            <h2 class="fw-bold">FEEDBACK</h2>
            <div class="mb-3">
                <label for="namaUser" class="form-label">Name :</label>
                <input type="text" class="form-control" name="namaUser" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address :</label>
                <input required type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="name@example.com">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback :</label>
                <textarea class="form-control" name="feedback" rows="5" required></textarea>
            </div>

            <button type="submit" name="sent" class="btn btn-primary">Send</button>
        </form>
    </div>
    <!-- Kritik dan Saran End -->


    <!-- Footer Start -->
    <div class="footer">
        <p>&copy;copyright m-punk 2024</p>
    </div>
    <!-- Footer End -->
