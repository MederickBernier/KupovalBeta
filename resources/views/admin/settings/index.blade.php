@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('settings.settings') }}</h1>

    <form action="{{ route('admin.settings.updateGeneral') }}" method="POST">
        @csrf
        <h3>{{ __('settings.general_settings') }}</h3>

        <div class="mb-3">
            <label for="site_name" class="form-label">{{ __('settings.site_name') }}</label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $settings['site_name'] ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="default_language" class="form-label">{{ __('settings.default_language') }}</label>
            <select class="form-control" id="default_language" name="default_language">
                <option value="en" {{ ($settings['default_language'] ?? '') == 'en' ? 'selected' : '' }}>{{ __('settings.english') }}</option>
                <option value="fr" {{ ($settings['default_language'] ?? '') == 'fr' ? 'selected' : '' }}>{{ __('settings.french_canadian') }}</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="timezone" class="form-label">{{ __('settings.timezone') }}</label>
            <input type="text" class="form-control" id="timezone" name="timezone" value="{{ $settings['timezone'] ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="seo_meta_title" class="form-label">{{ __('settings.seo_meta_title') }}</label>
            <input type="text" class="form-control" id="seo_meta_title" name="seo_meta_title" value="{{ $settings['seo_meta_title'] ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="seo_meta_description" class="form-label">{{ __('settings.seo_meta_description') }}</label>
            <textarea class="form-control" id="seo_meta_description" name="seo_meta_description">{{ $settings['seo_meta_description'] ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('settings.update_general_settings') }}</button>
    </form>

    <hr>

    <form action="{{ route('admin.settings.updatePayment') }}" method="POST">
        @csrf
        <h3>{{ __('settings.payment_settings') }}</h3>

        <div class="mb-3">
            <label for="currency" class="form-label">{{ __('settings.currency') }}</label>
            <input type="text" class="form-control" id="currency" name="currency" value="{{ $settings['currency'] ?? '' }}" required>
        </div>

        <div class="mb-3">
            <label for="tps" class="form-label">{{ __('settings.tps') }} (%)</label>
            <input type="text" class="form-control" id="tps" name="tps" value="{{ $settings['tps'] ?? '5' }}" required>
        </div>

        <div class="mb-3">
            <label for="tvq" class="form-label">{{ __('settings.tvq') }} (%)</label>
            <input type="text" class="form-control" id="tvq" name="tvq" value="{{ $settings['tvq'] ?? '9.975' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('settings.update_payment_settings') }}</button>
    </form>
</div>
@endsection
