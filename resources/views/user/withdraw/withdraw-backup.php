<div class="cab-content">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.cab-head {
 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    z-index: 1;
    padding-bottom: 108px;
    margin-bottom: auto;
}
.sample {
  padding: 2rem;
  text-align: center;
}

p {
    line-height: 1.6;
    margin-top: 1rem;
    font-size: medium;
}


button {
  background: transparent;
  border: 0;
  color: #666;
  cursor: pointer;
  display: inline-block;
  font-size: 1rem;
  font-weight: bold;
  padding: 0 1rem;
  text-transform: uppercase;

  &:hover {
    color: #111;
  }

  &.open-modal {
    background: #000;
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    margin: 1rem 0.5rem;
    padding: 1rem;
  }
}

/* Modal styles */
.modal {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding: 2rem;
  position: static;
  top: 0;
  width: 100%;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease;

  .modal-backdrop {
    background: rgba(#000, 0.7);
    height: 100%;
    width: 100%;
    position: fixed;
  }

  .modal-content {
    background: #fff;
    border-radius: 5px;
    max-width: 600px;
    position: fixed;
    top: -100%;
    transition: all 0.6s ease;
    z-index: 1000;
  }

  .modal-header {
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #ccc;
    padding: 1.5rem;

    .close-modal {
      font-size: 2rem;
      padding: 0;
      margin: 0;
      height: 30px;
      width: 30px;
      text-align: center;

      &:hover {
        color: #000;
      }
    }
  }
  
  .close-modal {
    position: absolute;
    right: 15px;
    top: 15px;
    background-image: none;
    height: 20px;
    width: 20px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50%;
    opacity: 0.3;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    cursor: pointer;
}

  .modal-body {
    padding: 1.5rem;
  }

  .modal-footer {
    border-top: 1px solid #ccc;
    padding: 1rem;
    text-align: right;
  }

  &.visible {
    opacity: 1;
    visibility: visible;

    .modal-content {
      top: 25%;
    }
  }
}
a.result__txLink.btnText._primary {
    text-decoration: none;
    text-align: center;
    font-size: 18px;
    color: #4574eb;
}

.to-transaction
{
      background: #1bb257;
    width: 200px;
    margin: 0px auto;
    margin-top: 18px;
    color: #fff;
    padding: 10px;  
}
.review {
    background: #f5f6fa;
    border-radius: 0 0 8px 8px;
    padding: 32px 16px;
    text-align: center;
    width: 100%;
}

    </style>
    <div class="container">
        <div class="cab-card-modal mfp-hide" id="card">
            <div class="mfp-close">+</div>
            <div class="container">
                <div class="cab-title">Withdrawal to the card<span>:</span></div>
                <div class="cab-card-modal__card-wrap"><img src="/assets/img/cab-card.png" alt="cab-card" />
                    <div class="card-input__wrap"><input class="card-input" id="cc-number" type="text"
                            placeholder="Enter card number"></div>
                </div>
                <div class="cab-card-modal__confirm-wrap">
                    <div class="cab-card-modal__confirm"><label class="sign-check"><input type="checkbox"
                                checked><span>By clicking “Submit” below, you agree to the Terms of Use of
                                our site.</span></label>
                        <div class="text-center"><button type="button" id="card-submit"
                                class="main-btn main-btn_orange">Confirm</button></div>
                    </div>
                </div>
                <div class="cab-card-modal__error" style="display: none;">
                    <div class="error-arrow">
                        <div class="error-arrow__inner"><img src="/assets/img/error-down-arrow.svg"
                                alt="error-down-arrow" /></div>
                    </div>
                    <div class="error-text">The card is not registered in the system</div>
                    <div class="error-descr">For information, follow the link: <a href="/card" target="_blank">Debit
                            card</a></div>
                </div>
            </div>
        </div>
        <style>
            .cab-bal__item .main-btn {
                box-shadow: 1px 18px 20px 0px rgb(0 0 0 / 14%);
            }
        </style>

      
        <form method="post" action="{{ route('user.Withdraw-Request') }}" name="add">
            {{ csrf_field() }}
            <div class="cab-title">select payment system<span>:</span></div>
            <div class="cab-wallets">
                
                <label><input type="radio" name="PSys" value="USDT.BEP20" checked data-icon="usdtBep20"
                        data-curr="USDT" data-min="0.0000000000" data-rate="1">
                    <p> <img src="/assets/img/usdt.svg" alt="usdt" />USDT BEP20 <span>( USDT )</span></p>
                </label><label><input type="radio" name="PSys" value="USDT.TRC20" data-icon="usdtTrc20"
                        data-curr="USDT" data-min="0.0000000000" data-rate="1">
                    <p> <img src="/assets/img/usdt.svg" alt="usdt" />USDT TRC20 <span>( USDT )</span></p>
                </label>
            </div>
            <div class="cab-title">enter amount<span>:</span></div>
            
            <label class="cab-amount"><input type="text"
                    name="amount" value="" placeholder="0"><img class="amount-icon"
                    src="/assets/img/usdt.svg" alt="btc" /></label>
                    <p class="cashback-info-label"> </p>

                    <br>

                    <div class="cab-title">Wallet Address<span>:</span></div>


                    <label class="cab-amount"><input type="text" id="walletAddress"
                        name="walletAddress"  value="{{Auth::user()->usdtBep20}}" style="font-size: 17px" readonly placeholder="0">
                        <img class="amount-icon"
                        src="/assets/img/usdt.svg" alt="btc" /></label>


                    <input name="__Cert" value="c3b51730"
                type="hidden">

                
                <button class="main-btn main-btn_green main-btn_m main-btn_sm submit-btn"
                name="add_btn">withdraw</button>
        </form>
        
        

    </div>
    
<div class="modal">
  <span class="modal-backdrop close-modal"></span>
  <div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title">Withdrawal completed</h2><button class="close-modal">&times</button>
    </div>
    <div class="modal-body">
      <!--<h3>Modal body</h3>-->
    
     <span id='withdral-popup'></span>
    
    </div>
   
  </div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


@if(session()->has('notify'))
    @foreach(session('notify') as $msg)
     @if($msg[0]=="success")
       
       
           <script>
           
           var withdrawalId = {{session('withdralId')}};
             $.ajax({
                type: "POST",
                url: "{{ route('user.lastWithdrawal') }}",
                data: {
                    "withdrawalId": withdrawalId,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $('#withdral-popup').html(response);
                        $('.modal').addClass('visible');
                    } else {
                        // alert("hi");
                        $('#withdral-popup').html("No data found!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
           </script>
           
           
       
      
      @endif
    @endforeach
@endif

<script>

const openModalButtons = document.querySelectorAll('.open-modal'),
      modal = document.querySelector('.modal'),
      closeModalButtons = document.querySelectorAll('.close-modal');

openModalButtons.forEach(openBtn => {
  openBtn.addEventListener('click', openModal)
});

closeModalButtons.forEach(closeBtn => {
  closeBtn.addEventListener('click', closeModal)
});

function openModal() {
  modal.classList.add('visible');
}

function closeModal() {
  modal.classList.remove('visible');
}
</script>
<script>


	$(function(){
		$('input[name="amount"]').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
			$(this).val(str);
           let min =  10;
      
			let amount = parseFloat(str);
		
			
            if (amount>=min) 
            {
                $(".submit-btn").prop("disabled", false);
                $('.cashback-info-label').html('');
            }
            else
            {

            $(".submit-btn").prop("disabled", true);
            $('.cashback-info-label').html("minimum Withdrawal is "+min+" USDT").css('color', 'red');

            }
            
            	
			if (amount%10==0) 
            {
                
                console.log("hii");
                $(".submit-btn").prop("disabled", false);
                $('.cashback-info-label').html('');
            }
             else
            {
                      console.log("hidddi");

            $(".submit-btn").prop("disabled", true);
            $('.cashback-info-label').html("Withdrawal is multiple 10 USDT").css('color', 'red');

            }
            
		
			//console.log(summ_usd);
		});

        $('input[name="PSys"]').change(function () {
			let icon = $(this).data('icon');
            if (icon=="usdtTrc20") {
                $('#walletAddress').val('{{Auth::user()->usdtTrc20}}');
                
            }else{
                $('#walletAddress').val('{{Auth::user()->usdtBep20}}');
            }
			
		});


    })

</script>