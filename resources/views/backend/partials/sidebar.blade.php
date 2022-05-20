<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
            
                <li>
                    <a href="/home" class="@if (url()->current() == '/home')
                       mm-active
                    @endif">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
               
                <li>
                    <a href="#" @if (url()->current() == '/allnews')
                        mm-active
                     @endif>
                        <i class="metismenu-icon pe-7s-mouse"></i>
                        News
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/allnews">
                                <i class="metismenu-icon"></i>
                                All News 
                            </a>
                        </li>
                     
                    </ul>
                </li>
                
              
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-eyedropper"></i>
                       Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/sliders">
                                <i class="metismenu-icon">
                                </i>Sliders
                            </a>
                        </li>
                        <li>
                            <a href="/categories">
                                <i class="metismenu-icon">
                                </i>Categories
                            </a>
                        </li>
                        <li>
                            <a href="/admins">
                                <i class="metismenu-icon">
                                </i>Admins
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Certificates
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/certificates">
                                <i class="metismenu-icon">
                                </i>All Certificates
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-pendrive"></i>
                        Awards
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/awards">
                                <i class="metismenu-icon">
                                </i>All Awards
                            </a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>    