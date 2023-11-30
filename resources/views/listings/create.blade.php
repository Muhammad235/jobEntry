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
                                            <input type="text" class="form-control" name="company-name" placeholder="Company Name">
                                            <label for="name">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email" placeholder="Job Location">
                                            <label for="location">Job Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Company Email">
                                            <label for="email">Company Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employment" class="mb-2">Employment Type</label> <br>
                                            <label for="fulltime">Full Time</label> <input type="radio" name="1"  value="Full Time">
                                            <label for="fulltime">Full Time</label> <input type="radio" name="1" value="Part Time">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="url" placeholder="Subject">
                                            <label for="url">Website/Application URL</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="tags" placeholder="Tags">
                                            <label for="tags">Tags</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="sallary-from" placeholder="Sallary form">
                                            <label for="tags">Sallary form</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="sallary-from" placeholder="Sallary to">
                                            <label for="tags">Sallary to</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="logo" class="mb-2">Company Logo</label> 
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="logo" placeholder="Company Logo">
                                        </div>
                                    </div>                                  
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="" name="description" style="height: 150px"></textarea>
                                            <label for="description">Job Description</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
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