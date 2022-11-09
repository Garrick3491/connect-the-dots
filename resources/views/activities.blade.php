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
@endcomponent
