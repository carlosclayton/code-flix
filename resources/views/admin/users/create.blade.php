@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php $icon = Icon::create('floppy-disk') ?> New</div>

                <div class="panel-body">
                    {!! form($form->add('Save', 'submit',[
                        'attr' => ['class' => 'btn btn-primary btn-block'],
                        'label' => $icon
                    ]))
                    !!}

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
