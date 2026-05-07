@props(['menus'])

<!-- Mobile Menu -->
<div id="mobile-menu">
    <ul class="mobile-menu-list">
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->url }}">{{ $menu->title }}</a>
            </li>
        @endforeach
    </ul>

    <div class="mobile-lang-togglebox">
        <ul>
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        class="{{ LaravelLocalization::getCurrentLocale() == $properties['locale_url'] ? 'selected' : null }}">
                        {{ strtoupper($properties['locale_url']) }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
