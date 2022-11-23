<x-app-layout title="CRM Analytics Dashboard" is-header-blur="true">
    <main class="main-content w-full pb-8">
        <div class="px-8 mt-8 ">
            <div class="col-span-12 flex space-x-4 ">
                <div class="card w-80 p-4 shrink-0 space-y-9 rounded-xl  ">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="{{ asset('images/xxiii.jpg') }}" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                    ROOM XXIII
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
                    <div class="flex">
                        <x-lang>F</x-lang>
                        <x-lang>E</x-lang>
                        <x-lang>S</x-lang>
                    </div>

                    <div class="grow">
                        <ul role="list" class="-my-2  text-sm divide-gray-200 text-gray-700">
                            <x-ressource>Sound amplification</x-ressource>
                            <x-ressource>Internet connection</x-ressource>
                            <x-ressource>PowerPoint Projector</x-ressource>
                            <x-ressource>Screen</x-ressource>
                        </ul>
                    </div>
                    <div class="flex justify-between">

                        <button
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="blue" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="card w-80 shrink-0 space-y-9 rounded-xl p-4">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="{{ asset('images/xx.jpg') }}" alt="image" />
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
                                General Assembly
                            </div>
                            <div
                                class="badge mt-2 bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                UNIDIR
                            </div>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                UNIDIR: Donors Forum
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Start</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                09:00
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">End</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                10:30
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Privacy</p>
                            <p class="text-xl font-semibold text-error">
                                Private
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <x-lang>F</x-lang>
                        <x-lang>E</x-lang>
                        <x-lang>S</x-lang>
                    </div>
                    <div class="grow">
                        <ul role="list" class="-my-2  text-sm divide-gray-200 text-gray-700">
                            <x-ressource>Sound amplification</x-ressource>
                            <x-ressource>Internet connection</x-ressource>
                            <x-ressource>PowerPoint Projector</x-ressource>
                            <x-ressource>Screen</x-ressource>
                            <x-ressource>Floor Card recording</x-ressource>
                            <x-ressource>PC</x-ressource>
                            <x-ressource>Signs/Nameplates</x-ressource>
                            <x-ressource>E. Card recording</x-ressource>
                            <x-ressource>WebEx connection</x-ressource>
                        </ul>
                    </div>
                    <div class="flex justify-between">

                        <button
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="blue" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="card w-80 shrink-0 space-y-9 rounded-xl p-4 ">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="{{ asset('images/wilson.jpg') }}" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-900 line-clamp-1 dark:text-navy-100">
                                    Ground Floor
                                </p>
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    Palais Wilson
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
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <div class="badge mt-2 bg-info/10 text-info dark:bg-info/15">
                                OHCHR
                            </div>
                            <div
                                class="badge mt-2 bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                CERD
                            </div>

                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                108th session
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Start</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                14:00
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">End</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                18:00
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Privacy</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                Public
                            </p>
                        </div>
                    </div>
                  
                    <div class="flex">
                        <x-lang>F</x-lang>
                        <x-lang>E</x-lang>
                        <x-lang>R</x-lang>
                        <x-lang>A</x-lang>
                        <x-lang>S</x-lang>
                        <x-lang>C</x-lang>
                        <x-lang>(SR):E</x-lang>
                    </div>
                    <div class="grow">
                        <ul role="list" class="-my-2  text-sm divide-gray-200 text-gray-700">
                            <x-ressource>RSI: Zoom</x-ressource>
                            <x-ressource>PPoint Projector</x-ressource>
                            <x-ressource>Screen</x-ressource>
                            <x-ressource>Sound amplification</x-ressource>
                            <x-ressource>Signs/Nameplates</x-ressource>
                            <x-ressource>Hybrid meeting: Access booths</x-ressource>
                        </ul>
                    </div>

                    <div class="flex justify-between">
                        <button
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="blue" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="card w-80 shrink-0 space-y-9 rounded-xl p-4 ">
                    <div class="flex items-center justify-between space-x-2">
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <img class="mask is-squircle" src="{{ asset('images/xxi.jpg') }}" alt="image" />
                            </div>
                            <div>
                                <p class="font-medium text-slate-900 line-clamp-1 dark:text-navy-100">
                                    ROOM XXI
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
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <div class="badge mt-2 bg-info/10 text-info dark:bg-info/15">
                                UNECE
                            </div>
                            <div
                                class="badge mt-2 bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                ECE/ITC
                            </div>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                {{ Str::limit(" Bureau of the Inland Transport...", 23) }}
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <div>
                            <p class="text-xs+">Start</p>

                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                15:00
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">End</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                18:00
                            </p>
                        </div>
                        <div>
                            <p class="text-xs+">Privacy</p>
                            <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                Public
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <x-lang>E</x-lang>
                        <x-lang>F</x-lang>
                        <x-lang>R</x-lang>
                    </div>
                    <div class="grow">
                        <ul role="list" class="-my-2  text-sm divide-gray-200 text-gray-700">
                            <x-ressource>RSI: Zoom</x-ressource>
                            <x-ressource>PPoint Projector</x-ressource>
                            <x-ressource>Screen</x-ressource>
                            <x-ressource>Sound amplification</x-ressource>
                            <x-ressource>Signs/Nameplates</x-ressource>
                            <x-ressource>Hybrid meeting: Access booths</x-ressource>
                        </ul>
                    </div>
                    <div class="flex justify-between">
                        <button
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="blue" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app-layout>