<html lang="en" class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Income History</title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <link rel="icon" href="/logo1.ico" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google" content="notranslate">
    <script>
        window.addEventListener("error", function (event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        window.onload = function () {
            document.addEventListener("touchstart", function (event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            document.addEventListener(
                "touchend",
                function (event) {
                    var now = new Date().getTime();
                    if (now - lastTouchEnd <= 300) {
                        event.preventDefault();
                    }
                    lastTouchEnd = now;
                },
                false
            );
            document.addEventListener("gesturestart", function (event) {
                event.preventDefault();
            });
        };

        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function (event) {
                    noddy = event.target;
                    while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                        noddy = noddy.parentNode;
                    }
                    if (
                        "href" in noddy &&
                        noddy.href.indexOf("http") !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }

    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            background-color: #000;
        }
          .pagination-links nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .pagination-links .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .pagination-links .pagination li {
            margin: 0 5px;
        }
        
        .pagination-links .pagination li a,
        .pagination-links .pagination li span {
            display: block;
            padding: 10px 15px;
            color: #007bff;
            text-decoration: none;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .pagination-links .pagination li a:hover,
        .pagination-links .pagination li span:hover {
            background-color: #007bff;
            color: white;
        }
        
        .pagination-links .pagination .active span {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
        
        .pagination-links .pagination .disabled span {
            color: #6c757d;
            pointer-events: none;
            cursor: default;
        }
        
        a{
            color:#fff!important;
        }

    </style>
    <link href="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js" rel="preload" as="script">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="preload" as="style">
    <link href="{{asset('')}}assets/static/css/chunk-vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/chunk-vendors.794edbf9.css" rel="stylesheet">
    <link href="{{asset('')}}assets/static/css/app.23ae5dc0.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-65aadf8b.a4cef8a6.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-65aadf8b.59fb6a2e.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-2a0b1332.9f52f39a.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-2a0b1332.0436ba68.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-f8e2ce82.4965c1ba.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-f8e2ce82.8a913baf.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-21a2b91c.0ed7b871.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-21a2b91c.12695023.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-73ab94aa.2e0ec155.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-73ab94aa.70e0e268.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-67098c77.8b942857.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-67098c77.b8c94109.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-04a90ad1.aa2f317d.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-04a90ad1.28c21b1a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-273ce16e.debfb5de.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-273ce16e.6f3f099a.1717187934571.chunk.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/static/css/chunk-211e3d02.91f17cbb.css">
    <script charset="utf-8" src="{{asset('')}}assets/static/js/chunk-211e3d02.6b95ebf2.1717187934571.chunk.js"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-cfc9a7fc="" data-v-3de80214="" class="page">
            <div data-v-cfc9a7fc="" class="headers">
                <div data-v-397da544="" data-v-3de80214="" class="head" data-v-cfc9a7fc="">
                    <div data-v-397da544="" class="container flex">
                        <div data-v-397da544="" class="back">
                             <a href="{{route('user.strategy')}}" style="color: #fff">
                            <i data-v-397da544="" class="van-icon van-icon-arrow-left">
                                <!----></i>
                            </a>
                            
                            </div>
                        <!---->
                        <div data-v-397da544="" class="name tac">@lang('Trading Bonus') </div>
                        <div data-v-397da544="" class="flex1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <div data-v-397da544="" class="head_right"></div>
                    </div>
                </div>
            </div>
            <div data-v-cfc9a7fc="" id="scroll" class="content-container">
                <div data-v-cfc9a7fc="" id="content" class="content-scroll">
                    <div data-v-3de80214="" data-v-cfc9a7fc="" class="container">
                        <div data-v-3de80214="" data-v-cfc9a7fc="" class="reco_list">
                           
                            <!---->
                            <div data-v-3de80214="" data-v-cfc9a7fc="" class="bott">
                                <div data-v-3de80214="" role="feed" class="van-list" data-v-cfc9a7fc="">
                                    <?php if(is_array($datas) || is_object($datas)){ ?>

                                        <?php
                                         date_default_timezone_set('UTC');
                                          $cnt = 0; ?>
                                  @foreach($datas as $data)
                                    <div data-v-3de80214="" class="it ul">
                                        <div data-v-3de80214="" class="li">
                                            <ul data-v-3de80214="">
                                                <li data-v-3de80214="">
                                                    <div data-v-3de80214="" class="n">@lang('Investment amount')</div>
                                                    <div data-v-3de80214="" class="s">{{ $data->amt }} USDT</div>
                                                </li>
                                                <li data-v-3de80214="">
                                                    <div data-v-3de80214="" class="n">@lang('User profit')</div>
                                                    <div data-v-3de80214="" class="s">{{ $data->comm }} USDT</div>
                                                </li>
                                                <li data-v-3de80214="">
                                                    <div data-v-3de80214="" class="n">@lang('Time')</div>
                                                    <div data-v-3de80214="" class="s">{{ date('D, d M Y H:i:s', strtotime($data->created_at)) }}</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                  @endforeach
                                  <?php }?>  
                                  
                                    <div class="van-list__finished-text">  {{ $datas->withQueryString()->links() }}</div>
                                    <div class="van-list__placeholder"></div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <div data-v-4c14e1cc="" data-v-65a522d0="" data-v-cfc9a7fc="">
                            <!---->
                        </div>
                        <div data-v-4c14e1cc="" data-v-65a522d0="" data-v-cfc9a7fc="" id="popupElement">
                            <div class="van-overlay" style="z-index: 2017;display:none"></div>
                            <div data-v-4c14e1cc="" class="van-popup van-popup--round van-popup--bottom"
                                style="background: none; z-index: 2018;">
                                <div data-v-4c14e1cc="" class="popup_box" style="display: none">
                                    <div data-v-4c14e1cc="" class="scroll">
                                        <div data-v-4c14e1cc="" class="ul">

                                        <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item "><a href="{{route('user.recharge')}}">@lang('Deposits') </a></div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"><a href="{{route('user.trading-bonus')}}"> @lang('Trading Bonus') </a></div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"> <a href="{{route('user.level-income')}}">@lang('Team Commission') </a> </div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item active"><a href="{{route('user.Withdraw-History') }}">@lang('Withdrawals')</a> </div>
                                            </div>
                                            <div data-v-4c14e1cc="">
                                                <div data-v-4c14e1cc="" class="item"> <a href="{{route('user.teamturnover')}}"> @lang('Team Turnover') </a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div data-v-4c14e1cc="" class="esc" id="cancelButton">@lang('Cancel')</div>
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
               
                    <div class="van-overlay" style="z-index: 2004; display: none;"></div>
                    
                </div>
            </div>
            <div data-v-cfc9a7fc="" class="footer"></div>
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAMAAAA0X5qLAAAAh1BMVEUAAAAAv44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av44Av46sPT54AAAALHRSTlMA+wXZ+J87JB7ux4lDNRQPCvLq39PNp5BpWRmxgnAvvrnlw5RhT0sqwHRxeP/zXbkAAAGcSURBVDjLjZTXcqtAEAVnyUGIJBAKKFqS7dv//30XsHFJxrD0C0XRxc45TCEDvFsdrvfhxnGWMk1S7c70nI+bZFxdXFC8YG5GVNemxTdte7+3yxUdq4MMMaocsMza6CeSqLRo2A3dffvguPh1WEiDcuWFeN24mSNDdjS85Exs4OLJX7wpyOWJT8A25G+iFMyn2za1jOIAV+kxIU9knDUQ9d8C/EimyH9OXgawNiblrepfXSn8WKax+4wnCEWDC6ptNk5RC9GxgqqNZ1EstXL1tSP/oBQtS1DN5Qp7vbz1sdwu30b0pNAkPIOrd4131E2kAEf0rDqtaJvTY3YDvM+aOS5IH91KrWdUl2LGIhsI9PIDLm2DFmmslT++FyiDu7a5ANV1FoKpkw/gfwUFddDIO7Cl4wqBMf1iRRZJxxb86d5OYCf9fyS/TaYrFcqVeYQK6nmqEQLFPNc7AuZ2lrtYAcEs936kdZdjE97rSAxDEvG8j8wC/E8Zo1Yo/CAv0oyOYKKzN55QWTm9B9WpyGiwyMvFnLbih+M5xjDWf6S2MlzIf04ZAAAAAElFTkSuQmCC"
                    alt=""></div>
        </div>
        <div data-v-e73e51fc="" class="start-page" style="display: none;"><img data-v-e73e51fc=""
                src="/static/img/start.0aabcda5.gif"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.6.0/dist/echarts.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vue.2deea45a.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-echarts.eba990db.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vant.9e1db231.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/chunk-vendors.24e8c7cc.1717187934571.chunk.js"></script>
    <script src="{{asset('')}}assets/static/js/app.83a7756d.1717187934571.js"></script><span id="PING_IFRAME_FORM_DETECTION"
        style="display: none;"></span>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Login successful</div>
    </div>
</body>

</html>
