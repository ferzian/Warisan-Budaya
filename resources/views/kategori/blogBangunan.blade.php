<x-layout-main-navbar>
    <x-layout-blog>
            <div class="header">
                <div class="hero" style="background-image:url('{{ $blogBangunan['image1'] }}') ;
                background-size: cover"></div>
                <div class="content">
                    <h2>{{ $blogBangunan['title'] }}</h2>
                    <p class="penulis">ditulis oleh <a href="#">Warisan Budaya</a>pada 1 April 2024</p>
                    <p>{{ $blogBangunan['desc1'] }}</p>
                    <img src="{{ $blogBangunan['image1'] }}" class="gambar1">
                    <p>{{ $blogBangunan['desc2'] }}</p>

                    <p>{{ $blogBangunan['desc3'] }}</p>

                    <p>{{ $blogBangunan['desc4'] }}</p>
                    <img src="{{ $blogBangunan['image2'] }}" class="gambar2">
                    <p>{{ $blogBangunan['desc5'] }}</p>

                </div>
                <div class="footer">
                    <p class="copy">Copyright since 2024</p>
                </div>
            </div>
        </div>
    </x-layout-blog>
</x-layout-main-navbar>
