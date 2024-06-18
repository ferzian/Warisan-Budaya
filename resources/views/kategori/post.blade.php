<x-layout-navbar-blog>
    <x-layout-blog>
        <div class="container">
            <div class="header">
                <div class="hero" style="background-image: url('{{ $post['hero-img'] }}'); background-size: cover;">
                </div>
                <div class="content">
                    <h2>{{ $post['title'] }}</h2>
                    <p class="penulis">{{ $post['category'] }} | ditulis oleh <a href="#">Warisan Budaya</a>pada
                    </p>
                    {{-- {{ $post->created_at->format('d F Y') }} --}}
                    <p>{{ $post['desc'] }}</p>
                </div>
            </div>
        </div>
    </x-layout-blog>

</x-layout-navbar-blog>
