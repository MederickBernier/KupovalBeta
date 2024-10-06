<div class="modal fade" id="editSecurityModal" tabindex="-1" aria-labelledby="editSecurityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSecurityModalLabel">@lang('user_profile.security_settings')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editSecurityForm">
                    @csrf
                    <div class="mb-3">
                        <label for="current_password" class="form-label">@lang('user_profile.current_password')</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">@lang('user_profile.new_password')</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">@lang('user_profile.confirm_password')</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('user_profile.save_changes')</button>
                </form>
            </div>
        </div>
    </div>
</div>
