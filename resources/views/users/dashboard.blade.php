<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
    <header class="header">
        <div class="header-content responsive-wrapper">
            <div class="header-logo">
                <a href="">
                    JobEntry
                </a>
            </div>
            <div class="header-navigation">
                <nav class="header-navigation-links">
                    {{-- <a href="#"> Home </a>
                    <a href="#"> Dashboard </a>
                    <a href="#"> Projects </a>
                    <a href="#"> Tasks </a>
                    <a href="#"> Reporting </a>
                    <a href="#"> Users </a> --}}
                </nav>
                <div class="header-navigation-actions">
                    <a href="#" class="avatar">
                        <img src="https://assets.codepen.io/285131/hat-man.png" alt="" />

                    </a>
                   
                    <a class="username mx-3">{{auth()->user()->name}}</a>

                    <form action="/logout" class="button" method="POST">
                        @csrf
                        <i class="ph-lightning-bold"></i>
                        <button class="btn" type="submit"><span>Logout</span></button>
                     </form>

                </div>
                
            </div>
            <a href="#" class="button">
                <i class="ph-list-bold"></i>
                <span>Menu</span>
            </a>
        </div>
    </header>
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
</body>
</html>
