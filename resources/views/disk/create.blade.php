@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create new Disk
                    </div>
                    <div class="card-body">
                        <form action="{{route('disk.store')}}" method="post">
                            @include('disk._form-fields', ['singers' => $singers, 'button_text'=>'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
