<!--navigation-->
<ul class="metismenu" id="menu">
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">{{ __('Dashboard') }}</div>
        </a>
        <ul>
            <li> <a href="{{ route('dashboard.analytics') }}"><i class="bx bx-right-arrow-alt"></i>{{ __('Analytics') }}</a></li>
            <li> <a href="{{ route('dashboard.ecommerce') }}"><i class="bx bx-right-arrow-alt"></i>{{ __('eCommerce') }}</a></li>
        </ul>
    </li>
    <li id="mm_groupAuthetication">
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-lock"></i>
            </div>
            <div class="menu-title">{{ __('Authentication') }}</div>
        </a>
        <ul>
            <li id="mm_itemUsers"> <a href="{{ route('admin.users.index') }}"><i class="bx bx-right-arrow-alt"></i>{{ __('Users') }}</a></li>
            <li id="mm_itemRoles"> <a href="{{ route('admin.roles.index') }}"><i class="bx bx-right-arrow-alt"></i>{{ __('Roles') }}</a></li>
            <li id="mm_itemPermissions"> <a href="{{ route('admin.permissions.index') }}"><i class="bx bx-right-arrow-alt"></i>{{ __('Permissions') }}</a></li>
            <li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>{{ __('Lock Screen') }}</a></li>
        </ul>
    </li>
    <li>
        <a href="user-profile.html">
            <div class="parent-icon"><i class="bx bx-user-circle"></i>
            </div>
            <div class="menu-title">{{ __('User Profile') }}</div>
        </a>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">{{ __('Application') }}</div>
        </a>
        <ul>
            <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Email') }}</a></li>
            <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Chat Box') }}</a></li>
            <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>{{ __('File Manager') }}</a></li>
            <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Contatcs') }}</a></li>
            <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Todo List') }}</a></li>
            <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Invoice') }}</a></li>
            <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Calendar') }}</a></li>
        </ul>
    </li>
    <li class="menu-label">{{ __('UI Elements') }}</li>
    <li>
        <a href="widgets.html">
            <div class="parent-icon"><i class='bx bx-cookie'></i>
            </div>
            <div class="menu-title">{{ __('Widgets') }}</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cart'></i>
            </div>
            <div class="menu-title">{{ __('eCommerce') }}</div>
        </a>
        <ul>
            <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Products') }}</a>
            </li>
            <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Product Details') }}</a>
            </li>
            <li> <a href="ecommerce-add-new-products.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Add New Products') }}</a>
            </li>
            <li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Orders') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
            </div>
            <div class="menu-title">{{ __('Components') }}</div>
        </a>
        <ul>
            <li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Alerts') }}</a>
            </li>
            <li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Accordions') }}</a>
            </li>
            <li> <a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Badges') }}</a>
            </li>
            <li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Buttons') }}</a>
            </li>
            <li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Cards') }}</a>
            </li>
            <li> <a href="component-carousels.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Carousels') }}</a>
            </li>
            <li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>{{ __('List Groups') }}</a>
            </li>
            <li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Media Objects') }}</a>
            </li>
            <li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Modals') }}</a>
            </li>
            <li> <a href="component-navs-tabs.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Navs & Tabs') }}</a>
            </li>
            <li> <a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Navbar') }}</a>
            </li>
            <li> <a href="component-paginations.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Paginatione') }}</a>
            </li>
            <li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Popovers & Tooltips') }}</a>
            </li>
            <li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Progress') }}</a>
            </li>
            <li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Spinners') }}</a>
            </li>
            <li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Notifications') }}</a>
            </li>
            <li> <a href="component-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Avatrs & Chips') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-repeat"></i>
            </div>
            <div class="menu-title">{{ __('Content') }}</div>
        </a>
        <ul>
            <li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Grid System') }}</a>
            </li>
            <li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Typography') }}</a>
            </li>
            <li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Text Utilities') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
            </div>
            <div class="menu-title">{{ __('Icons') }}</div>
        </a>
        <ul>
            <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Line Icons') }}</a>
            </li>
            <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Boxicons') }}</a>
            </li>
            <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Feather Icons') }}</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">{{ __('Forms & Tables') }}</li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
            </div>
            <div class="menu-title">{{ __('Forms') }}</div>
        </a>
        <ul>
            <li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Form Elements') }}</a>
            </li>
            <li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Input Groups') }}</a>
            </li>
            <li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Forms Layouts') }}</a>
            </li>
            <li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Form Validation') }}</a>
            </li>
            <li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Form Wizard') }}</a>
            </li>
            <li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Text Editor') }}</a>
            </li>
            <li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>{{ __('File Upload') }}</a>
            </li>
            <li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Date Pickers') }}</a>
            </li>
            <li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Select2') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-grid-alt"></i>
            </div>
            <div class="menu-title">{{ __('Tables') }}</div>
        </a>
        <ul>
            <li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Basic Table') }}</a>
            </li>
            <li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Data Table') }}</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">{{ __('Pages') }}</li>
    <li>
        <a href="timeline.html">
            <div class="parent-icon"> <i class="bx bx-video-recording"></i>
            </div>
            <div class="menu-title">{{ __('Timeline') }}</div>
        </a>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-error"></i>
            </div>
            <div class="menu-title">{{ __('Errors') }}</div>
        </a>
        <ul>
            <li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>{{ __('404 Error') }}</a>
            </li>
            <li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>{{ __('500 Error') }}</a>
            </li>
            <li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>{{ __('Coming Soon') }}</a>
            </li>
            <li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>{{ __('Blank Page') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="faq.html">
            <div class="parent-icon"><i class="bx bx-help-circle"></i>
            </div>
            <div class="menu-title">{{ __('FAQ') }}</div>
        </a>
    </li>
    <li>
        <a href="pricing-table.html">
            <div class="parent-icon"><i class="bx bx-diamond"></i>
            </div>
            <div class="menu-title">{{ __('Pricing') }}</div>
        </a>
    </li>
    <li class="menu-label">{{ __('Charts & Maps') }}</li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-line-chart"></i>
            </div>
            <div class="menu-title">{{ __('Charts') }}</div>
        </a>
        <ul>
            <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Apex') }}</a>
            </li>
            <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Chartjs') }}</a>
            </li>
            <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Highcharts') }}</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-map-alt"></i>
            </div>
            <div class="menu-title">{{ __('Maps') }}</div>
        </a>
        <ul>
            <li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Google Maps') }}</a>
            </li>
            <li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>{{ __('Vector Maps') }}</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">{{ __('Others') }}</li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="bx bx-menu"></i>
            </div>
            <div class="menu-title">{{ __('Menu Levels') }}</div>
        </a>
        <ul>
            <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>{{ __('Level One') }}</a>
                <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>{{ __('Level Two') }}</a>
                        <ul>
                            <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>{{ __('Level Three') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="https://codervent.com/dashkote/documentation/index.html" target="_blank">
            <div class="parent-icon"><i class="bx bx-folder"></i>
            </div>
            <div class="menu-title">{{ __('Documentation') }}</div>
        </a>
    </li>
    <li>
        <a href="https://themeforest.net/user/codervent" target="_blank">
            <div class="parent-icon"><i class="bx bx-support"></i>
            </div>
            <div class="menu-title">{{ __('Support') }}</div>
        </a>
    </li>
</ul>
<!--end navigation-->

