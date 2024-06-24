@guest
    <!-- Dropdown Start -->
	    <a href="/login" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">Login</a>
	    <a href="/register" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">Register</a>
    <!-- Dropdown End -->   
@endguest

<!-- User Area -->
@auth
    <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
        <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
            <span class="hidden text-right lg:block">
                <span class="block text-sm font-medium text-black dark:text-white"><div>{{ Auth::user()->name }}</div></span>
                <span class="block text-xs font-medium">Administrator</span>
            </span>

            <span class="h-12 w-12 rounded-full">
                <img src="/src/images/user/user-01.png" alt="User" />
            </span>

            <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                    fill=""
                />
            </svg>
        </a>

        <!-- Dropdown Start -->
        <div x-show="dropdownOpen" class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <a href="/profile" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">Profile</a>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                    Log Out
                </button>
            </form>
        </div>
        <!-- Dropdown End -->
    </div>
@endauth