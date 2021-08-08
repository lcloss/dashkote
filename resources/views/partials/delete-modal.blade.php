<!-- Modal -->
<div class="modal fade" id="confirmationDeleteModal" tabindex="-1" aria-labelledby="confirmationDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="" method="POST" id="deleteConfirmationForm">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationDeleteModalLabel">{{ __('Confirm delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __('Are you sure you want to delete?') }}</p>
                    <p class="text-danger">{!! __('If you confirm, <span id="deleteItem-type"></span> <strong>#<span id="deleteItem-id"></span> (<span id="deleteItem-name"></span>)</strong> will be deleted and cannot be restored.') !!}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Confirm') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
