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
                <form role="form" method="POST" class="form-horizontal" action="{{ url('/admin/vocabulary') }}">
                	{!! csrf_field() !!}
                  	<div class="box-body">
                    	<div class="form-group">
                      		<label for="name" class="col-sm-2 control-label">Name</label>
                      		<div class="col-sm-10">
                        		<input type="text" class="form-control" required="required" id="name" placeholder="Vocbulary Name" name="name" />
                      		</div>
                    	</div>
                    	<div class="form-group">
                      		<label for="description" class="col-sm-2 control-label">Description</label>
                      		<div class="col-sm-10">
                        		<input type="text" class="form-control" id="description" placeholder="Description" name="description" >
                      		</div>
                    	</div>
                   	</div><!-- /.box-body -->
                  	<div class="box-footer">
	                    <a href="{{ url('/admin/vocabulary') }}" class="btn btn-default">Cancel</a>
	                    <button type="submit" class="btn btn-info pull-right">Create</button>
                  	</div><!-- /.box-footer -->
                </form>
            </div><!-- /.box -->
    	</div>
    </div>
@endsection