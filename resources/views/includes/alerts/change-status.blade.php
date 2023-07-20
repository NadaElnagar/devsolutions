<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="font-size: 16px">{{trans('dashboard.change_status')}}</h4>
         </div>
        <div class="modal-body">

            <?php $available_id=config('services.vendor_status.ids');
            $order_Status = \App\Models\OrderStatus::wherein('id',$available_id)->get();?>
            <select name="order_status" id="order_status" required>
               @if($order_Status)
                   @foreach($order_Status as $status)
                       <option value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                @endif
            </select>
             <p style="font-size: 16px">
                {{trans('dashboard.change_status')}}
            </p>
                <div id="count_div" style="display: none">
                    <input type="number" name="counts_bags" class="counts_bags" placeholder=" {{trans('dashboard.number_of_bags')}}"/>
                    <p style="font-size: 16px">
                        {{trans('dashboard.number_of_bags')}}
                    </p>
                </div>
        </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">{{trans('dashboard.close')}}</a>
        <a href="#!" id="change_status" class=" modal-close waves-effect waves-green btn-flat ">{{trans('dashboard.change_status')}}</a>
    </div>
</div><!--begin::Delete Modal-->
</div>

