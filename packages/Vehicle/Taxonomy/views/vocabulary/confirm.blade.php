@extends('layout.admin.default')

@section('content')
	{!! Form::open(array('class' => 'form-inline',  'method' => 'DELETE', 'route' => array('admin.vocabulary.destroy', $vocab->vid))) !!}
		Do you really want to delete {{ $vocab->name }} ?		
        <a href="{{ url('/admin/vocabulary') }}"class="btn btn-default">Cancel</a>
        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
    {!! Form::close() !!}
@endsection