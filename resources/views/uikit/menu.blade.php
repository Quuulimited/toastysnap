<nav>
    <a href="/">
        <img src="/images/toast.svg" class="logo">    
    </a>
    <ul>
        <li class="{{request()->path()=='/' ? 'active' : ''}}">
            <a href="/">
                Gallery
            </a>
        </li>
        <li class="{{request()->path()=='upload' ? 'active' : ''}}">
            <a href="/upload">
                Upload
            </a>
        </li>
    </ul>
</nav>