@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Disk
                    </div>
                    <div class="card-body">
                        <form action="{{route('disk.update', $disk->id)}}" method="post">
                            {{ method_field('put') }}
                            @include('disk._form-fields', ['singers' => $singers, 'button_text'=>'Update', 'disk' => $disk])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
