
            <div class="cab-content">
                <div class="container">
                    <div class="cab-title">history<span>:</span></div>
                    <div class="cab-tabs" data-tabs-btns="his">
                        <style>
                            .cab-tabs__item {
                                text-decoration: none;
                            }
                        </style><a href="{{route('user.roi-bonus')}}" class="cab-tabs__item active">All Operations</a><a
                            href="{{route('user.DepositHistory')}}" class="cab-tabs__item">Deposits</a><a
                            href="{{route('user.Withdraw-History')}}" class="cab-tabs__item">Withdrawal</a><a
                            href="{{route('user.roi-bonus')}}" class="cab-tabs__item">Other</a>
                    </div>
                    <div data-tabs-wrapper="his">
                        <div class="cab-table" data-tabs-item="1">
                            <table class="responsive">
                                <thead>
                                    <tr>
                                        <td>
                                            <div class="cab-table__title">date</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">amount</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">operation</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">status</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__title">payment system</div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                        <?php  date_default_timezone_set('UTC');  $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)

                                    <tr>
                                        <td>
                                            <div class="cab-table__date">{{date("D, d M Y H:i:s", strtotime($value->created_at)) }}</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__val">{{ $value->comm }} {{generalDetail()->cur_text}}</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__text">{{ $value->remarks }}</div>
                                        </td>
                                        <td>
                                            <div class="cab-table__status">Received</div>
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
                            
                              {{ $level_income->withQueryString()->links() }}
                              
                              <br>
                        </div>
                    </div>
                </div>
            </div>
          