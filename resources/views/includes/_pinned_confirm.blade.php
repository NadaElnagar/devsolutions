<div id="delete_modal" class="modal fade" style="margin-top: 13%">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 16px">{{trans('dashboard.confirm_delete')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="input-url" />
                <input type="hidden" class="input-id" />
                <p style="font-size: 16px">
                    {{trans('dashboard.deleteAction')}}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">{{trans('dashboard.close')}}</button>
                <button type="button" id="delete-button" class="btn btn-danger">{{trans('dashboard.delete')}}</button>
            </div>
        </div>
    </div>
</div>
