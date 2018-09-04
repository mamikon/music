@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        Singers
                    </div>
                    <div class="card-body">
                        @foreach($singers as $singer)
                            <div class=" pb-1 pt-1 border-bottom">
                                <a href="{{route('singer-disks', $singer->id)}}">
                                    {{$singer->name}}
                                </a>
                            </div>
                        @endforeach
                        <div class="mt-3">
                            {{ $singers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
