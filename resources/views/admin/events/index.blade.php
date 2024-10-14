@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('events.title') }}</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">@lang('events.add_new')</a>

    <table class="table">
        <thead>
            <tr>
                <th>{{ __('events.table.title') }}</th>
                <th>{{ __('events.table.artist') }}</th>
                <th>{{ __('events.table.location') }}</th>
                <th>{{ __('events.table.date') }}</th>
                <th>{{ __('events.table.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->artist->name }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">@lang('events.edit')</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">@lang('events.delete')</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
