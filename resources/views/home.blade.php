@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Pagina Home - Lista Film</h1>
            <ul>
                @foreach ($movies as $item)
                    <li>
                        {{ $item->title }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
