@section("header")
    <header class="header">
        <div class="container">
            <div class="social-network-block main-social-network-block">


                <a href="{{route("redirect:btn_name", "instagram")}}" target="_blank"
                   class="instagram-bg social-network-block__item-link"
                   data-tooltip="Instagram">
                    <img src="img/icon/social/i_instagram.svg"
                         alt="instagram"
                         class="social-network-block__item-img">
                </a>

                <a href="{{route("redirect:btn_name", "twitter")}}" target="_blank"
                   class="twiter-bg social-network-block__item-link"
                   data-tooltip="Twitter">
                    <img src="img/icon/social/i_twiter.svg" alt="twiter"
                         class="social-network-block__item-img">
                </a>


            </div>

            <nav class="header-nav">
                <ul class="header-nav__list">
                    <li class="header-nav__list__item">
                        <a href="{{route("index")}}"
                           class="header-nav__list__item-link">
                            home
                        </a>
                    </li>
                    <li class="header-nav__list__item">
                        <a href="{{route("all.video")}}"
                           class="header-nav__list__item-link">
                            videos
                        </a>
                    </li>
                    <li class="header-nav__list__item">
                        <a href="#contactSection"
                           class="header-nav__list__item-link">
                            contact
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-welcome">
                <h1 class="header-welcome__title">
                    <!-- <img src="img/logo.svg" class="header-welcome__title-img" alt="Logo"> -->
                    HansEl & grETTEl
                </h1>

                <h2 class="header-welcome__sub-title">
                    just a fucking fairytale
                </h2>

                <div class="header-welcome__wrap-btn">
                    <a href="{{route("redirect:btn_name", "onlyfans_vip")}}"
                       target="_blank"
                       class="btn-subscr header-welcome__wrap-btn__btn">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="btn-subscr__icon" width="47.112"
                             height="31.4" viewBox="0 0 47.112 31.4">
                            <g id="layer1"
                               transform="translate(-0.517 -1.187)">
                                <g id="g181"
                                   transform="translate(0.517 1.187)">
                                    <g id="g10969"
                                       transform="translate(0 0)">
                                        <path id="path8"
                                              d="M-45.822-3.22a15.7,15.7,0,0,0-15.7,15.7,15.7,15.7,0,0,0,15.7,15.7,15.7,15.7,0,0,0,15.7-15.7,15.7,15.7,0,0,0-15.7-15.7Zm0,20.41a4.718,4.718,0,0,1-4.718-4.718,4.718,4.718,0,0,1,4.718-4.718A4.718,4.718,0,0,1-41.1,12.472a4.7,4.7,0,0,1-1.376,3.342A4.7,4.7,0,0,1-45.822,17.19Z"
                                              transform="translate(61.522 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                        <path id="path10"
                                              d="M-37.3,8.554a19.639,19.639,0,0,0,8.7,0A12.516,12.516,0,0,1-40.545,18.711,15.665,15.665,0,0,1-54.94,28.178l4.718-14.969C-45.381-2.178-42.9-3.22-31.417-3.22h7.884C-24.851,2.589-29.4,7.025-37.292,8.555Z"
                                              transform="translate(70.644 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>OnlyFans <span class="pulse">Vip</span></span>
                    </a>

                    <a href="{{route("redirect:btn_name", "onlyfans_free")}}"
                       target="_blank"
                       class="btn-subscr header-welcome__wrap-btn__btn">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="btn-subscr__icon" width="47.112"
                             height="31.4" viewBox="0 0 47.112 31.4">
                            <g id="layer1"
                               transform="translate(-0.517 -1.187)">
                                <g id="g181"
                                   transform="translate(0.517 1.187)">
                                    <g id="g10969"
                                       transform="translate(0 0)">
                                        <path id="path8"
                                              d="M-45.822-3.22a15.7,15.7,0,0,0-15.7,15.7,15.7,15.7,0,0,0,15.7,15.7,15.7,15.7,0,0,0,15.7-15.7,15.7,15.7,0,0,0-15.7-15.7Zm0,20.41a4.718,4.718,0,0,1-4.718-4.718,4.718,4.718,0,0,1,4.718-4.718A4.718,4.718,0,0,1-41.1,12.472a4.7,4.7,0,0,1-1.376,3.342A4.7,4.7,0,0,1-45.822,17.19Z"
                                              transform="translate(61.522 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                        <path id="path10"
                                              d="M-37.3,8.554a19.639,19.639,0,0,0,8.7,0A12.516,12.516,0,0,1-40.545,18.711,15.665,15.665,0,0,1-54.94,28.178l4.718-14.969C-45.381-2.178-42.9-3.22-31.417-3.22h7.884C-24.851,2.589-29.4,7.025-37.292,8.555Z"
                                              transform="translate(70.644 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>OnlyFans <span class="pulse font_bold">Free</span></span>
                    </a>
                </div>
                <div class="header-welcome__wrap-btn">
                    <a href="{{route("redirect:btn_name", "fansly")}}"
                       target="_blank"
                       class="btn-subscr header-welcome__wrap-btn__btn">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="btn-subscr__icon" width="47.112"
                             height="31.4" viewBox="0 0 47.112 31.4">
                            <g id="layer1"
                               transform="translate(-0.517 -1.187)">
                                <g id="g181"
                                   transform="translate(0.517 1.187)">
                                    <g id="g10969"
                                       transform="translate(0 0)">
                                        <path id="path8"
                                              d="M-45.822-3.22a15.7,15.7,0,0,0-15.7,15.7,15.7,15.7,0,0,0,15.7,15.7,15.7,15.7,0,0,0,15.7-15.7,15.7,15.7,0,0,0-15.7-15.7Zm0,20.41a4.718,4.718,0,0,1-4.718-4.718,4.718,4.718,0,0,1,4.718-4.718A4.718,4.718,0,0,1-41.1,12.472a4.7,4.7,0,0,1-1.376,3.342A4.7,4.7,0,0,1-45.822,17.19Z"
                                              transform="translate(61.522 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                        <path id="path10"
                                              d="M-37.3,8.554a19.639,19.639,0,0,0,8.7,0A12.516,12.516,0,0,1-40.545,18.711,15.665,15.665,0,0,1-54.94,28.178l4.718-14.969C-45.381-2.178-42.9-3.22-31.417-3.22h7.884C-24.851,2.589-29.4,7.025-37.292,8.555Z"
                                              transform="translate(70.644 3.22)"
                                              fill="rgba(255,255,255,0.71)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Fansly</span>
                    </a>

                </div>
                <div class="header-welcome__wrap-btn">
                    <div class="social-network-block footer-social-network-block">

                        <a href="http://127.0.0.1:8000/redirect/twitter" class="instagram-bg social-network-block__item-link">
                            <img src="img/icon/social/i_instagram.svg" alt="instagram" class="social-network-block__item-img">
                        </a>

                        <a href="http://127.0.0.1:8000/redirect/instagram" class="twiter-bg social-network-block__item-link">
                            <img src="img/icon/social/i_twiter.svg" alt="twiter" class="social-network-block__item-img">
                        </a>


                    </div>
                    
                </div>


                <span class="header-welcome__addition-info">
                        The cost of a subscription for one calendar month
                    </span>

                <a href="index.html#advantages-block-main"
                   class="header-welcome__scroll-down">
                    <svg id="Mouse"
                         class="header-welcome__scroll-down__icon"
                         xmlns="http://www.w3.org/2000/svg" width="60.5"
                         height="60.5" viewBox="0 0 60.5 60.5">
                        <path id="Контур_15" data-name="Контур 15"
                              d="M0,0H60.5V60.5H0Z" fill="none" />
                        <path id="Контур_16" data-name="Контур 16"
                              d="M21.125,48.375h0A15.169,15.169,0,0,1,6,33.25V18.125A15.169,15.169,0,0,1,21.125,3h0A15.169,15.169,0,0,1,36.25,18.125V33.25A15.169,15.169,0,0,1,21.125,48.375Z"
                              transform="translate(9.125 4.563)" fill="none"
                              stroke="#a5a5a5" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="3" />
                        <path id="Контур_17" data-name="Контур 17"
                              d="M12,8v7.563"
                              transform="translate(18.25 12.167)" fill="none"
                              stroke="#a5a5a5" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="3" />
                    </svg>
                </a>

            </div>
        </div>
    </header>

@endsection
