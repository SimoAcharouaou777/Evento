@extends('layouts.app')
@section('content')

<div data-aos="fade" class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Blog</h1>
            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Blog Section - Blog Page -->
  <section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Maria Doe</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Allisa Mayer</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 5, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Mark Dower</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 22, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Lisa Neymar</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 30, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-5.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-5.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Denis Peterson</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 30, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-lg-6">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-6.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-6.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Mika Lendon</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Feb 14, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

      </div><!-- End blog posts list -->

      <div class="pagination d-flex justify-content-center">
        <ul>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div><!-- End pagination -->

    </div>

  </section><!-- End Blog Section -->

@endsection