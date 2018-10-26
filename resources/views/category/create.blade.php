    @extends('master')

    @section('content')
        <div class="container container-fluid " style="margin-top: 10%;">
                <form class="form-control-lg" action="{{ route('category.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="component" data-content="">
                        <div class="form-group">
                            <label class=col-md-12>Add New Category </label>
                            <div>
                                <input class='form-control field' type='text' name='name' id='Name' placeholder='Category Name'/>
                            </div>
                        </div>
                        <div class=" pull-right ">
                            <button id="save" type="submit" class='btn btn-success '>Save</button>
                            <a href="{{ route('category.index') }}" class="btn btn-danger ">Cancel</a>
                        </div>
                    </div>
                </form>
        </div>
    @endsection