
<nav class="sticky top-0 flex flex-col md:flex-row p-5 z-50 border-b-2 border-black bg-sky-100" >
    <div class="flex flex-wrap justify-between items-center">
        <div>
            <img src="{{URL::to('/')}}/logo.svg" width="64" alt="logo"></img>
        </div>
        <div class="burger md:hidden">
            <div class="bar1 h-1 w-7 my-1.5 bg-slate-600 duration-300"></div>
            <div class="bar2 h-1 w-7 my-1.5 bg-slate-600"></div>
            <div class="bar3 h-1 w-7 my-1.5 bg-slate-600 duration-300"></div>
        </div>
    </div>
    <ul class="links md:flex flex-col md:flex-row text-left w-full md:justify-end hidden text-slate-800">
        <li>
            <a href="/" class="block p-5 hover:bg-slate-300">
                Home
            </a>
        </li>
        <li>
            <a href="/events" class="block p-5 hover:bg-slate-300 hover:underline">
                Events
            </a>
        </li>
        <li>
            <a href="#" class="block p-5 hover:bg-slate-300 hover:underline">
                About
            </a>
        </li>
        <li>
            <a href="#" class="block p-5 hover:bg-slate-300 hover:underline">
                Contact
            </a>
        </li>
        <li>
            <a href="/blog" class="block p-5 hover:bg-slate-300 hover:underline">
                Blog
            </a>
        </li>
        <li>
            <a href="#" class="block p-5 bg-red-500 text-white hover:bg-red-900 hover:underline">
                Donate
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/profile.php?id=61557613960366" target="_blank" class="block p-5">
                <img src="{{URL::to('/')}}/icons8-facebook.svg" alt="">
            </a>
        </li>
        <li>
            <a href="#" class="block p-5">
                <img src="{{URL::to('/')}}/icons8-instagram.svg" alt="">
            </a>
        </li>
    </ul>
</nav>
