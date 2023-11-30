@extends('layout')

@section('content')

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Create a job post</h1>
                <div class="row g-4">
                    <div class="col-md-12 ">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                Nequaperiam inventore, suscipit dolorem quae eius in omnis laboriosam consequuntur facilis consequatur! Obcaecati, placeat.
                                  </a></p>
                            <form action="/listings" method="POST">
                                 @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="company" placeholder="Company Name">
                                            <label for="company">Company Name</label>

                                            @error('company')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="location" placeholder="Job Location">
                                            <label for="location">Job Location</label>

                                            @error('location')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Company Email">
                                            <label for="email">Company Email</label>

                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment" class="mb-2">Employment Type</label> <br>
                                            <label for="fulltime">Full Time</label> <input type="radio" name="employment"  value="Full Time">
                                            <label for="fulltime">Part Time</label> <input type="radio" name="employment" value="Part Time">

                                            @error('employment')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="url" placeholder="Subject">
                                            <label for="url">Website/Application URL</label>

                                            @error('url')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="tags" placeholder="Tags">
                                            <label for="tags">Tags ('seperated by comma')</label>

                                            @error('tags')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="sallary-from" placeholder="Sallary form">
                                            <label for="tags">Sallary form</label>

                                            @error('sallary-from')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="sallary-to" placeholder="Sallary to">
                                            <label for="tags">Sallary to</label>

                                            @error('sallary-to')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="logo" class="mb-2">Company Logo</label> 
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="logo" placeholder="Company Logo">
                                        </div>

                                        @error('logo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>                                  
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="" name="description" style="height: 150px"></textarea>
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
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection