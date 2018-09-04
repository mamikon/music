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
                        @forelse($disks as $disk)
                            <div class="row pb-1 pt-1 border-bottom">
                                <div class="col-sm-11">
                                    <a href="{{route('disk.edit', $disk->id)}}">
                                        {{$disk->name}}
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    <form class="float-right form-inline" method="post"
                                          action="{{route('disk.destroy', $disk->id)}}">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info">
                                <div class="font-weight-bold">There are no discs.</div>
                                <div>
                                    Fill free to add new ones.
                                    <br>
                                    <a href="{{route('disk.create')}}"> Create new disk</a>
                                </div>
                            </div>
                        @endforelse
                        <div class="mt-3">
                            {{ $disks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
