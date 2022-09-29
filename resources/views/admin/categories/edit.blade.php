@extends('admin.master-admin')


@section('content')
    @include('admin.left-sidemenu')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">


                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->get('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col">

                                    <h2 class="card-title mb-4">{{ $title }}</h2>
                                </div>
                            </div>


                            <div class="category-form">
                                <form action="{{ route('categories.update', $current_category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label for="category_name">Category Name</label>
                                    <input name="name" type="text" id="category_name" class="form-control"
                                        placeholder="Category Name" value="{{ $current_category->name }}">

                                    <label for="category_slug">Category Slug</label>
                                    <input name="slug" type="text" id="category_slug" class="form-control"
                                        placeholder="Category slug" value="{{ $current_category->slug }}">

                                    <button type="submit" class="btn btn-primary mt-3">Update Category </button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">

                                    <h2 class="card-title">All Category</h2>
                                </div>
                                <div class="col">
                                    <form class="ml-auto search-form d-none d-md-block" method="GET"
                                        action="{{ route('categories.index') }}">
                                        <div class="form-group">
                                            <input name="search" type="search" value="{{ $keyword }}"
                                                class="form-control" placeholder="Search from categories">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table table-striped mb-3">
                                <thead>
                                    <tr>
                                        <th> Category ID </th>
                                        <th> Category Name </th>

                                        <th>
                                            <>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories->all() as $category)
                                        <tr>
                                            <td> {{ $category->id }} </td>
                                            <td> {{ $category->name }} </td>

                                            <td>

                                                <a class="btn btn-info"
                                                    href="{{ route('categories.edit', $category->id) }}"> Edit </a>
                                                <form method="post"
                                                    action="{{ route('categories.destroy', $category->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#categoryModel {{ $category->id }}">
                                                        Delete
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="categoryModel   {{ $category->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Remove
                                                                        Category : {{ $category->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure want to remove the category Permanently?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{ $categories->links('vendor.pagination.bootstrap-custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection('content')
