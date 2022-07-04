<div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
    {{-- Off-canvas menu overlay, show/hide based on off-canvas menu state.

    Entering: "transition-opacity ease-linear duration-300"
    From: "opacity-0"
    To: "opacity-100"
    Leaving: "transition-opacity ease-linear duration-300"
    From: "opacity-100"
    To: "opacity-0" --}}
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
    {{-- Off-canvas menu, show/hide based on off-canvas menu state.

    Entering: "transition ease-in-out duration-300 transform"
    From: "-translate-x-full"
    To: "translate-x-0"
    Leaving: "transition ease-in-out duration-300 transform"
    From: "translate-x-0"
    To: "-translate-x-full" --}}
    <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">
        {{-- Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
        Leaving: "ease-in-out duration-300"
        From: "opacity-100"
        To: "opacity-0" --}}
        <div class="absolute top-0 right-0 -mr-12 pt-4">
            <button type="button"
                class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="pt-5 pb-4">
            <div class="flex-shrink-0 flex items-center px-4">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                    alt="Workflow">
            </div>
            <nav aria-label="Sidebar" class="mt-5">
                <div class="px-2 space-y-1">
                    <a href="#"
                        class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <!-- Heroicon name: outline/home -->
                        <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </a>

                    <a href="#"
                        class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <!-- Heroicon name: outline/fire -->
                        <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                        Trending
                    </a>

                    <a href="#"
                        class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <!-- Heroicon name: outline/bookmark-alt -->
                        <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Bookmarks
                    </a>

                    <a href="#"
                        class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <!-- Heroicon name: outline/inbox -->
                        <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                        Messages
                    </a>

                    <a href="#"
                        class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <!-- Heroicon name: outline/user -->
                        <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profile
                    </a>
                </div>
            </nav>
        </div>
        <div class="pt-5 pb-4">
            <div class="px-2 space-y-1">
                <a href="#"
                    class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <!-- Heroicon name: outline/logout -->
                    <x-heroicon-o-logout class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500" />
                    Sign out
                </a>
            </div>
        </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
    </div>
</div>
