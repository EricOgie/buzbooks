<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buz Books</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans bg-coolGray-100 text-gray-600">
    <nav class="border-b border-gray-100 ">
        <div class="container mx-auto flex items-center justify-between py-6 px-4">
            <ul class="flex item-center">
                <li>
                    <a href="#">
                        <svg class="w-32" xmlns="http://www.w3.org/2000/svg" width="123.2" height="27.5" viewBox="0 0 337 75">
                            <g id="buzbooks_logo" transform="translate(810 -331)">
                              <rect id="Rectangle_1057" data-name="Rectangle 1057" width="56" height="75" rx="6" transform="translate(-810 331)" fill="#151b44"/>
                              <rect id="Rectangle_1058" data-name="Rectangle 1058" width="5" height="65" transform="translate(-803 336)" fill="#f0f0f0"/>
                              <rect id="Rectangle_1059" data-name="Rectangle 1059" width="20" height="3" transform="translate(-794 338)" fill="#f0f0f0"/>
                              <rect id="Rectangle_1060" data-name="Rectangle 1060" width="20" height="3" transform="translate(-794 343)" fill="#e0e0e0"/>
                              <path id="Path_310" data-name="Path 310" d="M-1198-20V6.491l4.623-7.462,3.917,7.462V-20Z" transform="translate(428.247 351.678)" fill="#3443a4"/>
                              <text id="BuzBooks" transform="translate(-735 390)" fill="#27316e" font-size="54" font-family="OpenSans-Bold, Open Sans" font-weight="700" letter-spacing="0.001em"><tspan x="0" y="0">BuzBooks</tspan></text>
                            </g>
                          </svg>
                    </a>
                </li>
                <li class="ml-16">
                    <a href="#" class="text-blueGray-800 text-center hover:text-gray-400 font-bold">Books</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="text-blueGray-800 text-center hover:text-gray-400 font-bold">Novels</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="text-blueGray-800 text-center hover:text-gray-400 font-bold">Poems</a>
                </li>
            </ul>
            <div class="flex item-center">
                <div class="relative">
                    <input type="text" class="text-sm bg-gray-200 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-3 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 58.663 58.663">
                            <g id="search_icon" transform="translate(233.658 -199)">
                              <path id="Path_311" data-name="Path 311" d="M57.947,54.493,41.264,37.811a23.265,23.265,0,1,0-3.456,3.456L54.49,57.949a2.444,2.444,0,1,0,3.456-3.456ZM23.221,41.556A18.332,18.332,0,1,1,41.553,23.224,18.351,18.351,0,0,1,23.221,41.556Z" transform="translate(-233.658 198.997)"/>
                            </g>
                          </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#"><img src="/images/ericProfilePic.jpg" alt="avatar" class="rounded-full w-8 h-8"></a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>