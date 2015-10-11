@extends('layout.admin.default')

@section('content')
	<div class="row">
		<div class="col-md-12">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Horizontal Form</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				{!! Form::model($vocab, array('route' => array('admin.vocabulary.update', $vocab->vid), 'method' => 'PUT', 'class' => 'form-horizontal' )) !!}
					<div class="box-body">

						<div class="form-group">
							{!! Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) !!}
							<div class="col-sm-10">
								{!! Form::text('name', null, array('class' => 'form-control' )) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('description', 'Description', array('class' => 'col-sm-2 control-label')) !!}
							<div class="col-sm-10">
								{!! Form::text('description', null, array('class' => 'form-control')) !!}
							</div>
						</div>
					</div>
				<div class="box-footer">    
					<a href="{{ url('/admin/vocabulary') }}" class="btn btn-default pull-left">Cancel</a>
					{!! Form::submit('Edit', array('class' => 'btn btn-info pull-right')) !!}
				</div>
				{!! Form::close() !!}
			</div><!-- /.box -->
		</div>
	</div>
@endsection