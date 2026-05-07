    @props(['title', 'text', 'banner' => null, 'step' => 'one', 'loop' => 1])

    <div class={{ 'application-box-' . $step }}>
        <p class="application-title">{!! strip_tags(clean($title)) !!}</p>
        <div class="application-number">
            <p>{{ $loop }}</p>
        </div>
        @if ($step != 'four')
            <div class="application-content">
                {!! clean($text) !!}
            </div>
            <img src={{ './svg/apply-line-' . $step . '.svg' }} alt="apply line" />
        @else
            <div class="application-form">
                <p>{!! clean($banner) !!}</p>
                <svg width="72px" height="1px">
                    <line x1="0" y1="0" x2="72px" y2="0" stroke="black" />
                </svg>
                <div class="square-shape"></div>
            </div>
            <div class="application-content-form">
                {!! clean($text) !!}
            </div>
        @endif
    </div>
