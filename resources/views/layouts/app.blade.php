@include('partials.header')

<main class="flex flex-col flex-grow">
  @yield('content')
  <x-button href="https://google.com" type="btn--alt" text="Button baby" />
</main>

@include('partials.footer')
