
        <div id="main-content" class="flex-grow-1 m-3">
            <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                        <i class="fas fa-bars"></i>
                    </button>

                    <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                        <i class="fas fa-bars"></i>
                    </button>

                    <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">deposit</span>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mb-0 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle fa-lg me-1"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                                <li><a class="dropdown-item" href="?a=support"><i class="fas fa-headset fa-fw me-2"></i>Support</a></li>
                                <li><a class="dropdown-item" href="?a=edit_account"><i class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                                <li><a class="dropdown-item" href="?a=security"><i class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="?a=logout"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- <div class="top-video">
            <video class="top" src="video/top.mp4" type="video/mp4" muted autoplay loop plays-inline poster="video/poster.png"></video>
        </div> -->



<script language="javascript">
function openCalculator(id) {
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

  
  for (i = 0; i < document.spendform.h_id.length; i++) {
    if (document.spendform.h_id[i].value == id) {
      document.spendform.h_id[i].checked = true;
    }
  }

  
}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('compound_block').style.display = '';
    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('compound_block').style.display = 'none';
  }
}

var cps = {};

function validateForm() {
  var amount = document.spendform.amount.value;
  if (isNaN(amount) || amount <= 0) {
    alert('Please enter a valid amount to deposit');
    return false;
  }
  return true;
}
</script>


<form method="post" name="spendform" onsubmit="return validateForm();"><input type="hidden" name="form_id" value="17471356395273"><input type="hidden" name="form_token" value="a0d0b38161d3614f59c8e3bde444e381">
<input type="hidden" name="a" value="deposit">



<div class="card mt-3 mb-4">
  <div class="card-header">
    <h3 class="mb-0"><i class="fas fa-chart-line me-2"></i>Investment Plans</h3>
  </div>
  <div class="card-body">
    
    <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="1" 
                 checked  
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">X-Daily</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>X-Daily</td>
                    <td align="center" align="center">$35.00 - $200.00</td>
                    <td class="text-end">1.50%</td>
                    <td class="text-end">3 days</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[1] = [];
      </script>
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="2" 
                 
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">Y-Daily</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>Y-Daily</td>
                    <td align="center" align="center">$75.00 - $500.00</td>
                    <td class="text-end">2.50%</td>
                    <td class="text-end">5 days</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[2] = [];
      </script>
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="3" 
                 
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">O-Daily</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>O-Daily</td>
                    <td align="center" align="center">$150.00 - $1000.00</td>
                    <td class="text-end">3.50%</td>
                    <td class="text-end">8 days</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[3] = [];
      </script>
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="4" 
                 
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">X-Hourly</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>X-Hourly</td>
                    <td align="center" align="center">$75.00 - $500.00</td>
                    <td class="text-end">0.92%</td>
                    <td class="text-end">120 hours</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[4] = [];
      </script>
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="5" 
                 
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">Y-Hourly</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>Y-Hourly</td>
                    <td align="center" align="center">$150.00 - $1000.00</td>
                    <td class="text-end">0.65%</td>
                    <td class="text-end">190 hours</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[5] = [];
      </script>
            <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center">
                        <div class="form-check me-3">
              <input type="radio" class="input" name="h_id" value="6" 
                 
                onclick="updateCompound()">
            </div>
                        <h4 class="mb-0">O-Hourly</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Plan</th>
                    <th align="center" class="text-center">Amount</th>
                    <th align="right" class="text-end">Profit</th>
                    <th align="right" class="text-end">Duration</th>
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                    <td>O-Hourly</td>
                    <td align="center" align="center">$300.00 - $2000.00</td>
                    <td class="text-end">0.52%</td>
                    <td class="text-end">290 hours</td>
                  </tr>
                                  </tbody>
              </table>
            </div>
                      </div>
        </div>
      </div>
      <script>
        cps[6] = [];
      </script>
          </div>
    </div>
    </div>




    <div class="card mt-4">
      <div class="card-body">
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-label">Amount to Deposit ($):</label>
              <input type="text" name="amount" value="35.00" 
                class="form-control text-end" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group" id="compound_block" style="display:none">
              <label class="form-label">Compounding (%):</label>
              <select name="compound" class="form-control" id="compound_percents"></select>
            </div>
          </div>
        </div>
        </div>
        </div>

        <div class="card mt-4">
        <div class="card-body">
        <div class="row">
          <div class="col-12">
            <h4 class="mb-3">Payment Method</h4>
            
            <ul class="nav nav-tabs mb-4" role="tablist">
              <li class="nav-item w-50">
                <a class="nav-link sbmt w-100 text-center active" data-bs-toggle="tab" href="#topup" role="tab">
                  <i class="fas fa-plus-circle me-2"></i>External Payment
                </a>
              </li>
              <li class="nav-item w-50">
                <a class="nav-link sbmt w-100 text-center" data-bs-toggle="tab" href="#balance" role="tab">
                  <i class="fas fa-wallet me-2"></i>Account Balance
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="topup" role="tabpanel">
                <div class="row g-3">
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/48.png" height="22" class="me-2" alt="Bitcoin">
                          <h5 class="mb-0">Bitcoin</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center">
                          <input type="radio" class="input" name="type" value="process_48" 
                             data-fiat="BTC"
                            id="process_48">
                          <label class="form-check-label" for="process_48">
                            Pay with Bitcoin
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/68.png" height="22" class="me-2" alt="Litecoin">
                          <h5 class="mb-0">Litecoin</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center">
                          <input type="radio" class="input" name="type" value="process_68" 
                             data-fiat="LTC"
                            id="process_68">
                          <label class="form-check-label" for="process_68">
                            Pay with Litecoin
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/85.png" height="22" class="me-2" alt="Tron">
                          <h5 class="mb-0">Tron</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center">
                          <input type="radio" class="input" name="type" value="process_85" 
                             data-fiat="TRX"
                            id="process_85">
                          <label class="form-check-label" for="process_85">
                            Pay with Tron
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/92.png" height="22" class="me-2" alt="Tether TRC20">
                          <h5 class="mb-0">Tether TRC20</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center">
                          <input type="radio" class="input" name="type" value="process_92" 
                             data-fiat="USDT.TRC20"
                            id="process_92">
                          <label class="form-check-label" for="process_92">
                            Pay with Tether TRC20
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/102.png" height="22" class="me-2" alt="Tether BEP20">
                          <h5 class="mb-0">Tether BEP20</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center">
                          <input type="radio" class="input" name="type" value="process_102" 
                             data-fiat="USDT.BEP20"
                            id="process_102">
                          <label class="form-check-label" for="process_102">
                            Pay with Tether BEP20
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                  </div>
              </div>

              <div class="tab-pane" id="balance" role="tabpanel">
                <div class="row g-3">
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/48.png" height="22" class="me-2" alt="Bitcoin">
                          <h5 class="mb-0">Bitcoin</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center mb-2">
                          <input type="radio" class="input" name="type" value="account_48" 
                             
                            disabled                            id="account_48">
                          <label class="form-check-label" for="account_48">
                            Use Bitcoin balance
                          </label>
                        </div>
                        <div>
                          Available: $0.00
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/68.png" height="22" class="me-2" alt="Litecoin">
                          <h5 class="mb-0">Litecoin</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center mb-2">
                          <input type="radio" class="input" name="type" value="account_68" 
                             
                            disabled                            id="account_68">
                          <label class="form-check-label" for="account_68">
                            Use Litecoin balance
                          </label>
                        </div>
                        <div>
                          Available: $0.00
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/85.png" height="22" class="me-2" alt="Tron">
                          <h5 class="mb-0">Tron</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center mb-2">
                          <input type="radio" class="input" name="type" value="account_85" 
                             
                            disabled                            id="account_85">
                          <label class="form-check-label" for="account_85">
                            Use Tron balance
                          </label>
                        </div>
                        <div>
                          Available: $0.00
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/92.png" height="22" class="me-2" alt="Tether TRC20">
                          <h5 class="mb-0">Tether TRC20</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center mb-2">
                          <input type="radio" class="input" name="type" value="account_92" 
                             
                            disabled                            id="account_92">
                          <label class="form-check-label" for="account_92">
                            Use Tether TRC20 balance
                          </label>
                        </div>
                        <div>
                          Available: $0.00
                        </div>
                      </div>
                    </div>
                  </div>
                                    <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="{{asset('')}}assets/images/102.png" height="22" class="me-2" alt="Tether BEP20">
                          <h5 class="mb-0">Tether BEP20</h5>
                        </div>
                        <div class="form-check d-flex gap-3 align-items-center mb-2">
                          <input type="radio" class="input" name="type" value="account_102" 
                             
                            disabled                            id="account_102">
                          <label class="form-check-label" for="account_102">
                            Use Tether BEP20 balance
                          </label>
                        </div>
                        <div>
                          Available: $0.00
                        </div>
                      </div>
                    </div>
                  </div>
                                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-end mt-4">
          <button type="submit" class="sbmt">
            <i class="fas fa-check me-2"></i>Make Deposit
          </button>
        </div>
      </div>
    </div>

</form>


<script>
document.addEventListener('DOMContentLoaded', function() {
  updateCompound();
});
</script>


</div>
    <div class="offcanvas offcanvas-start text-white d-md-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
         <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="?a=account" class="nav-link text-white">
                    <i class="fas fa-user fa-fw me-2"></i>Account
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=deposit" class="nav-link text-white">
                    <i class="fas fa-download fa-fw me-2"></i>Deposit
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=withdraw" class="nav-link text-white">
                    <i class="fas fa-upload fa-fw me-2"></i>Withdraw
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=deposit_list" class="nav-link text-white">
                    <i class="fas fa-list-alt fa-fw me-2"></i>Deposit List
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=history" class="nav-link text-white">
                    <i class="fas fa-history fa-fw me-2"></i>History
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=referals" class="nav-link text-white">
                    <i class="fas fa-users fa-fw me-2"></i>Referrals
                </a>
            </li>
             <li class="nav-item">
                <a href="?a=referallinks" class="nav-link text-white">
                    <i class="fas fa-link fa-fw me-2"></i>Banners
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=security" class="nav-link text-white">
                    <i class="fas fa-shield-alt fa-fw me-2"></i>Security
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=edit_account" class="nav-link text-white">
                    <i class="fas fa-user-edit fa-fw me-2"></i>Edit Account
                </a>
            </li>
             <li class="nav-item mt-auto">
                <a href="?a=logout" class="nav-link text-warning">
                    <i class="fas fa-sign-out-alt fa-fw me-2"></i>Logout
                </a>
            </li>
        </ul>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('')}}assets/js/dash.js"></script>
    

<script>
    window.addEventListener('load', function() {
    // All resources (images, scripts, stylesheets, etc.) are loaded
    const preloaderContainer = document.querySelector('.preloader-container');
    const content = document.querySelector('.content');

    if (preloaderContainer) {
        // Add the 'hidden' class to trigger the fade-out animation
        preloaderContainer.classList.add('hidden');

        // Optional: If you want to completely remove the preloader from the DOM
        // after the transition, you can listen for the 'transitionend' event.
        preloaderContainer.addEventListener('transitionend', function() {
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity === '0') {
                 preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
            }
        }, { once: true }); // {once: true} ensures the event listener is removed after it fires
    }

    if (content) {
        content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
        // If you used opacity for content:
        // content.style.opacity = '1';
        // content.style.visibility = 'visible';
    }
});

// Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
// You might want to adjust the timeout duration
setTimeout(function() {
    const preloaderContainer = document.querySelector('.preloader-container');
    const content = document.querySelector('.content');

    if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
        console.warn("Preloader timeout reached. Forcing hide.");
        preloaderContainer.classList.add('hidden');
        if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity === '0') {
            preloaderContainer.style.display = 'none';
        }
        if (content) {
            content.style.display = 'block';
        }
    }
}, 10000); // 10 seconds timeout as an example
</script>

</body>
</html>