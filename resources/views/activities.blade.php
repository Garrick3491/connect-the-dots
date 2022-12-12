@extends('base')

@component('nav')
    @slot('active_home')

    @endslot
    @slot('active_contact')

    @endslot
    @slot('active_activities')
        active
    @endslot
    @slot('active_about_us')

    @endslot
    @slot('underscore_home')
        0
    @endslot
    @slot('underscore_contact')
        0
    @endslot
    @slot('underscore_activities')
        1
    @endslot
    @slot('underscore_about_us')
        0
    @endslot
@endcomponent
@section('content')
    <div class="row text-center mt-5">
        <div class="col-md-12">
            <h1><u>Activities</u></h1>
        </div>
    </div>
    <div class="row mt-5">
        <p>We offer a variety of activities daily, take a look at our examples below! If you have something in mind that you’d really like to do, and you don’t see it here, let us know!</p>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <ul>
                <li>Baking</li>
                <li>Gardening</li>
                <li>Walking</li>
                <li>Crafts</li>
                <li>Animal Care</li>
                <li>Jigsaws</li>
                <li>Board games</li>
                <li>Bingo</li>
                <li>Fitness</li>
                <li>Dancing</li>
                <li>Sensory stories</li>
                <li>Cooking</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li>Sports<ul>
                        <li>Football</li>
                        <li>Badminton</li>
                        <li>Basketball</li>
                    </ul>
                </li>
                <li>Gaming</li>
                <li>Wellness</li>
                <li>Photography</li>
                <li>Book club</li>
                <li>Newsletter club</li>
                <li>Quizzes</li>
                <li>Aerobics</li>
            </ul>
    </div>

    <div class="row">
        <h2 class="text-center"><u>Apply now</u></h2>

        <p>Please click <a href="https://forms.gle/eeiYYPXwwN5E4xYaA">here</a> to apply. If you would prefer to apply by telephone, please call 07845 561300.</p>
    </div>

@endsection
