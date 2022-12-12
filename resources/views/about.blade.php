@extends('base')

@component('nav')
    @slot('active_home')

    @endslot
    @slot('active_contact')

    @endslot
    @slot('active_activities')

    @endslot
    @slot('active_about_us')
        active
    @endslot
    @slot('underscore_home')
        0
    @endslot
    @slot('underscore_contact')
        0
    @endslot
    @slot('underscore_activities')
        0
    @endslot
    @slot('underscore_about_us')
        1
    @endslot
@endcomponent

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-center">About Us</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <p>Connect The Dots is a fun, friendly social centre for people with learning disabilities and Autism.<br><br>
                Our service users can expect happiness, fulfilment and belonging in a community space of their own, with different activities to choose from each day.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <p>Our aims are to:</p>
            <br>
            <ul>
                <li>Enrich the lives of our service users in a happy, vibrant space.</li>
                <li>Provide opportunities for the development of new friendships.</li>
                <li>Encourage communication and social skills.</li>
                <li>Develop life skills, independence and confidence.</li>
                <li>Offer activities that meet users hobbies and interests.</li>
                <li>Engage with our local community and get out and about.</li>
                <li>Provide new experiences inside and outside our centre.</li>
            </ul>
        </div>
    </div>
@endsection
