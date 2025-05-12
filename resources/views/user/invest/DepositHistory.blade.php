
            <div class="cab-content">
                <div class="container">
                    <div class="cab-title">Deposit History<span>:</span></div>
                    <div class="cab-tabs" data-tabs-btns="his">
                        <style>
                            .cab-tabs__item {
                                text-decoration: none;
                            }
                        </style><a href="{{route('user.roi-bonus')}}" class="cab-tabs__item ">All Operations</a><a
                            href="{{route('user.DepositHistory')}}" class="cab-tabs__item active">Deposits</a><a
                            href="{{route('user.Withdraw-History')}}" class="cab-tabs__item">Withdrawal</a><a
                            href="{{route('user.roi-bonus')}}" class="cab-tabs__item">Other</a>
                    </div>
                    <div data-tabs-wrapper="his">
                        <div class="cab-table" data-tabs-item="1">
                            <table class="responsive">
                                <thead>
                                    <tr>
                                        <td>
                                            <div class="cab-table__title">Date</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">Amount</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">Transaction ID</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">Status</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">payment system</div>
                                        </td> 
                                        
                                        <td>
                                            <div class="cab-table__title">Action</div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                        <?php
                                         date_default_timezone_set('UTC');
                                        $cnt = 0; ?>
                                        @foreach($deposit_list as $value)
                                            <tr>
                                                <td>
                                                    <div class="cab-table__date">{{date("D, d M Y H:i:s ", strtotime($value->created_at))}}</div>
                                                </td>

                                                <td>
                                                    <div class="cab-table__val"> {{ $value->amount }} {{generalDetail()->cur_text}}</div>
                                                </td>

                                                <td>
                                                    <div class="cab-table__text">{{ $value->transaction_id }}</div>
                                                </td>

                                                <td>
                                                    <div class="cab-table__status"><span
                                                        class="badge badge-{{ ($value->status=='Active')?'success':'danger' }}">{{ $value->status }}</span></div>
                                                </td>

                                                <td>
                                                    <div class="cab-table__wallet"><img src="assets/img/usdt.svg"
                                                            alt="usdt" />{{$value->payment_mode}}</div>
                                                </td>
                                                    <td>
                                                    <div class="cab-table__wallet">
                                                        
                                                         @if($value->status=="Pending")
                                                <a href="{{route('user.cancel-payment',['id'=>$value->orderId])}}"
                                                name="balance/oper_frm_btncancel"
                                                class="" style="       background: #df3131;
    padding: 10px;
    color: #fff;
    text-decoration: none;
    border-radius: 7px; background: #df3131;"
                                                onClick="return confirm('Are you want to  \'Cancel\'');">Cancel</a>
                                                        @else
                                                            <span>N/A</span>
                                                        @endif
                                                    </div>
                                                </td>

                
                                            </tr>
                                        @endforeach
                
                                        <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           