@extends('base')

@component('nav')
    @slot('active_home')

    @endslot
    @slot('active_contact')
         active
    @endslot
    @slot('active_activities')

    @endslot
    @slot('active_about_us')

    @endslot
    @slot('underscore_home')
        0
    @endslot
    @slot('underscore_contact')
        1
    @endslot
    @slot('underscore_activities')
        0
    @endslot
    @slot('underscore_about_us')
        0
    @endslot
@endcomponent
@section('content')
    <div class="col-md-12 mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-header bg-warning">
                Contact Us
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ADDRESS</li>
                <li class="list-group-item"><a href="mailto:connectthedotsbradford@gmail.com">Send us an email</a></li>
                <li class="list-group-item">07845 561300</li>
            </ul>
        </div>
    </div>
@endsection
