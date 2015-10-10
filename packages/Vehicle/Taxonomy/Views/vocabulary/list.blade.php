@extends('layout.admin.default')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Taxonomy Vocabulary</h3>
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
                                <td>Edit Vocabulary</td>
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