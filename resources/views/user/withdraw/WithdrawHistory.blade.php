
<div class="cab-content">
    <div class="container">
        <div class="cab-title">Withdrawal History<span>:</span></div>
        <div class="cab-tabs" data-tabs-btns="his">
            <style>
                .cab-tabs__item {
                    text-decoration: none;
                }
            </style><a href="{{route('user.roi-bonus')}}" class="cab-tabs__item ">All Operations</a><a
                href="{{route('user.DepositHistory')}}" class="cab-tabs__item">Deposits</a><a
                href="{{route('user.Withdraw-History')}}" class="cab-tabs__item active">Withdrawal</a><a
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
                                <div class="cab-table__title">Charge 5%</div>
                            </td>
                            <td>
                                <div class="cab-table__title">Payable Amount</div>
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
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(is_array($withdraw_report) || is_object($withdraw_report)){ ?>

                            <?php
                            date_default_timezone_set('UTC');
                            $cnt = 0; ?>
                            @foreach($withdraw_report as $value)
                                <tr>
                                    <td>
                                        <div class="cab-table__date">{{date("D, d M Y H:i:s ", strtotime($value->created_at))}}</div>
                                    </td>

                                    <td>
                                        <div class="cab-table__val"> {{ $value->amount }} {{generalDetail()->cur_text}}</div>
                                    </td>

                                    <td>
                                        <div class="cab-table__val"> {{ $value->amount*5/100 }} {{generalDetail()->cur_text}}</div>
                                    </td>

                                    <td>
                                        <div class="cab-table__val"> {{ $value->amount-$value->amount*5/100  }} {{generalDetail()->cur_text}}</div>
                                    </td>

                                    <td>
                                        <div class="cab-table__text">{{ $value->txn_id }}</div>
                                    </td>

                                    <td>
                                        <div class="cab-table__status"><span
                                            class="badge badge-{{ ($value->status=='Active')?'success':'danger' }}">{{ $value->status }}</span></div>
                                    </td>

                                    <td>
                                        <div class="cab-table__wallet"><img src="assets/img/usdt.svg"
                                                alt="usdt" />USDT</div>
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
