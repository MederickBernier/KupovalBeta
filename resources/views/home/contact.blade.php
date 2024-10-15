@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="contact-form shadow p-4">
        <h2 class="mb-4">@lang('contact.contact_us')</h2>
        <p class="mb-4">@lang('contact.contact_text')</p>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">@lang('contact.name')</label>
                <input type="text" id="name" class="form-control" placeholder="@lang('contact.placeholder_name')" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">@lang('contact.email_address')</label>
                <input type="email" id="email" class="form-control" placeholder="@lang('contact.placeholder_email')" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">@lang('contact.message')</label>
                <textarea id="message" class="form-control" rows="4" placeholder="@lang('contact.placeholder_message')" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang('contact.submit')</button>
        </form>
    </div>
</div>
@endsection
