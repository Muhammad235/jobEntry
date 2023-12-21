@props(['listing'])

<div class="job-item p-4 mb-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-8 d-flex align-items-center">
            <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('img/com-logo-2.jpg')}}" alt="" style="width: 80px; height: 80px;">
            <div class="text-start ps-4">
               <a href="/listings/{{$listing->id}}"><h5 class="mb-2">{{$listing->company}}</h5></a> 
               <p><b>{{$listing->title}}</b></p>
                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$listing->location}}</span>
                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$listing->employment_type}}</span>
                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$listing->sallary_from}} - ${{$listing->sallary_to}}</span>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
            <div class="d-flex mb-3">
                @php
                    $tags = explode(',', $listing->tags);
                @endphp
                    @foreach ($tags as $tag)
                    <a class='btn me-1 tags' href='/listings/{{$listing->id}}'>
                        {{ $tag }}
                    </a>
                   @endforeach
                <a class="btn btn-primary" href="mailto:{{$listing->email}}">Apply Now</a>
            </div>
            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
        </div>
    </div>
</div>