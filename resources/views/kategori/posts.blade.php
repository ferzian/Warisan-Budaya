<x-layoutMain>
    <section class="cards">
        @foreach ($posts as $post)
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
