@foreach ($events as $event )  
<div class="col-xl-4 col-lg-6">
  <article>

    <div class="post-img">
      <img src="{{ $event->getFirstMediaUrl('media/events') }}" alt="" class="img-fluid">
    </div>

    <p class="post-category">{{$event->category->name}}</p>

    <h2 class="title">
      <a href="{{route('details',$event->id)}}">{{$event->title}}</a>
    </h2>

    <div class="d-flex align-items-center">
      <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
      <div class="post-meta">
        <p class="post-author">{{$event->organizer->username}}</p> 
        <p class="post-date">
          <time datetime="2022-01-01">{{$event->start_date}}</time>
        </p>
      </div>
    </div>

  </article>
</div><!-- End post list item -->
@endforeach