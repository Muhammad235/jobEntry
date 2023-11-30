@extends('layout')

@section('content')
        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="container">
              <div class="row gy-5 gx-4">
                  <div class="col-lg-8">
                      <div class="d-flex align-items-center mb-4">
                          <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                          <div class="text-start ps-4">
                              <h3 class="mb-3">{{$listing->title}}</h3>
                              <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2">
                                </i>{{$listing->location}}</span>
                              <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$listing->employment_type}}</span>
                              <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$listing->sallary_from}} - ${{$listing->sallary_to}}</span>
                          </div>
                      </div>

                      <div class="d-flex mb-3">
                        @php
                            $tags = explode(',', $listing->tags);
                        @endphp
                            @foreach ($tags as $tag)
                            <a class="btn me-1 tags" href="/listings/{{$listing->id}}">
                                {{ $tag }}
                            </a>
                           @endforeach
                     </div>

                      <div class="mb-5">
                          <h4 class="mb-3">Job description</h4>
                          <p>{{$listing->description}}</p>
                          {{-- <h4 class="mb-3">Responsibility</h4>
                          <p>{{$listing->description}}</p> --}}
                          {{-- <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                          </ul>
                          <h4 class="mb-3">Qualifications</h4>
                          <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                          <ul class="list-unstyled">
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                              <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                          </ul> --}}
                      </div>
      
                      <div class="">
                          <h4 class="mb-4">Apply For The Job</h4>
                          <form>
                              <div class="row g-3">
                                  <div class="col-12 col-sm-6">
                                      <input type="text" class="form-control" placeholder="Your Name">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                      <input type="email" class="form-control" placeholder="Your Email">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                      <input type="text" class="form-control" placeholder="Portfolio Website">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                      <input type="file" class="form-control bg-white">
                                  </div>
                                  <div class="col-12">
                                      <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                  </div>
                                  <div class="col-12">
                                      <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
      
                  <div class="col-lg-4">
                      <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                          <h4 class="mb-4">Job Summery</h4>
                          <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 01 Jan, 2045</p>
                          <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{$listing->employment_type}}</p>
                          <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: ${{$listing->sallary_from}} - ${{$listing->sallary_to}}</p>
                          <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{$listing->location}}</p>
                      </div>
                      <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                          <h4 class="mb-4">Company Detail</h4>
                          <p class="mb-2">Website: <a href="{{$listing->website}}" target="blank">{{$listing->website}}</a></p> 
                          <p class="mb-2">Email: {{$listing->email}}</p> 
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Job Detail End -->
@endsection