<form role="search" method="get" class="search-form border border-red inline-block w-full lg:w-11/12 relative" action="{{ home_url('/') }}#listing">
  <label>
    <span class="screen-reader-text hidden">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      id="search"
      class="search-field text-sm font-bold text-red p-4 placeholder-red outline-none w-full"
      placeholder="{!! esc_attr_x('Search Models', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>

  <input type="submit" class="button search-form__submit outline-none" value="{{ esc_attr_x('', 'submit button', 'sage') }}">
</form>
