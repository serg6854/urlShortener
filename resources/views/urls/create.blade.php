@extends('app')

@section('content')
    <form action="{{ route('urls.store') }}" method="post" novalidate>
        @csrf

        <div class="form-group">
            <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" placeholder="Url"
                   value="{{ old('url') }}"
            >
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="number" class="form-control @error('lifetime') is-invalid @enderror" name="lifetime"
                   placeholder="Lifetime (in seconds)"
                   value="{{ old('lifetime') }}"
            >
            @error('lifetime')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Shorten</button>
    </form>

    <div class="list-group">
        @foreach($urls as $url)
            <a href="{{ $url->shorten }}" class="list-group-item list-group-item-action" target="_blank">{{ $url->url }}</a>
        @endforeach
    </div>
@endsection
