<section class="ftco-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Blog</h1>
          <h2 class="mb-4">Our Blog</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>
      <div class="row d-flex">
@foreach ($posts as $post)
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <a href="{{ $post->link }}" class="block-20" style="background-image: url({{ $post->thumbnail }});">
            </a>
            <div class="text mt-3 float-right d-block">
              <h3 class="heading"><a href="{{ $post->link }}">{{ $post->title }}</a></h3>
              <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                      <span class="mr-2">{{ \Carbon\Carbon::parse($post->pubDate)->format('d M y')}}</span>
                      <a href="#" class="mr-2">{{ $post->author }}</a>
                  </p>
              </div>
              <p> {{ $post->description }}</p>

              <p class="text-muted">Tags:
                @foreach ($post->categories as $category)
                  {{ $category }}
                @endforeach
              </p>

            </div>
          </div>
        </div>
@endforeach

      </div>
    </div>
  </section>
