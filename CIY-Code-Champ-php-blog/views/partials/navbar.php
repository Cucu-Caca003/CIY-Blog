<!-- navbar -->
<nav class="navbar bg-base-100">
    <div class="container mx-auto">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl">TH Blog</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a class="<?= urlIs('/') ? "text-white bg-gray-900" : "" ?>" href="/">Home</a></li>
                <li><a class="<?= urlIs('/blogs') ? "text-white bg-gray-900" : "" ?>" href="/blogs">Blogs</a></li>
                <li><a class="<?= urlIs('/about') ? "text-white bg-gray-900" : "" ?>" href="/about">About</a></li>
                <li><a class="<?= urlIs('/contact') ? "text-white bg-gray-900" : "" ?>" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>