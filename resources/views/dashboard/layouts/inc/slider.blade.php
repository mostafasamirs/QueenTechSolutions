				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				    <!--begin::Brand-->
				    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
				        <!--begin::Logo-->
				        @if ($settings->logo !=null)
				        <a href="{{route('admin.home')}}">
				            <img alt="Logo" src="{{asset($settings->logo )}}" class="h-25px logo" style="transform: scale(2.6)!important;" />
				        </a>
				        @else
				        <a href="{{route('admin.home')}}">
				            <img alt="Logo" src="{{asset('images')}}/logo.png" class="h-25px logo" style="transform: scale(2.6)!important;" />
				        </a>
				        @endif
				        <!--end::Logo-->
				        <!--begin::Aside toggler-->
				        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
				            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
				            <span class="svg-icon svg-icon-1 rotate-180">
				                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
				                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
				                </svg>
				            </span>
				            <!--end::Svg Icon-->
				        </div>
				        <!--end::Aside toggler-->
				    </div>
				    <!--end::Brand-->
				    <!--begin::Aside menu-->
				    <div class="aside-menu flex-column-fluid">
				        <!--begin::Aside Menu-->
				        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
				            <!--begin::Menu-->
				            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
				                <div class="menu-item">
				                    <div class="menu-content pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Dashboard')}}</span>
				                    </div>
				                </div>
				                <div class="menu-item">
				                    <a class="menu-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{route('admin.home')}}">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
				                            <span class="svg-icon svg-icon-2">
				                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
				                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
				                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
				                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
				                                </svg>
				                            </span>
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Dashboard')}}</span>
				                    </a>
				                </div>

				                {{-- User Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Users')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/users*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            <i class="fas fa-users"></i>
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Users')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/users')) ? 'active' : '' }}" href="{{route('users.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Users')}}</span>
				                            </a>
				                        </div>

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/users/create')) ? 'active' : '' }}" href="{{route('users.create')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Create User')}}</span>
				                            </a>
				                        </div>

				                    </div>
				                </div>
				                {{-- User Route --}}


				                {{-- products Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Products')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/products*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            <i class="fas fa-sitemap"></i>
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Products')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/products')) ? 'active' : '' }}" href="{{route('products.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Products')}}</span>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                {{-- products Route --}}

				                {{-- offers Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Offers')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/offers*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                    <i class="fas fa-gift"></i>				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Offers')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/offers')) ? 'active' : '' }}" href="{{route('offers.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Offers')}}</span>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                {{-- offers Route --}}

				                {{-- clients Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Clients')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion  {{ (request()->is('admin/clients*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <i class="fas fa-user"></i>
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            {{-- <span class="svg-icon svg-icon-2">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black" />
				                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
				                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black" />
				                            </svg>
				                        </span> --}}
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Clients')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>
				                    {{-- {{route('subjects.index')}} --}}
				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        {{-- {{route('clients.index')}} --}}
				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/clients')) ? 'active' : '' }}" href="{{route('clients.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Clients')}}</span>
				                            </a>
				                        </div>

				                    </div>
				                    {{-- {{route('clients.index')}} --}}
				                </div>

				                {{-- client clients --}}


				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Orders')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion  {{ (request()->is('admin/touchs*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!-- <i class="fas fa-info-circle"></i> -->
                                    <i class="fas fa-shopping-cart"></i>
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            {{-- <span class="svg-icon svg-icon-2">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black" />
				                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
				                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black" />
				                            </svg>
				                        </span> --}}
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Orders')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>
				                    {{-- {{route('subjects.index')}} --}}
				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        {{-- {{route('touchs.index')}} --}}
				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/touchs')) ? 'active' : '' }}" href="{{route('touchs.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Orders')}}</span>
				                            </a>
				                        </div>

				                    </div>
				                    {{-- {{route('clients.index')}} --}}
				                </div>

				                {{-- footer Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Footer')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/footers*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            <!-- <i class="fas fa-sitemap"></i> -->
                                    <i class="fas fa-columns"></i>
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Footer')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/footers')) ? 'active' : '' }}" href="{{route('footers.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Footer')}}</span>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                {{-- footers Route --}}

				                {{-- marketing Route --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Marketing')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/marketing*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                    <i class="fab fa-facebook-f"></i>                                  				                        </span>
				                        <span class="menu-title">{{__('marketing')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/marketing')) ? 'active' : '' }}" href="{{route('marketing.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Marketing')}}</span>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                {{-- marketing Route --}}

				                {{-- projects settings --}}
				                <div class="menu-item">
				                    <div class="menu-content pt-8 pb-2">
				                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('Settings')}}</span>
				                    </div>
				                </div>
				                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('admin/settings*')) ? 'hover show' : '' }} {{ (request()->is('admin/profileuser*')) ? 'hover show' : '' }} {{ (request()->is('admin/roles*')) ? 'hover show' : '' }}">
				                    <span class="menu-link">
				                        <span class="menu-icon">
				                            <i class="fas fa-cogs"></i>
				                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
				                            {{-- <span class="svg-icon svg-icon-2">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black" />
				                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
				                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="black" />
				                            </svg>
				                        </span> --}}
				                            <!--end::Svg Icon-->
				                        </span>
				                        <span class="menu-title">{{__('Settings')}}</span>
				                        <span class="menu-arrow"></span>
				                    </span>

				                    <div class="menu-sub menu-sub-accordion menu-active-bg">

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/settings')) ? 'active' : '' }}" href="{{route('settings.index')}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Settings')}}</span>
				                            </a>
				                        </div>

				                        <div class="menu-item">
				                            <a class="menu-link {{ (request()->is('admin/profileuser/'.auth()->user()->id)) ? 'active' : '' }}" href="{{route('profileuser',auth()->user()->id)}}">
				                                <span class="menu-bullet">
				                                    <span class="bullet bullet-dot"></span>
				                                </span>
				                                <span class="menu-title">{{__('Profile')}}</span>
				                            </a>
				                        </div>
				                    </div>



				                </div>

				            </div>
				            {{-- aboutme Route --}}

				        </div>

				        {{-- projects settings --}}
				    </div>
				    <!--end::Menu-->
				</div>
				<!--end::Aside Menu-->
				</div>
				<!--end::Aside menu-->
				<!--begin::Footer-->
				<!--end::Footer-->
				</div>
				<!--end::Aside-->
