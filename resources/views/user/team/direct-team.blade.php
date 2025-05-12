<div class="cab-content">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="cab-title"> <img src="/assets/img/cab-title-icon-1.svg" alt="cab-title-icon-1" />Invite your
                    friends:</div>
            </div>
        </div>
        <div class="cab-refs-page">
            <div class="cab-refs__box">
                <p id="refs">{{ asset('') }}register?ref={{ Auth::user()->username }}</p>
                <div class="cab-refs__copy copy-text" data-clipboard-target="#refs">copy
                    <svg>
                        <use xlink:href="/assets/img/sprite.svg#cab-menu-6"></use>
                    </svg>
                </div>
            </div>
            <div class="cab-refs__btns">
                <div class="cab-refs__btns-title"><svg>
                        <use xlink:href="/assets/img/sprite.svg?v=1.1#info"></use>
                    </svg>Pay attention</div><a class="cab-refs__btn" href="#" style="margin-right: 10px;"><img
                        src="/assets/img/refs-btn-1.svg" alt="refs-btn-1" />promo materials<div
                        class="cab-refs__btn-arrow"><svg>
                            <use xlink:href="/assets/img/sprite.svg?v=1.1#arrow-bd"></use>
                        </svg></div></a><a class="cab-refs__btn orange"
                    href="/EtritonAi.pdf" target="_blank"><img
                        src="/assets/img/refs-btn-2.svg" alt="refs-btn-2" />Presentation PDF<div
                        class="cab-refs__btn-arrow"><svg>
                            <use xlink:href="/assets/img/sprite.svg?v=1.1#arrow-bd"></use>
                        </svg></div></a>
            </div>
        </div>

    
       
        <div class="cab-title">statistics<span>:</span></div>
        <div class="cab-tabs" data-tabs-btns="refs">

            @for ($l=1;$l<=3;$l++)
            <a href="{{route('user.referral-team') }}?selected_level={{$l}}" class="cab-tabs__item <?php echo  (Session::get('selected_level')==$l)?"active":""?>"
            style="text-decoration: none;">Level {{$l}}</a> 
            @endfor
           
        </div>
        <br>
      
        <div class="cab-title">Level {{Session::get('selected_level')}} Referrals:</div>
        <div class="cab-his__item">
            <table class="responsive">
                <thead>
                    <tr>
                        <td>
                            <div class="cab-his__title">Name</div>
                        </td>
                        <td>
                            <div class="cab-his__title">User Id</div>
                        </td>
                        <td>
                            <div class="cab-his__title">Registration date</div>
                        </td>
                        <td>
                            <div class="cab-his__title">E-mail</div>
                        </td> 
                        <td>
                            <div class="cab-his__title">Package</div>
                        </td>
                        <td>
                            <div class="cab-his__title">Status</div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    

                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                        <?php
                           date_default_timezone_set('UTC');
                        $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)
                            <tr>
                                <td>
                                    <div class="cab-his__val">{{ $value->name }}</div>
                                </td>

                                <td>
                                    <div class="cab-his__val">{{ $value->username }}</div>
                                </td>

                                <td>
                                    <div class="cab-his__val">{{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}</div>
                                </td>
                                <td>
                                    <div class="cab-his__val">{{ $value->email }}</div>
                                </td>
                                    <td>
                                    <div class="cab-his__val">{{currency()}} {{ $value->investment->sum('amount') }}</div>
                                </td>

                                <td>
                                    <div class="cab-his__val"><span
                                        class="{{ $value->active_status == 'Active' ? 'green' : 'red' }}-tag">{{ $value->active_status }}</span></div>
                                </td>



                            </tr>
                        @endforeach

                        <?php }?>

                </tbody>
            </table>
            <br>

            {{ $direct_team->withQueryString()->links() }}
            <br>

        </div>
    </div>
</div>
