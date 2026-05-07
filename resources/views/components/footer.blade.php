@props(['site_translations'])

<section id="footer">
    <div class="top-layer"></div>
    <div class="contact">
        <p class="footer-title">{{ strip_tags(clean($site_translations->contact ?? null)) }}</p>
        <p class="org-name">
            {!! clean($site_translations->org_title ?? null) !!}
        </p>
        <p class="address">
            {!! clean($site_translations->address ?? null) !!}
        </p>
        <p class="phone">{{ strip_tags(clean($site_translations->phone ?? null)) }}: <span>+998 (71) 207 40 80</span>
        </p>
        <br />
        <p class="footer-title">{{ strip_tags(clean($site_translations->inquiry ?? null)) }}</p>
        <p class="email">{{ strip_tags(clean($site_translations->email ?? null)) }}</p>
    </div>

    <div class="social-media">
        <p class="footer-title">{{ strip_tags(clean($site_translations->social ?? null)) }}</p>
        <a href="https://www.linkedin.com/company/aral-school/" target="_blank"> LinkedIn ↗ </a> <br />
        <a href="#"> Instagram ↗ </a>
    </div>
    <div class="logo-footer">
        <img src="./logo/aral.svg" alt="Aral" id="footer-aral" />
        <img src="./logo/SCHOOL.svg" alt="School" id="footer-school" />
        <div class="footer-square"></div>
    </div>
    <div class="email-form">
        <p class="footer-title">{{ strip_tags(clean($site_translations->newsletter ?? null)) }}</p>
        <form action="" class="form">
            <input type="email" placeholder="{!! strip_tags(clean($site_translations->placeholder ?? null)) !!}" />
            <button type="submit">{!! clean($site_translations->subscribe ?? null) !!}</button>
        </form>
    </div>

    <div class="footer-overlay">
        <div class="footer-banner">
            <img src="./svg/ACDF_logo-en 1.svg" alt="ACDF logo" />
        </div>
        <div class="organiser">
            {!! clean($site_translations->organiser ?? null) !!}
            {!! clean($site_translations->org_title ?? null) !!}
        </div>
        <div class="privacy">
            <ul>
                <li><a href="#">{{ strip_tags(clean($site_translations->privacy ?? null)) }}</a></li>
                <li><a href="#">{{ strip_tags(clean($site_translations->cookie ?? null)) }}</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-layer"></div>
</section>
