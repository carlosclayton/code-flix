@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    {!! Table::withContents($users->items())->striped()!!}
                    <div align="center">
                        {!! $users->links() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
