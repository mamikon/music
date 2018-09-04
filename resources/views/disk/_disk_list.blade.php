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