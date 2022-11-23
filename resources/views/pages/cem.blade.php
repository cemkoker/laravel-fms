<x-app-layout title="ROOMS Overview" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="card w-72 shrink-0 space-y-8 rounded-xl p-4 sm:px-5">
                <div class="flex items-center justify-between space-x-2">
                    <div class="flex items-center space-x-3">
                        <div class="avatar">
                            <img class="mask is-squircle" src="{{ asset('images/200x200.png') }}" alt="image" />
                        </div>
                        <div>
                            <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                ROOM XX
                            </p>
                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                Building E
                            </p>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <div class="relative cursor-pointer">
                            <button
                                class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 11q-.425 0-.712-.288Q11 10.425 11 10t.288-.713Q11.575 9 12 9t.713.287Q13 9.575 13 10t-.287.712Q12.425 11 12 11Zm4 0q-.425 0-.712-.288Q15 10.425 15 10t.288-.713Q15.575 9 16 9t.712.287Q17 9.575 17 10t-.288.712Q16.425 11 16 11Zm4 0q-.425 0-.712-.288Q19 10.425 19 10t.288-.713Q19.575 9 20 9t.712.287Q21 9.575 21 10t-.288.712Q20.425 11 20 11Zm-.05 10q-3.225 0-6.287-1.425q-3.063-1.425-5.425-3.8q-2.363-2.375-3.8-5.438Q3 7.275 3 4.05v-.525Q3 3.25 3.05 3H8.9l.925 5.025l-2.85 2.875q1.05 1.8 2.638 3.375Q11.2 15.85 13.1 17l2.9-2.9l5 1v5.85q-.25.025-.525.038Q20.2 21 19.95 21Z" />
                                </svg>
                            </button>
                            <div
                                class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                                3
                            </div>
                        </div>
                        <div class="relative cursor-pointer">
                            <button
                                class="btn h-7 w-7 bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M10 2c-1.11 0-2 .89-2 2v3c0 1.11.89 2 2 2h1v2H2v2h4v2H5c-1.11 0-2 .89-2 2v3c0 1.11.89 2 2 2h4c1.11 0 2-.89 2-2v-3c0-1.11-.89-2-2-2H8v-2h8v2h-1c-1.11 0-2 .89-2 2v3c0 1.11.89 2 2 2h4c1.11 0 2-.89 2-2v-3c0-1.11-.89-2-2-2h-1v-2h4v-2h-9V9h1c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2h-4m0 2h4v3h-4V4M5 17h4v3H5v-3m10 0h4v3h-4v-3Z" />
                                </svg>
                            </button>
                            <div
                                class="absolute top-0 right-0 -m-1 flex h-4 min-w-[1rem] items-center justify-center rounded-full bg-primary px-1 text-tiny font-medium leading-none text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                </svg>

                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div>
                        <div class="badge mt-2 bg-info/10 text-info dark:bg-info/15">
                            UN
                        </div>
                        <div
                            class="badge mt-2 bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                            OHCHR
                        </div>

                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                            Experts Workshops
                        </p>
                    </div>

                </div>
                <div class="flex justify-between space-x-2">
                    <div>
                        <p class="text-xs+">Start</p>
                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                            11:00
                        </p>
                    </div>
                    <div>
                        <p class="text-xs+">End</p>
                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                            15:00
                        </p>
                    </div>
                    <div>
                        <p class="text-xs+">Privacy</p>
                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                            Public
                        </p>
                    </div>
                </div>
                <div class="grow">

                    <ul role="list" class="-my-2 divide-y text-sm divide-gray-200 text-gray-700">
                        <li class="flex py-2"><svg viewBox="0 0 24 24" aria-hidden="true"
                                class="h-6 w-6 flex-none text-cyan-500">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    fill="currentColor"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke="green" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            </svg><span class="ml-4">Automatic sound amplification</span></li>
                        <li class="flex py-2"><svg viewBox="0 0 24 24" aria-hidden="true"
                                class="h-6 w-6 flex-none text-cyan-500">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    fill="currentColor"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke="blue" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            </svg><span class="ml-4">Internet connection</span>




                        </li>
                        <li class="flex py-2"><svg viewBox="0 0 24 24" aria-hidden="true"
                                class="h-6 w-6 flex-none text-cyan-500">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    fill="currentColor"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke="blue" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            </svg><span class="ml-4">Screen</span>




                        </li>
                        <li class="flex py-2"><svg viewBox="0 0 24 24" aria-hidden="true"
                                class="h-6 w-6 flex-none text-cyan-500">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    fill="currentColor"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke="blue" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                            </svg><span class="ml-4"> Interpreters provided by organizers</span>




                        </li>





                        PC




                    </ul>
                </div>
                <div class="flex justify-between">
                    <div class="flex space-x-2">
                        <img x-tooltip="'Award Level 1'" class="h-6 w-6" src="{{ asset('images/awards/award-1.svg') }}"
                            alt="avatar" />
                        <img x-tooltip="'Award Level 2'" class="h-6 w-6" src="{{ asset('images/awards/award-6.svg') }}"
                            alt="avatar" />
                        <img x-tooltip="'Award Level 3'" class="h-6 w-6" src="{{ asset('images/awards/award-9.svg') }}"
                            alt="avatar" />
                    </div>
                    <button
                        class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="blue" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
          
        </div>

    </main>
</x-app-layout>