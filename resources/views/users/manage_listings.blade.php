@extends('users.dashboard')

@include('users.partials.__navbar')

@section('content')
<main class="main">
    <div class="responsive-wrapper">
        <table class="table bg-white text-center align-middle">
          <div class="mb-4">
            <a href="/listings/create" class="btn btn-success">Craete Job Post</a>
          </div>
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Logo</th>
                <th scope="col">Title</th>
                <th scope="col">Company</th>
                <th scope="col">location</th>
                <th scope="col">Website</th>
                <th scope="col">Description</th>
                <th scope="col">Employment Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @unless ($user_listings->isEmpty())
                
              @foreach ($user_listings as $user_listing)
            
              <tr>
                <th scope="row">{{$user_listing->id}}</th>
                <td>Mark</td>
                <td>{{$user_listing->title}}</td>
                <td>{{$user_listing->company}}</td>
                <td>{{$user_listing->location}}</td>
                <td>{{$user_listing->website}}</td>
                <td>{{$user_listing->description}}</td>
                <td >{{$user_listing->employment_type}}</td>
                <td>

                  <div class="d-flex justify-content-between">
                    <div class="">
                      <a class="btn text-success" href="/listings/{{$user_listing->id}}/edit">
                        <i class="bi bi-pencil-square"></i> Edit 
                      </a>
                    </div>
                    <div class="">
                      <form method="POST" action="/listings/{{$user_listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn text-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                    </div>
                  </div>

                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="9"><h3 class="text-center p-3 text-success">You don't have any job post created</h3></td>
              </tr> 
              @endunless
            </tbody>
          </table>
    </div>
</main> 
@endsection