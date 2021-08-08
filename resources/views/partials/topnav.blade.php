<!--start header -->
<header>
    <div class="topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu text-white me-3"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu-left d-none d-lg-block">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="app-chat-box.html"><i class='bx bx-message'></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
                    </li>
                </ul>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <form>
                        <input type="text" class="form-control search-control" autofocus placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </form>
                </div>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-icon">
                        <a class="nav-link text-white" href="javascript:;">	<i class='bx bx-search'></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 g-3 p-3">
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
                                    </div>
                                    <div class="app-title">{{ __('Teams') }}</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
                                    </div>
                                    <div class="app-title">{{ __('Projects') }}</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
                                    </div>
                                    <div class="app-title">{{ __('Tasks') }}</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
                                    </div>
                                    <div class="app-title">{{ __('Feeds') }}</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                    </div>
                                    <div class="app-title">{{ __('Files') }}</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
                                    </div>
                                    <div class="app-title">{{ __('Alerts') }}</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                            <i class='bx bx-bell'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">{{ __('Notifications') }}</p>
                                    <p class="msg-header-clear ms-auto">{{ __('Marks all as read') }}</p>
                                </div>
                            </a>
                            <div class="header-notifications-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('New Customers') }}<span class="msg-time float-end">{{ __('14 Sec
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('5 new user registered') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('New Orders ') }}<span class="msg-time float-end">{{ __('2 min
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('You have recived new orders') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('24 PDF File') }}<span class="msg-time float-end">{{ __('19 min
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('The pdf files generated') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Time Response ') }}<span class="msg-time float-end">{{ __('28 min
												ago') }}</span></h6>
                                            <p class="msg-info">5.1 min avarage time response</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('New Product Approved ') }}<span
                                                    class="msg-time float-end">{{ __('2 hrs ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Your new product has approved') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('New Comments ') }}<span class="msg-time float-end">{{ __('4 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('New customer comments recived') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Your item is shipped ') }}<span class="msg-time float-end">{{ __('5 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Successfully shipped your item') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('New 24 authors') }}<span class="msg-time float-end">{{ __('1 day
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('24 new authors joined last week') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Defense Alerts ') }}<span class="msg-time float-end">{{ __('2 weeks
												ago') }}</span></h6>
                                            <p class="msg-info">45% less alerts last 4 weeks</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">{{ __('View All Notifications') }}</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                            <i class='bx bx-comment'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">{{ __('Messages') }}</p>
                                    <p class="msg-header-clear ms-auto">{{ __('Marks all as read') }}</p>
                                </div>
                            </a>
                            <div class="header-message-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Daisy Anderson ') }}<span class="msg-time float-end">{{ __('5 sec
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('The standard chunk of lorem') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Althea Cabardo ') }}<span class="msg-time float-end">{{ __('14
												sec ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Many desktop publishing packages') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Oscar Garner ') }}<span class="msg-time float-end">{{ __('8 min
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Various versions have evolved over') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Katherine Pechon ') }}<span class="msg-time float-end">{{ __('15
												min ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Making this the first true generator') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Amelia Doe ') }}<span class="msg-time float-end">{{ __('22 min
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Duis aute irure dolor in reprehenderit') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Cristina Jhons ') }}<span class="msg-time float-end">{{ __('2 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('The passage is attributed to an unknown') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('James Caviness ') }}<span class="msg-time float-end">{{ __('4 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('The point of using Lorem') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Peter Costanzo ') }}<span class="msg-time float-end">{{ __('6 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('It was popularised in the 1960s') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('David Buckley ') }}<span class="msg-time float-end">{{ __('2 hrs
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('Various versions have evolved over') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Thomas Wheeler ') }}<span class="msg-time float-end">{{ __('2 days
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('If you are going to use a passage') }}</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">{{ __('Johnny Seitz ') }}<span class="msg-time float-end">{{ __('5 days
												ago') }}</span></h6>
                                            <p class="msg-info">{{ __('All the Lorem Ipsum generators') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="javascript:;">
                                <div class="text-center msg-footer">{{ __('View All Messages') }}</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown border-light-2">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0 text-white">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0">{{ __('Web Designer') }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>{{ __('Profile') }}</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>{{ __('Settings') }}</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>{{ __('Dashboard') }}</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>{{ __('Earnings') }}</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>{{ __('Downloads') }}</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>{{ __('Logout') }}</span></button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->

