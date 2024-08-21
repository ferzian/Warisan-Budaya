<x-layout-navbar-blog>
    <x-layout-blog>
        <div class="container">
            <div class="header">
                    <div class="content">
                        <img src="{{ asset('storage/' . $post['hero-img']) }}" alt="hero image">
                        <h2>{{ $post['title'] }}</h2>
                        <p class="penulis"><a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a> | ditulis oleh <a
                        href="/about">Warisan Budaya</a>pada {{ $post->created_at->format('d F Y') }}
                    </p>
                    <p>{{ $post['desc1'] }}</p> <br>
                    <p>{{ $post['desc2'] }}</p><br>
                    <img src="{{ asset('storage/' . $post->img) }}" alt="image">
                    <p>{{ $post['desc3'] }}</p><br>
                    <p>{{ $post['desc4'] }}</p><br>

                </div>
            </div>
        </div>
    </x-layout-blog>

</x-layout-navbar-blog>
