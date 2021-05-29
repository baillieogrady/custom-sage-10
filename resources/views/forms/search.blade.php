<form role="search" method="get" action="{{ home_url('/') }}">
  <label>
    <span class="hidden">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      id="search"
      placeholder="{!! esc_attr_x('Search...', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>

  <input type="submit" value="{{ esc_attr_x('', 'submit button', 'sage') }}">
</form>
