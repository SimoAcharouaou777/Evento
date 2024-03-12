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
          <li><a href="{{route('home')}}">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <section class="container my-4">
    <div class="row">
        <div class="col-md-4">
            <label for="titleFilter" class="form-label">Search by Title:</label>
            <input type="text" class="form-control" id="titleFilter" placeholder="Enter title..." onkeyup="search()">
        </div>
        <div class="col-md-4">
            <label for="categoryFilter" class="form-label">Filter by Category:</label>
            <select class="form-select" id="categoryFilter" onchange="filter()" >
                <option value="all">All Categories</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
      
    </div>
</section>

  <!-- Blog Section - Blog Page -->
  <section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list" id="eventsContainer">
        
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
              @if($event->organizer->hasMedia('media/users'))
              <img src="{{$event->organizer->getFirstMediaUrl('media/users')}}" class="img-fluid" alt="">
              @else
              <img src="assets/img/team/team-1.jpg" class="img-fluid post-author-img flex-shrink-0" alt="">
              @endif
              <div class="post-meta">
                <p class="post-author">{{$event->organizer->username}}</p> 
                <p class="post-date">
                  <time datetime="2022-01-01"> start date : {{$event->start_date}}</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->
        @endforeach

      </div><!-- End blog posts list -->
      {{$events->links('pagination::bootstrap-5')}}

    </div>

  </section><!-- End Blog Section -->

@endsection

<script>
    function search() {
    
    var valueInput = document.getElementById('titleFilter').value;  
    var categoryFilter = document.getElementById('categoryFilter').value; 
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("eventsContainer").innerHTML = xhttp.responseText;
        }
    };
    if (valueInput == '') {
        var url = '/SearchEvent/AllEventSearch/all';
    } else {
        var url = '/SearchEvent/' + valueInput + '/' + categoryFilter;
    }
    xhttp.open("GET", url, true);
    xhttp.send();
}

function filter() {
    var valueInput = document.getElementById('categoryFilter').value;  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("eventsContainer").innerHTML = xhttp.responseText;
        }
    };
    if (valueInput == 'all') {
        var url = '/FilterEvent/AllEventFilter';
    } else {
        var url = '/FilterEvent/' + valueInput;
    }

    xhttp.open("GET", url, true);
    xhttp.send();
}
</script>