<!DOCTYPE html>
<html class="no-js" lang="en-US">
@yield('style')

@yield('body-tag')

    <div id="spaces-main" class="pt-perspective ">
        <div class="top-header">
            <div class="row">
                <div class="columns small-12 medium-6 large-6">
                    <div class="__top-header-left">
                        <div class="lang_sel_list_horizontal" id="lang_sel_list">
                            <div id="lang_sel">
                                
                                <ul>
                                    @if(Auth::check())
                                    <li><a href="{{route('dashboard')}}" class="lang_sel_sel icl-en"> 
                                        <span class="icl_lang_sel_current icl_lang_sel_native">Dashboard</span></a>
                                    </li>
                                    @else
                                    <li><a href="#" class="lang_sel_sel icl-en"> 
                                        <span class="icl_lang_sel_current icl_lang_sel_native">User</span></a>
                                        <ul>
                                            <li class="icl-fr"> <a href="{{route('login')}}"> 
                                                <span class="icl_lang_sel_native">Login</span> </a>
                                            </li>
                                            <li class="icl-fr"> <a href="{{route('register')}}"> 
                                                <span class="icl_lang_sel_native">Register</span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <ul class="social-media">
                            <li class=""> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class=""> <a href="#"><i class="fab fa-flickr"></i></a></li>
                            <li class=""> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class=""> <a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class=""> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class=""> <a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class=""> <a href="#"><i class="fab "></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="columns small-12 medium-6 large-6 hide-for-small-only">
                    <div class="__top-header-right">
                        <p>Join our team. Are you ready to change the game? <a href="#"><span>Find out more →</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <header class="l-header creative-layout" data-sticky-container>
            <div class="top-bar-container  slideUp sticky ">
                <div class="row">
                    <div class="site-title-bar" data-responsive-toggle="mobile-menu" data-hide-for="large">
                        <div class="title-bar-left"> <button aria-label="Main Menu" class="menu-icon menu-toggle"
                                type="button"></button> <span class="site-mobile-title title-bar-title logo"> <a
                                    href="/" rel="home"
                                    title="westernhauliers"
                                    class="active"><noscript><img src="{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}
                                            alt="westernhauliers" /></noscript><img
                                        class="lazyload"
                                        src='{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}'
                                        data-src="{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}" alt="Western Hauliers logo"
                                        alt="westernhauliers" /></a>
                            </span></div>
                    </div>
                    <nav class="site-navigation top-bar">
                        <div class="top-bar-left">
                            <div class="site-desktop-title top-bar-title">
                                <div class="logo-wrapper " data-dropdown-menu> <a href="/" rel="home"
                                        title="westernhauliers"
                                        class="active"><noscript><img
                                                src="{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}"
                                                alt="westernhauliers" /></noscript><img
                                            class="lazyload"
                                            src='{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}'
                                            data-src="{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}" alt="Western Hauliers logo" 
                                            alt="westernhauliers" /></a>
                                </div>
                                <div class="header_phone">
                                    <p>Need I help? Talk to an Expert</p> <strong>+255 758 005 151</strong>
                                </div>
                            </div>
                        </div>
                        <div class="top-bar-right">
                            <ul id="menu-primary-menu" class="desktop-menu menu">
                                <li
                                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home    color-2 menu-item-home">
                                    <a href="/">Home</a></li>
                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page    color-4 "><a
                                        href="{{ route('about' )}}">About-us</a></li>
                                <li
                                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item active  is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                    <a href="{{ route('shop') }}">Shop</a>
                                    <ul class="submenu is-dropdown-submenu ">
                                        <li
                                            class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                            <a href="#">Machine types</a>
                                            <ul class="submenu is-dropdown-submenu ">
                                                @foreach($menuCategories['categoryTypes'] as $categoryType)
                                                    <li
                                                        class=" menu-item menu-item-type-custom menu-item-object-custom    color-3 ">
                                                        <a href="{{ route('shop', ['category_type' => $categoryType->id]) }}">{{ $categoryType->name }}</a><svg width="100px" height="100px"
                                                            viewBox="0 0 100 100" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                            <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                                        </svg>
                                                    </li>
                                                @endforeach
                                            </ul> <svg width="100px" height="100px" viewBox="0 0 100 100"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg>
                                        </li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                            <a href="../equipment-categories/index.html">Browse By</a>
                                            <ul class="submenu is-dropdown-submenu ">
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-3 ">
                                                    <a href="#">Locations</a><svg width="100px"
                                                        height="100px" viewBox="0 0 100 100" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                        <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                                    </svg></li>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-3 ">
                                                    <a href="{{ route('shop')}}">Categories</a><svg
                                                        width="100px" height="100px" viewBox="0 0 100 100"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                        <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                                    </svg></li>
                                            </ul> <svg width="100px" height="100px" viewBox="0 0 100 100"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" menu-item menu-item-type-post_type menu-item-object-page    color-4 "><a
                                        href="{{ route('shop' )}}">Pricing</a></li>
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-5 menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="submenu is-dropdown-submenu ">
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../about/index.html">About us</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../our-team/index.html">Our Team</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../services-1/index.html">Services 1</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../services-2/index.html">Services 2</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../faq/index.html">FAQ</a><svg width="100px" height="100px"
                                                viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../contact/index.html">Contact Us</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-5 ">
                                            <a href="../contact-us-2/index.html">Contact Us 2</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                    </ul>
                                </li>
                                <li
                                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-6 ">
                                    <a href="../blog/index.html">News</a>
                                    <ul class="submenu is-dropdown-submenu ">
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-6 ">
                                            <a href="../blog/index.html">Blog List</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-page    color-6 ">
                                            <a href="../blog-grid/index.html">Blog Grid</a><svg width="100px"
                                                height="100px" viewBox="0 0 100 100" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                        <li
                                            class=" menu-item menu-item-type-post_type menu-item-object-post    color-6 ">
                                            <a
                                                href="../blog/2017/12/28/how-to-organize-a-construction-site/index.html">Single
                                                Post</a><svg width="100px" height="100px" viewBox="0 0 100 100"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" class="menu_arrow">
                                                <path d="M82.5016759,45.9206349 L1,45.9206349 L1,53.6984127 L82.5016759,53.6984127 L64.2258065,70.0431336 L70.3007856,75.4761905 L99,49.8095238 L70.3007856,24.1428571 L64.2258065,29.575914 L82.5016759,45.9206349 Z"> </path>
                                            </svg></li>
                                    </ul>
                                </li>
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click mega-menu color-7 menu-item-has-children">
                                    <a href="#">Elements</a>
                                    <ul class="submenu is-dropdown-submenu ">
                                        <li class=" mega-menu-column">
                                            <ul>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../columns/index.html">Columns</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../clients/index.html">Clients</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../progress-bar/index.html">Progress Bar</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../testimonials/index.html">Testimonials</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                            </ul>
                                        </li>
                                        <li class=" mega-menu-column">
                                            <ul>
                                                <li><a href="../count-up/index.html">Count up</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../text-with-icon/index.html">Text with Icon</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../forms-input/index.html">Forms &#038; Input</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../headings/index.html">Headings</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                            </ul>
                                        </li>
                                        <li class=" mega-menu-column">
                                            <ul>
                                                <li><a href="../buttons/index.html">Buttons</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../tabs/index.html">Tabs</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../accordions/index.html">Accordions</a>
                                                <li
                                                    class=" menu-item menu-item-type-post_type menu-item-object-page    color-7 ">
                                                    <a href="../pricing/index.html">Pricing Table</a>
                                            </ul>
                                        </li>
                                    </ul>
                            </ul>
                            <div class="show-cart-btn"> <svg viewBox="0 -31 512 512"
                                    xmlns="http://www.w3.org/2000/svg" style="width: 25px;">
                                    <path
                                        d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zm0 0M150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0M362 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0">
                                    </path>
                                </svg> <span class="min-cart-count"> 0 </span>
                                <div class="hidden-cart hide">
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <h2 class="widgettitle">Cart</h2>
                                        <div class="widget_shopping_cart_content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-cta show-for-large-up large-screen"> <a
                                    href="../contact-us-2/index.html" class="wd-btn btn-solid btn-medium  icon-after">
                                    Request a call </a></div>
                            <nav class="mobile-menu vertical menu" id="mobile-menu">
                                <ul id="menu-primary-menu-1" class="vertical menu" data-accordion-menu
                                    data-submenu-toggle="true">
                                    <li id="menu-item-5424"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-5424">
                                        <a href="/">Home</a></li>
                                    <li id="menu-item-62"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item menu-item-62">
                                        <a href="index.html" aria-current="page">Shop</a>
                                        <ul class="vertical nested menu">
                                            <li id="menu-item-5352"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5352">
                                                <a href="#">Product types</a>
                                                <ul class="vertical nested menu">
                                                    <li id="menu-item-5350"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5350">
                                                        <a href="../product/cat-c32-acert/index.html">Rent Per Day
                                                            Product</a></li>
                                                    <li id="menu-item-5353"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5353">
                                                        <a href="../product/cw16-9-wheel/index.html">Product For
                                                            Sale</a></li>
                                                    <li id="menu-item-5351"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5351">
                                                        <a href="../product/c9-acert/index.html">Call For Price
                                                            Product</a></li>
                                                    <li id="menu-item-5496"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5496">
                                                        <a
                                                            href="../product/33ft-40ft-rough-terrain-scissor-lift/index.html">Product
                                                            Auction</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-3745"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3745">
                                                <a href="../equipment-categories/index.html">Browse By</a>
                                                <ul class="vertical nested menu">
                                                    <li id="menu-item-3707"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3707">
                                                        <a href="../locations/index.html">Locations</a></li>
                                                    <li id="menu-item-3734"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3734">
                                                        <a href="../equipment-categories/index.html">Categories</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-4078"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4078">
                                        <a href="../pricing/index.html">Pricing</a></li>
                                    <li id="menu-item-3295"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3295">
                                        <a href="#">Pages</a>
                                        <ul class="vertical nested menu">
                                            <li id="menu-item-3300"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3300">
                                                <a href="../about/index.html">About us</a></li>
                                            <li id="menu-item-3296"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3296">
                                                <a href="../our-team/index.html">Our Team</a></li>
                                            <li id="menu-item-3298"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3298">
                                                <a href="../services-1/index.html">Services 1</a></li>
                                            <li id="menu-item-3297"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3297">
                                                <a href="../services-2/index.html">Services 2</a></li>
                                            <li id="menu-item-3299"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3299">
                                                <a href="../faq/index.html">FAQ</a></li>
                                            <li id="menu-item-345"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345">
                                                <a href="../contact/index.html">Contact Us</a></li>
                                            <li id="menu-item-3769"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3769">
                                                <a href="../contact-us-2/index.html">Contact Us 2</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-64"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64">
                                        <a href="../blog/index.html">News</a>
                                        <ul class="vertical nested menu">
                                            <li id="menu-item-3875"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3875">
                                                <a href="../blog/index.html">Blog List</a></li>
                                            <li id="menu-item-3874"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3874">
                                                <a href="../blog-grid/index.html">Blog Grid</a></li>
                                            <li id="menu-item-3936"
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3936">
                                                <a
                                                    href="../blog/2017/12/28/how-to-organize-a-construction-site/index.html">Single
                                                    Post</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-3809"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3809">
                                        <a href="#">Elements</a>
                                        <ul class="vertical nested menu">
                                            <li id="menu-item-3798"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3798">
                                                <a href="../columns/index.html">Columns</a></li>
                                            <li id="menu-item-3799"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3799">
                                                <a href="../clients/index.html">Clients</a></li>
                                            <li id="menu-item-3800"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3800">
                                                <a href="../progress-bar/index.html">Progress Bar</a></li>
                                            <li id="menu-item-3801"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3801">
                                                <a href="../testimonials/index.html">Testimonials</a></li>
                                            <li id="menu-item-3802"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3802">
                                                <a href="../count-up/index.html">Count up</a></li>
                                            <li id="menu-item-3803"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3803">
                                                <a href="../text-with-icon/index.html">Text with Icon</a></li>
                                            <li id="menu-item-3804"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3804">
                                                <a href="../forms-input/index.html">Forms &#038; Input</a></li>
                                            <li id="menu-item-3805"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3805">
                                                <a href="../headings/index.html">Headings</a></li>
                                            <li id="menu-item-3806"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3806">
                                                <a href="../buttons/index.html">Buttons</a></li>
                                            <li id="menu-item-3807"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3807">
                                                <a href="../tabs/index.html">Tabs</a></li>
                                            <li id="menu-item-3808"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3808">
                                                <a href="../accordions/index.html">Accordions</a></li>
                                            <li id="menu-item-4077"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4077">
                                                <a href="../pricing/index.html">Pricing Table</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="header-cta show-for-large-up large-screen"> <a
                                        href="../contact-us-2/index.html"
                                        class="wd-btn btn-solid btn-medium  icon-after"> Request a call </a></div>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

            @yield('section')
            @yield('shop')

        <section class="first-footer">
            <h3 class="hide">Footer</h3>
            <div class="row">
                <section class="block">
                    <div class="large-3 medium-6 columns">
                        <div id="text-3" class=" widget_text ">
                            <h4 class="block-title">About Us</h4>
                            <div class="textwidget">
                                <p><noscript><img decoding="async"
                                            src="{{ asset('front_end/wp-content/themes/backhoe/images/logo.png') }}" srcset="front_end/wp-content/uploads/2019/09/Logo-v2.png"
                                            alt="Western Hauliers"
                                            style="padding-bottom: 15px;" /></noscript><img class="lazyload"
                                        decoding="async"
                                        src='{{ asset('front_end/wp-content/themes/backhoe/images/logo.png') }}' srcset='{{ asset('front_end/wp-content/themes/backhoe/images/logo.png') }}, {{ asset('front_end/wp-content/themes/backhoe/images/logo.png')}}'
                                        data-src="{{ asset('front_end/wp-content/themes/backhoe/images/logo.png') }}"
                                        alt="Western Hauliers"
                                        style="padding-bottom: 15px;" /></p>
                                <p><strong>Western Hauliers </strong> owns the foremost solid and best maintained fleet of material handling rental
                                    equipment in Tanzania. All machinery are certified to national standards and certification 
                                    renewed every 12 months.</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div id="nav_menu-2" class=" widget_nav_menu ">
                            <h4 class="block-title">Information</h4>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-4828"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-636 current_page_item menu-item-4828">
                                        <a href="/" aria-current="page">Main Home</a>
                                    </li>
                                    <li id="menu-item-4820"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4820">
                                        <a href="/about">About us</a>
                                    </li>
                                    <li id="menu-item-4821"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4821">
                                        <a href="/blog">Blog</a>
                                    </li>
                                    <li id="menu-item-4824"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4824">
                                        <a href="/contact">Contact Us</a>
                                    </li>
                                    <li id="menu-item-4825"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4825">
                                        <a href="{{ route('shop') }}">Pricing</a>
                                    </li>
                                    <li id="menu-item-4826"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4826">
                                        <a href="/services">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div id="text-5" class=" widget_text ">
                            <h4 class="block-title">contact info</h4>
                            <div class="textwidget">
                                <ul class="contact-details">
                                    <li> <span class="icofont-location-pin"></span></p>
                                        <p>Address: Vetenary street, Temeke, DSM, TZ
                                    </li>
                                    <li><span class="icofont-ui-cell-phone"></span>
                                        <p>Custom Support Sale: +255 758 005 151
                                    </li>
                                    <li><span class="icofont-wall-clock"></span>
                                        <p>Working Time: Mon - Sat 8:00 - 18:00
                                    </li>
                                    <li>Email: <a href="#"><span class="icofont-email"></span>
                                            <p>info@westernhaulirs.co.tz
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div id="recent-posts-3" class=" widget_recent_entries ">
                            <h4 class="block-title">Recent Post</h4>
                            {{-- <ul>
                                <li> <a href="#">Best Practices
                                        of HR management</a> <span class="post-date">28/08/2019</span></li>
                                <li> <a href="#">10 Tips to Find
                                        Best Backhoe</a> <span class="post-date">30/03/2019</span></li>
                                <li> <a href="#">How to
                                        Setup a Construction Site</a> <span class="post-date">28/12/2017</span></li>
                            </ul> --}}
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <footer class="second-footer">
            <div class="row">
                <div class="copyright medium-12 large-12 columns">
                    <div class="block text-center"> © 2025 Chesifylabs All rights reserved.</div>
                </div>
            </div>
        </footer>
    </div>
         <noscript>
            <style>
                .lazyload {
                    display: none
                }
            </style>
        </noscript>
        <script data-noptimize="1">
            window.lazySizesConfig = window.lazySizesConfig || {};
            window.lazySizesConfig.loadMode = 1;
        </script>
        <script async data-noptimize="1" src='front_end/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js'>
        </script>
        <link rel='stylesheet' id='wc-blocks-style-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3c68ad9b345b9b2f5fc71372d90cb3b9.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_26612f0758857e9fd3992bb65d0a2ca4.css'
            type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'></style>
        <script type="text/javascript" id="wd_demo_panel_script-js-extra">
            var demo_panel_vars = {
                "demo_panel_theme_list": "<div class=\"demos-panel\"> \n\n\t\t<div class=\"demos-panel_overlay\"><\/div>\n\t\t\n\t\t<div class=\"demos-panel_panel\"> \n\t\t\t<div class=\"demos-panel_buttons\"> \n\t\t\t\t<a class=\"demos-panel_button view-themes\" aria-label=\"View Themes\">\n\t\t\t\t\t<span class=\"demos-panel_button-icon\">\n\t\t\t\t\t\t<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" \n\t\t\t\t\t\t\tstroke-linejoin=\"round\" class=\"lucide lucide-book-image\"><path d=\"M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20\"\/><circle cx=\"10\" cy=\"8\" r=\"2\"\/><path d=\"m20 13.7-2.1-2.1c-.8-.8-2-.8-2.8 0L9.7 17\"\/><\/svg>\n\t\t\t\t\t<\/span>\n\t\t\t\t\t<span class=\"demos-panel_button-desc\">View Themes<\/span>\n\t\t\t\t<\/a>\n\t\t\t\t<a href=\"https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/landing\/\" target=\"_blank\" class=\"demos-panel_button\" aria-label=\"Features\">\n\t\t\t\t\t<span class=\"demos-panel_button-icon\">\n\t\t\t\t\t\t<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" \n\t\t\t\t\t\tstroke-linejoin=\"round\" class=\"lucide lucide-presentation\"><path d=\"M2 3h20\"\/><path d=\"M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3\"\/><path d=\"m7 21 5-5 5 5\"\/><\/svg>\n\t\t\t\t\t<\/span>\n\t\t\t\t\t<span class=\"demos-panel_button-desc\">Features<\/span>\n\t\t\t\t<\/a>\n\t\t\t\t<a href=\"https:\/\/1.envato.market\/qbL6q\" class=\"demos-panel_button\" aria-label=\"Get this Theme\">\n\t\t\t\t\t<span class=\"demos-panel_button-icon\">\n\t\t\t\t\t\t<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" \n\t\t\t\t\t\t\tstroke-linejoin=\"round\" class=\"lucide lucide-shopping-bag\"><path d=\"M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z\"\/><path d=\"M3 6h18\"\/><path d=\"M16 10a4 4 0 0 1-8 0\"\/><\/svg>\n\t\t\t\t\t<\/span>\n\t\t\t\t\t<span class=\"demos-panel_button-desc\">Get this Theme<\/span>\n\t\t\t\t<\/a>\n\t\t\t<\/div>\n\t\t\t<div class=\"demos-panel_list-wrapper\">\n\t\t\t\t<ul class=\"demos-panel_list\">\n\t\t\t\t\t\t        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/landing\">\r\n            <img data-src=\"https:\/\/previews.customer.envatousercontent.com\/files\/342824005\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Backhoe\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h5 class=\"demos-panel-theme-title\">Backhoe<\/h5>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh89<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/flooring\/landing\">\r\n            <img data-src=\"https:\/\/previews.customer.envatousercontent.com\/files\/219969421\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Flooring\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Flooring<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/demo.webdevia.com\/partytent-event-eental-wordPress-theme\/landing\">\r\n            <img data-src=\"https:\/\/previews.customer.envatousercontent.com\/files\/402640017\/preview.__large_preview.png\" width=\"285\" height=\"145\" alt=\"Partytent\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Partytent<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh89<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/windows-doors\/landing\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/338400814\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Windows & Doors\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Windows & Doors<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/demo.webdevia.com\/cocina-kitchen-wordpress-theme\/landing\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/462905736\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Cocina\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Cocina<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"http:\/\/themes.webdevia.com\/voip-wordpress-theme\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/218971784\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"VOIP\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">VOIP<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/factory\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/371888003\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Manufacturing\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Manufacturing<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh59<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"http:\/\/themes.webdevia.com\/solar-wp\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/222426141\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Green Energy\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Green Energy<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/petroleum-gas\/landing\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/267792954\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Petroleum\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Petroleum<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/tires-wheels\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/234290159\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Wheels & Tires\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Wheels & Tires<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/bodyguard\/landing\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/472062715\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Bodyguard\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Bodyguard<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh59<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/bidpro.webdevia.com\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/383205067\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"GRBid\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">GRBid<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh49<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/bathrooms.webdevia.com\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/246953847\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Bathrooms\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Bathrooms<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh59<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/marbleo.webdevia.com\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/481715641\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Marbl\u00e9o\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Marbl\u00e9o<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh59<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\r\n        <li>\r\n          <a target=\"_blank\" href=\"https:\/\/themes.webdevia.com\/compactor-asphal-paving-road-construction-wordpress-theme\/landing\/\">\r\n            <img data-src=\"https:\/\/s3.envato.com\/files\/291077348\/preview.__large_preview.jpg\" width=\"285\" height=\"145\" alt=\"Compactor\">\r\n            <div class=\"demos-panel-theme-meta\">\r\n              <h6 class=\"demos-panel-theme-title\">Compactor<\/h6>\r\n              <h6 class=\"demos-panel-theme-price\">Tsh69<\/h6>\r\n            <\/div>\r\n          <\/a>\r\n        <\/li>\n\t\t\t\t<\/ul> \n\t\t\t\t<a href=\"#\" class=\"view-all-themes\">View More Themes<\/a>     \n\t\t\t<\/div>\n\t\t<\/div>  \n  <\/div>",
                "show_panel": "yes"
            };
        </script>
        <script type="text/javascript" src="front_end/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
        <script type="text/javascript" src="front_end/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wd_buy_script-js-extra">
            var buy_custom_html = {
                "panel_buy_custom_html": "",
                "show_panel": ""
            };
        </script>
        <script type="text/javascript" id="crisp-js-before">
            window.Tshcrisp = [];
            if (!window.CRISP_RUNTIME_CONFIG) {
                window.CRISP_RUNTIME_CONFIG = {}
            }
            if (!window.CRISP_RUNTIME_CONFIG.locale) {
                window.CRISP_RUNTIME_CONFIG.locale = 'en-us'
            }
            CRISP_WEBSITE_ID = 'e63357f1-c2f8-409a-aad3-cb2adf04c040';
        </script>
        <script type="text/javascript" async src="../../../client.crisp.chat/l.js" id="crisp-js"></script>
        <script type="text/javascript" id="wd-script-js-extra">
            var urltheme = {
                "template_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php"
            };
        </script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
            var wc_order_attribution = {
                "params": {
                    "lifetime": 1.0e-5,
                    "session": 30,
                    "base64": false,
                    "ajaxurl": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                    "prefix": "wc_order_attribution_",
                    "allowTracking": true
                },
                "fields": {
                    "source_type": "current.typ",
                    "referrer": "current_add.rf",
                    "utm_campaign": "current.cmp",
                    "utm_source": "current.src",
                    "utm_medium": "current.mdm",
                    "utm_content": "current.cnt",
                    "utm_id": "current.id",
                    "utm_term": "current.trm",
                    "utm_source_platform": "current.plt",
                    "utm_creative_format": "current.fmt",
                    "utm_marketing_tactic": "current.tct",
                    "session_entry": "current_add.ep",
                    "session_start_time": "current_add.fd",
                    "session_pages": "session.pgs",
                    "session_count": "udata.vst",
                    "user_agent": "udata.uag"
                }
            };
        </script>
        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            var wc_cart_fragments_params = {
                "ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_728ebccaeb4c0493f1a53f591ab2d1ae",
                "fragment_name": "wc_fragments_728ebccaeb4c0493f1a53f591ab2d1ae",
                "request_timeout": "5000"
            };
        </script>
        <script type="text/javascript" id="wc-price-slider-js-extra">
            var woocommerce_price_slider_params = {
                "currency_format_num_decimals": "0",
                "currency_format_symbol": "Tsh",
                "currency_format_decimal_sep": ".",
                "currency_format_thousand_sep": ",",
                "currency_format": "%s%v"
            };
        </script>
        <script defer src="front_end/wp-content/cache/autoptimize/1/js/autoptimize_28cd284969ec242ad5a906a35fc647ca.js">
        </script>
     @yield('script')
</body>

</html>