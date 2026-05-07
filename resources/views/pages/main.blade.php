@extends('layouts.main')

@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aral school</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="icon" type="image/png" href="./gallery/favicon-16x16.png" />
@endsection

@section('main')
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

    <section id="intro">
        <div class="intro_wrapper">
            <div class="intro-left-box">
                <svg width="376" height="381" viewBox="0 0 376 381" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    <section id="leader-area">
        <div class="profile-ornament">
            <img src="./svg/profile-ornament.svg" alt="Profile ornament" />
        </div>
        <div class="container">
            <div class="team-title">
                {!! clean($site_translations->team_title ?? null) !!}
            </div>
            <div class="leader-wrapper">
                <div class="profile-area">
                    <div class="profile-box">
                        <div class="profile-box-edge">
                            <img src="./team/Gayane.png" alt="Team lead" />
                        </div>
                        <p class="leader-name">{{ $team[0]->name }}</p>
                        <p class="leader-title">{{ $team[0]->profession }}</p>
                    </div>
                </div>
                <div class="bio">
                    <div class="team-lead-bio">
                        {!! clean($team[0]->member_info) !!}
                    </div>
                    <div class="team-lead-bio-right">

                    </div>
                </div>
            </div>
        </div>
        <div class="team-ornament">
            <img src="./svg/team-ornament.svg" alt="team ornament" />
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="teambox">
                <div class="member-box">
                    <div class="member-image-box">
                        <div class="profile-box-edge">
                            <img src="./team/jan.png" alt="Jan Boelen" />
                        </div>
                        <p class="leader-name">Jan Boelen</p>
                        <p class="leader-title">Program Director</p>
                    </div>
                    <div class="team-member-bio-1">
                        <p>
                            Jan Boelen is a curator of design, architecture, and
                            contemporary art. He is the artistic director of Atelier LUMA,
                            an experimental laboratory for design in Arles, France. Boelen
                            studied Product Design at Genk and is the founder and former
                            artistic director of Z33 – House for contemporary art in
                            Hasselt, Belgium. He was founder of the Master Social design
                            at the Design Academy of Eindhoven till 2020 and Rektor of the
                            Karlsruhe University of Arts and Design from 2019 till 2023.
                            In 2014 he curated BIO50, the design biennial of Ljubljana in
                            Slovenia. He was curator of the 4th Istanbul Design Biennial
                            in Istanbul (2018) and initiated Manifesta 9 in Belgium
                            (2012). Lastly, Boelen curated the Lithuanian Pavilion Planet
                            of People in the Venice Architecture Biennial (2021). <br />
                            <br />
                            Over the years he has been fashioning projects and exhibitions
                            that encourage the visitor to look at everyday objects in a
                            novel manner.
                            <br />
                            <br />Boelen recently edited Social Matter, Social Design: For
                            Good or Bad, all Design is Social (Valiz, 2020), and Muller
                            Van Severen: Dialogue (Walther Koenig, 2021) and Atelier Luma,
                            Bioregional design practices (Luma, 2023) His writing
                            addresses the implications of design in everyday life and how
                            artistic practices can shape the discipline.
                        </p>
                    </div>
                </div>
                <div class="member-box">
                    <div class="member-image-box">
                        <div class="profile-box-edge">
                            <img src="./team/Ksenia.png" alt="Ksenia" />
                        </div>
                        <p class="leader-name">Ksenia Starikova-Pozzoli</p>
                        <p class="leader-title">Program Lead</p>
                    </div>
                    <div class="team-member-bio-1">
                        <p>
                            Ksenia is a design curator and creative strategist with a
                            focus on circular innovations and regenerative place making.
                            London School of Economics and Stanford graduate, she brings
                            over 15 years of creative leadership and programme management
                            across a variety of impact-driven brands, sectors and
                            organisations. A journalist by background, she gradually
                            centered her thinking at the intersection of science, design &
                            new technologies, leading one of WPP design & innovation
                            practices in London and NYC.
                            <br /><br />Her subsequent brand leadership of the iconic
                            Design Hotels platform allowed for a greater focus on the
                            topics of Community, Impact & Sustainability and led to her
                            authorship of the first Regenerative Placemaking framework in
                            Travel, widely adopted by the industry since then across the
                            globe. <br /><br />
                            Driven by her interests in sustainable design practices,
                            Ksenia now runs her own design studio, working with impact and
                            climate-driven ventures and organisations on their content,
                            programming and community initiatives. <br /><br />  She is
                            also a curator of the largest climate tech festival in the UK,
                            The Heat, and is focused on supporting a diverse range of
                            pioneering bio design innovations in Fashion, Design and
                            Architecture as part of it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="rest-members">
        <div class="container">
            <div class="rest-memebers-wrapper">
                <div class="rest-memberbox">
                    <div class="rest-member-imageCard">
                        <div class="profile-box-edge">
                            <img src="./team/Khan.png" alt="Khan" />
                        </div>
                        <div class="rest-member-name">Khudoyorkhon Abdujabborov</div>
                        <div class="rest-member-position">Project Manager</div>
                    </div>
                    <div class="rest-member-description">
                        <p>
                            Khudoyorkhon Abdujabborov is a project manager at the Aral
                            School, responsible for coordinating partnerships,
                            exhibitions, and local implementation across Karakalpakstan.
                            He brings extensive experience in international cultural
                            collaboration, having managed key initiatives for the
                            Uzbekistan Art and Culture Development Foundation, including
                            the exhibition “A Glimpse Through Time: The Legacy of
                            Khudaybergen Devanov” at UNESCO in Paris and the redevelopment
                            of the permanent collection at the State Museum of Arts named
                            after I.V. Savitsky in Nukus. Prior to this, he worked in
                            diplomatic and cultural roles at the Embassy of Poland in
                            Uzbekistan and the El-Yurt Umidi Foundation. He holds a degree
                            in International Relations from Kazan Federal University and
                            is also a laureate of an international circus arts festival,
                            with performance experience in Uzbekistan, Mexico, and the
                            USA.
                        </p>
                    </div>
                </div>
                <div class="rest-memberbox">
                    <div class="rest-member-imageCard">
                        <div class="profile-box-edge">
                            <img src="./team/Gulnara.png" alt="Gulnara" />
                        </div>
                        <div class="rest-member-name">Gulnara Joldasbaeva </div>
                        <div class="rest-member-position">Local Coordinator</div>
                    </div>
                    <div class="rest-member-description">
                        <p>
                            Gulnara Joldasbaeva is a cultural producer, educator, and
                            local coordinator of the Aral Culture Summit in
                            Karakalpakstan. She curates interdisciplinary events
                            connecting ecology, heritage, and contemporary art. As part of
                            the School, she brings together artists, scientists, and
                            community members to reflect on the Aral Sea crisis through
                            creative formats. In partnership with UNDP, she also launched
                            Bilim, a platform offering programming and language education
                            to young women in underrepresented communities. Her experience
                            in ecological education and local cultural engagement makes
                            her an essential link between artistic content and regional
                            relevance.
                        </p>
                    </div>
                </div>
                <div class="rest-memberbox">
                    <div class="rest-member-imageCard">
                        <div class="profile-box-edge">
                            <img src="./team/Cyril.png" alt="Cyril" />
                        </div>
                        <div class="rest-member-name">
                            Cyril <br />
                            Zammit
                        </div>
                        <div class="rest-member-position">Advisor</div>
                    </div>
                    <div class="rest-member-description">
                        <p>
                            Cyril Zammit is an independent advisor and design consultant,
                            with a career devoted to supporting cultural and creative
                            initiatives across the Middle East and Central Asia.
                            <br /><br />
                            He began his professional journey at the Institut Français in
                            Prague, followed by a role at the Cultural Department of the
                            French Embassy in London. He later moved to Switzerland, where
                            he oversaw international sponsorship for the Montreux Jazz
                            Festival, before taking on cultural sponsorship roles at UBS
                            and HSBC Private Bank. <br /><br />
                            In 2009, Cyril relocated to the UAE, where he played a key
                            role in launching Abu Dhabi Art, and went on to establish
                            Design Days Dubai and Dubai Design Week. He later served as an
                            advisor to Dubai Culture & Arts Authority, and subsequently
                            joined the UAE Ministry of Foreign Affairs & International
                            Cooperation as a Cultural Affairs Expert in the Office of
                            Public and Cultural Diplomacy. <br /><br />
                            Since March 2022, he has been advising the Uzbekistan Art and
                            Culture Development Foundation. In 2023, he also became an
                            advisor to L’ÉCOLE Middle East in Dubai and was appointed
                            Design Consultant to the Royal Commission for AlUla. Cyril is
                            also a regular design columnist for Esquire Middle East.
                        </p>
                    </div>
                </div>
                <div class="rest-memberbox">
                    <div class="rest-member-imageCard">
                        <div class="profile-box-edge">
                            <img src="./team/Anastasia.png" alt="Anastasia" />
                        </div>
                        <div class="rest-member-name">Anastasia Sinitsyna</div>
                        <div class="rest-member-position">Research & Development</div>
                    </div>
                    <div class="rest-member-description">
                        <p>
                            Anastasia Sinitsyna is a researcher and cultural consultant
                            working at the intersection of environmental humanities,
                            design, and education. She is currently based in Venice,
                            Italy, where she coordinates international exhibitions and
                            cultural initiatives, including the Spanish (2023) and
                            Uzbekistan (2022-2025) National Pavilions at the Venice
                            Biennale. Her work focuses on ecological transformation,
                            sustainable futures, and the role of art and education in
                            reimagining cultural and physical landscapes.
                            <br /><br />Anastasia also leads research and programming for
                            the Aral Culture Summit, a long-term initiative of ACDF aimed
                            at supporting biocultural diversity and ecological
                            regeneration in Karakalpakstan and the broader Aral Sea region
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mentors">
        <div class="container">
            <div class="mentor_ornament">
                <svg width="375" height="379" viewBox="0 0 375 379" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <line x1="0" y1="0" x2="375" y2="379" stroke="black" stroke-width="2">
                    </line>

                    <rect x="355" y="359" width="20" height="20" fill="black"></rect>
                </svg>
            </div>
            <h2 class="mentor-header">
                <p>Mentors & Experts</p>
            </h2>
            <div class="mentors_category">
                <div class="category_item">Water</div>
                <div class="category_item">Food</div>
            </div>
            <div class="mentors_grid">
                <div class="mentors_item">
                    <div class="mentors_photo">
                        <div class="image">
                            <img src="./team/Sagit (1).png" alt="Sagit" />
                        </div>
                        <div class="name">Sagitjan Aytjanov</div>
                    </div>
                    <div class="mentors_content">
                        <p>
                            Sagitjan has a profound experience in the field of complex
                            projects management with technical expertise in programs
                            planning, management, monitoring and evaluation, community
                            empowerment, employment and business support. He has been
                            engaged in a wide range of development, programming and
                            implementation processes of UN programmes for the last 20
                            years both at national and international level.
                        </p>
                        <p>
                            Sagitjan worked as WASH Officer for UNICEF Country Office in
                            Uzbekistan by managing several UN Joint Programmes in
                            Karakalpakstan, focused on improving access to safe drinking
                            water in remote communities of Karakalpakstan, improving WASH
                            facilities in 25 schools and 36 healthcare facilities and the
                            revision of WASH hardware and software standards (2021-2025).
                        </p>
                        <p>
                            He was also the Project Manager for UNDP Uzbekistan “Promoting
                            Youth Employment in Uzbekistan” on managing youth employment
                            and entrepreneurial skills development. He was also a Team
                            Leader on Social Services/Monitoring & Evaluation for several
                            UN Joint Programmes in Aral Sea region (2013-2014;
                            2016-2019).  At international level, Sagitjan served as
                            Planning, Monitoring and Evaluation Officer for UN Liberia
                            Resident Coordinator’s Office, where he was engaged in
                            coordination of 16 UN agencies during the EVD outbreak
                            (2014-2016).
                        </p>
                    </div>
                </div>
                <div class="mentors_item">
                    <div class="mentors_photo">
                        <div class="image">
                            <img src="./team/Elena (1).jpg" alt="Elena" />
                        </div>
                        <div class="name">Elena Kan</div>
                    </div>
                    <div class="mentors_content">
                        <p>
                            Elena Kan is the director of a young NGO “KIVA Center”
                            dedicated to advancing sustainable development by integrating
                            science, education, research, production, and agribusiness -
                            one of the few civil society organizations of its kind in the
                            Aral Sea region.
                        </p>
                        <p>
                            With a background in language studies and ecology, Elena has
                            built extensive experience in capacity building for efficient
                            land and water use in agriculture. Among her current
                            engagements is the promotion of effective production and
                            export of alternzative, low-resource oilseed crops among
                            farmers and agripreneurs. Elena also collaborates with
                            protected areas to enhance their educational programs and
                            eco-tourism capacities through non-formal learning on natural
                            resource conservation and fostering civic activism for
                            environmental protection. She strives to drive positive
                            changes in both urban and rural areas, contributing to nature
                            conservation and the resilience of local ecosystems and
                            communities through education and collaboration.
                        </p>
                    </div>
                </div>
                <div class="mentors_item">
                    <div class="mentors_photo">
                        <div class="image">
                            <img src="./team/Eva.png" alt="Eva" />
                        </div>
                        <div class="name">Eva Pfannes</div>
                    </div>
                    <div class="mentors_content">
                        <p>
                            Eva is a passionate practitioner and frequent key-note speaker
                            who thrives working in complex and fast developing
                            environments with public sector and cultural clients, focused
                            on the benefits for society and the natural environment. She
                            co-founded OOZE architects; urbanists with her partner Sylvain
                            Hartenberg in Rotterdam. “OOZE is championing a culture of
                            innovation, inclusion and integration: radical system thinkers
                            and doers, passionate collaborators leaving no one behind, and
                            catalysts’ designers that foster innovative interventions for
                            real change, from the smallest community to the world” (quote
                            Henk Ovink, 2025). Eva specializes in urban strategies,
                            blue-green infrastructure and bankable concept developments
                            that mitigate and adapt to climate change impacts with
                            Nature-based and Culture-based solutions.
                        </p>
                        <p>
                            For the Dutch Water as Leverage programme, she is the team
                            lead for the CITY OF 1000 TANKS alliance in Chennai,
                            developing a water balance model across the city to make the
                            most inclusive, efficient and economic use of water locally.
                            Água Carioca, an urban circulatory system for Brazil, received
                            the Holcim Prize for Sustainable Development. As co-curator
                            and lead designer for the International Architecture Biennial
                            Rotterdam (IABR) Eva and her team developed a neighbourhood
                            energy transition model prioritizing community ownership,
                            multi-scalar benefits, and actionable implementation
                            frameworks.
                        </p>
                    </div>
                </div>
                <div class="mentors_item">
                    <div class="mentors_photo">
                        <div class="image">
                            <img src="./team/Michelle.png" alt="Michelle" />
                        </div>
                        <div class="name">Michelle <br />Skelsgaard</div>
                    </div>
                    <div class="mentors_content">
                        <p>
                            Michelle is a Danish economic geographer, policy advisor, and
                            project manager with a strong focus on sustainable agri-food
                            systems and agroecological transformations. She hold an MSc in
                            Geography with a specialization in socio-economic
                            transformations, and have extensive experience working across
                            civil society, research, and practice.
                        </p>
                        <p>
                            She currently work as a food policy advisor at the Danish
                            environmental NGO Rådet for Grøn Omstilling (Green Transition
                            Denmark), where she  develops and leads projects at the
                            intersection of policy, sustainability, and agriculture,
                            including ecological economics, seed sovereignty, and
                            grassroots innovation in food and farming systems.
                        </p>
                        <p>
                            Her professional background spans research, advisory, and
                            editorial roles across multiple countries and contexts. She
                            co-founded interdisciplinary platforms (e.g. The Preserve
                            Journal, KOMPOST Studio), all dedicated to the exploration and
                            celebration of sustainable food culture, place-based
                            knowledge, and transformative storytelling. She is deeply
                            engaged in regional innovation networks and participatory
                            learning formats, with a particular interest in the
                            regeneration and revitalisation of rural landscapes,
                            practices, and communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="FAQ">
        <div class="faq-box">
            <p class="faq-title">FAQ</p>
            <div class="faq-listbox">
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            What is the tuition fee for the Aral School programme and does
                            the School provide a monthly stipend to cover participants’
                            expenses?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            The programme has no tuition fee. Participants receive a
                            monthly stipend, accommodation, and research support.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            What kind of degree will I receive upon completing the
                            programme?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Eveniet, in.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            Can I apply if I have no previous experience in design and
                            ecology?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Inventore, quia!
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>Does the Aral School provide accommodation?</p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Impedit, aut?
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            Are there any significant programme related expenses that I
                            will have to cover?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam, consequuntur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="faq-listbox">
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            Can I apply to the Aral School if my English is not very good?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Dolorem, incidunt.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            Is it mandatory to stay in Uzbekistan? Can I participate in
                            the Aral School online?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Ipsam, ullam.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>Is the programme full-time?</p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,
                            voluptatibus!
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>
                            Is it possible to combine work with participation in the Aral
                            School?
                        </p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                            amet.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <p>Where can I find more information about the Aral School?</p>
                        <img src="./svg/Arrow.svg" alt="Arrow" />
                    </div>

                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Tenetur, eum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="./gallery/FAQ-1.jpg" alt="faq-1" class="faq-img-1" />
        <img src="./gallery/FAQ-2.jpg" alt="faq-2" class="faq-img-2" />
        <img src="./gallery/FAQ-3.jpg" alt="faq-3" class="faq-img-3" />
        <img src="./svg/faq-ornament.svg" alt="faq ornament" class="faq-ornament" />
    </section>
    <section id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-title">
                    <p>About ACDF</p>
                </div>
                <div class="about-box">
                    <div class="about-left">
                        <p>
                            The Aral School is an initiative of the Uzbekistan Art and
                            Culture Development Foundation (ACDF).
                        </p>
                    </div>
                    <div class="about-right">
                        <p>
                            The Uzbekistan Art and Culture Development Foundation (ACDF)
                            preserves, promotes and nurtures Uzbekistan’s heritage, arts
                            and culture. Positioned at the forefront of Uzbekistan’s
                            cultural development, ACDF is committed to fostering the
                            cultural ecosystem of the country, driving the creative
                            economy, and providing opportunities for practitioners on a
                            local, regional and global stage. ACDF believes that culture
                            and heritage are vital in shaping society, uniting
                            communities, bridging generations, and facilitating
                            cross-cultural conversations. ACDF has successfully led the
                            fourth edition of the World Conference on Creative Economy
                            (WCCE) (2-4 October 2024) in Tashkent and the inaugural Aral
                            Culture Summit (4-6 April 2025) in Nukus, Karakalpakstan. The
                            Foundation currently spearheads Uzbekistan’s participation in
                            Expo 2025 Osaka, Kansai, Japan (April – October 2025), the
                            revitalisation of the Centre for Contemporary Arts in
                            Tashkent, the construction of the new National Museum of
                            Uzbekistan designed by Tadao Ando, and the restoration and
                            partial reconstruction of the Palace of the Grand Duke of
                            Romanov. ACDF has also launched “Tashkent Modernism XX/XXI”,
                            an ongoing research project documenting and protecting the
                            city's modernist architecture, highlighted by two significant
                            publications in collaboration with Rizzoli New York (published
                            in November 2024) and Lars Müller Publishers (published in May
                            2025). In Bukhara, ACDF is launching the first Bukhara
                            Biennial in September 2025.  In Samarkand, ACDF will host the
                            forthcoming 43rd session of the UNESCO General Conference (30
                            October - 13 November 2025). To date, ACDF has reached over
                            3.5 million visitors through landmark exhibitions across 17
                            countries: from the Louvre and Arab World Institute in Paris
                            to the Uffizi in Florence, the British Museum in London, and
                            the Palace Museum in Beijing. With projects presented across
                            Europe, Asia, and the Gulf, and collaborations with over 40
                            international museums and cultural institutions, the
                            Foundation is amplifying Uzbek voices and stories in the
                            world’s most influential cultural arenas.
                        </p>
                    </div>
                </div>
                <div class="about_bg">
                    <img src="./gallery/about_bg-img.jpg" alt="" />
                </div>
                <div class="square-about"></div>
            </div>
        </div>
    </section>
@endsection
