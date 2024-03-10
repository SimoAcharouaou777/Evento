@extends('layouts.app')

@section('content')

<section id="hero" class="hero">

    <img src="{{asset('assets/img/portfolio/eventCover.jpg')}}" alt="" data-aos="fade-in">



  </section><!-- End Hero Section -->

  <!-- Clients Section - Home Page -->
  <section id="clients" class="clients">

    <div class="container-fluid" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

      </div>

    </div>

  </section><!-- End Clients Section -->

  <!-- About Section - Home Page -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">
    
        <div class="col-xl-5 content">
          <h3>Discover Amazing Events</h3>
          <h2>Experience Unforgettable Moments with Us</h2>
          <p>Explore a world of exciting events that captivate your senses and create lasting memories. Our platform brings together a diverse range of gatherings, performances, and celebrations to enhance your social calendar. Join us in the celebration of life's special moments!</p>
          <a href="{{route('blog')}}" class="read-more"><span>Explore Events</span><i class="bi bi-arrow-right"></i></a>
        </div>
    
        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">
    
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-calendar"></i>
                <h3>Diverse Events</h3>
                <p>Discover a rich tapestry of events ranging from cultural festivals and music concerts to sports extravaganzas. There's something for everyone's interests and passions.</p>
              </div>
            </div> <!-- End Icon Box -->
    
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-ticket"></i>
                <h3>Easy Ticketing</h3>
                <p>Streamlined ticketing processes ensure a hassle-free experience. Secure your spot at the hottest events in town and make your reservations with just a few clicks.</p>
              </div>
            </div> <!-- End Icon Box -->
    
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-globe"></i>
                <h3>Global Reach</h3>
                <p>Our events platform spans across borders, connecting people from different corners of the world. Experience the diversity and richness of global celebrations.</p>
              </div>
            </div> <!-- End Icon Box -->
    
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-heart"></i>
                <h3>Memorable Experiences</h3>
                <p>Create cherished memories as you engage in unforgettable experiences. Join us in celebrating the joy, creativity, and beauty that events bring to our lives.</p>
              </div>
            </div> <!-- End Icon Box -->
    
          </div>
        </div>
    
      </div>
    </div>
    

  </section><!-- End About Section -->

  <!-- Stats Section - Home Page -->
  <section id="stats" class="stats">

    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="{{ $userCount }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="{{ $eventcount }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="{{ $participantCount }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Partisipant</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="{{ $eventReserved }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events Reserved</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- End Stats Section -->

  <!-- Services Section - Home Page -->
  <section id="services" class="services">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Discover Our Services</h2>
      <p>Explore the diverse range of services we offer to enhance your event experience</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar-event"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Event Planning</a></h4>
              <p class="description">Let us handle the details! Our expert event planning services ensure a seamless and unforgettable experience for your special occasion.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-music-note"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Entertainment</a></h4>
              <p class="description">From live music performances to captivating shows, our entertainment services add a touch of magic and excitement to your event.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-camera"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Photography & Videography</a></h4>
              <p class="description">Capture the special moments with our professional photography and videography services, ensuring memories that last a lifetime.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-people"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Crowd Management</a></h4>
              <p class="description">Ensure a smooth flow of your event with our crowd management services, creating a safe and enjoyable environment for all attendees.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-palette"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Theme Design</a></h4>
              <p class="description">Transform your event into a visually stunning experience with our creative theme design services, tailored to your unique preferences.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-chat"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Guest Interaction</a></h4>
              <p class="description">Enhance guest engagement with our interactive solutions, creating memorable interactions and fostering a sense of community.</p>
            </div>
          </div>
        </div><!-- End Service Item -->
  
      </div>
  
    </div>
  
  </section>
  <!-- End Services Section -->

  <!-- Features Section - Home Page -->
  <section id="features" class="features">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Most reserved Events</h2>
      <p>Huryy Up And Be The Last One Wgo Gets Ticket</p>
    </div><!-- End Section Title -->

    <div class="container">
      
      <div class="row gy-4 align-items-center features-item">
        @foreach ($mostReservedEvents as $event)
        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h3>{{$event->title}}</h3>
          <p>
           {{$event->description}}
          </p>
          <a href="{{route('details', $event->id)}}" class="btn btn-get-started">Get Ticket</a>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
          <div class="image-stack">
            <img src=" {{ $event->getFirstMediaUrl('media/events') }} " alt="" class="stack-front">
            <img src="{{$event->getFirstMediaUrl('media/events')}}" alt="" class="stack-back">
          </div>
        </div>
        @endforeach
      </div><!-- Features Item -->



    </div>

  </section><!-- End Features Section -->

  <!-- Portfolio Section - Home Page -->
  <section id="portfolio" class="portfolio">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Latest Events</h2>
      <p>what are you waiting for git your ticket now </p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Card</li>
          <li data-filter=".filter-branding">Web</li>
        </ul><!-- End Portfolio Filters -->

        
        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($events as $event)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="{{ $event->getFirstMediaUrl('media/events') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$event->title}}</h4>
              <p>Available seats : {{$event->available_seats}}</p>
              <a href="{{ $event->getFirstMediaUrl('media/events') }}" title=" available seats : {{$event->available_seats}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="{{route('details',$event->id)}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>

    </div>

  </section>
  <!-- End Portfolio Section -->

  <!-- Pricing Section - Home Page -->


  <!-- Faq Section - Home Page -->
  <section id="faq" class="faq">

    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Get Answers to</span> <strong>Your Questions</strong></h3>
            <p>
              Have queries about the upcoming event? Check out our frequently asked questions to find the information you need.
            </p>
          </div>
        </div>
  
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
  
          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>What details are provided on event tickets?</span></h3>
              <div class="faq-content">
                <p>Event tickets typically include information about the event name, date, time, venue, and any special instructions or requirements. Make sure to review your ticket for all the essential details.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">2.</span> <span>How can I purchase tickets for an event?</span></h3>
              <div class="faq-content">
                <p>Buying tickets is easy! Simply visit our website, navigate to the event page, and follow the ticket purchase instructions. You can securely complete your transaction online and receive your tickets via email.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">3.</span> <span>Can I get a refund if I am unable to attend?</span></h3>
              <div class="faq-content">
                <p>Refund policies vary for each event. Check the event details or contact our customer support for information on the refund process and any applicable terms and conditions.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">4.</span> <span>Are there age restrictions for events?</span></h3>
              <div class="faq-content">
                <p>Event age restrictions depend on the nature of the event. Some events may be suitable for all ages, while others may have specific age requirements. Refer to the event details for relevant information.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <h3><span class="num">5.</span> <span>How can I contact the event organizers?</span></h3>
              <div class="faq-content">
                <p>If you have questions or need assistance, you can usually find contact information for event organizers on the event page. Alternatively, reach out to our customer support, and we'll be happy to help!</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
          </div>
  
        </div>
      </div>
  
    </div>
  
  </section>
  <!-- End Faq Section -->

  <!-- Team Section - Home Page -->
  <section id="team" class="team">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Organizers</h2>
      <p>Meet Our Wonderful Organizers</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">
        @foreach ($organizers as $organizer)
          
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            @if($organizer->hasMedia('media/users'))
            <img src="{{$organizer->getFirstMediaUrl('media/users')}}" class="img-fluid" alt="">
            @else
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>{{$organizer->username}}</h4>
            <span>{{$organizer->email}}</span>
          </div>
        </div><!-- End Team Member -->
        @endforeach
      </div>

    </div>

  </section><!-- End Team Section -->

  <!-- Call-to-action Section - Home Page -->
  <section id="call-to-action" class="call-to-action">

    <img src="assets/img/cta-bg.jpg" alt="">
  
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Get Involved</h3>
            <p>Join us for an unforgettable experience! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <a class="cta-btn" href="#">Explore Events</a>
          </div>
        </div>
      </div>
    </div>
  
  </section>
  
  <!-- End Call-to-action Section -->

  <!-- Testimonials Section - Home Page -->
  <section id="testimonials" class="testimonials">

    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
          <h3>Testimonials</h3>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
          </p>
        </div>

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

          <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo & Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- End Testimonials Section -->

  <!-- Recent-posts Section - Home Page -->
  <section id="recent-posts" class="recent-posts">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Posts</h2>
      <p>Here Are our latest amazing events</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        @foreach ($lastEvent as $event )
          
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>

            <div class="post-img">
              <img src="{{$event->getFirstMediaUrl('media/events')}}" alt="" class="img-fluid">
            </div>

            <p class="post-category">{{$event->category->name}}</p>

            <h2 class="title">
              <a href="{{route('details', $event->id)}}">{{$event->title}}</a>
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
      </div><!-- End recent posts list -->

    </div>

  </section><!-- End Recent-posts Section -->

  <!-- Contact Section - Home Page -->
  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                <p>+1 6678 254445 41</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- End Contact Section -->

@endsection