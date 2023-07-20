<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="font-size: 16px">{{trans('dashboard.confirm_delete')}}</h4>
         </div>
        <div class="modal-body">
            <input type="hidden" class="input-url" />
            <input type="hidden" class="input-id" />
            <p style="font-size: 16px">
                {{trans('dashboard.deleteAction')}}
            </p>
        </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">{{trans('dashboard.close')}}</a>
        <a href="#!" id="delete-button" class="modal-action modal-close waves-effect waves-green btn-flat ">{{trans('dashboard.delete')}}</a>
    </div>
</div><!--begin::Delete Modal-->
</div>
