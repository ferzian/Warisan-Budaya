<x-layoutMain>

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Mengenal Warisan <span>Budaya</span>.</h1>
            <p>Berbahaya Jika Tidak Ber<span>budaya</span></p>
        </main>
    </section>
    <!-- Hero Section End -->

    <section class="cards">
        @foreach ($home as $post)
            <article class="card">
                <div class="card-img"></div>
                <a href="/posts/{{ $post['title'] }}">
                <div class="card-img-hover" style="background-image:url('{{ asset('storage/' . $post['bg-card']) }}')">
                    </div>
                </a>
                <div class="card-info">
                    <span class="card-category">{{ $post->category->name }}</span>
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-desc">{{ Str::limit($post['desc1'], 275) }}</p>
                </div>
            </article>
        @endforeach
    </section>
</x-layoutMain>
