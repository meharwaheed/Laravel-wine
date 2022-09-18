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
                    <div class="text-center fs-2 py-3">Add New Wine</div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <form action="{{@$wineAus ? route('ausWines.update', [@$wineAus->id]) : route('ausWines.store')}}" method="post">
                                @csrf
                                @if(@$wineAus)
                                    @method('put')
                                @endif
                                <div class="form-group mt-2">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{@$wineAus ? @$wineAus->name : old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Wine Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="type">Type</label>
                                    <input type="text" value="{{@$wineAus ? @$wineAus->type : old('type')}}" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Enter Wine Type">
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="qty">Quantity</label>
                                    <input type="text" value="{{@$wineAus ? @$wineAus->quantity : old('quantity')}}" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Enter Wine Quantity">
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="price">Price</label>
                                    <input type="text" value="{{@$wineAus ? @$wineAus->price : old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Wine Price">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="region">Region</label>
                                    <input type="text" value="{{@$wineAus ? @$wineAus->region : old('region')}}" name="region" class="form-control @error('region') is-invalid @enderror" placeholder="Enter Wine Region">
                                    @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                                <div class="float-end mt-2">
                                    <a href="{{route('ausWines.index')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">{{@$wineAus ? 'Update' : 'Add'}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
