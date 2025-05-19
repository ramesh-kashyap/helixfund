

        <div id="main-content" class="flex-grow-1 m-3">
            <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                        <i class="fas fa-bars"></i>
                    </button>

                    <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                        <i class="fas fa-bars"></i>
                    </button>

                    <span
                        class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">account</span>

                     <ul class="navbar-nav ms-auto">
                <li class="nav-item mb-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <li><a class="dropdown-item" href="{{route('user.GenerateTicket')}}"><i
                                    class="fas fa-headset fa-fw me-2"></i>Support</a></li>
                        <li><a class="dropdown-item" href="{{route('user.profile')}}"><i
                                    class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                        <li><a class="dropdown-item" href="{{route('user.ChangePass')}}"><i
                                    class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
                </div>
            </nav>
            <!-- <div class="top-video">
                <video class="top" src="{{asset('')}}assets/video/top.mp4" type="video/mp4" muted autoplay loop plays-inline
                    poster="video/poster.png"></video>
            </div> -->



            <div class="row mt-3">
                <!-- Account Security Card -->
                <!-- <div class="col-12 mb-4 security-notice">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-shield-alt me-2"></i>Security Notices</h4>
                        </div>
                        <div class="card-body">

                            <div class="alert alert-warning mb-0">
                                <h5>Two Factor Authentication Not Enabled</h5>
                                <p>Enhance your account security by activating Two Factor Authentication.</p>
                                <a href="?a=security" class="sbmt">Enable 2FA</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Account Overview Card -->
                <div class="col-md-6 mb-4 account-overview">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-user me-2"></i>Account Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-user-circle me-2"></i>Username:</td>
                                            <td class="text-end">{{ $profile_data ? $profile_data->username : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-calendar-alt me-2"></i>Registration Date:</td>
                                            <td class="text-end">{{ $profile_data ? $profile_data->jdate : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-clock me-2"></i>Last Access:</td>
                                            <td class="text-end">{{ $profile_data ? $profile_data->created_at : '' }}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-link me-2"></i>Referral Link:</td>
                                            <td class="text-end">
                                                <div class="input-group">
    <input type="text" class="form-control" id="refLink"
        value="{{ asset('') }}register?ref={{ Auth::user()->username }}" readonly>
    <button class="sbmt" onclick="copyReferralLink()">
        <i class="fas fa-copy"></i>
    </button>
</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Financial Overview Card -->
                <div class="col-md-6 mb-4 account-overview">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i>Financial Overview</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <!-- <tr>
                                            <td><i class="fas fa-wallet me-2"></i>Account Balance:</td>
                                            <td class="text-end">
                                                <h4 class="mb-1">$<b>{{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}  {{generalDetail()->cur_text}}</b></h4>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td><i class="fas fa-coins me-2"></i>Active Deposit:</td>
                                            <td class="text-end">$<b>{{ number_format(Auth::user()->Activeinvestment->sum('amount'), 2) }} {{generalDetail()->cur_text}}</b></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-hand-holding-usd me-2"></i>Earned Total:</td>
                                            <td class="text-end">$<b>{{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}  {{generalDetail()->cur_text}}</b></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-hourglass-half me-2"></i>Pending Withdrawal:</td>
                                            <td class="text-end">$<b>{{ number_format(Auth::user()->withdraw(), 2) }} {{generalDetail()->cur_text}}</b></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-money-bill-wave me-2"></i>withdrawtotal:</td>
                                            <td class="text-end">$<b>{{ number_format(Auth::user()->withdraw(), 2) }} {{generalDetail()->cur_text}}</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaction History Card -->
                <div class="col-12 mb-4 recent-transactions">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-history me-2"></i>Recent Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">

                            </div>

                            <div class="mt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="offcanvas offcanvas-start text-white d-md-none" tabindex="-1" id="mobileMenu"
            aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="{{route('user.dashboard')}}" class="nav-link text-white">
                            <i class="fas fa-user fa-fw me-2"></i>Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.invest')}}" class="nav-link text-white">
                            <i class="fas fa-download fa-fw me-2"></i>Deposit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.Withdraw')}}" class="nav-link text-white">
                            <i class="fas fa-upload fa-fw me-2"></i>Withdraw
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="{{route('user.DepositHistory')}}" class="nav-link text-white">
                            <i class="fas fa-history fa-fw me-2"></i>History
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.level-team')}}" class="nav-link text-white">
                            <i class="fas fa-users fa-fw me-2"></i>Referrals
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="{{route('user.ChangePass')}}" class="nav-link text-white">
                            <i class="fas fa-shield-alt fa-fw me-2"></i>Security
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.profile')}}" class="nav-link text-white">
                            <i class="fas fa-user-edit fa-fw me-2"></i>Edit Account
                        </a>
                    </li>
                   <li class="nav-item mt-auto">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-warning" title="Logout" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <i class="fas fa-sign-out-alt fa-fw"></i><span class="sidebar-text ms-2">Logout</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="{{asset('')}}assets/js/dash.js"></script>


        <script>
            window.addEventListener('load', function () {
                // All resources (images, scripts, stylesheets, etc.) are loaded
                const preloaderContainer = document.querySelector('.preloader-container');
                const content = document.querySelector('.content');

                if (preloaderContainer) {
                    // Add the 'hidden' class to trigger the fade-out animation
                    preloaderContainer.classList.add('hidden');

                    // Optional: If you want to completely remove the preloader from the DOM
                    // after the transition, you can listen for the 'transitionend' event.
                    preloaderContainer.addEventListener('transitionend', function () {
                        if (preloaderContainer.style.opacity === '0' || getComputedStyle(
                                preloaderContainer).opacity === '0') {
                            preloaderContainer.style.display =
                            'none'; // Or preloaderContainer.remove();
                        }
                    }, {
                        once: true
                    }); // {once: true} ensures the event listener is removed after it fires
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
            setTimeout(function () {
                const preloaderContainer = document.querySelector('.preloader-container');
                const content = document.querySelector('.content');

                if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
                    console.warn("Preloader timeout reached. Forcing hide.");
                    preloaderContainer.classList.add('hidden');
                    if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                        .opacity === '0') {
                        preloaderContainer.style.display = 'none';
                    }
                    if (content) {
                        content.style.display = 'block';
                    }
                }
            }, 10000); // 10 seconds timeout as an example

        </script>
<script>
    function copyReferralLink() {
        const copyText = document.getElementById('refLink');
        navigator.clipboard.writeText(copyText.value).then(function () {
            alert("Link copied: " + copyText.value); // optional feedback
        }, function (err) {
            alert("Failed to copy link!");
        });
    }
</script>
</body>

</html>
