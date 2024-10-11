@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="section p-4 mb-4 rounded shadow-sm" id="userProfileSection" style="background-color: #f8f9fa;">
        <h2 class="text-center" style="color: #004085;">@lang('user_profile.user_profile_information')</h2>
        <div class="section-content">
            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <strong class="mb-0" style="color: #212529;">@lang('user_profile.first_name'):</strong>
                </div>
                <div class="col-md-9">
                    @livewire('profile.update-field', ['field' => 'first_name'])
                </div>
            </div>

            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <strong class="mb-0" style="color: #212529;">@lang('user_profile.last_name'):</strong>
                </div>
                <div class="col-md-9">
                    @livewire('profile.update-field', ['field' => 'last_name'])
                </div>
            </div>

            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <strong class="mb-0" style="color: #212529;">@lang('user_profile.email'):</strong>
                </div>
                <div class="col-md-9">
                    @livewire('profile.update-field', ['field' => 'email'])
                </div>
            </div>

            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <strong class="mb-0" style="color: #212529;">@lang('user_profile.rank'):</strong>
                </div>
                <div class="col-md-9">
                    <span id="rank" style="color: #212529;">{{ $user->role === 'admin' ? 'Admin' : 'Client' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section p-4 rounded shadow-sm" id="accountSettingsSection" style="background-color: #f8f9fa;">
        <h2 class="text-center" style="color: #004085;">@lang('user_profile.account_settings')</h2>
        <div class="section-content">
            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <p class="mb-0" style="color: #212529;">@lang('user_profile.shipping_address'):</p>
                </div>
                <div class="col-md-9">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#editAddressModal" class="btn btn-outline-primary">@lang('user_profile.manage_addresses')</a>
                </div>
            </div>
            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <p class="mb-0" style="color: #212529;">@lang('user_profile.security_settings'):</p>
                </div>
                <div class="col-md-9">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#editSecurityModal" class="btn btn-outline-primary">@lang('user_profile.change_password')</a>
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="row align-items-center my-3">
                <div class="col-md-3 text-md-end text-start">
                    <p class="mb-0" style="color: #dc3545;">@lang('user_profile.delete_account'):</p>
                </div>
                <div class="col-md-9">
                    <form action="{{ route('user.deleteAccount') }}" method="POST" onsubmit="return confirm('@lang('user_profile.confirm_delete_account')');">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">@lang('user_profile.delete_account')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.modals.editAddress')
@include('partials.modals.editSecurity')
@endsection
