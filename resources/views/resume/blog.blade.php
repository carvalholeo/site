<section class="ftco-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Blog</h1>
          <h2 class="mb-4">Blog</h2>
          <p>Um local para compartilhar conhecimento com a comunidade dev. Este contém apenas conteúdos profissionais.</p>
          <p>Veja abaixo os últimos posts publicados.</p>
        </div>
      </div>
      <div class="row d-flex">
@foreach ($posts as $post)
@php
    $categories = ucwords(join(', ', $post->categories));
@endphp
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="{{ $post->link }}" class="block-20 lazyload my-bg-img" data-bg='{{ $post->thumbnail }}' target="_blank" rel="noopener noreferrer" title="{{ $post->title }}">
            </a>
            <div class="text mt-3 float-right d-block">
              <h3 class="heading"><a href="{{ $post->link }}">{{ $post->title }}</a></h3>
              <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                      <span class="mr-2">Publicado em {{ \Carbon\Carbon::parse($post->pubDate)->format('d M y')}}</span>
                  </p>
              </div>
              <p> {{ $post->description }}</p>

              <a role="button" class="btn btn-primary btn-sm" href="{{ $post->link }}" rel="noopener noreferrer" target="_blank">Continue lendo...</a>
              <p class="text-muted">Tags: {{ $categories }}</p>

            </div>
          </div>
        </div>
@endforeach

      </div>
      <div class="row justify-content-center text-center">
          <a role="button" class="btn btn-primary " href="https://blog.leocarvalho.dev" id="gtm-transfer-blog" target="_blank" rel="noopener noreferrer">Leia outros artigos no blog</a>
      </div>
    </div>
  </section>
