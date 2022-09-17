@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="card p-0 border-0">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{url('/')}}">AusWine</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Wine</a>
                                    </li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
                <div class="container">
                    <div>
                        <div class="fs-2">List of All Wines</div>
                        @if(Auth::user()->role == 1)
                         <a href="{{route('getForm')}}" class="btn btn-secondary mt-3">Add Wine</a>
                        @endif
                    </div>
                   <div class="table-responsive mt-3">
                       <table class="table table-striped">
                           <thead>
                           <tr>
                               <th>Wine Name</th>
                               <th>Wine Type</th>
                               <th>Wine Quantity</th>
                               <th>Wine Price</th>
                               <th>Wine Region</th>
                               @if(Auth::user()->role == 1)
                               <th>Action</th>
                               @endif
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($ausWines as $ausWine)
                           <tr class="border-bottom border-dark">
                               <td>{{$ausWine->wineName}}</td>
                               <td>{{$ausWine->wineType}}</td>
                               <td>{{$ausWine->wineQuantity}}</td>
                               <td>$ {{$ausWine->winePrice}}</td>
                               <td>{{$ausWine->wineRegion}}</td>
                               @if(Auth::user()->role == 1)
                               <td>
                                   <a href="{{route('edit', [$ausWine->id])}}" class="btn btn-warning">Edit</a><a href="{{route('delete',[$ausWine->id])}}" class="btn btn-danger ms-2">Delete</a>
                               </td>
                               @endif
                           </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
    </div>
</div>
@endsection
