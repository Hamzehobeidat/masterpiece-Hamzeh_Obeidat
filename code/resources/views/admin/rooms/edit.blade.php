@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Room
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label for="capacity">Capacity</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->capacity) }}" step="1">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $room->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection