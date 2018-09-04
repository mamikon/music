@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        Disks
                        <a class="btn btn-sm float-right btn-primary" href="{{route('disk.create')}}">Add new</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('disk._disk_list', compact($disks))
                        <div class="mt-3">
                            {{ $disks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
