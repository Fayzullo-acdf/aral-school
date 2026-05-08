@extends('layouts.main')

@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{!! strip_tags(clean($site_translations->site_title ?? null)) !!}</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="icon" type="image/png" href="./gallery/favicon-16x16.png" />
@endsection

@section('main')
    @if (in_array('hero', $sections))
        <section id="hero">
            <div class="container">
                <div class="hero-wrapper">
                    <div class="hero-image">
                        <img src="./gallery/hero_image.png" alt="Hero image" />
                    </div>
                    <div class="hero-box">
                        <div class="hero-text">
                            <p>
                                {!! $site_translations->hero_text ?? null !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (in_array('intro', $sections))
        <section id="intro">
            <div class="intro_wrapper">
                <div class="intro-left-box">
                    <svg width="376" height="381" viewBox="0 0 376 381" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="355" width="20" height="20" fill="black"></rect>
                        <line x1="375.354" y1="1.35355" x2="-3.64644" y2="380.354" stroke="black"></line>
                    </svg>
                </div>
                <div class="intro-info">
                    <p>{!! $site_translations->intro_title ?? null !!}</p>
                    <p>
                        {{ strip_tags($site_translations->intro_body ?? null) }}
                    </p>
                </div>
            </div>
            <div class="intro-right-box">
                <svg width="258" height="257" viewBox="0 0 258 257" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="253" y1="253" x2="0.646" y2="0.353" stroke="black" />
                    <rect x="257" y="236" width="20" height="20" transform="rotate(90 257 236)" fill="#F96243">
                    </rect>
                </svg>
            </div>
            <div class="apply-box">
                <div class="deadline-box">
                    <p>{{ strip_tags($site_translations->apply_cta ?? null) }}</p>
                    <p>{{ strip_tags($site_translations->apply_deadline ?? null) }}</p>
                </div>
                <svg width="10%" height="1px">
                    <line x1="0" y1="0" x2="100px" y2="0" stroke="black" />
                </svg>
                <div class="square-shape"></div>
            </div>
        </section>
    @endif

    @if (in_array('climate', $sections))
        <section id="climate">
            <div class="earth-photo">
                <img src="./gallery/aral_photo.jpg" alt="Aral Sea" />
            </div>
            <div class="climate-description">
                <p>
                    {!! html_entity_decode($site_translations->climate_body ?? null) !!}
                </p>
            </div>
        </section>
    @endif

    @if (in_array('programme', $sections))
        <section id="programme-vision">
            <div class="container">
                <div class="vision-title">
                    <p>
                        {!! html_entity_decode($site_translations->programme_title ?? null) !!}
                    </p>
                </div>
                <div class="programme-wrapper">
                    <div class="about">
                        <img src="./gallery/about_photo.jpg" alt="about image" />
                        <div class="modal">
                            <div class="modal-text">
                                <p>{{ strip_tags($site_translations?->modal_about ?? null) }}</p>
                                <div class="square-shape"></div>
                            </div>
                            <div class="modal-description">
                                {{ strip_tags($site_translations->about_desc ?? null) }}
                            </div>
                        </div>
                    </div>
                    <div class="goals">
                        <img src="./gallery/goals.jpg" alt="goals image" />
                        <div class="modal">
                            <div class="modal-text">
                                <p>{{ strip_tags($site_translations->modal_goals ?? null) }}</p>
                                <div class="square-shape"></div>
                            </div>
                            <div class="modal-description">
                                <p>
                                    {{ strip_tags(html_entity_decode($site_translations->goals_desc ?? null)) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="programme-image-one">
                        <img src="./gallery/programme-image-one.png" alt="programme image one" />
                    </div>
                    <div class="mission">
                        <img src="./gallery/mission.jpg" alt="mission image" />
                        <div class="modal">
                            <div class="modal-text">
                                <p>{{ strip_tags($site_translations->modal_mission ?? null) }}</p>
                                <div class="square-shape"></div>
                            </div>
                            <div class="modal-description">
                                <p>
                                    {{ strip_tags($site_translations->mission_desc ?? null) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="programme-image-two">
                        <img src="./gallery/programme-image-two.jpg" alt="programme image two" />
                    </div>
                </div>
                <div class="programme-line-left"></div>
                <div class="programme-line-right"></div>
            </div>
        </section>
    @endif

    @if (in_array('research', $sections))
        <section id="research">
            <div class="container">
                <div class="research-theme">
                    <div class="theme-box">
                        {!! clean($site_translations->research_title ?? null) !!}
                    </div>
                    <div class="research-description">
                        <p>
                            {!! clean($site_translations->research_desc ?? null) !!}
                        </p>
                    </div>
                </div>

                <div class="research-wrapper">
                    <div class="theme-card-left">
                        <div class="image-card">
                            <img src="./gallery/food.png" alt="Food system image" />

                            {!! clean($site_translations->research_food_desc ?? null) !!}

                            <div class="number">1</div>
                            <div class="title-card">
                                {!! clean($site_translations->research_food_title ?? null) !!}
                            </div>
                        </div>
                    </div>

                    <div class="theme-card-right">
                        <div class="image-card">
                            <img src="./gallery/water.png" alt="Aral Water image" />
                            {!! clean($site_translations->research_water_desc ?? null) !!}
                            <div class="number">2</div>
                            <div class="title-card"> {!! clean($site_translations->research_water_title ?? null) !!}
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    @endif

    @if (in_array('outcomes', $sections))
        <section id="programme-outcomes">
            <div class="container">
                <div class="outcome-line-left-box">
                    <img src="./gallery/Graphic ornament.svg" alt="Graphic ornament" />
                </div>
                <div class="outcome-title">
                    {!! clean($site_translations->outcome_title ?? null) !!}
                </div>
                <div class="outcomes_wrapper">
                    <img class="graphic_ornament_programme_1" src="./gallery/graphic_ornament_programme_1.svg"
                        alt="graphic ornament" />
                    <img class="graphic_ornament_programme_2" src="./gallery/graphic_ornament_programme_2.svg"
                        alt="graphic ornament" />
                    <div class="outcome-box">
                        {!! clean($site_translations->outcome_box_one ?? null) !!}
                    </div>
                    <div class="outcome-box">
                        {!! clean($site_translations->outcome_box_two ?? null) !!}
                    </div>
                    <div class="outcome-box">
                        {!! clean($site_translations->outcome_box_three ?? null) !!}
                    </div>
                    <div class="outcome-box">
                        {!! clean($site_translations->outcome_box_four ?? null) !!}
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (in_array('apply', $sections))
        <section id="who-can-apply">
            <div class="container">
                <div class="apply-theme">
                    {!! clean($site_translations->apply_title ?? null) !!}
                </div>
                <div class="apply-wrapper">
                    <div class="apply-image">
                        <img src="./gallery/apply-image.jpg" alt="Apply image" />
                    </div>
                    <div class="apply-image-description">
                        {!! clean($site_translations->apply_desc ?? null) !!}
                    </div>
                </div>
                <div class="apply-box-2">
                    <div class="deadline-box">
                        {!! clean($site_translations->apply_cta ?? null) !!}
                        {!! clean($site_translations->apply_deadline ?? null) !!}
                    </div>
                    <svg width="10%" height="1px">
                        <line x1="0" y1="0" x2="100px" y2="0" stroke="black" />
                    </svg>
                    <div class="square-shape"></div>
                    <div class="apply-square-shape-one"></div>
                </div>
                <div class="application-wrapper">
                    @foreach (['one', 'two', 'three', 'four'] as $step)
                        @php
                            $title = $site_translations->{'apply_step_' . $step . '_title'} ?? null;
                            $text = $site_translations->{'apply_step_' . $step . '_text'} ?? null;
                            $banner = $site_translations->{'apply_step_' . $step . '_banner'} ?? null;
                        @endphp

                        <x-application :step="$step" :title="$title" :text="$text" :banner="$banner"
                            :loop="$loop->iteration" />
                    @endforeach

                </div>
            </div>
        </section>
    @endif

    @if (in_array('team', $sections))
        <section id="team">
            <div class="profile-ornament">
                <img src="./svg/profile-ornament.svg" alt="Profile ornament" />
            </div>
            <div class="container">
                <div class="team-title">
                    {!! clean($site_translations->team_title ?? null) !!}
                </div>
                <div class="team-wrapper">
                    @foreach ($team as $member)
                        <div class="{{ 'member-box ' . $member->col_type }}">
                            <div class="member-image-box">
                                <div class="profile-box-edge">
                                    <img src="storage/{{ $member->img }}" alt="{{ $member->name }}" />
                                </div>
                                <p class="leader-name">{{ strip_tags(clean($member->name ?? null)) }}</p>
                                <p class="leader-title">{{ strip_tags(clean($member->profession ?? null)) }}</p>
                            </div>
                            <div class="team-member-bio-1">
                                {!! clean($member->member_info ?? null) !!}
                            </div>
                            @if ($member->col_type === 'chair')
                                <div class="team-member-bio-1 additional">
                                    {!! clean($member->additional_column ?? null) !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="team-ornament">
                <img src="./svg/team-ornament.svg" alt="team ornament" />
            </div> --}}
        </section>
    @endif

    @if (in_array('mentors', $sections))
        <section id="mentors">
            <div class="container">
                <div class="mentor_ornament">
                    <svg width="375" height="379" viewBox="0 0 375 379" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="0" x2="375" y2="379" stroke="black"
                            stroke-width="2">
                        </line>

                        <rect x="355" y="359" width="20" height="20" fill="black"></rect>
                    </svg>
                </div>
                <h2 class="mentor-header">
                    {!! $site_translations->mentors_title ?? null !!}
                </h2>
                <div class="mentors_category">
                    <div class="category_item">{{ strip_tags(clean($site_translations->water ?? null)) }}</div>
                    <div class="category_item">{{ strip_tags(clean($site_translations->food ?? null)) }}</div>
                </div>
                <div class="mentors_grid">
                    @foreach ($mentors as $mentor)
                        <div class="mentors_item">
                            <div class="mentors_photo">
                                <div class="image">
                                    <img src="storage/{{ $mentor->img }}" alt="{{ $mentor->name }}" />
                                </div>
                                <div class="name">{{ $mentor->name }}</div>
                            </div>
                            <div class="mentors_content">
                                {!! clean($mentor->member_info) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (in_array('faq', $sections))
        <section id="FAQ">
            <div class="faq-box">
                <p class="faq-title">FAQ</p>
                <div class="faq-listbox">
                    @foreach ($faqs as $faq)
                        @if ($faq->position == 'left')
                            <div class="faq-item">
                                <div class="faq-question">
                                    <p>
                                        {{ $faq->question }}
                                    </p>
                                    <img src="./svg/Arrow.svg" alt="Arrow" />
                                </div>

                                <div class="faq-answer">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="faq-listbox">
                    @foreach ($faqs as $faq)
                        @if ($faq->position == 'right')
                            <div class="faq-item">
                                <div class="faq-question">
                                    <p>
                                        {{ $faq->question }}
                                    </p>
                                    <img src="./svg/Arrow.svg" alt="Arrow" />
                                </div>

                                <div class="faq-answer">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <img src="./gallery/FAQ-1.jpg" alt="faq-1" class="faq-img-1" />
            <img src="./gallery/FAQ-2.jpg" alt="faq-2" class="faq-img-2" />
            <img src="./gallery/FAQ-3.jpg" alt="faq-3" class="faq-img-3" />
            <img src="./svg/faq-ornament.svg" alt="faq ornament" class="faq-ornament" />
        </section>
    @endif

    @if (in_array('about', $sections))
        <section id="about">
            <div class="container">
                <div class="about-wrapper">
                    <div class="about-title">
                        {!! clean($site_translations->about_title ?? null) !!}
                    </div>
                    <div class="about-box">
                        <div class="about-left">
                            {!! clean($site_translations->about_left_text ?? null) !!}
                        </div>
                        <div class="about-right">
                            {!! clean($site_translations->about_right_text ?? null) !!}
                        </div>
                    </div>
                    <div class="about_bg">
                        <img src="./gallery/about_bg-img.jpg" alt="" />
                    </div>
                    <div class="square-about"></div>
                </div>
            </div>
        </section>
    @endif

@endsection
