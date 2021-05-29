@include('partials.header')

<main class="flex flex-col flex-grow">
  @yield('content')
  <x-button href="https://google.com" type="btn--alt" text="Button" />
  {{ $global['header']['heading'] }}
</main>

@include('partials.footer')
