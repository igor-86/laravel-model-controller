@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="my-cont">

                @foreach ($movies as $item)
                    <div class="my-card">
                        <div class="img">
                            <img src="{{ $item->image }}" alt="{{ $item->title }}">
                        </div>
                        <div class="info">
                            <div class="title">
                                <p>Title</p>
                                <h3 class="color-orange">{{ $item->title }}</h3>
                            </div>
                            <div class="title">
                                <p>Date</p>
                                <h3 class="color-orange">{{ $item->nationality }}</h3>
                            </div>
                            <div class="title">
                                <p>Date</p>
                                <h3>{{ $item->date }}</h3>
                            </div>
                            <div class="title">
                                <p>Date</p>
                                <h3 class="vote">{{ $item->vote }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
