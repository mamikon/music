@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{$singer->name}}
                    </div>
                    <div class="card-body">
                        @forelse($singer->disks as $disk)
                            <div class=" pb-1 pt-1 border-bottom">
                                <a href="{{route('disk.edit', $disk->id)}}">
                                    {{$disk->name}}
                                </a>
                            </div>
                        @empty
                            <div class="alert alert-info">
                                Singer Has no Disks
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
