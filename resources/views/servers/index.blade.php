<html lang="en" class="dark">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords"
        content="softaculous, backups, webuzo, aefer, virtualizor, ampps, php, cloud, backups, cdp, data, protection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtono Cloud Panel</title>
    <link rel="stylesheet" type="text/css" href="styles.css" id="theme_mode">
    <link rel="shortcut icon" href="https://www.virtono.com/images/favicon.ico">
    <script language="javascript" src="index.php?&amp;give=combined.js&amp;3.2.1&amp;2" type="text/javascript"></script>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="dark:bg-[#101224] relative" __processed_a3057d46-7b42-4b4e-81d8-120325bfcc0e__="true">

    <!-- Toaster starts -->
    <div id="toast-success"
        class="hidden fixed top-28 right-10 z-40 flex items-center w-full max-w-xs p-4 mb-4 text-white rounded-lg shadow dark:text-gray-400 dark:bg-green-700 bg-green-500"
        role="alert">
        <div class="flex mb-2">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z">
                    </path>
                </svg>
            </div>
            <span class="ml-3 text-xl font-medium text-white">Success</span>
            <div class="right-5 absolute">
                <button type="button" class="text-white rounded-lg inline-flex items-center justify-center"
                    aria-label="Close" onclick="hideToast('toast-success');">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="ms-3 font-normal toast-success-msg text-white"></div>
    </div>

    <div id="toast-danger"
        class="hidden fixed top-28 right-10 z-40 flex items-center w-full max-w-xs p-4 mb-4 rounded-lg shadow text-white bg-red-600"
        role="alert">
        <div class="flex mb-2">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-200 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z">
                    </path>
                </svg>
            </div>
            <span class="ml-3 text-xl font-medium text-white">Error</span>
            <div class="right-5 absolute">
                <button type="button" class="text-white rounded-lg inline-flex items-center justify-center"
                    onclick="hideToast('toast-danger');" aria-label="Close">
                    <!-- <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
</svg> -->
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="ms-3 font-normal toast-danger-msg"></div>
    </div>

    <div id="toast-warning"
        class="hidden fixed top-28 right-10 z-40 flex items-center w-full max-w-xs p-4 text-gray-500 rounded-lg shadow text-white bg-yellow-100 dark:bg-yellow-600"
        role="alert">
        <div class="flex mb-2">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-200 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z">
                    </path>
                </svg>
            </div>
            <span class="ml-3 text-xl font-medium dark:text-white text-orange-500">Warning</span>
            <div class="right-5 absolute">
                <button type="button" class="text-gray-400 rounded-lg inline-flex items-center justify-center"
                    onclick="hideToast('toast-warning')" aria-label="Close">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="ms-3 text-sm font-normal text-gray-500 dark:text-white toast-warning-msg"></div>
    </div>
    <!-- Toaster Ends -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div id="mainwindow" class="windows hidden" style="display: block;">
            <div
                class="absolute top-5 right-5 p-4 rounded-lg bg-gradient-to-r from-[#f1f8ff] to-[#f9fcff] dark:from-[#0f1730] dark:to-[#101429] border border-[#eef1f5] dark:border-gray-800 z-50">
                <div class="flex rounded-lg items-center justify-center gap-2">
                    <label class="vm_status_suspended" id="orig_uid" style="display:none;">You are an Admin</label>
                    <div id="suspended" class="notice justify-center items-center" style="display:none;"></div>
                    <div id="suspend_div" class="notice justify-center items-center hidden"></div>
                    <div class="vps-desc-status ">
                        <span class="vm_status vm_status_offline hidden" id="vm_status_offline"
                            style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" idth="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="4.5" r="4.5" fill="#dc2626"></circle>
                            </svg>Offline</span>
                        <span class="vm_status vm_status_online hidden" id="vm_status_online"
                            style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="4.5" r="4.5" fill="#16a34a"></circle>
                            </svg>Online</span>
                        <span class="vm_status vm_status_suspended hidden" id="vm_status_suspended"
                            style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="4.5" r="4.5" fill="#2563eb"></circle>
                            </svg>Suspended</span>
                        <span class="vm_status vm_status_ntw_suspended hidden" id="vm_status_nw_suspended"
                            style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="9" viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="4.5" r="4.5" fill="#ca8a04"></circle>
                            </svg>Network Suspended</span>
                    </div>
                    <div>
                        <svg class="virtualizor-dark h-7 w-7 p-1 cursor-pointer hidden"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M12.4352 1.00978H12.9346C11.302 2.46875 10.2525 4.43181 9.96875 6.55771C9.68497 8.68362 10.1848 10.8379 11.3813 12.6462C12.5778 14.4545 14.3953 15.8024 16.518 16.4556C18.6407 17.1088 20.9342 17.026 23 16.2216C22.2054 18.0604 20.9066 19.6573 19.2422 20.8419C17.5779 22.0265 15.6104 22.7544 13.5496 22.9479C11.4888 23.1415 9.41207 22.7934 7.54086 21.9408C5.66965 21.0883 4.07419 19.7632 2.92464 18.107C1.7751 16.4507 1.11461 14.5255 1.01362 12.5365C0.912624 10.5476 1.37492 8.56958 2.3512 6.81352C3.32748 5.05745 4.78111 3.58918 6.55704 2.56534C8.33297 1.5415 10.3646 1.00048 12.4352 1V1.00978Z"
                                stroke="#666D80" stroke-width="1.41667" stroke-linecap="round"
                                stroke-linejoin="round">
                            </path>
                        </svg>
                        <svg class="virtualizor-light h-7 w-7 p-1 fill-white cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M1 12H2.22222M12 1V2.22222M21.7778 12H23M12 21.7778V23M4.17778 4.17778L5.03333 5.03333M19.8222 4.17778L18.9667 5.03333M18.9667 18.9667L19.8222 19.8222M5.03333 18.9667L4.17778 19.8222M7.11111 12C7.11111 13.2966 7.62619 14.5401 8.54303 15.457C9.45988 16.3738 10.7034 16.8889 12 16.8889C13.2966 16.8889 14.5401 16.3738 15.457 15.457C16.3738 14.5401 16.8889 13.2966 16.8889 12C16.8889 10.7034 16.3738 9.45988 15.457 8.54303C14.5401 7.62619 13.2966 7.11111 12 7.11111C10.7034 7.11111 9.45988 7.62619 8.54303 8.54303C7.62619 9.45988 7.11111 10.7034 7.11111 12Z"
                                stroke="#B7B9C3" stroke-width="1.41667" stroke-linecap="round"
                                stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <div bis_skin_checked="1">
                        <button id="profileAvatar" class="bg-[#ebf4ff] px-3 py-2 rounded-full shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="19"
                                viewBox="0 0 13 19" fill="none">
                                <path
                                    d="M1 17.5V15.6667C1 14.6942 1.38631 13.7616 2.07394 13.0739C2.76158 12.3863 3.69421 12 4.66667 12H8.33333C9.30579 12 10.2384 12.3863 10.9261 13.0739C11.6137 13.7616 12 14.6942 12 15.6667V17.5M2.83333 4.66667C2.83333 5.63913 3.21964 6.57176 3.90728 7.25939C4.59491 7.94703 5.52754 8.33333 6.5 8.33333C7.47246 8.33333 8.40509 7.94703 9.09273 7.25939C9.78036 6.57176 10.1667 5.63913 10.1667 4.66667C10.1667 3.69421 9.78036 2.76158 9.09273 2.07394C8.40509 1.38631 7.47246 1 6.5 1C5.52754 1 4.59491 1.38631 3.90728 2.07394C3.21964 2.76158 2.83333 3.69421 2.83333 4.66667Z"
                                    stroke="#0075FF" stroke-width="1.41667" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <!-- Add the dropdown content -->
                        {{-- <div id="profileDropdown"
                            class="z-10 w-52 absolute overflow-hidden top-[90%] right-10 bg-white dark:bg-[#1C2037] rounded-lg commonBoxShadow"
                            bis_skin_checked="1">
                            <div class="p-4 flex items-center gap-3" bis_skin_checked="1">
                                <div class="flex flex-col" bis_skin_checked="1">
                                    <h4 class="text-sm font-medium" id="luser">Consalvo.4Severinus@hotmail.com
                                    </h4>
                                </div>
                            </div>
                            <div class="flex flex-col gap-5 p-4 border-y border-y-[#ECEFF3] dark:border-y-gray-800"
                                bis_skin_checked="1">
                                <a href="javascript:loadpage('act=profile')" class="flex items-center gap-2 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15"
                                        viewBox="0 0 11 15" fill="none">
                                        <path
                                            d="M1 14V12.5556C1 11.7894 1.30436 11.0546 1.84614 10.5128C2.38791 9.97103 3.12271 9.66667 3.88889 9.66667H6.77778C7.54396 9.66667 8.27876 9.97103 8.82053 10.5128C9.3623 11.0546 9.66667 11.7894 9.66667 12.5556V14M2.44444 3.88889C2.44444 4.65507 2.74881 5.38987 3.29058 5.93164C3.83235 6.47341 4.56715 6.77778 5.33333 6.77778C6.09951 6.77778 6.83431 6.47341 7.37609 5.93164C7.91786 5.38987 8.22222 4.65507 8.22222 3.88889C8.22222 3.12271 7.91786 2.38791 7.37609 1.84614C6.83431 1.30436 6.09951 1 5.33333 1C4.56715 1 3.83235 1.30436 3.29058 1.84614C2.74881 2.38791 2.44444 3.12271 2.44444 3.88889Z"
                                            stroke="#666D80" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    My Profile
                                </a>
                                <a href="javascript:loadpage('act=usersettings')"
                                    class="flex items-center gap-2 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15"
                                        viewBox="0 0 13 15" fill="none">
                                        <path
                                            d="M1 13.3437V11.9271C1 11.1756 1.29851 10.455 1.82986 9.92361C2.36122 9.39226 3.08189 9.09375 3.83333 9.09375H5.60417M10.209 13.3437C9.83332 13.3437 9.47298 13.1945 9.20731 12.9288C8.94163 12.6631 8.79237 12.3028 8.79237 11.9271C8.79237 11.5514 8.94163 11.191 9.20731 10.9253C9.47298 10.6597 9.83332 10.5104 10.209 10.5104M10.209 13.3437C10.5848 13.3437 10.9451 13.1945 11.2108 12.9288C11.4765 12.6631 11.6257 12.3028 11.6257 11.9271C11.6257 11.5514 11.4765 11.191 11.2108 10.9253C10.9451 10.6597 10.5848 10.5104 10.209 10.5104M10.209 13.3437V14.4062M10.209 10.5104V9.44792M12.356 10.6875L11.4359 11.2187M8.98292 12.6354L8.06208 13.1667M8.06208 10.6875L8.98292 11.2187M11.4359 12.6354L12.3567 13.1667M2.41667 3.42708C2.41667 4.17853 2.71518 4.8992 3.24653 5.43055C3.77788 5.96191 4.49855 6.26042 5.25 6.26042C6.00145 6.26042 6.72212 5.96191 7.25347 5.43055C7.78482 4.8992 8.08333 4.17853 8.08333 3.42708C8.08333 2.67564 7.78482 1.95497 7.25347 1.42361C6.72212 0.892261 6.00145 0.59375 5.25 0.59375C4.49855 0.59375 3.77788 0.892261 3.24653 1.42361C2.71518 1.95497 2.41667 2.67564 2.41667 3.42708Z"
                                            stroke="#838EAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Settings
                                </a>
                                <a id="lmapikey" style="" href="javascript:loadpage('act=apikey')"
                                    class="flex items-center gap-2 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                                        viewBox="0 0 13 7" fill="none">
                                        <path
                                            d="M1 4.20841H4.54167M6.66667 6.33341V0.666748H8.79167C9.16739 0.666748 9.52772 0.816004 9.7934 1.08168C10.0591 1.34736 10.2083 1.70769 10.2083 2.08341V2.79175C10.2083 3.16747 10.0591 3.52781 9.7934 3.79348C9.52772 4.05916 9.16739 4.20841 8.79167 4.20841H6.66667M12.3333 0.666748V6.33341M4.54167 6.33341V2.43758C4.54167 1.96793 4.3551 1.51751 4.023 1.18541C3.69091 0.853317 3.24049 0.666748 2.77083 0.666748C2.30118 0.666748 1.85076 0.853317 1.51867 1.18541C1.18657 1.51751 1 1.96793 1 2.43758V6.33341"
                                            stroke="#838EAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    API Credentials
                                </a>
                                <a id="lmsupport" style="" target="_blank"
                                    class="flex items-center gap-2 text-sm"
                                    href="https://www.virtono.com/contact.php">
                                    <i class="fas fa-headset " width="13" height="7"></i>
                                    Support
                                </a>
                            </div>
                            <div class="p-4" bis_skin_checked="1">
                                <button class="flex items-center gap-2 text-sm w-full"
                                    onclick="call('act=logout&amp;api=json');return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13"
                                        viewBox="0 0 15 13" fill="none">
                                        <path
                                            d="M8.79167 3.66659V2.24992C8.79167 1.8742 8.64241 1.51386 8.37673 1.24818C8.11106 0.982507 7.75072 0.833252 7.375 0.833252H2.41667C2.04094 0.833252 1.68061 0.982507 1.41493 1.24818C1.14926 1.51386 1 1.8742 1 2.24992V10.7499C1 11.1256 1.14926 11.486 1.41493 11.7517C1.68061 12.0173 2.04094 12.1666 2.41667 12.1666H7.375C7.75072 12.1666 8.11106 12.0173 8.37673 11.7517C8.64241 11.486 8.79167 11.1256 8.79167 10.7499V9.33325"
                                            stroke="#838EAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.25 6.5H13.75M13.75 6.5L11.625 4.375M13.75 6.5L11.625 8.625"
                                            stroke="#838EAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Logout
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>

        <!-- Floating Side buttons Starts -->
        <div class="absolute top-1/4 right-0 flex justify-end items-center overflow-hidden floating-button"
            style="display: none;">
            <div id="sidebar"
                class="flex items-center border border-[#ECEFF3] dark:border-gray-800 bg-white dark:bg-[#16192E] rounded-l-lg commonBoxShadow z-50 -mr-[178px] transition-all duration-500">
                <button id="arrowBtn" class="px-3 h-[90px]">
                    <svg id="arrowSVG" class="transition-all duration-300" xmlns="http://www.w3.org/2000/svg"
                        width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M7 1L0.999999 7L7 13" stroke="#989CAE" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="flex flex-col gap-2 py-3 pr-3 w-44">
                    <button
                        class="flex items-center gap-2 bg-[#F4F6F8] dark:bg-[#252C48] px-3 py-2 rounded-lg text-xs font-medium whitespace-nowrap"
                        onclick="show_self_shutdown_window(0);" id="self_shutdown">
                        <i class="fas fa-clock fa-1x"></i>
                        Self Shut Down
                    </button>
                    <button
                        class="flex items-center gap-2 bg-[#F4F6F8] dark:bg-[#252C48] px-3 py-2 rounded-lg text-xs font-medium whitespace-nowrap"
                        onclick="show_managevdf_window();">
                        <i class="fas fa-share fa-1x"></i>
                        Domain Forwarding
                    </button>
                    <button
                        class="flex items-center gap-2 bg-[#F4F6F8] dark:bg-[#252C48] px-3 py-2 rounded-lg text-xs font-medium whitespace-nowrap"
                        onclick="show_processes_window(1);" id="proc-cell">
                        <i class="fas fa-layer-group fa-1x"></i>
                        Processes
                    </button>
                    <button
                        class="flex items-center gap-2 bg-[#F4F6F8] dark:bg-[#252C48] px-3 py-2 rounded-lg text-xs font-medium whitespace-nowrap"
                        onclick="show_system_alerts_window();" id="alerts-cell">
                        <i class="fas fa-exclamation-circle"></i>
                        System Alerts
                    </button>
                </div>
            </div>
        </div>
        <!-- Floating Side buttons Ends -->

        <!-- Loading Div -->
        <div id="loading" style="left: 768px; display: none;" class="progress-bar z-10 bg-[#0075ff47]">
            <div class="progress-bar-value p-[2px] bg-[#0075ff]"></div>
        </div>
        <!-- End Loading Div -->

        <!-- Page Jump Div -->
        <div id="pagejump" style="display: none;">
            <form>
                <div class="input-group">
                    <input type="text" name="page" id="pagejump_input" size="5">
                    <span class="input-group-append go-option">
                        <input type="submit" value="GO" onclick=""
                            class="small-btn btn align-items-center d-flex text-white">
                    </span>
                </div>
            </form>
        </div>
        <!-- End Page Jump Div -->



        <div class="flex flex-row">
            <div class="flex flex-col">
                <!-- NAV Starts -->
                <header
                    class="hidden md:block lg:block xl:block 2xl:block sticky top-0 z-40 flex w-60 h-[80px] bg-white dark:bg-[#141628] border border-[#ECEFF3] dark:border-[#23283F]">
                    <div class="flex items-center justify-center gap-2 sm:gap-4 h-full">
                        <!-- Logo -->
                        <a href="index.php?&amp;" class="block">
                            <div class="main-logo w-44"><img src="https://www.virtono.com/images/virtono.png">
                            </div>
                        </a>
                    </div>
                </header>
                <!-- NAV Ends -->

                <div class="flex md:h-[calc(100vh-80px)] h-full overflow-hidden">
                    <!-- Sidebar Starts -->
                    <aside id="sideBar"
                        class="absolute left-0 top-0 lg:z-0 z-50 lg:h-[calc(100vh-80px)] h-full w-60 overflow-y-hidden bg-[#F7F8FB] dark:bg-[#1C2037] lg:duration-0 duration-300 ease-linear lg:static lg:translate-x-0 -translate-x-full">
                        <div class="lg:hidden flex items-center gap-2 px-6 py-5">
                            <!-- Toggle button -->
                            <button id="closeSidebar" class="block lg:hidden">
                                <svg class="fill-gray-500 dark:fill-gray-200" width="20" height="18"
                                    viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                                        fill=""></path>
                                </svg>
                            </button>
                            <!-- Logo -->
                            <div class="xl:hidden 2xl:hidden lg:hidden md:hidden sm:block" id="mob_logo"><img
                                    src="https://www.virtono.com/images/logo-favicon.png" width="80"></div>
                        </div>
                        <div class="flex flex-col overflow-y-auto no-scrollbar duration-300 ease-linear p-2 h-full">
                            <nav class="flex flex-col gap-1 p-1">
                                <div class="banner-yellow hidden cursor-pointer" id="virt_dev_banner"
                                    bis_skin_checked="1">Dev License <i class="fa fa-info-circle"
                                        aria-hidden="true"></i><span class="tooltiptext">This installation of
                                        VIRTUALIZOR is running under a Development License and is not authorized to be
                                        used for production use. Please report any cases of abuse to
                                        support@virtualizor.com</span></div>
                                <a href="javascript:loadpage('act=listvs');" class="lm-link-class " id="lmlistvs">
                                    <span class="left_menu_i"><svg class="h-6 inline" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#005BFF" fill="none"
                                            stroke-width="5.12">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path
                                                    d="M440,368a24.028,24.028,0,0,0,24-24V104a24.028,24.028,0,0,0-24-24H72a24.028,24.028,0,0,0-24,24V344a24.028,24.028,0,0,0,24,24ZM80,112H432V336H80Z"
                                                    class="ci-primary" fill="#666D80"></path>
                                                <rect width="480" height="32" x="16" y="400" class="ci-primary"
                                                    fill="#005BFF"></rect>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">List VPS</span><span class="grow"></span><span
                                        class="badge-blue" id="vps_count">10</span>
                                </a>
                                <a href="javascript:loadpage('act=create')" id="lmcreate"
                                    class="lm-link-class !hidden">
                                    <span class="left_menu_i"><svg class="h-7 inline" viewBox="0 0 28.80 28.80"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path
                                                    d="M3 10V18C3 19.1046 3.89543 20 5 20H11M3 10V6C3 4.89543 3.89543 4 5 4H19C20.1046 4 21 4.89543 21 6V10M3 10H21M21 10V13"
                                                    stroke="#666D80" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M17 14V17M17 20V17M17 17H14M17 17H20" stroke="#005BFF"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <circle cx="6" cy="7" r="1" fill="#666D80"></circle>
                                                <circle cx="9" cy="7" r="1" fill="#666D80"></circle>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Launch VPS</span>
                                </a>
                                <a href="javascript:loadpage('act=cloudres')" id="lmcloudres"
                                    class="lm-link-class !hidden">
                                    <span class="left_menu_i">
                                        <svg class="h-6 inline" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g stroke-width="0"></g>
                                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                                            <path d="M32 32v432a16 16 0 0 0 16 16h432"
                                                style="fill:none;stroke:#666D80;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px">
                                            </path>
                                            <rect x="96" y="224" width="80" height="192" rx="20"
                                                ry="20"
                                                style="fill:none;stroke:#005bff;stroke-linecap:round;stroke-linejoin:round;stroke-width:25px">
                                            </rect>
                                            <rect x="240" y="176" width="80" height="240" rx="20"
                                                ry="20"
                                                style="fill:none;stroke:#005bff;stroke-linecap:round;stroke-linejoin:round;stroke-width:25px">
                                            </rect>
                                            <rect x="383.64" y="112" width="80" height="304" rx="20"
                                                ry="20"
                                                style="fill:none;stroke:#005bff;stroke-linecap:round;stroke-linejoin:round;stroke-width:25px">
                                            </rect>
                                        </svg>
                                    </span>
                                    <span class="lm_names">Cloud Resources</span>
                                </a>
                                <a href="javascript:loadpage('act=users')" id="lmusers"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i"><svg class="h-7 inline" viewBox="0 0 28.80 28.80"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 3C9.23858 3 7 5.23858 7 8C7 10.7614 9.23858 13 12 13C14.7614 13 17 10.7614 17 8C17 5.23858 14.7614 3 12 3ZM9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8Z"
                                                    fill="#666D80"></path>
                                                <path
                                                    d="M18.2864 4.0419C17.7573 3.8837 17.2001 4.18441 17.0419 4.71355C16.8837 5.2427 17.1844 5.7999 17.7136 5.9581C18.3702 6.15442 19 6.92089 19 8C19 9.07911 18.3702 9.84558 17.7136 10.0419C17.1844 10.2001 16.8837 10.7573 17.0419 11.2864C17.2001 11.8156 17.7573 12.1163 18.2864 11.9581C19.9301 11.4667 21 9.8076 21 8C21 6.1924 19.9301 4.53331 18.2864 4.0419Z"
                                                    fill="#005BFF"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.64442 14.8986C8.09544 14.2542 10.0062 14 12 14C13.9938 14 15.9046 14.2542 17.3556 14.8986C18.8348 15.5554 20 16.7142 20 18.5C20 18.9667 19.9148 19.4978 19.5973 20.0043C19.2798 20.5106 18.7921 20.8939 18.1622 21.1789C16.9531 21.7259 15.0161 22 12 22C8.98391 22 7.04688 21.7259 5.83781 21.1789C5.20786 20.8939 4.72017 20.5106 4.40272 20.0043C4.08524 19.4978 4 18.9667 4 18.5C4 16.7142 5.16516 15.5554 6.64442 14.8986ZM7.45609 16.7264C6.40184 17.1946 6 17.7858 6 18.5C6 18.7236 6.03976 18.8502 6.09728 18.942C6.15483 19.0338 6.29214 19.1893 6.66219 19.3567C7.45312 19.7145 9.01609 20 12 20C14.9839 20 16.5469 19.7145 17.3378 19.3567C17.7079 19.1893 17.8452 19.0338 17.9027 18.942C17.9602 18.8502 18 18.7236 18 18.5C18 17.7858 17.5982 17.1946 16.5439 16.7264C15.4614 16.2458 13.8722 16 12 16C10.1278 16 8.53857 16.2458 7.45609 16.7264Z"
                                                    fill="#666D80"></path>
                                                <path
                                                    d="M20.4445 13.1042C19.9498 12.8587 19.3497 13.0608 19.1042 13.5555C18.8587 14.0502 19.0608 14.6503 19.5555 14.8958C20.525 15.3769 21 16.0458 21 17C21 17.5523 21.4477 18 22 18C22.5523 18 23 17.5523 23 17C23 15.1261 21.9384 13.8456 20.4445 13.1042Z"
                                                    fill="#005BFF"></path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Users </span><span class="grow"></span><span
                                        class="badge-blue float-right" id="users_count">0</span>
                                </a>
                                <a href="javascript:loadpage('act=ctasks')" id="lmctasks" class="lm-link-class">
                                    <span class="left_menu_i"><svg class="h-7 inline" viewBox="0 0 28.80 28.80"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path
                                                    d="M3 11.9444L4.53846 13.5L8 10M3 5.94444L4.53846 7.5L8 4M4.5 18H4.51"
                                                    stroke="#005BFF" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M11 6L21 6.00072M11 12L21 12.0007M11 18L21 18.0007M5 18C5 18.2761 4.77614 18.5 4.5 18.5C4.22386 18.5 4 18.2761 4 18C4 17.7239 4.22386 17.5 4.5 17.5C4.77614 17.5 5 17.7239 5 18Z"
                                                    stroke="#666D80" fill="#666D80" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Tasks</span>
                                </a>
                                <a href="javascript:loadpage('act=sshkeys')" id="lmsshkeys" class="lm-link-class">
                                    <span class="left_menu_i"><svg class="h-7 inline" viewBox="0 0 28.80 28.80"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path
                                                    d="M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038Z"
                                                    stroke="#005BFF" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"> </path>
                                                <path
                                                    d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                                    stroke="#666D80" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">SSH Keys</span><span class="grow"></span><span
                                        class="badge-blue float-right" id="ssh_keys_count">0</span>
                                </a>
                                <a href="javascript:loadpage('act=euiso')" id="lmeuiso" class="lm-link-class">
                                    <span class="left_menu_i"><svg class="h-6 inline" fill="#666D80" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-50.8 -50.8 609.60 609.60" xml:space="preserve" stroke="#666D80"
                                            stroke-width="10.16">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M254,0C113.9,0,0,113.9,0,254s113.9,254,254,254s254-113.9,254-254S394.1,0,254,0z M254,479.8 C129.5,479.8,28.2,378.5,28.2,254S129.5,28.2,254,28.2S479.8,129.5,479.8,254S378.5,479.8,254,479.8z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M254,138.6c-63.6,0-115.4,51.8-115.4,115.4S190.4,369.4,254,369.4S369.4,317.6,369.4,254S317.6,138.6,254,138.6z M254,341.2c-48.1,0-87.2-39.1-87.2-87.2c0-48.1,39.1-87.2,87.2-87.2c48.1,0,87.2,39.1,87.2,87.2 C341.2,302.1,302.1,341.2,254,341.2z"
                                                            stroke="#005BFF" fill="#005BFF"></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M254,195.1c-32.5,0-58.9,26.4-58.9,58.9s26.4,58.9,58.9,58.9s58.9-26.4,58.9-58.9S286.5,195.1,254,195.1z M254,284.7 c-16.9,0-30.7-13.8-30.7-30.7c0-16.9,13.8-30.7,30.7-30.7c16.9,0,30.7,13.8,30.7,30.7C284.7,270.9,270.9,284.7,254,284.7z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M393.6,373.7c-5.5-5.5-14.4-5.5-19.9,0c-32,32-74.5,49.7-119.7,49.7c-7.8,0-14.1,6.3-14.1,14.1s6.3,14.1,14.1,14.1 c52.7,0,102.3-20.6,139.6-57.9C399.1,388.2,399.1,379.3,393.6,373.7z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M254,56.5c-52.7,0-102.3,20.6-139.6,57.9c-5.5,5.5-5.5,14.4,0,20c7.6,7.6,17.2,2.8,20,0c32-32,74.5-49.7,119.7-49.7 c7.7,0,14-6.4,14-14.1C268.1,62.8,261.8,56.5,254,56.5z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">ISO</span><span class="grow"></span><span
                                        class="badge-blue float-right" id="euiso_count">0</span>
                                </a>
                                <!-- <a href="javascript:loadpage('act=apps')" id="lmapps" class="lm-link-class" style="display: none;">
<span class="left_menu_i"><i class="fas fa-1x fa-box-open"></i></span>
<span class="lm_names whitespace-nowrap">Applications</span>
</a> -->
                                <a href="javascript:loadpage('act=rdns')" id="lmrdns" class="lm-link-class">
                                    <span class="left_menu_i"><svg class="h-6 inline" fill="#666D80" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                            xml:space="preserve">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M467.478,0H178.087c-9.22,0-16.696,7.475-16.696,16.696v50.087h-50.087c-9.22,0-16.696,7.475-16.696,16.696v50.087H44.522 c-9.22,0-16.696,7.475-16.696,16.696v345.043c0,9.22,7.475,16.696,16.696,16.696h289.391c9.22,0,16.696-7.475,16.696-16.696 v-50.087h50.087c9.22,0,16.696-7.475,16.696-16.696v-50.087h50.087c9.22,0,16.696-7.475,16.696-16.696V16.696 C484.174,7.475,476.699,0,467.478,0z M317.217,478.609h-256V166.957h256V478.609z M384,411.826h-33.391V150.261 c0-9.22-7.475-16.696-16.696-16.696H128v-33.391h256V411.826z M450.783,345.043h-33.391V83.478c0-9.22-7.475-16.696-16.696-16.696 H194.783V33.391h256V345.043z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M267.13,211.478H111.304c-9.22,0-16.696,7.475-16.696,16.696c0,9.22,7.475,16.696,16.696,16.696H267.13 c9.22,0,16.696-7.475,16.696-16.696C283.826,218.953,276.351,211.478,267.13,211.478z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M267.13,278.261h-41.75c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h41.75 c9.22,0,16.696-7.475,16.696-16.696S276.351,278.261,267.13,278.261z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M158.598,278.261h-47.293c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h47.293 c9.22,0,16.696-7.475,16.696-16.696S167.818,278.261,158.598,278.261z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M267.13,345.043H111.304c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696H267.13 c9.22,0,16.696-7.475,16.696-16.696S276.351,345.043,267.13,345.043z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M267.13,411.826h-77.913c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h77.913 c9.22,0,16.696-7.475,16.696-16.696S276.351,411.826,267.13,411.826z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Reverse DNS</span>
                                </a>
                                <a href="javascript:loadpage('act=pdns')" id="lmpdns"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i"><svg class="h-7 inline" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 38.40 38.40"
                                            xml:space="preserve" fill="#000000">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: none;
                                                        stroke: #666D80;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st1 {
                                                        fill: none;
                                                        stroke: #005BFF;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                                <line class="st0" x1="3" y1="16" x2="15"
                                                    y2="16"></line>
                                                <path class="st0"
                                                    d="M21.8,13c-0.6-5.7-3-10-5.8-10c-3.3,0-6,5.8-6,13s2.7,13,6,13">
                                                </path>
                                                <path class="st0"
                                                    d="M28.9,17c0-0.3,0.1-0.7,0.1-1c0-7.2-5.8-13-13-13S3,8.8,3,16s5.8,13,13,13c1,0,2-0.1,3-0.4">
                                                </path>
                                                <path class="st1"
                                                    d="M24.5,17.5c1.9,1.9,1.9,5.1,0,7c-0.5,0.5-1,0.8-1.6,1.1c-1.8,0.7-3.9,0.4-5.4-1.1c-1.9-1.9-1.9-5.1,0-7 S22.6,15.6,24.5,17.5z">
                                                </path>
                                                <path class="st1"
                                                    d="M25.5,23l3.9,3.6c0.8,0.8,0.8,2,0,2.8l0,0c-0.8,0.8-2,0.8-2.8,0l-3.5-3.5">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">DNS</span>
                                </a>
                                <a href="javascript:loadpage('act=volume');" id="lmvolume"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i"><svg fill="#666D80" class="h-6 inline"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-50.79 -50.79 609.49 609.49" xml:space="preserve">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M505.4,297.954c-0.1-0.2-82.4-217.9-82.7-218.4c-7.3-14-21.7-22.7-37.5-22.7H122.8c-15.8,0-30.2,8.7-37.5,22.7 c-0.3,0.5-82.7,218.2-82.7,218.4c-1.6,4.5-2.6,9.4-2.6,14.4v96.4c0,23.3,19,42.3,42.3,42.3h423.3c23.3,0,42.3-19,42.3-42.3v-96.4 C508,307.254,507.1,302.454,505.4,297.954z M68.8,202.454h40.9c7.8,0,14.1-6.3,14.1-14.1c0-7.8-6.3-14.1-14.1-14.1H79.5l10.7-28.3 h61.9c7.8,0,14.1-6.3,14.1-14.1c0-7.8-6.3-14.1-14.1-14.1h-51.2l9.7-25.8c2.5-4.3,7.1-6.9,12.2-6.9h262.5c5,0,9.6,2.6,12.2,7 l67.3,178H43.3L68.8,202.454z M465.7,422.854H42.3c-7.8,0-14.1-6.3-14.1-14.1v-96.4c0-7.8,6.3-14.1,14.1-14.1h423.3 c7.8,0,14.1,6.3,14.1,14.1v96.4h0.1C479.8,416.554,473.5,422.854,465.7,422.854z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M277,346.454H67.3c-7.8,0-14.1,6.3-14.1,14.1s6.3,14.1,14.1,14.1H277c7.8,0,14.1-6.3,14.1-14.1 C291.1,352.754,284.8,346.454,277,346.454z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M440.7,346.454h-21.6c-7.8,0-14.1,6.3-14.1,14.1s6.3,14.1,14.1,14.1h21.6c7.8,0,14.1-6.3,14.1-14.1 C454.8,352.754,448.5,346.454,440.7,346.454z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF"
                                                            d="M356,346.454h-21.6c-7.8,0-14.1,6.3-14.1,14.1s6.3,14.1,14.1,14.1H356c7.8,0,14.1-6.3,14.1-14.1 C370.1,352.754,363.8,346.454,356,346.454z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Volumes</span>
                                </a>
                                <a href="javascript:loadpage('act=load_balancer')" id="lmload_balancer"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i"><svg class="h-6 inline" fill="#005BFF" version="1.1"
                                            id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-21.12 -21.12 253.43 253.43" xml:space="preserve">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <path
                                                    d="M211.18,86.626c0.037-0.789-0.108-1.588-0.45-2.328L178.59,14.745c-0.012-0.026-0.029-0.048-0.041-0.074 c-0.035-0.073-0.078-0.139-0.116-0.21c-0.105-0.193-0.219-0.377-0.346-0.551c-0.056-0.077-0.112-0.153-0.172-0.227 c-0.155-0.189-0.321-0.366-0.5-0.529c-0.033-0.03-0.061-0.064-0.094-0.093c-0.214-0.185-0.446-0.346-0.688-0.492 c-0.071-0.043-0.145-0.079-0.218-0.119c-0.188-0.102-0.382-0.19-0.583-0.267c-0.079-0.03-0.156-0.062-0.236-0.088 c-0.271-0.088-0.547-0.16-0.833-0.201c-0.03-0.004-0.061-0.003-0.091-0.007c-0.205-0.026-0.411-0.045-0.621-0.045 c-0.058,0-0.114,0.01-0.172,0.012c-0.086,0.003-0.172,0.011-0.259,0.019c-0.246,0.021-0.487,0.06-0.723,0.116 c-0.045,0.01-0.089,0.01-0.133,0.021l-57.176,15.228v-5.239c0-5.51-4.482-9.992-9.992-9.992s-9.992,4.482-9.992,9.992v10.562 l-59.75,15.913c-0.018,0.005-0.032,0.014-0.05,0.019c-0.286,0.08-0.563,0.185-0.828,0.312c-0.073,0.035-0.139,0.076-0.209,0.114 c-0.192,0.104-0.377,0.22-0.554,0.349c-0.073,0.053-0.146,0.104-0.216,0.16c-0.22,0.178-0.43,0.37-0.618,0.585 c-0.013,0.014-0.022,0.031-0.035,0.046c-0.174,0.203-0.328,0.424-0.469,0.656c-0.045,0.075-0.084,0.151-0.126,0.228 c-0.048,0.089-0.104,0.173-0.147,0.266L0.461,120.762c-0.328,0.711-0.471,1.475-0.45,2.234C0.005,123.154,0,123.311,0,123.469 c0,19.646,16.661,35.63,37.14,35.63s37.14-15.983,37.14-35.63c0-0.127-0.004-0.253-0.008-0.379c0.037-0.79-0.108-1.589-0.45-2.329 L44.175,56.607l51.429-13.697v108.106c0,16.417-13.356,29.773-29.773,29.773c-7.439,0-13.492,6.052-13.492,13.558 c0,2.761,2.238,5,5,5h96.516c2.762,0,5-2.305,5-5.066c0-7.439-6.053-13.492-13.492-13.492c-16.417,0-29.773-13.356-29.773-29.773 V37.587l49.455-13.171L137.37,84.297c-0.328,0.711-0.471,1.476-0.45,2.235c-0.005,0.158-0.01,0.315-0.01,0.473 c0,19.646,16.661,35.63,37.14,35.63s37.14-15.984,37.14-35.63C211.188,86.878,211.184,86.752,211.18,86.626z M12.818,117.859 l24.322-52.634l24.323,52.634H12.818z M174.051,28.761l24.322,52.634h-48.646L174.051,28.761z">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Load Balancer</span><span class="grow"></span><span
                                        class="badge-blue float-right" id="lb_count">0</span>
                                </a>
                                <a href="javascript:loadpage('act=firewallplan')" id="lmfirewallplan"
                                    class="lm-link-class">
                                    <span class="left_menu_i"><svg class="h-6 inline" viewBox="-2.4 -2.4 28.8 28.8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke-width="0"></g>
                                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M9.5 20H6.2c-1.12 0-1.68 0-2.108-.218a2 2 0 0 1-.874-.874C3 18.48 3 17.92 3 16.8V7.2c0-1.12 0-1.68.218-2.108a2 2 0 0 1 .874-.874C4.52 4 5.08 4 6.2 4h9.6c1.12 0 1.68 0 2.108.218a2 2 0 0 1 .874.874C19 5.52 19 6.08 19 7.2V8H3m0 4h8V8m-8 8h6M7 4v4m0 4v4m8-12v4"
                                                    stroke="#666D80"></path>
                                                <path
                                                    d="M19.828 19.828a4 4 0 1 1-5.656-5.656S14.5 15 15.5 15.5c0-1 .25-2.5 1.493-3.5 1.007 1 2.053 1.389 2.835 2.172A4 4 0 0 1 21 17c0 1.024-.39 2.047-1.172 2.828"
                                                    stroke="#005BFF"></path>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Firewall</span>
                                </a>
                                <a href="javascript:loadpage('act=billing')" id="lmbilling"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i"><svg class="h-6 inline" fill="#666D80" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" stroke="#666D80"
                                            stroke-width="5.12001">
                                            <g id="" stroke-width="0"></g>
                                            <g id="" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M448.875,1.78l-59.314,29.657L330.247,1.78c-4.7-2.35-10.232-2.35-14.932,0L256,31.437L196.686,1.78 c-4.7-2.35-10.232-2.35-14.932,0L122.44,31.437L63.125,1.78C52.05-3.758,38.964,4.304,38.964,16.713v445.202 c0,6.324,3.573,12.104,9.229,14.933l66.78,33.39c4.7,2.35,10.232,2.35,14.932,0l59.314-29.657l59.314,29.657 c4.7,2.35,10.232,2.35,14.932,0l59.314-29.657l59.314,29.657c4.7,2.35,10.232,2.35,14.932,0l66.78-33.39 c5.656-2.828,9.229-8.609,9.229-14.933V16.713C473.036,4.33,459.974-3.768,448.875,1.78z M439.646,395.135v56.462l-50.085,25.043 l-59.314-29.657c-2.35-1.175-4.908-1.762-7.466-1.762s-5.116,0.588-7.466,1.762L256,476.639l-59.314-29.657 c-4.7-2.35-10.232-2.35-14.932,0l-59.314,29.657l-50.085-25.043v-56.462V43.726l42.619,21.31c4.7,2.35,10.232,2.35,14.932,0 l59.314-29.657l59.314,29.657c4.7,2.35,10.232,2.35,14.932,0l59.314-29.657l59.314,29.657c4.7,2.35,10.232,2.35,14.932,0 l42.619-21.31V395.135z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M211.48,100.189h-89.04c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h89.04 c9.22,0,16.695-7.475,16.695-16.695C228.175,107.664,220.7,100.189,211.48,100.189z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M211.48,166.969h-89.04c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h89.04 c9.22,0,16.695-7.475,16.695-16.695C228.175,174.444,220.7,166.969,211.48,166.969z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M211.48,233.749h-89.04c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h89.04 c9.22,0,16.695-7.475,16.695-16.695C228.175,241.224,220.7,233.749,211.48,233.749z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M211.48,300.53h-89.04c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h89.04 c9.22,0,16.695-7.475,16.695-16.695C228.175,308.004,220.7,300.53,211.48,300.53z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M122.44,378.44H89.05c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h33.39 c9.22,0,16.695-7.475,16.695-16.695C139.135,385.915,131.66,378.44,122.44,378.44z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M222.61,378.44h-33.39c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h33.39 c9.22,0,16.695-7.475,16.695-16.695C239.305,385.915,231.83,378.44,222.61,378.44z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M322.781,378.44h-33.39c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h33.39 c9.22,0,16.695-7.475,16.695-16.695C339.476,385.915,332.001,378.44,322.781,378.44z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M422.951,378.44h-33.39c-9.22,0-16.695,7.475-16.695,16.695c0,9.22,7.475,16.695,16.695,16.695h33.39 c9.22,0,16.695-7.475,16.695-16.695C439.646,385.915,432.171,378.44,422.951,378.44z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path fill="#005BFF" stroke="#005BFF"
                                                            d="M352.843,191.165c-17.515-9.258-35.627-18.832-35.627-29.761c0-15.343,12.482-27.825,27.825-27.825 s27.825,12.482,27.825,27.825c0,9.22,7.475,16.695,16.695,16.695c9.22,0,16.695-7.475,16.695-16.695 c0-27.966-18.858-51.594-44.52-58.882v-7.898c0-9.22-7.475-16.695-16.695-16.695c-9.22,0-16.695,7.475-16.695,16.695v7.898 c-25.663,7.287-44.52,30.916-44.52,58.882c0,31.046,29.616,46.701,53.413,59.28c17.515,9.258,35.627,18.832,35.627,29.761 c0,15.343-12.482,27.825-27.825,27.825s-27.825-12.482-27.825-27.825c0-9.22-7.475-16.695-16.695-16.695 c-9.22,0-16.695,7.475-16.695,16.695c0,27.966,18.858,51.594,44.52,58.882v7.898c0,9.22,7.475,16.695,16.695,16.695 c9.22,0,16.695-7.475,16.695-16.695v-7.898c25.663-7.287,44.52-30.916,44.52-58.882 C406.256,219.398,376.64,203.744,352.843,191.165z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>
                                    <span class="lm_names">Billing</span>
                                </a>
                                <a href="javascript:loadpage('act=recipes')" id="lmrecipes"
                                    class="!hidden lm-link-class">
                                    <span class="left_menu_i">
                                        <svg class="h-6 inline" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                                    stroke="#666D80" stroke-width="1.5"></path>
                                                <path d="M7 14L6 15L7 16M11.5 16L12.5 17L11.5 18M10 14L8.5 18"
                                                    stroke="#0075FF" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M2.75 10C2.75 9.58579 2.41421 9.25 2 9.25C1.58579 9.25 1.25 9.58579 1.25 10H2.75ZM21.25 14C21.25 14.4142 21.5858 14.75 22 14.75C22.4142 14.75 22.75 14.4142 22.75 14H21.25ZM15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM1.35509 5.92658C1.31455 6.33881 1.61585 6.70585 2.02807 6.7464C2.4403 6.78695 2.80734 6.48564 2.84789 6.07342L1.35509 5.92658ZM22.6449 18.0734C22.6855 17.6612 22.3841 17.2941 21.9719 17.2536C21.5597 17.2131 21.1927 17.5144 21.1521 17.9266L22.6449 18.0734ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25ZM2.84789 6.07342C2.96931 4.83905 3.23045 4.17335 3.7019 3.7019L2.64124 2.64124C1.80633 3.47616 1.48944 4.56072 1.35509 5.92658L2.84789 6.07342ZM21.1521 17.9266C21.0307 19.1609 20.7695 19.8266 20.2981 20.2981L21.3588 21.3588C22.1937 20.5238 22.5106 19.4393 22.6449 18.0734L21.1521 17.9266Z"
                                                    fill="#666D80"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="lm_names">Recipes</span><span class="grow"></span><span
                                        class="badge-blue float-right" id="recipes_count">0</span>
                                </a>
                            </nav>
                        </div>
                    </aside>
                </div>
                <!-- Sidebar Ends -->
            </div>
            <div class="flex md:h-[calc(100vh)] w-full h-full overflow-y-auto overflow-hidden no-scrollbar">
                <div class="flex flex-col h-full w-full">
                    <button id="toggleButton"
                        class="block md:hidden lg:hidden xl:hidden 2xl:hidden rounded-lg border border-stroke dark:border-gray-600 p-1.5 shadow-sm">
                        <svg class="h-5 w-5 dark:hidden block" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path fill="#6b7280"
                                    d="M19 11H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0-7H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0 14H1a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2z"
                                    opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <svg class="h-5 w-5 hidden dark:block" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path fill="#d1d5db"
                                    d="M19 11H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0-7H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0 14H1a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2z"
                                    opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </button>

                    <!--List Vs Start edite bilal-->
                    <div class="khidki hidden" id="listvs" style="display: block;">
                        <main class="lg:p-5 p-3">
                            <div class="eu-page-header">
                                <div class="eu-page-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="40"
                                        viewBox="0 0 43 40" fill="none">
                                        <path
                                            d="M34.5 20C36.2239 20 37.8772 19.2888 39.0962 18.023C40.3152 16.7571 41 15.0402 41 13.25V8.75C41 6.95979 40.3152 5.2429 39.0962 3.97703C37.8772 2.71116 36.2239 2 34.5 2H8.5C6.77609 2 5.12279 2.71116 3.90381 3.97703C2.68482 5.2429 2 6.95979 2 8.75V13.25C2 15.0402 2.68482 16.7571 3.90381 18.023C5.12279 19.2888 6.77609 20 8.5 20M34.5 20H8.5M34.5 20C36.2239 20 37.8772 20.7112 39.0962 21.977C40.3152 23.2429 41 24.9598 41 26.75V31.25C41 33.0402 40.3152 34.7571 39.0962 36.023C37.8772 37.2888 36.2239 38 34.5 38H8.5C6.77609 38 5.12279 37.2888 3.90381 36.023C2.68482 34.7571 2 33.0402 2 31.25V26.75C2 24.9598 2.68482 23.2429 3.90381 21.977C5.12279 20.7112 6.77609 20 8.5 20M10.6667 11V11.0225M10.6667 29V29.0225"
                                            stroke="#0075FF" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <h3 class="text-xl font-bold">Virtual Server</h3>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="130" height="121"
                                    viewBox="0 0 130 121" fill="none" class="absolute right-0 -bottom-2">
                                    <path
                                        d="M122.553 84.5182C128.311 85.7641 134.347 84.5873 139.333 81.2467C144.318 77.906 147.844 72.6752 149.136 66.7049L152.383 51.6975C153.675 45.7272 152.626 39.5065 149.467 34.4038C146.309 29.3012 141.299 25.7346 135.541 24.4887L48.6894 5.69774C42.9308 4.45182 36.8949 5.62863 31.9096 8.96928C26.9243 12.3099 23.3978 17.5408 22.1061 23.5111L18.8592 38.5185C17.5674 44.4888 18.6162 50.7095 21.7748 55.8121C24.9333 60.9148 29.9429 64.4813 35.7015 65.7273M122.553 84.5182L35.7015 65.7273M122.553 84.5182C128.311 85.7641 133.321 89.3307 136.48 94.4333C139.638 99.536 140.687 105.757 139.395 111.727L136.148 126.734C134.856 132.705 131.33 137.936 126.345 141.276C121.359 144.617 115.323 145.794 109.565 144.548L22.7137 125.757C16.9551 124.511 11.9455 120.944 8.78691 115.842C5.62835 110.739 4.57957 104.518 5.8713 98.548L9.11826 83.5406C10.41 77.5703 13.9364 72.3394 18.9217 68.9988C23.9071 65.6581 29.9429 64.4813 35.7015 65.7273M49.433 37.2784L49.4168 37.3535M36.4452 97.3079L36.429 97.383"
                                        stroke="#0075FF" stroke-opacity="0.06" stroke-width="9"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>

                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full overflow-hidden">
                                    <div class="bg-border">
                                        <div id="pagelinks_vslist">
                                            <div class="flex items-center justify-between">
                                                <div class="pagination-top">
                                                    <div class="flex justify-between md:items-center md:flex-row flex-col gap-3 px-3 py-3 m-2><p class="
                                                        text-[#535a7a]="" dark:text-[#999fae]="" text-sm="">
                                                        Page 1 of 1<p></p>
                                                        <div class="flex items-center gap-2"></div>
                                                    </div>
                                                </div>
                                                <div class="cursor-pointer m-3 p-3 flex rounded-full shadow-md items-center gap-2"
                                                    onclick="$('#listvs_search').trigger('reset');$('#showsearch').toggle();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16" fill="none">
                                                        <path
                                                            d="M7.22221 13.4444C10.6586 13.4444 13.4444 10.6586 13.4444 7.22221C13.4444 3.78578 10.6586 1 7.22221 1C3.78578 1 1 3.78578 1 7.22221C1 10.6586 3.78578 13.4444 7.22221 13.4444Z"
                                                            stroke="#5E6276" stroke-width="1.4"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.0025 15L11.6191 11.6167" stroke="#5E6276"
                                                            stroke-width="1.4" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>

                                            <div id="showsearch" class=" w-full px-4 py-3" style="display:none;">
                                                <form accept-charset="UTF-8" name="listvs_search" method="get"
                                                    action="" id="listvs_search" class="w-full">
                                                    <div class="flex gap-3 mb-3 px-2">
                                                        <div class="w-1/4">
                                                            <label for="vpsid" class="block label-text">ID</label>
                                                            <input class="virt-input" type="text" name="vpsid"
                                                                id="vpsid">
                                                        </div>
                                                        <div class="w-1/4">
                                                            <label for="vpsip" class="block label-text">IP
                                                                Address</label>
                                                            <input class="virt-input" type="text" name="vpsip"
                                                                id="vpsip">
                                                        </div>
                                                        <div class="w-1/4">
                                                            <label for="vpshostname"
                                                                class="block label-text">Hostname</label>
                                                            <input class="virt-input" type="text"
                                                                name="vpshostname" id="vpshostname">
                                                        </div>
                                                        <div class="w-1/4">
                                                            <label for="user"
                                                                class="block label-text">User</label>
                                                            <input class="virt-input " type="text" name="user"
                                                                id="user">
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-3 mb-3 px-2">
                                                        <div class="w-1/4">
                                                            <label for="vsstatus"
                                                                class="block label-text">Status</label>
                                                            <select class="virt-select" id="vsstatus"
                                                                name="vsstatus">
                                                                <option value="0">All</option>
                                                                <option value="s">Suspended</option>
                                                                <option value="u">Unsuspended
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="w-1/4 hidden" id="search-greoup-div">
                                                            <label for="group-option" class="block label-text">Server
                                                                Group</label>
                                                            <select
                                                                class="select2 virt-select select2-hidden-accessible"
                                                                id="group-option" multiple=""
                                                                data-placeholder="Server Group" tabindex="-1"
                                                                aria-hidden="true"></select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" style="width: 100%;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--multiple"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="select2-selection__rendered">
                                                                            <li
                                                                                class="select2-search select2-search--inline">
                                                                                <input class="select2-search__field"
                                                                                    type="search" tabindex="0"
                                                                                    autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="false" role="textbox"
                                                                                    aria-autocomplete="list"
                                                                                    placeholder="Server Group"
                                                                                    style="width: 100px;">
                                                                            </li>
                                                                        </ul>
                                                                    </span></span><span class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                        <div class="w-1/4">
                                                        </div>
                                                    </div>
                                                    <div class="flex  mb-2 px-2">
                                                        <div class="w-1/4">
                                                            <button type="button" name="search" class="btn mb-2"
                                                                value="Search" id="vsSearch"
                                                                onclick="search_listvs();">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="vslist">

                                                <table class="table" id="vslist_list_table" border="0"
                                                    cellspacing="1" cellpadding="8" align="center" width="100%">
                                                    <thead
                                                        class="bg-[#F8FAFD] dark:bg-[#15172B] border-y border-y-[#ECEFF3] dark:border-y-gray-800">
                                                        <tr
                                                            class="text-[#615E83] dark:text-[#B7B9C3] text-sm uppercase text-start">
                                                            <th width="5%"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>ID</span>
                                                                </div>
                                                            </th>
                                                            <th width="150"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>Hostname</span>
                                                                </div>
                                                            </th>
                                                            <th width="150"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>Information</span>
                                                                </div>
                                                            </th>
                                                            <th width="150"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>User</span>
                                                                </div>
                                                            </th>
                                                            <th width="3%"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>Status</span>
                                                                    <i id="refresh_status"
                                                                        class="fas fa-sync-alt p-1.5 mx-1 rounded-full bg-white shadow"
                                                                        aria-hidden="true"
                                                                        onclick="loadpage('act=listvs');"></i>
                                                                </div>
                                                            </th>
                                                            <th width="10%"
                                                                class="px-4 py-3 font-medium cursor-pointer whitespace-nowrap">
                                                                <div class="flex items-center gap-2">
                                                                    <span>Action</span>
                                                                </div>
                                                            </th>
                                                            <th width="1%" class="select-all-checkbox">
                                                                <div class="flex items-center gap-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="select_all"
                                                                            id="vps_select_all"
                                                                            class="select_all virt-checkbox"
                                                                            onchange="checkbox_select_all(this);">
                                                                        <label class="custom-control-label"
                                                                            for="vps_select_all"></label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="text-sm text-[#666D80] dark:text-[#989CAE] dark:hover:bg-[#00C88F14] hover:bg-[#00C88F14] transition-all duration-300 border-b border-b-[#ECEFF3] dark:border-b-gray-800">
                                                            <td class="!px-4 !py-5 whitespace-nowrap">1</td>
                                                            <td class="!px-4 !py-5 whitespace-nowrap">
                                                                <div class="flex items-center gap-2"
                                                                    bis_skin_checked="1">
                                                                    <div class="w-10" bis_skin_checked="1">
                                                                        <img tooltip="centos-8.2-x86_64"
                                                                            src="themes/default/images/svgset/centos.svg"
                                                                            alt="centos-8.2-x86_64"
                                                                            data-tooltip-target="YgK6Hn"
                                                                            class="cursor-pointer">
                                                                    </div>
                                                                    <div class="flex flex-col" bis_skin_checked="1">
                                                                        <h4
                                                                            class="text-[#2F3554] dark:text-[#D9DBE4] font-medium">
                                                                            Consalail.com</h4>
                                                                        <p
                                                                            class="listvs_vals_header flex items-center gap-2">
                                                                            80.96.44.204<span
                                                                                class="bg-[#f0f1f3] dark:bg-[#181b2d] px-1.5 py-1 rounded-md cursor-pointer"
                                                                                tooltip="80.96.44.204"
                                                                                data-tooltip-target="6uQ3RO">+1</span>
                                                                        </p>
                                                                        <p>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="!px-4 !py-5 whitespace-nowrap">
                                                                <div class="flex flex-row items-center divide-x divide-[#ECEFF3] dark:divide-gray-700"
                                                                    bis_skin_checked="1">
                                                                    <div class="flex flex-col gap-1 pr-2"
                                                                        bis_skin_checked="1">
                                                                        <div class="flex flex-row gap-1 items-center"
                                                                            bis_skin_checked="1">
                                                                            <p class="listvs_vals_header">
                                                                                <svg class="h-6" fill="#005BFF"
                                                                                    version="1.1" id="Layer_1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    viewBox="-44.99 -44.99 389.90 389.90"
                                                                                    xml:space="preserve"
                                                                                    stroke="#005BFF"
                                                                                    stroke-width="0.0029992">
                                                                                    <g id=""
                                                                                        stroke-width="0"></g>
                                                                                    <g id=""
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke="#CCCCCC"
                                                                                        stroke-width="0.59984"></g>
                                                                                    <g id="SVGRepo_iconCarrier">
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M293.4,65.2H6.52C2.914,65.2,0,68.114,0,71.72v117.36c0,3.606,2.914,6.52,6.52,6.52h6.52v32.6 c0,3.606,2.914,6.52,6.52,6.52h260.8c3.606,0,6.52-2.914,6.52-6.52v-32.6h6.52c3.606,0,6.52-2.914,6.52-6.52V71.72 C299.92,68.114,297.006,65.2,293.4,65.2z M273.84,221.68h-19.56H228.2h-26.08h-26.08h-26.08h-26.08H97.8H71.72H45.64H26.08V195.6 h19.56h26.08H97.8h26.08h26.08h26.08h26.08h26.08h26.08h19.56V221.68z M286.88,182.56h-6.52H19.56h-6.52V78.24h273.84V182.56z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M32.6,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H32.6c-3.606,0-6.52,2.914-6.52,6.52 V163C26.08,166.606,28.994,169.52,32.6,169.52z M39.12,104.32H65.2v52.16H39.12V104.32z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M97.8,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H97.8c-3.606,0-6.52,2.914-6.52,6.52 V163C91.28,166.606,94.194,169.52,97.8,169.52z M104.32,104.32h26.08v52.16h-26.08V104.32z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M163,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H163c-3.606,0-6.52,2.914-6.52,6.52 V163C156.48,166.606,159.394,169.52,163,169.52z M169.52,104.32h26.08v52.16h-26.08V104.32z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M228.2,169.52h39.12c3.606,0,6.52-2.914,6.52-6.52V97.8c0-3.606-2.914-6.52-6.52-6.52H228.2 c-3.606,0-6.52,2.914-6.52,6.52V163C221.68,166.606,224.594,169.52,228.2,169.52z M234.72,104.32h26.08v52.16h-26.08V104.32z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M52.16,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C49.246,221.68,52.16,218.766,52.16,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M78.24,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C75.326,221.68,78.24,218.766,78.24,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M104.32,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C101.406,221.68,104.32,218.766,104.32,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M130.4,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C127.486,221.68,130.4,218.766,130.4,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M156.48,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52s-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 S156.48,218.766,156.48,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M182.56,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C179.646,221.68,182.56,218.766,182.56,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M208.64,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C205.726,221.68,208.64,218.766,208.64,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M234.72,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C231.806,221.68,234.72,218.766,234.72,215.16z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M260.8,215.16v-13.04c0-3.606-2.914-6.52-6.52-6.52c-3.606,0-6.52,2.914-6.52,6.52v13.04c0,3.606,2.914,6.52,6.52,6.52 C257.886,221.68,260.8,218.766,260.8,215.16z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </svg>
                                                                            </p>
                                                                            <h4 class="listvs_vals">2048 MB</h4>
                                                                        </div>
                                                                        <div class="flex flex-row gap-1 items-center"
                                                                            bis_skin_checked="1">
                                                                            <p class="listvs_vals_header">
                                                                                <svg viewBox="0 0 1024 1024"
                                                                                    class="h-6" version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="#000000">
                                                                                    <g id="">
                                                                                        <path
                                                                                            d="M648.4 677.5H352.6c-8.3 0-15.1-6.8-15.1-15.1v-295c0-5.5-4.5-10-10-10s-10 4.5-10 10v295c0 19.4 15.7 35.1 35.1 35.1h295.8c5.5 0 10-4.5 10-10s-4.4-10-10-10z"
                                                                                            fill="#06F3FF"></path>
                                                                                        <path
                                                                                            d="M865 386.5c11 0 20-9 20-20s-9-20-20-20h-69.7v-56.8c0-38.6-31.4-70-70-70h-27.8v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3H611v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3h-46.5v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3H438v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3h-85.8c-38.6 0-70 31.4-70 70v56.8h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7V433h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7v46.5h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7V606h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7v56.8c0 38.6 31.4 70 70 70H343v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h46.5v72.5c0 11 9 20 20 20s20-9 20-20v-72.5H516v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h46.5v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h82.8c38.6 0 70-31.4 70-70V646H865c11 0 20-9 20-20s-9-20-20-20h-69.7v-46.5H865c11 0 20-9 20-20s-9-20-20-20h-69.7V473H865c11 0 20-9 20-20s-9-20-20-20h-69.7v-46.5H865zM755.3 702.7c0 16.5-13.5 30-30 30H312.2c-16.5 0-30-13.5-30-30v-413c0-16.5 13.5-30 30-30h413.1c16.5 0 30 13.5 30 30v413z"
                                                                                            fill="#005BFF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </p>
                                                                            <h4 class="listvs_vals">1 Core</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex flex-col gap-1 px-2"
                                                                        bis_skin_checked="1">
                                                                        <div class="flex flex-row gap-1 items-center"
                                                                            bis_skin_checked="1">
                                                                            <p class="listvs_vals_header">
                                                                                <svg class="h-6"
                                                                                    viewBox="-2.4 -2.4 20.80 20.80"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="#005BFF">
                                                                                    <g id=""
                                                                                        stroke-width="0"></g>
                                                                                    <g id=""
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round">
                                                                                    </g>
                                                                                    <g id="">
                                                                                        <path
                                                                                            d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM.91 7.204A2.993 2.993 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782L.91 7.204z">
                                                                                        </path>
                                                                                    </g>
                                                                                </svg>
                                                                            </p>
                                                                            <h4 class="listvs_vals">30 GB</h4>
                                                                        </div>
                                                                        <div class="flex flex-row gap-1 items-center"
                                                                            bis_skin_checked="1">
                                                                            <p class="listvs_vals_header">
                                                                                <svg class="h-6"
                                                                                    viewBox="-2.4 -2.4 20.80 20.80"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="" stroke="">
                                                                                    <g id=""
                                                                                        stroke-width="0"></g>
                                                                                    <g id=""
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round">
                                                                                    </g>
                                                                                    <g id="">
                                                                                        <g fill="#005BFF">
                                                                                            <path
                                                                                                d="m 12 1 c 0.265625 0 0.519531 0.105469 0.707031 0.292969 l 3 3 c 0.390625 0.390625 0.390625 1.023437 0 1.414062 l -3 3 c -0.390625 0.390625 -1.023437 0.390625 -1.414062 0 s -0.390625 -1.023437 0 -1.414062 l 1.292969 -1.292969 h -7.585938 c -0.550781 0 -1 -0.449219 -1 -1 s 0.449219 -1 1 -1 h 7.585938 l -1.292969 -1.292969 c -0.390625 -0.390625 -0.390625 -1.023437 0 -1.414062 c 0.1875 -0.1875 0.441406 -0.292969 0.707031 -0.292969 z m 0 0"
                                                                                                fill-opacity="0.34902">
                                                                                            </path>
                                                                                            <path
                                                                                                d="m 4 15 c -0.265625 0 -0.519531 -0.105469 -0.707031 -0.292969 l -3 -3 c -0.3906252 -0.390625 -0.3906252 -1.023437 0 -1.414062 l 3 -3 c 0.390625 -0.390625 1.023437 -0.390625 1.414062 0 s 0.390625 1.023437 0 1.414062 l -1.292969 1.292969 h 7.585938 c 0.550781 0 1 0.449219 1 1 s -0.449219 1 -1 1 h -7.585938 l 1.292969 1.292969 c 0.390625 0.390625 0.390625 1.023437 0 1.414062 c -0.1875 0.1875 -0.441406 0.292969 -0.707031 0.292969 z m 0 0">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </svg>
                                                                            </p>
                                                                            <h4 class="listvs_vals">1000</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="!px-4 !py-5 whitespace-nowrap">
                                                                <div class="flex flex-col gap-1" bis_skin_checked="1">
                                                                    <h4 class="listvs_vals">
                                                                        Consalvo.4Severinus@hotmail.com</h4>
                                                                    <p class="listvs_vals_header"></p>
                                                                </div>
                                                            </td>
                                                            <td align="center" class="!px-4 !py-5 whitespace-nowrap">
                                                                <span data-popover-target="stat_1"
                                                                    data-popover-placement="right"><span
                                                                        class="!p-2 badge-green cursor-pointer shadow">Online</span></span>
                                                                <div data-popover="" id="stat_1" role="tooltip"
                                                                    class="absolute z-40 eu_menu_popover opacity-0 invisible"
                                                                    bis_skin_checked="1"
                                                                    data-popper-placement="right"
                                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1302.4px, 261.6px, 0px);">
                                                                    <div class="flex gap-4 items-center vpsmanage_icons px-2 py-2"
                                                                        bis_skin_checked="1"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="fa fa-stop stop"
                                                                                aria-hidden="true" title="Stop VPS"
                                                                                onclick="jqueryvpsboot('stop', 'stat_1', 1)"></i></a>
                                                                        <a href="javascript:void(0)"><i
                                                                                class="fas fa-sync-alt refresh"
                                                                                aria-hidden="true"
                                                                                title="Restart VPS"
                                                                                onclick="jqueryvpsboot('restart', 'stat_1', 1)"></i></a><a
                                                                            href="javascript:void(0)"><i
                                                                                class="fa fa-power-off power-off"
                                                                                title="Poweroff VPS"
                                                                                onclick="jqueryvpsboot('poweroff', 'stat_1', 1)"
                                                                                aria-hidden="true"></i></a><a
                                                                            id="novncURL_1" class="vncButton"
                                                                            href="index.php?&amp;act=vnc&amp;novnc=1&amp;jsnohf=1&amp;svs=1"
                                                                            target="_blank"><i
                                                                                class="fas fa-tv text-blue-600"
                                                                                title="Launch NoVNC viewer"></i></a>
                                                                    </div>
                                                                    <div data-popper-arrow=""
                                                                        style="position: absolute; top: 0px; transform: translate3d(0px, 14.4px, 0px);"
                                                                        bis_skin_checked="1"></div>
                                                                </div>
                                                            </td>
                                                            <td class="!px-4 !py-5 whitespace-nowrap">
                                                                <span>
                                                                    <a class="cursor-pointer" title="Manage"
                                                                        onclick="loadpage('act=vpsmanage&amp;svs=1');return false;">
                                                                        <svg class="h-[1.4rem] inline"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier"
                                                                                stroke-width="0"></g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M12 8.00002C9.79085 8.00002 7.99999 9.79088 7.99999 12C7.99999 14.2092 9.79085 16 12 16C14.2091 16 16 14.2092 16 12C16 9.79088 14.2091 8.00002 12 8.00002ZM9.99999 12C9.99999 10.8955 10.8954 10 12 10C13.1046 10 14 10.8955 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 9.99999 13.1046 9.99999 12Z"
                                                                                    fill="#005BFF"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M12 8.00002C9.79085 8.00002 7.99999 9.79088 7.99999 12C7.99999 14.2092 9.79085 16 12 16C14.2091 16 16 14.2092 16 12C16 9.79088 14.2091 8.00002 12 8.00002ZM9.99999 12C9.99999 10.8955 10.8954 10 12 10C13.1046 10 14 10.8955 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 9.99999 13.1046 9.99999 12Z"
                                                                                    fill="#005BFF"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M10.7673 1.01709C10.9925 0.999829 11.2454 0.99993 11.4516 1.00001L12.5484 1.00001C12.7546 0.99993 13.0075 0.999829 13.2327 1.01709C13.4989 1.03749 13.8678 1.08936 14.2634 1.26937C14.7635 1.49689 15.1915 1.85736 15.5007 2.31147C15.7454 2.67075 15.8592 3.0255 15.9246 3.2843C15.9799 3.50334 16.0228 3.75249 16.0577 3.9557L16.1993 4.77635L16.2021 4.77788C16.2369 4.79712 16.2715 4.81659 16.306 4.8363L16.3086 4.83774L17.2455 4.49865C17.4356 4.42978 17.6693 4.34509 17.8835 4.28543C18.1371 4.2148 18.4954 4.13889 18.9216 4.17026C19.4614 4.20998 19.9803 4.39497 20.4235 4.70563C20.7734 4.95095 21.0029 5.23636 21.1546 5.4515C21.2829 5.63326 21.4103 5.84671 21.514 6.02029L22.0158 6.86003C22.1256 7.04345 22.2594 7.26713 22.3627 7.47527C22.4843 7.7203 22.6328 8.07474 22.6777 8.52067C22.7341 9.08222 22.6311 9.64831 22.3803 10.1539C22.1811 10.5554 21.9171 10.8347 21.7169 11.0212C21.5469 11.1795 21.3428 11.3417 21.1755 11.4746L20.5 12L21.1755 12.5254C21.3428 12.6584 21.5469 12.8205 21.7169 12.9789C21.9171 13.1653 22.1811 13.4446 22.3802 13.8461C22.631 14.3517 22.7341 14.9178 22.6776 15.4794C22.6328 15.9253 22.4842 16.2797 22.3626 16.5248C22.2593 16.7329 22.1255 16.9566 22.0158 17.14L21.5138 17.9799C21.4102 18.1535 21.2828 18.3668 21.1546 18.5485C21.0028 18.7637 20.7734 19.0491 20.4234 19.2944C19.9803 19.6051 19.4613 19.7901 18.9216 19.8298C18.4954 19.8612 18.1371 19.7852 17.8835 19.7146C17.6692 19.6549 17.4355 19.5703 17.2454 19.5014L16.3085 19.1623L16.306 19.1638C16.2715 19.1835 16.2369 19.2029 16.2021 19.2222L16.1993 19.2237L16.0577 20.0443C16.0228 20.2475 15.9799 20.4967 15.9246 20.7157C15.8592 20.9745 15.7454 21.3293 15.5007 21.6886C15.1915 22.1427 14.7635 22.5032 14.2634 22.7307C13.8678 22.9107 13.4989 22.9626 13.2327 22.983C13.0074 23.0002 12.7546 23.0001 12.5484 23H11.4516C11.2454 23.0001 10.9925 23.0002 10.7673 22.983C10.5011 22.9626 10.1322 22.9107 9.73655 22.7307C9.23648 22.5032 8.80849 22.1427 8.49926 21.6886C8.25461 21.3293 8.14077 20.9745 8.07542 20.7157C8.02011 20.4967 7.97723 20.2475 7.94225 20.0443L7.80068 19.2237L7.79791 19.2222C7.7631 19.2029 7.72845 19.1835 7.69396 19.1637L7.69142 19.1623L6.75458 19.5014C6.5645 19.5702 6.33078 19.6549 6.11651 19.7146C5.86288 19.7852 5.50463 19.8611 5.07841 19.8298C4.53866 19.7901 4.01971 19.6051 3.57654 19.2944C3.2266 19.0491 2.99714 18.7637 2.84539 18.5485C2.71718 18.3668 2.58974 18.1534 2.4861 17.9798L1.98418 17.14C1.87447 16.9566 1.74067 16.7329 1.63737 16.5248C1.51575 16.2797 1.36719 15.9253 1.32235 15.4794C1.26588 14.9178 1.36897 14.3517 1.61976 13.8461C1.81892 13.4446 2.08289 13.1653 2.28308 12.9789C2.45312 12.8205 2.65717 12.6584 2.82449 12.5254L3.47844 12.0054V11.9947L2.82445 11.4746C2.65712 11.3417 2.45308 11.1795 2.28304 11.0212C2.08285 10.8347 1.81888 10.5554 1.61972 10.1539C1.36893 9.64832 1.26584 9.08224 1.3223 8.52069C1.36714 8.07476 1.51571 7.72032 1.63732 7.47528C1.74062 7.26715 1.87443 7.04347 1.98414 6.86005L2.48605 6.02026C2.58969 5.84669 2.71714 5.63326 2.84534 5.45151C2.9971 5.23637 3.22655 4.95096 3.5765 4.70565C4.01966 4.39498 4.53862 4.20999 5.07837 4.17027C5.50458 4.1389 5.86284 4.21481 6.11646 4.28544C6.33072 4.34511 6.56444 4.4298 6.75451 4.49867L7.69141 4.83775L7.69394 4.8363C7.72844 4.8166 7.7631 4.79712 7.79791 4.77788L7.80068 4.77635L7.94225 3.95571C7.97723 3.7525 8.02011 3.50334 8.07542 3.2843C8.14077 3.0255 8.25461 2.67075 8.49926 2.31147C8.80849 1.85736 9.23648 1.49689 9.73655 1.26937C10.1322 1.08936 10.5011 1.03749 10.7673 1.01709ZM14.0938 4.3363C14.011 3.85634 13.9696 3.61637 13.8476 3.43717C13.7445 3.2858 13.6019 3.16564 13.4352 3.0898C13.2378 3.00002 12.9943 3.00002 12.5073 3.00002H11.4927C11.0057 3.00002 10.7621 3.00002 10.5648 3.0898C10.3981 3.16564 10.2555 3.2858 10.1524 3.43717C10.0304 3.61637 9.98895 3.85634 9.90615 4.3363L9.75012 5.24064C9.69445 5.56333 9.66662 5.72467 9.60765 5.84869C9.54975 5.97047 9.50241 6.03703 9.40636 6.13166C9.30853 6.22804 9.12753 6.3281 8.76554 6.52822C8.73884 6.54298 8.71227 6.55791 8.68582 6.57302C8.33956 6.77078 8.16643 6.86966 8.03785 6.90314C7.91158 6.93602 7.83293 6.94279 7.70289 6.93196C7.57049 6.92094 7.42216 6.86726 7.12551 6.7599L6.11194 6.39308C5.66271 6.2305 5.43809 6.14921 5.22515 6.16488C5.04524 6.17811 4.87225 6.23978 4.72453 6.34333C4.5497 6.46589 4.42715 6.67094 4.18206 7.08103L3.72269 7.84965C3.46394 8.2826 3.33456 8.49907 3.31227 8.72078C3.29345 8.90796 3.32781 9.09665 3.41141 9.26519C3.51042 9.4648 3.7078 9.62177 4.10256 9.9357L4.82745 10.5122C5.07927 10.7124 5.20518 10.8126 5.28411 10.9199C5.36944 11.036 5.40583 11.1114 5.44354 11.2504C5.47844 11.379 5.47844 11.586 5.47844 12C5.47844 12.414 5.47844 12.621 5.44354 12.7497C5.40582 12.8887 5.36944 12.9641 5.28413 13.0801C5.20518 13.1875 5.07927 13.2876 4.82743 13.4879L4.10261 14.0643C3.70785 14.3783 3.51047 14.5352 3.41145 14.7349C3.32785 14.9034 3.29349 15.0921 3.31231 15.2793C3.33461 15.501 3.46398 15.7174 3.72273 16.1504L4.1821 16.919C4.4272 17.3291 4.54974 17.5342 4.72457 17.6567C4.8723 17.7603 5.04528 17.8219 5.2252 17.8352C5.43813 17.8508 5.66275 17.7695 6.11199 17.607L7.12553 17.2402C7.42216 17.1328 7.5705 17.0791 7.7029 17.0681C7.83294 17.0573 7.91159 17.064 8.03786 17.0969C8.16644 17.1304 8.33956 17.2293 8.68582 17.427C8.71228 17.4421 8.73885 17.4571 8.76554 17.4718C9.12753 17.6719 9.30853 17.772 9.40635 17.8684C9.50241 17.963 9.54975 18.0296 9.60765 18.1514C9.66662 18.2754 9.69445 18.4367 9.75012 18.7594L9.90615 19.6637C9.98895 20.1437 10.0304 20.3837 10.1524 20.5629C10.2555 20.7142 10.3981 20.8344 10.5648 20.9102C10.7621 21 11.0057 21 11.4927 21H12.5073C12.9943 21 13.2378 21 13.4352 20.9102C13.6019 20.8344 13.7445 20.7142 13.8476 20.5629C13.9696 20.3837 14.011 20.1437 14.0938 19.6637L14.2499 18.7594C14.3055 18.4367 14.3334 18.2754 14.3923 18.1514C14.4502 18.0296 14.4976 17.963 14.5936 17.8684C14.6915 17.772 14.8725 17.6719 15.2344 17.4718C15.2611 17.4571 15.2877 17.4421 15.3141 17.427C15.6604 17.2293 15.8335 17.1304 15.9621 17.0969C16.0884 17.064 16.167 17.0573 16.2971 17.0681C16.4295 17.0791 16.5778 17.1328 16.8744 17.2402L17.888 17.607C18.3372 17.7696 18.5619 17.8509 18.7748 17.8352C18.9547 17.8219 19.1277 17.7603 19.2754 17.6567C19.4502 17.5342 19.5728 17.3291 19.8179 16.919L20.2773 16.1504C20.536 15.7175 20.6654 15.501 20.6877 15.2793C20.7065 15.0921 20.6721 14.9034 20.5885 14.7349C20.4895 14.5353 20.2921 14.3783 19.8974 14.0643L19.1726 13.4879C18.9207 13.2876 18.7948 13.1875 18.7159 13.0801C18.6306 12.9641 18.5942 12.8887 18.5564 12.7497C18.5215 12.6211 18.5215 12.414 18.5215 12C18.5215 11.586 18.5215 11.379 18.5564 11.2504C18.5942 11.1114 18.6306 11.036 18.7159 10.9199C18.7948 10.8126 18.9207 10.7124 19.1725 10.5122L19.8974 9.9357C20.2922 9.62176 20.4896 9.46479 20.5886 9.26517C20.6722 9.09664 20.7065 8.90795 20.6877 8.72076C20.6654 8.49906 20.5361 8.28259 20.2773 7.84964L19.8179 7.08102C19.5728 6.67093 19.4503 6.46588 19.2755 6.34332C19.1277 6.23977 18.9548 6.1781 18.7748 6.16486C18.5619 6.14919 18.3373 6.23048 17.888 6.39307L16.8745 6.75989C16.5778 6.86725 16.4295 6.92093 16.2971 6.93195C16.167 6.94278 16.0884 6.93601 15.9621 6.90313C15.8335 6.86965 15.6604 6.77077 15.3142 6.57302C15.2877 6.55791 15.2611 6.54298 15.2345 6.52822C14.8725 6.3281 14.6915 6.22804 14.5936 6.13166C14.4976 6.03703 14.4502 5.97047 14.3923 5.84869C14.3334 5.72467 14.3055 5.56332 14.2499 5.24064L14.0938 4.3363Z"
                                                                                    fill="#005BFF"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td><input type="checkbox" class="ios virt-checkbox"
                                                                    name="vps_list[]" id="vps-checkbox1"
                                                                    value="1"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                </table>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="pagination-bottom">
                                                    <div class="flex justify-between md:items-center md:flex-row flex-col gap-3 px-3 py-3 m-2><p class="
                                                        text-[#535a7a]="" dark:text-[#999fae]="" text-sm="">
                                                        الصفحة 1 من 1<p></p>
                                                        <div class="flex items-center gap-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="vslist-bottom-go-options float-right mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <!--List Vs End-->
</body>
<script src="js/script.js"></script>

</html>
