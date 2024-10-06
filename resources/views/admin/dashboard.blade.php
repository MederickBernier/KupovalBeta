@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">@lang('dashboard.dashboard')</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active text-dark" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">@lang('dashboard.overview')</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">@lang('dashboard.orders')</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="activities-tab" data-bs-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false">@lang('dashboard.activities_users')</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="products-tab" data-bs-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false">@lang('dashboard.artworks')</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="customers-tab" data-bs-toggle="tab" href="#customers" role="tab" aria-controls="customers" aria-selected="false">@lang('dashboard.customers_tickets')</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="feedback-tab" data-bs-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">@lang('dashboard.user_feedback')</a>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content mt-4" id="dashboardTabsContent">
        <!-- Overview Tab -->
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="row">
                <div class="col-md-12">
                    @livewire('dashboard.summary-cards')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @livewire('dashboard.announcements')
                </div>
            </div>
        </div>

        <!-- Orders Tab -->
        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <div class="row">
                <div class="col-md-6">
                    @livewire('dashboard.recent-orders')
                </div>
                <div class="col-md-6">
                    @livewire('dashboard.pending-reviews')
                </div>
            </div>
        </div>

        <!-- Activities & Users Tab -->
        <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
            <div class="row">
                <div class="col-md-6">
                    @livewire('dashboard.recent-activities')
                </div>
                <div class="col-md-6">
                    @livewire('dashboard.recent-users')
                </div>
            </div>
        </div>

        <!-- Products Tab -->
        <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
            <div class="row">
                <div class="col-md-6">
                    @livewire('dashboard.top-products')
                </div>
                <div class="col-md-6">
                    @livewire('dashboard.low-stock-products')
                </div>
            </div>
        </div>

        <!-- Customers & Tickets Tab -->
        <div class="tab-pane fade" id="customers" role="tabpanel" aria-labelledby="customers-tab">
            <div class="row">
                <div class="col-md-6">
                    @livewire('dashboard.top-customers')
                </div>
                <div class="col-md-6">
                    @livewire('dashboard.pending-tickets')
                </div>
            </div>
        </div>

        <!-- User Feedback Tab -->
        <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
            @livewire('dashboard.user-feedback')
        </div>
    </div>
</div>
@endsection
