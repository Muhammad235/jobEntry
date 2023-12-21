@extends('users.dashboard')

@include('partials.__meta-tags')

{{-- <x-flash-message /> --}}
 
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Edit a job post</h1>
                <div class="row g-4 px-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                Nequaperiam inventore, suscipit dolorem quae eius in omnis laboriosam consequuntur facilis consequatur! Obcaecati, placeat.
                                  </a></p>
                            <form action="/listings/{{$listing->id}}/edit" method="POST">
                                 @csrf
                                 @method('PUT')
                                <div class="row g-3">
                                    <div class="row g-3">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="{{$listing->company}}" name="company" placeholder="Company Name" >
                                                <label for="company">Company Name</label>

                                                @error('company')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="{{$listing->title}}" name="title" placeholder="Job Title">
                                                <label for="title">Job Title</label>
    
                                                @error('title')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="{{$listing->location}}" name="location" placeholder="Job Location">
                                            <label for="location">Job Location</label>

                                            @error('location')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" value="{{$listing->email}}" name="email" placeholder="Company Email">
                                            <label for="email">Company Email</label>

                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="employment" class="mb-2">Employment Type</label> <br>
                                            <label for="employment_type">Full Time</label> 

                                            @if ($listing->employment_type === 'Full Time')
                                                <input type="radio" name="employment_type"  value="{{$listing->employment_type}}" checked>
                                                
                                                @else
                                                <input type="radio" name="employment_type"  value="{{$listing->employment_type}}" >
                                            @endif

                                            <label for="employment_type">Part Time</label> 

                                            @if ($listing->employment_type === 'Part Time')
                                            <input type="radio" name="employment_type" value="{{$listing->employment_type}}" checked>
                                            
                                            @else
                                            <input type="radio" name="employment_type"  value="{{$listing->employment_type}}" >
                                            @endif


                                            @error('employment')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" value="{{$listing->website}}" name="website" placeholder="Subject">
                                            <label for="website">Website URL</label>

                                            @error('website')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="{{$listing->tags}}" name="tags" placeholder="Tags">
                                            <label for="tags">Tags (Laravel, Go, Node.js)</label>

                                            @error('tags')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="{{$listing->sallary_from}}" name="sallary_from" placeholder="Sallary form">
                                            <label for="sallary_from">Sallary form</label>

                                            @error('sallary_from')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="{{$listing->sallary_to}}" name="sallary_to" placeholder="Sallary to">
                                            <label for="sallary_to">Sallary to</label>

                                            @error('sallary_to')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="logo" class="mb-2">Company Logo</label> 
                                        {{-- <div class="form-floating"> --}}
                                            <input type="file" class="form-control" value="{{$listing->logo}}" name="logo" placeholder="Company Logo">
                                        {{-- </div> --}}

                                        @error('logo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>   
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-floating mt-3 mx-3">
                                            <img src="{{asset('img/com-logo-1.jpg')}}" alt="">
                                        </div>
                                    </div>                                 
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="" name="description" style="height: 150px">#{{$listing->description}}</textarea>
                                            <label for="description">Job Description</label>

                                            @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Update Job Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
