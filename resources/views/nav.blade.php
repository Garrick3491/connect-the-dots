<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <span class="navbar-brand mb-0 h1"><img style="max-width: 25%; height: auto;" src="{{ asset('images/Connect_The_Dots_Logo.png') }}" alt="Logo"></span>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @component('nav-pill')
                @slot('active')
                    {{$active_home}}
                @endslot
                @slot('underscore')
                    {{$underscore_home}}
                @endslot
                @slot('url')
                    {{url('/')}}
                @endslot
                    @slot('title')
                        Home
                    @endslot
            @endcomponent
{{--                @component('nav-pill')--}}
{{--                    @slot('active')--}}
{{--                        {{$active_about_us}}--}}
{{--                    @endslot--}}
{{--                        @slot('underscore')--}}
{{--                            {{$underscore_about_us}}--}}
{{--                        @endslot--}}
{{--                    @slot('url')--}}
{{--                        {{url('/about')}}--}}
{{--                    @endslot--}}
{{--                    @slot('title')--}}
{{--                        About Us--}}
{{--                    @endslot--}}
{{--                @endcomponent--}}
                @component('nav-pill')
                    @slot('active')
                        {{$active_activities}}
                    @endslot
                    @slot('underscore')
                        {{$underscore_activities}}
                    @endslot
                    @slot('url')
                        {{url('/activities')}}
                    @endslot
                    @slot('title')
                        Activities
                    @endslot
                @endcomponent
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Contact Us <span class="sr-only"></span></a>
                </li>

        </ul>
    </div>
</nav>

<!-- Modal -->
<div class="modal" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ADDRESS</li>
                    <li class="list-group-item">07845 561300</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="mailto:connectthedotsbradford@gmail.com" class="btn btn-warning">Email Us</a>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
