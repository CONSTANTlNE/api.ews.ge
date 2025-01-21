<div id="animateModal{{$index}}" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="animateModalLabel"
     aria-hidden="true">
    <div style="justify-content: center;align-items: center"
         class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('backupusers.delete')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Backup User</h5>
                    <button data-pc-modal-dismiss="#animateModal{{$index}}"
                            class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    are you sure to delete this user ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-pc-modal-dismiss="#animateModal{{$index}}">
                        Close
                    </button>
                    <button type="button"
                            class="btn btn-primary ltr:ml-2 trl:mr-2">
                        delete
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
