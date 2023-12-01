@props(['fulltime_listing'])

<div class="job-item p-4 mb-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-8 d-flex align-items-center">
            <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('img/com-logo-2.jpg')}}" alt="" style="width: 80px; height: 80px;">
            <div class="text-start ps-4">
               <a href="/listings/{{$fulltime_listing->id}}"><h5 class="mb-2">{{$fulltime_listing->company}}</h5></a> 
               <p><b>{{$fulltime_listing->title}}</b></p>
                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$fulltime_listing->location}}</span>
                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$fulltime_listing->employment_type}}</span>
                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$fulltime_listing->sallary_from}} - ${{$fulltime_listing->sallary_to}}</span>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
            <div class="d-flex mb-3">
                @php
                    $tags = explode(',', $fulltime_listing->tags);
                @endphp
                    @foreach ($tags as $tag)
                    <a class="btn me-1 tags" href="/listings/{{$fulltime_listing->id}}">
                        {{ $tag }}
                    </a>
                   @endforeach
                <a class="btn btn-primary" href="/listings/{{$fulltime_listing->id}}">Apply Now</a>
            </div>
            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
        </div>
    </div>
</div>