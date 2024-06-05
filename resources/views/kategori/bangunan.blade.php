<x-layoutMain>
    <section class="cards">
        @foreach ($bangunan as $blogBangunan)
            <article class="card">
                <div class="card-img"></div>
                <a href="/bangunan/{{ $blogBangunan['id'] }}">
                    <div class="card-img-hover" style="background-image: url('{{ $blogBangunan['bg-card'] }}')">
                    </div>
                </a>
                <div class="card-info">
                    <span class="card-category">Bangunan</span>
                    <h5 class="card-title">{{ $blogBangunan['title'] }}</h5>
                    <p class="card-desc">{{ $blogBangunan['desc'] }}</p>
                </div>
            </article>
        @endforeach
    </section>
</x-layoutMain>
