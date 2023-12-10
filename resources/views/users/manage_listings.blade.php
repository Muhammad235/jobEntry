@extends('users.dashboard')

@section('content')
<main class="main">
    <div class="responsive-wrapper">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>AAA</td>
                <td class="d-flex">
                    <form action="">
                        <button class="btn btn-success">
                            {{-- <i class='fa fa-pencil text-success fa-2x'> --}}
                            E

                        </button>
                    </form>

                    <form action="">
                        <button class="btn btn-danger">
                            {{-- <i class='fa fa-pencil text-success fa-2x'> --}}
                            D

                        </button>
                    </form>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
</main> 
@endsection