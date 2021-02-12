@if ($data['button'])
  <div class="container">
    <a href="{{ $data['button']['url'] }}" target="{{ $data['button']['target'] }}" class="btn mb-6 lg:mb-12  no-underline {{ $block->classes }}">{{ $data['button']['title'] }}</a>
  </div>
@endif
