@extends('main::templates.admin')

@section('page_title')
    {{ env('APP_NAME') }}
@endsection
@section('content')
    <div class="widget-column col-md-8">
        <div class="widget">
            <div class="widget-wrapper">
                <div class="widget-heading">
                    <h1>Recent Activity</h1>
                </div>

                <div class="widget-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <span><strong>Appointment ABC2341</strong> Created</span>
                                <small>10:02 AM</small>
                            </div>

                            <small>By admin</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <span>user<strong> admin</strong> has added a note on X-ray</span>
                                <small>9:00 AM</small>
                            </div>

                            <small>By admin</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <span>Crew<strong>John Doe</strong> has started exam X-ray</span>
                                <small>9:00 AM</small>
                            </div>

                            <small>system</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <span><strong>Appointment ABC</strong> status has been updated to "In Progress"</span>
                                <small>08:11 AM</small>
                            </div>

                            <small>By admin</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <span>Crew <strong>John Doe</strong> has Checked-in</span>
                                <small>08:06 AM</small>
                            </div>

                            <small>system</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-column col-md-4">
        <div class="widget">
            <div class="widget-wrapper">
                <div class="widget-heading">
                    <h1>Crew Dashboard</h1>
                </div>

                <div class="widget-body">
                    <p>Hello there!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
