<x-layout-navbar-blog>
    <x-layout-blog>
        <div class="container">
            <div class="header">
                <div class="hero" style="background-image: url('{{ asset($post['hero-img']) }}');">
                </div>
                <div class="content">
                    <h2>{{ $post['title'] }}</h2>
                    <p class="penulis"><a href="#">{{ $post['category'] }}</a> | ditulis oleh <a
                        href="#">Warisan Budaya</a>pada {{ $post->created_at->format('d F Y') }}
                    </p>
                    <p>{{ $post['desc1'] }}</p> <br>
                    <p>{{ $post['desc2'] }}</p><br>
                    <img src="{{ asset($post['img']) }}" alt="">
                    <p>{{ $post['desc3'] }}</p><br>
                    <p>{{ $post['desc4'] }}</p><br>

                </div>
            </div>
        </div>
    </x-layout-blog>

</x-layout-navbar-blog>
