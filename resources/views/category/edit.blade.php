@extends('master')

@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert-info">
                {{ session('message') }}
            </div>
        @endif
        <form class="form-control-lg" action="{{ route('category.update', $category) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put') }}

            <div class="component" data-content="">
                <div>
                    <label class=col-md-12> Category Name  </label>
                    <div>
                        <input class='form-control field' type='text' name='name' value="{{ $category->name }}" id='Name' placeholder='Category Name'/>
                    </div>
                </div>
                <hr/>
                <div class="float-md-right col-lg-12">
                    <button type="submit" class='btn btn-success col-md-2'>Update</button>
                    <a href="{{ route('category.index') }}" class="btn btn-danger col-md-2">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection