Inside of the header tag
<nav>
  <ul>
    <li>
      <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
      <a href="/about" class="{{ request()->is('about/*') ? 'active' : '' }}">About</a>
    </li>
  </ul>
</nav>
