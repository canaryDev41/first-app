@extends('master')

@section('content')
    <div class="container container-fluid " style="margin-top: 10%;">
        @if(session('message'))
            <div class="alert-info">
                {{ session('message') }}
            </div>
        @endif
        <form class="form-control-lg" action="{{ route('product.store') }}" method="post">
            {{ csrf_field() }}
            <div class="component" data-content="">
                <div class="form-group">
                    <label class=col-md-12> Product Name</label>
                    <div>
                        <input class='form-control field' type='text' name='name' id='name' placeholder='Product Name'/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Category ID </label>
                    <div>
                        <select class='form-control field' required type='option' name='category_id' id='category_id'>
                            <option value="">select category ...</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            <select/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Price</label>
                    <div>
                        <input class='form-control field' type='text' name='price' id='price' placeholder='Price'/>
                    </div>
                </div>
                <div class=" pull-right ">
                    <button id="save" type="submit" class='btn btn-success '>Save</button>
                    <a href="{{ route('product.index') }}" class="btn btn-danger ">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection