@extends('layouts.app')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <h2>Portfolio Details</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
     </div>
   @endif
   @if(session('info'))
   <div class="alert alert-info">
       {{ session('info') }}
   </div>
   @endif
   @if(session('error'))
     <div class="alert alert-danger">
       {{ session('error') }}
     </div>
   @endif
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-img">
                    <img src="{{ $event->getFirstMediaUrl('media/events') }}" alt="image" style="width: 100%;">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Event information</h3>
                    <ul>
                        <li><strong>Title</strong> {{$event->title}}</li>
                        <li><strong>description</strong>{{$event->description}}</li>
                        <li><strong>available seats</strong>{{$event->available_seats}}</li>
                        <li><strong>location</strong>{{$event->location}}</li>
                        <li><strong>Start Date</strong>{{$event->start_date}}</li>
                        <li><strong>End Date</strong>{{$event->end_date}}</li>
                    </ul>
                </div>
                
                  <a href="{{route('getTicket',$event->id)}}" class="btn btn-primary d-flex flex-column align-items-center">Get a Ticket</a>
            </div>
        </div>

    </div>
</section>
<!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection