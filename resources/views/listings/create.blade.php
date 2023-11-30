@include('partials.__meta-tags')

<x-flash-message />

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Create a job post</h1>
                <div class="row g-4 px-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                Nequaperiam inventore, suscipit dolorem quae eius in omnis laboriosam consequuntur facilis consequatur! Obcaecati, placeat.
                                  </a></p>
                            <form action="/listings" method="POST">
                                 @csrf
                                <div class="row g-3">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company Name" >
                                                <label for="company">Company Name</label>

                                                @error('company')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Job Title">
                                                <label for="title">Job Title</label>
    
                                                @error('company')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="{{old('location')}}" name="location" placeholder="Job Location">
                                            <label for="location">Job Location</label>

                                            @error('location')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Company Email">
                                            <label for="email">Company Email</label>

                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment" class="mb-2">Employment Type</label> <br>
                                            <label for="fulltime">Full Time</label> <input type="radio" value="{{old('employment_type')}}" name="employment_type"  value="Full Time">
                                            <label for="fulltime">Part Time</label> <input type="radio" value="{{old('employment_type')}}" name="employment_type" value="Part Time">

                                            @error('employment')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" value="{{old('website')}}" name="website" placeholder="Subject">
                                            <label for="website">Website URL</label>

                                            @error('website')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="{{old('tags')}}" name="tags" placeholder="Tags">
                                            <label for="tags">Tags (Laravel, Go, Node.js)</label>

                                            @error('tags')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="{{old('sallary_from')}}" name="sallary_from" placeholder="Sallary form">
                                            <label for="sallary_from">Sallary form</label>

                                            @error('sallary_from')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="{{old('sallary_to')}}" name="sallary_to" placeholder="Sallary to">
                                            <label for="sallary_to">Sallary to</label>

                                            @error('sallary_to')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="logo" class="mb-2">Company Logo</label> 
                                        <div class="form-floating">
                                            <input type="file" class="form-control" value="{{old('logo')}}" name="logo" placeholder="Company Logo">
                                        </div>

                                        @error('logo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>                                  
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="" value="{{old('description')}}" name="description" style="height: 150px"></textarea>
                                            <label for="description">Job Description</label>

                                            @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Create</button>
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
