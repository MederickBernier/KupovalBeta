<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAddressModalLabel">@lang('user_profile.edit_address')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAddressForm">
                    @csrf
                    <div class="mb-3">
                        <label for="address" class="form-label">@lang('user_profile.address')</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">@lang('user_profile.city')</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}">
                    </div>
                    <div class="mb-3">
                        <label for="zip_code" class="form-label">@lang('user_profile.zip_code')</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $user->zip_code }}">
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('user_profile.save_changes')</button>
                </form>
            </div>
        </div>
    </div>
</div>
