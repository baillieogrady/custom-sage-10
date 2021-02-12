@php
    // banner block
    $heading = $data['heading'];
    $wysiwyg = $data['wysiwyg'];
    $button = $data['button'];
    $image = $data['image'];

@endphp

<section class="banner pt-14 pb-14 lg:pb-24 bg-gradient-to-b from-grey" data-aos="fade-up">
    <div class="container">
        <div class="flex justify-between items-center flex-wrap -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                @if ($heading)            
                    <h2 class="mb-8">{{ $heading }}</h2>
                @endif
                @if ($wysiwyg)
                    <div class="text-red font-medium">
                        {!! $wysiwyg !!}
                    </div>
                @endif
                @if ($button)
                    <a href="{{ $button['url'] }}" target="{{ $button['target'] }}" class="btn">{{ $button['title'] }}</a>
                @endif
            </div>
            @if ($image)
                <div class="w-full lg:w-6/12 px-4 hidden lg:block">
                    <div class="lg:px-10">
                        <img data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lazy">
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>