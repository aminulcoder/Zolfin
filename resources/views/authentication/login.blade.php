@extends('components.layout')

@section('content')

    <!-- Banner  -->
    <div class="zol-banner zol-banner--blog t-pt-150 t-pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mt-0 t-text-light">
                            {{ $title }}
                        </h2>
                        <ul class="t-list breadcrumbs d-flex justify-content-center align-items-center">
                            <li class="breadcrumbs__list">
                                <a href="{{ route('home') }}" class="t-link breadcrumbs__link t-link--light-alpha text-capitalize">
                                    home
                                </a>
                            </li>
                            <li class="breadcrumbs__list">
                                <a href="" class="t-link breadcrumbs__link t-link--light-alpha text-capitalize">
                                    {{ $title }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->



        <div class="t-pt-120 t-pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="row">
                            <div class="col">


                                @if( $errors->any() )

                                    @foreach( $errors->all() as $error )
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach

                                @endif

                                @if( session()->has('wrong') )
                                <div class="alert alert-danger">{{ session('wrong') }}</div>
                                @endif


                                @if( session()->has('message') )
                                <div class="alert alert-success">{{ session('message') }}</div>
                                @endif

                                <h4>Log in</h4>
                                <hr>


                                <form method="post" action="{{ route('loginProcess') }}">

                                    @csrf

                                    <div class="mb-3">
                                        <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="Email address">
                                    </div>

                                    <div class="mb-3">
                                        <input value="" type="password" name="password" class="form-control" placeholder="password">
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-primary" value="Sign in">
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


