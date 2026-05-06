        <section id="navbar">
            <div class="container">
                <div class="banner">
                    <div class="banner-textbox">
                        Apply to the Aral School - Deadline 5th of October 2025
                    </div>
                    <div class="lang-togglebox">
                        <ul>
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        class="{{ LaravelLocalization::getCurrentLocale() == $properties['locale_url'] ? 'selected' : null }}">
                                        {{ strtoupper($properties['locale_url']) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="navigation">
                    <div class="navigation_bottom">
                        <div class="aral">
                            <a href="#">
                                <img src="./logo/aral.svg" class="main_logo" alt="Aral" />
                            </a>
                            <a href="#">
                                <img src="./logo/logo.svg" class="mobile_logo" alt="Aral" /></a>
                        </div>
                        <div class="navbar-square"></div>
                        <div class="menu">
                            <ul>
                                @foreach ($menus as $menu)
                                    <li>
                                        <a href="{{ $menu->url }}">{{ $menu->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="school">
                            <a href="#"> <img src="./logo/SCHOOL.svg" alt="school" /></a>
                        </div>
                        <div class="hamburger_button" id="hamburger" role="button" tabindex="0"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <div class="hamburger_rect"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="square"></div>
        </section>
