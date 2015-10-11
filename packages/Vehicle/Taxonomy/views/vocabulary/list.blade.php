@extends('layout.admin.default')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
    <div class="row">
        <div class="col-xs-12">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Taxonomy Vocabulary</h3>
                    <div class="box-tools">
                        <a href="{{ url('admin/vocabulary/create') }}" class="btn btn-primary">+Add Vocabulary</a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Vocabulary Name</th>
                            <th>Operations</th>
                            <th></th>
                            <th></th>
                        </tr>
                         @foreach ($vocabs as $key => $value)
                            <tr>
                                <td>{{ $value->name  }}</td>
                                <td>
                                    <a data-original-title="Edit" href="{{ route('admin.vocabulary.edit', $value->vid) }}" data-toggle="tooltip" title="" class="tooltips js-ajax-delete"><i class="fa fa-pencil-square-o"></i></a>/
                                    <a data-original-title="Edit" href="{{ url('admin/vocabulary/'. $value->vid. '/confirm') }}" data-toggle="tooltip" title="" class="tooltips js-ajax-delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td>List Terms</td>
                                <td>Add Terms</td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@endsection