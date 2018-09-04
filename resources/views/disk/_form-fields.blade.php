@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! csrf_field() !!}
<div class="form-group">
    <label for="name">Name</label>
    <div>
        <input type="text" value="{{old('name', $disk->name ?? '')}}" name="name" class="form-control" id="name" placeholder="Add disk name">
    </div>
</div>
<div class="form-group">
    <label for="singer">Singer</label>
    <div>
        <select name="singer_id" class="form-control" id="singer">
            @foreach($singers as $singer)
                <option @if(old('singer_id', $disk->singer_id ?? '') == $singer->id) {{'selected'}} @endif value="{{$singer->id}}">{{$singer->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
       <button class="btn btn-primary">{{$button_text}}</button>
</div>