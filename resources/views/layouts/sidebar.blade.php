@php
    $userStatus = auth()->user()->status;
@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen py-16 transition-transform -translate-x-full border-r sm:translate-x-0 lg:px-5"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white" class="space-y-2 font-medium">
        <ul>
            <li>
                <a href="{{ route('dashboard')}}" wire:navigate
                    class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('dashboard') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('dashboard') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            @if ($userStatus == '1')
                <li>
                    <a href="{{ route('admin.user') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('admin.user') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('admin.user') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">User MANAGEMENT</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.design') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('admin.design*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('admin.design*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Design</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.properties.index') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('admin.properties.index*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('admin.properties.index*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Property On Sell</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.magazine') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('admin.magazine*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('admin.magazine*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">magazine</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.chart') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('admin.chart*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('admin.chart*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">chart</span>
                    </a>
                </li>
            @endif

            @if ($userStatus == '2')
                <li>
                    <a href="{{ route('design.index') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('design.index*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('design.index*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Blogger</span>
                    </a>
                </li>
            @endif

            @if ($userStatus == '3')
                <li>
                    <a href="{{ route('design.index') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg  {{ request()->routeIS('design.index*') ? 'bg-gray-100' : 'hover:bg-gray-100' }} group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 {{ request()->routeIS('design.index*') ? ' text-gray-900 ' : ' group-hover:text-gray-900 ' }} "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Design</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
