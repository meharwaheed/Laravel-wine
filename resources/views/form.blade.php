@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card p-0 border-0">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light">
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
                            <form action="{{@$ausWine ? route('update', [@$ausWine->id]) : route('save')}}" method="post">
                                @csrf
                                @if(@$ausWine)
                                    @method('put')
                                @endif
                                <div class="form-group mt-2">
                                    <label for="name">Wine Name</label>
                                    <input type="text" value="{{@$ausWine ? @$ausWine->wineName : old('wineName')}}" name="wineName" class="form-control @error('wineName') is-invalid @enderror" placeholder="Enter Wine Name">
                                    @error('wineName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="type">Wine Type</label>
                                    <input type="text" value="{{@$ausWine ? @$ausWine->wineType : old('wineType')}}" name="wineType" class="form-control @error('wineType') is-invalid @enderror" placeholder="Enter Wine Type">
                                    @error('wineType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="price">Wine Price</label>
                                    <input type="text" value="{{@$ausWine ? @$ausWine->winePrice : old('winePrice')}}" name="winePrice" class="form-control @error('winePrice') is-invalid @enderror" placeholder="Enter Wine Price">
                                    @error('winePrice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="qty">Wine Quantity</label>
                                    <input type="text" value="{{@$ausWine ? @$ausWine->wineQuantity : old('wineQuantity')}}" name="wineQuantity" class="form-control @error('wineQuantity') is-invalid @enderror" placeholder="Enter Wine Quantity">
                                    @error('wineQuantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="region">Wine Region</label>
                                    <input type="text" value="{{@$ausWine ? @$ausWine->wineRegion : old('wineRegion')}}" name="wineRegion" class="form-control @error('wineRegion') is-invalid @enderror" placeholder="Enter Wine Region">
                                    @error('wineRegion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="float-end mt-2">
                                    <a href="{{route('getWines')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">{{@$ausWine ? 'Update' : 'Add'}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
