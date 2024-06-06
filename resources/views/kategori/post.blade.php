<x-layout-navbar-blog>
    <x-layout-blog>
            <div class="header">
                <div class="hero" style="background-image: url('{{ $post['hero-img'] }}'); background-size: cover;"></div>
                <div class="content">
                    <h2>{{ $post['title'] }}</h2>
                    {{-- <p class="penulis">ditulis oleh <a href="#">Warisan Budaya</a>pada {{ $post->created_at->format('d F Y') }}</p> --}}
                    <p>{{ $post['desc1'] }}</p>
                    <img src="{{ $post['img1'] }}" class="gambar1">
                    <p>{{ $post['desc2'] }}</p>

                    <p>{{ $post['desc3'] }}</p>

                    <p>{{ $post['desc4'] }}</p>
                    <img src="{{ $post['img2'] }}" class="gambar2">
                    <p>{{ $post['desc5'] }}</p>

                </div>
                <div class="footer">
                    <p class="copy">Copyright since 2024</p>
                </div>
            </div>
        </div>
    </x-layout-blog>

</x-layout-navbar-blog>




