@extends('layouts.app')

@section('content')

    <div class="card card-deafult ">
        <div class="card-header">Create Category</div>

        <div class="card-body">

            @if ($errors->any())

            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error )

                        <li class="list-group-item text-danger">
                            {{ $errors }}
                        </li>

                    @endforeach
                </ul>
            </div>


            @endif

            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" >

                    <div class="form-group my-2">

                        <button class="btn btn-success">Add Category</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection
