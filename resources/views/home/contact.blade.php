@extends('layouts.app')

@section('content')
<div class="contact-form shadow">
    <h2>@lang('contact.contact_us')</h2>
    <p>@lang('contact.contact_text')</p>
    <form>
        <div class="form-group">
            <label for="name">@lang('contact.name')</label>
            <input type="text" id="name" placeholder="@lang('contact.placeholder_name')">
        </div>
        <div class="form-group">
            <label for="email">@lang('contact.email_address')</label>
            <input type="email" id="email" placeholder="@lang('contact.placeholder_email')">
        </div>
        <div class="form-group">
            <label for="message">@lang('contact.message')</label>
            <textarea id="message" rows="4" placeholder="@lang('contact.placeholder_message')"></textarea>
        </div>
        <button type="submit" class="btn-submit">@lang('contact.submit')</button>
    </form>
</div>
@endsection
