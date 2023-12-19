<section class="products-component">
    <div class="container">
        <h3>Our Products</h3>
        <p>We offer a wide range of products to suit your needs. We have a team of professionals who are ready to help
            you with your needs.</p>
        <ul class="items">
            @foreach ($products as $product)
                <a href="{{ $product->product_url }}">
                    <div class="head">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="body">
                        <h4>{{ $product->product_name }}</h4>
                        <p>{{ $product->product_description }}</p>
                    </div>
                </a>
            @endforeach
        </ul>
        <div class="video">
            <iframe width="928" height="552" src="https://www.youtube.com/embed/0BgI1edwJfM"
                title="Crystal album - Album de Cristal - Vimagez Fotografia &amp; Video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
