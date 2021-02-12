<section class="accordion bg-red py-14 lg:py-36 {{ $block->classes }}" data-aos="fade-up">
  <div class="container">
    <div class="flex justify-between -mx-4">
      @if ($data['heading'] || $data['wysiwyg'] || $data['items'])
        <div class="px-4 w-full lg:w-6/12">
          @if ($data['heading'])
            <h2 class="text-white mb-8">{{ $data['heading'] }}</h2>
          @endif
          @if ($data['image'])
            <div class="pr-10 pb-10 lg:hidden">
              <img data-src="{{ $data['image']['url'] }}" alt="{{ $data['alt'] }}" class="lazy">
            </div>
          @endif
          @if ($data['wysiwyg'])
            <div class="text-white text-2xs lg:text-sm lg:pr-5 lg:mb-10">{!! $data['wysiwyg'] !!}</div>
          @endif
          @if ($data['items'])
            <div class="lg:w-11/12 mb-14">
              @foreach ($data['items'] as $item)
                @php
                  $heading = $item['heading'];
                  $wysiwyg = $item['wysiwyg'];
                @endphp
                <div class="border-b-05 border-white mb-6">
                  <div class="accordion__tab relative flex justify-between items-center pb-6 cursor-pointer">
                    <h3 class="text-white text-3xl leading-tight mt-2">{{ $heading }}</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 transform transition duration-200 ease-in-out" viewBox="0 0 14.84 28.52"><path fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width=".82" d="M.29.29l13.97 13.97L.29 28.23"/></svg>
                  </div>
                  <div class="accordion__content text-white hidden">{!! $wysiwyg !!}</div>
                </div>
              @endforeach
            </div>
          @endif
          @if ($data['button'])
            <div class="mb-6 lg:mb-0">
              <a href="{{ $data['button']['url'] }}" target="{{ $data['button']['target'] }}" class="btn btn--white">{{ $data['button']['title'] }}</a>
            </div>
          @endif
        </div>
      @endif
      @if ($data['image'])
        <div class="hidden lg:block px-4 w-6/12">
          <div class="lg:pl-10">
            <img data-src="{{ $data['image']['url'] }}" alt="{{ $data['alt'] }}" class="lazy">
          </div>
        </div>
      @endif
    </div>
  </div>
</section>
