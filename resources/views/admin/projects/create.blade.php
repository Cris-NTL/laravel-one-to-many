@extends('layouts.admin')

@section('content')
    <h2>Add a new project</h2>

    @include('partials.errors')

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="type">Type</label>
            <select class="form-select" id="type" name="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
