@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <main class="sub">
        <section class="lnb">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <ul class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(558.5px, 0px, 0px);">
                    <li class="swiper-slide">
                        <a href="/product/product.jsp?productCode1=HomeAudio" class="on">Home Audio LINE</a>
                    </li>
                    <li class="swiper-slide">
                        <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=Amplifier">Amplifier</a>
                    </li>
                    <li class="swiper-slide swiper-slide-prev">
                        <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=Speaker">Speaker</a>
                    </li>
                    <li class="swiper-slide swiper-slide-active">
                        <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=NetworkPlayer">Network
                            Player</a>
                    </li>
                </ul>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>
        <section class="bnr-top scrollAniTop view">
            <div aria-label="Video Player" lang="en" role="region" tabindex="-1" id="productVideo"
                class="video-js vjs-controls-enabled vjs-workinghover vjs-v7 productVideo-dimensions vjs-has-started vjs-playing vjs-waiting vjs-paused vjs-controls-disabled vjs-user-active"
                muted="true" loop="true" autoplay="true" playsinline="true">
                <div playsinline="playsinline" autoplay="autoplay" loop="loop" muted="muted" class="vjs-tech"
                    id="productVideo_html5_api" tabindex="-1" role="application" lang="en" aria-label="Video Player">
                    <video id="productVideo_html5_api" class="vjs-tech" muted="muted" loop="" autoplay=""
                        playsinline="playsinline" tabindex="-1" role="application">
                        <source
                            src="https://cdn.astellnkern.com/sub_main_banner/202111/20211104102430_0ee35512-3c3b-4be1-826f-4eb982af114d.mp4"
                            type="video/mp4">
                    </video>
                    <div class="vjs-poster vjs-hidden" tabindex="-1" aria-disabled="false"></div>
                    <div class="vjs-text-track-display" aria-live="off" aria-atomic="true">
                        <div style="position: absolute; inset: 0px; margin: 1.5%"></div>
                    </div>
                    <div class="vjs-loading-spinner" dir="ltr">
                        <span class="vjs-control-text">Video Player is loading.</span>
                    </div>
                    <button class="vjs-big-play-button" type="button" title="Play Video" aria-disabled="false">
                        <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                            aria-live="polite">Play Video</span>
                    </button>
                    <div class="vjs-control-bar" dir="ltr">
                        <button class="vjs-play-control vjs-control vjs-button vjs-playing" type="button" title="Pause"
                            aria-disabled="false">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Pause</span>
                        </button>
                        <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal">
                            <button class="vjs-mute-control vjs-control vjs-button vjs-vol-0" type="button" title="Unmute"
                                aria-disabled="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                    aria-live="polite">Unmute</span>
                            </button>
                            <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                                <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                                    role="slider" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    aria-label="Volume Level" aria-live="polite" aria-valuetext="0%">
                                    <div class="vjs-volume-level">
                                        <span class="vjs-control-text"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vjs-current-time vjs-time-control vjs-control">
                            <span class="vjs-control-text" role="presentation">Current Time </span><span
                                class="vjs-current-time-display" aria-live="off" role="presentation">0:01</span>
                        </div>
                        <div class="vjs-time-control vjs-time-divider" aria-hidden="true">
                            <div><span>/</span></div>
                        </div>
                        <div class="vjs-duration vjs-time-control vjs-control">
                            <span class="vjs-control-text" role="presentation">Duration </span><span
                                class="vjs-duration-display" aria-live="off" role="presentation">0:04</span>
                        </div>
                        <div class="vjs-progress-control vjs-control">
                            <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal"
                                role="slider" aria-valuenow="28.67" aria-valuemin="0" aria-valuemax="100"
                                aria-label="Progress Bar" aria-valuetext="0:01 of 0:04">
                                <div class="vjs-load-progress" style="width: 100%">
                                    <span class="vjs-control-text"><span>Loaded</span>:
                                        <span class="vjs-control-text-loaded-percentage">100.00%</span></span>
                                    <div data-start="0" data-end="4.4044" style="left: 0%; width: 100%"></div>
                                </div>
                                <div class="vjs-mouse-display">
                                    <div class="vjs-time-tooltip" aria-hidden="true"></div>
                                </div>
                                <div class="vjs-play-progress vjs-slider-bar" aria-hidden="true" style="width: 28.67%">
                                    <div class="vjs-time-tooltip" aria-hidden="true" style="right: -23px">
                                        0:01
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vjs-live-control vjs-control vjs-hidden">
                            <div class="vjs-live-display" aria-live="off">
                                <span class="vjs-control-text">Stream Type </span>LIVE
                            </div>
                        </div>
                        <button class="vjs-seek-to-live-control vjs-control" type="button"
                            title="Seek to live, currently behind live" aria-disabled="false">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Seek to live, currently behind live</span><span
                                class="vjs-seek-to-live-text" aria-hidden="true">LIVE</span>
                        </button>
                        <div class="vjs-remaining-time vjs-time-control vjs-control">
                            <span class="vjs-control-text" role="presentation">Remaining Time </span><span
                                aria-hidden="true">-</span><span class="vjs-remaining-time-display" aria-live="off"
                                role="presentation">0:03</span>
                        </div>
                        <div class="vjs-custom-control-spacer vjs-spacer"></div>
                        <div
                            class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                            <div class="vjs-playback-rate-value">1x</div>
                            <button class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button"
                                type="button" aria-disabled="false" title="Playback Rate" aria-haspopup="true"
                                aria-expanded="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                    class="vjs-control-text" aria-live="polite">Playback Rate</span>
                            </button>
                            <div class="vjs-menu">
                                <ul class="vjs-menu-content" role="menu"></ul>
                            </div>
                        </div>
                        <div
                            class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                            <button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                type="button" aria-disabled="false" title="Chapters" aria-haspopup="true"
                                aria-expanded="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                    class="vjs-control-text" aria-live="polite">Chapters</span>
                            </button>
                            <div class="vjs-menu">
                                <ul class="vjs-menu-content" role="menu">
                                    <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                            <button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                type="button" aria-disabled="false" title="Descriptions" aria-haspopup="true"
                                aria-expanded="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                    class="vjs-control-text" aria-live="polite">Descriptions</span>
                            </button>
                            <div class="vjs-menu">
                                <ul class="vjs-menu-content" role="menu">
                                    <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio"
                                        aria-disabled="false" aria-checked="true">
                                        <span class="vjs-menu-item-text">descriptions off</span><span
                                            class="vjs-control-text" aria-live="polite">, selected</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                            <button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                type="button" aria-disabled="false" title="Captions" aria-haspopup="true"
                                aria-expanded="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                    class="vjs-control-text" aria-live="polite">Captions</span>
                            </button>
                            <div class="vjs-menu">
                                <ul class="vjs-menu-content" role="menu">
                                    <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem"
                                        aria-disabled="false">
                                        <span class="vjs-menu-item-text">captions settings</span><span
                                            class="vjs-control-text" aria-live="polite">, opens captions settings
                                            dialog</span>
                                    </li>
                                    <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio"
                                        aria-disabled="false" aria-checked="true">
                                        <span class="vjs-menu-item-text">captions off</span><span class="vjs-control-text"
                                            aria-live="polite">, selected</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                            <button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                type="button" aria-disabled="false" title="Audio Track" aria-haspopup="true"
                                aria-expanded="false">
                                <span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                    class="vjs-control-text" aria-live="polite">Audio Track</span>
                            </button>
                            <div class="vjs-menu">
                                <ul class="vjs-menu-content" role="menu"></ul>
                            </div>
                        </div>
                        <button class="vjs-picture-in-picture-control vjs-control vjs-button" type="button"
                            title="Picture-in-Picture" aria-disabled="false">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Picture-in-Picture</span></button><button
                            class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen"
                            aria-disabled="false">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Fullscreen</span>
                        </button>
                    </div>
                    <div class="vjs-error-display vjs-modal-dialog vjs-hidden" tabindex="-1"
                        aria-describedby="productVideo_component_413_description" aria-hidden="true"
                        aria-label="Modal Window" role="dialog">
                        <p class="vjs-modal-dialog-description vjs-control-text"
                            id="productVideo_component_413_description">
                            This is a modal window.
                        </p>
                        <div class="vjs-modal-dialog-content" role="document"></div>
                    </div>
                    <div class="vjs-modal-dialog vjs-hidden vjs-text-track-settings" tabindex="-1"
                        aria-describedby="productVideo_component_419_description" aria-hidden="true"
                        aria-label="Caption Settings Dialog" role="dialog">
                        <p class="vjs-modal-dialog-description vjs-control-text"
                            id="productVideo_component_419_description">
                            Beginning of dialog window. Escape will cancel and close the
                            window.
                        </p>
                        <div class="vjs-modal-dialog-content" role="document">
                            <div class="vjs-track-settings-colors">
                                <fieldset class="vjs-fg-color vjs-track-setting">
                                    <legend id="captions-text-legend-productVideo_component_419">
                                        Text
                                    </legend>
                                    <label id="captions-foreground-color-productVideo_component_419"
                                        class="vjs-label">Color</label><select
                                        aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419">
                                        <option id="captions-foreground-color-productVideo_component_419-White"
                                            value="#FFF"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-White">
                                            White
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Black"
                                            value="#000"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Black">
                                            Black
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Red"
                                            value="#F00"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Red">
                                            Red
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Green"
                                            value="#0F0"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Green">
                                            Green
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Blue"
                                            value="#00F"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Blue">
                                            Blue
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Yellow"
                                            value="#FF0"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Yellow">
                                            Yellow
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Magenta"
                                            value="#F0F"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Magenta">
                                            Magenta
                                        </option>
                                        <option id="captions-foreground-color-productVideo_component_419-Cyan"
                                            value="#0FF"
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-color-productVideo_component_419 captions-foreground-color-productVideo_component_419-Cyan">
                                            Cyan
                                        </option>
                                    </select><span class="vjs-text-opacity vjs-opacity"><label
                                            id="captions-foreground-opacity-productVideo_component_419"
                                            class="vjs-label">Transparency</label><select
                                            aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-opacity-productVideo_component_419">
                                            <option id="captions-foreground-opacity-productVideo_component_419-Opaque"
                                                value="1"
                                                aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-opacity-productVideo_component_419 captions-foreground-opacity-productVideo_component_419-Opaque">
                                                Opaque
                                            </option>
                                            <option
                                                id="captions-foreground-opacity-productVideo_component_419-SemiTransparent"
                                                value="0.5"
                                                aria-labelledby="captions-text-legend-productVideo_component_419 captions-foreground-opacity-productVideo_component_419 captions-foreground-opacity-productVideo_component_419-SemiTransparent">
                                                Semi-Transparent
                                            </option>
                                        </select></span>
                                </fieldset>
                                <fieldset class="vjs-bg-color vjs-track-setting">
                                    <legend id="captions-background-productVideo_component_419">
                                        Background
                                    </legend>
                                    <label id="captions-background-color-productVideo_component_419"
                                        class="vjs-label">Color</label><select
                                        aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419">
                                        <option id="captions-background-color-productVideo_component_419-Black"
                                            value="#000"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Black">
                                            Black
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-White"
                                            value="#FFF"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-White">
                                            White
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Red"
                                            value="#F00"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Red">
                                            Red
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Green"
                                            value="#0F0"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Green">
                                            Green
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Blue"
                                            value="#00F"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Blue">
                                            Blue
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Yellow"
                                            value="#FF0"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Yellow">
                                            Yellow
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Magenta"
                                            value="#F0F"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Magenta">
                                            Magenta
                                        </option>
                                        <option id="captions-background-color-productVideo_component_419-Cyan"
                                            value="#0FF"
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-color-productVideo_component_419 captions-background-color-productVideo_component_419-Cyan">
                                            Cyan
                                        </option>
                                    </select><span class="vjs-bg-opacity vjs-opacity"><label
                                            id="captions-background-opacity-productVideo_component_419"
                                            class="vjs-label">Transparency</label><select
                                            aria-labelledby="captions-background-productVideo_component_419 captions-background-opacity-productVideo_component_419">
                                            <option id="captions-background-opacity-productVideo_component_419-Opaque"
                                                value="1"
                                                aria-labelledby="captions-background-productVideo_component_419 captions-background-opacity-productVideo_component_419 captions-background-opacity-productVideo_component_419-Opaque">
                                                Opaque
                                            </option>
                                            <option
                                                id="captions-background-opacity-productVideo_component_419-SemiTransparent"
                                                value="0.5"
                                                aria-labelledby="captions-background-productVideo_component_419 captions-background-opacity-productVideo_component_419 captions-background-opacity-productVideo_component_419-SemiTransparent">
                                                Semi-Transparent
                                            </option>
                                            <option id="captions-background-opacity-productVideo_component_419-Transparent"
                                                value="0"
                                                aria-labelledby="captions-background-productVideo_component_419 captions-background-opacity-productVideo_component_419 captions-background-opacity-productVideo_component_419-Transparent">
                                                Transparent
                                            </option>
                                        </select></span>
                                </fieldset>
                                <fieldset class="vjs-window-color vjs-track-setting">
                                    <legend id="captions-window-productVideo_component_419">
                                        Window
                                    </legend>
                                    <label id="captions-window-color-productVideo_component_419"
                                        class="vjs-label">Color</label><select
                                        aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419">
                                        <option id="captions-window-color-productVideo_component_419-Black" value="#000"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Black">
                                            Black
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-White" value="#FFF"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-White">
                                            White
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Red" value="#F00"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Red">
                                            Red
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Green" value="#0F0"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Green">
                                            Green
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Blue" value="#00F"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Blue">
                                            Blue
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Yellow"
                                            value="#FF0"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Yellow">
                                            Yellow
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Magenta"
                                            value="#F0F"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Magenta">
                                            Magenta
                                        </option>
                                        <option id="captions-window-color-productVideo_component_419-Cyan" value="#0FF"
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-color-productVideo_component_419 captions-window-color-productVideo_component_419-Cyan">
                                            Cyan
                                        </option>
                                    </select><span class="vjs-window-opacity vjs-opacity"><label
                                            id="captions-window-opacity-productVideo_component_419"
                                            class="vjs-label">Transparency</label><select
                                            aria-labelledby="captions-window-productVideo_component_419 captions-window-opacity-productVideo_component_419">
                                            <option id="captions-window-opacity-productVideo_component_419-Transparent"
                                                value="0"
                                                aria-labelledby="captions-window-productVideo_component_419 captions-window-opacity-productVideo_component_419 captions-window-opacity-productVideo_component_419-Transparent">
                                                Transparent
                                            </option>
                                            <option id="captions-window-opacity-productVideo_component_419-SemiTransparent"
                                                value="0.5"
                                                aria-labelledby="captions-window-productVideo_component_419 captions-window-opacity-productVideo_component_419 captions-window-opacity-productVideo_component_419-SemiTransparent">
                                                Semi-Transparent
                                            </option>
                                            <option id="captions-window-opacity-productVideo_component_419-Opaque"
                                                value="1"
                                                aria-labelledby="captions-window-productVideo_component_419 captions-window-opacity-productVideo_component_419 captions-window-opacity-productVideo_component_419-Opaque">
                                                Opaque
                                            </option>
                                        </select></span>
                                </fieldset>
                            </div>
                            <div class="vjs-track-settings-font">
                                <fieldset class="vjs-font-percent vjs-track-setting">
                                    <legend id="captions-font-size-productVideo_component_419" class="">
                                        Font Size
                                    </legend>
                                    <select aria-labelledby="captions-font-size-productVideo_component_419">
                                        <option id="captions-font-size-productVideo_component_419-50" value="0.50"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-50">
                                            50%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-75" value="0.75"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-75">
                                            75%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-100" value="1.00"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-100">
                                            100%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-125" value="1.25"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-125">
                                            125%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-150" value="1.50"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-150">
                                            150%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-175" value="1.75"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-175">
                                            175%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-200" value="2.00"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-200">
                                            200%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-300" value="3.00"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-300">
                                            300%
                                        </option>
                                        <option id="captions-font-size-productVideo_component_419-400" value="4.00"
                                            aria-labelledby="captions-font-size-productVideo_component_419 captions-font-size-productVideo_component_419-400">
                                            400%
                                        </option>
                                    </select>
                                </fieldset>
                                <fieldset class="vjs-edge-style vjs-track-setting">
                                    <legend id="productVideo_component_419" class="">
                                        Text Edge Style
                                    </legend>
                                    <select aria-labelledby="productVideo_component_419">
                                        <option id="productVideo_component_419-None" value="none"
                                            aria-labelledby="productVideo_component_419 productVideo_component_419-None">
                                            None
                                        </option>
                                        <option id="productVideo_component_419-Raised" value="raised"
                                            aria-labelledby="productVideo_component_419 productVideo_component_419-Raised">
                                            Raised
                                        </option>
                                        <option id="productVideo_component_419-Depressed" value="depressed"
                                            aria-labelledby="productVideo_component_419 productVideo_component_419-Depressed">
                                            Depressed
                                        </option>
                                        <option id="productVideo_component_419-Uniform" value="uniform"
                                            aria-labelledby="productVideo_component_419 productVideo_component_419-Uniform">
                                            Uniform
                                        </option>
                                        <option id="productVideo_component_419-Dropshadow" value="dropshadow"
                                            aria-labelledby="productVideo_component_419 productVideo_component_419-Dropshadow">
                                            Dropshadow
                                        </option>
                                    </select>
                                </fieldset>
                                <fieldset class="vjs-font-family vjs-track-setting">
                                    <legend id="captions-font-family-productVideo_component_419" class="">
                                        Font Family
                                    </legend>
                                    <select aria-labelledby="captions-font-family-productVideo_component_419">
                                        <option id="captions-font-family-productVideo_component_419-ProportionalSansSerif"
                                            value="proportionalSansSerif"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-ProportionalSansSerif">
                                            Proportional Sans-Serif
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-MonospaceSansSerif"
                                            value="monospaceSansSerif"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-MonospaceSansSerif">
                                            Monospace Sans-Serif
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-ProportionalSerif"
                                            value="proportionalSerif"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-ProportionalSerif">
                                            Proportional Serif
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-MonospaceSerif"
                                            value="monospaceSerif"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-MonospaceSerif">
                                            Monospace Serif
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-Casual" value="casual"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-Casual">
                                            Casual
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-Script" value="script"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-Script">
                                            Script
                                        </option>
                                        <option id="captions-font-family-productVideo_component_419-SmallCaps"
                                            value="small-caps"
                                            aria-labelledby="captions-font-family-productVideo_component_419 captions-font-family-productVideo_component_419-SmallCaps">
                                            Small Caps
                                        </option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="vjs-track-settings-controls">
                                <button type="button" class="vjs-default-button"
                                    title="restore all settings to the default values">
                                    Reset<span class="vjs-control-text">
                                        restore all settings to the default values</span></button><button type="button"
                                    class="vjs-done-button">Done</button>
                            </div>
                        </div>
                        <button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false"
                            title="Close Modal Dialog">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Close Modal Dialog</span>
                        </button>
                        <p class="vjs-control-text">End of dialog window.</p>
                    </div>
                </div>
                <div class="vjs-poster vjs-hidden" tabindex="-1" aria-disabled="false"></div>
                <div class="vjs-text-track-display" aria-live="off" aria-atomic="true">
                    <div style="position: absolute; inset: 0px; margin: 1.5%;"></div>
                </div>
                <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video Player is
                        loading.</span></div><button class="vjs-big-play-button" type="button" title="Play Video"
                    aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                        class="vjs-control-text" aria-live="polite">Play Video</span></button>
                <div class="vjs-control-bar" dir="ltr"><button class="vjs-play-control vjs-control vjs-button"
                        type="button" title="Play" aria-disabled="false"><span aria-hidden="true"
                            class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                            aria-live="polite">Play</span></button>
                    <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal"><button
                            class="vjs-mute-control vjs-control vjs-button vjs-vol-0" type="button" title="Unmute"
                            aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                class="vjs-control-text" aria-live="polite">Unmute</span></button>
                        <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                            <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                                role="slider" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                aria-label="Volume Level" aria-live="polite" aria-valuetext="0%">
                                <div class="vjs-volume-level"><span class="vjs-control-text"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="vjs-current-time vjs-time-control vjs-control"><span class="vjs-control-text"
                            role="presentation">Current Time </span><span class="vjs-current-time-display"
                            aria-live="off" role="presentation">0:00</span></div>
                    <div class="vjs-time-control vjs-time-divider" aria-hidden="true">
                        <div><span>/</span></div>
                    </div>
                    <div class="vjs-duration vjs-time-control vjs-control"><span class="vjs-control-text"
                            role="presentation">Duration </span><span class="vjs-duration-display" aria-live="off"
                            role="presentation">-:-</span></div>
                    <div class="vjs-progress-control vjs-control">
                        <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Progress Bar">
                            <div class="vjs-load-progress"><span class="vjs-control-text"><span>Loaded</span>: <span
                                        class="vjs-control-text-loaded-percentage">0%</span></span></div>
                            <div class="vjs-mouse-display">
                                <div class="vjs-time-tooltip" aria-hidden="true"></div>
                            </div>
                            <div class="vjs-play-progress vjs-slider-bar" aria-hidden="true">
                                <div class="vjs-time-tooltip" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vjs-live-control vjs-control vjs-hidden">
                        <div class="vjs-live-display" aria-live="off"><span class="vjs-control-text">Stream Type
                            </span>LIVE</div>
                    </div><button class="vjs-seek-to-live-control vjs-control" type="button"
                        title="Seek to live, currently behind live" aria-disabled="false"><span aria-hidden="true"
                            class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Seek to
                            live, currently behind live</span><span class="vjs-seek-to-live-text"
                            aria-hidden="true">LIVE</span></button>
                    <div class="vjs-remaining-time vjs-time-control vjs-control"><span class="vjs-control-text"
                            role="presentation">Remaining Time </span><span aria-hidden="true">-</span><span
                            class="vjs-remaining-time-display" aria-live="off" role="presentation">0:00</span></div>
                    <div class="vjs-custom-control-spacer vjs-spacer "> </div>
                    <div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                        <div class="vjs-playback-rate-value">1x</div><button
                            class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                            aria-disabled="false" title="Playback Rate" aria-haspopup="true" aria-expanded="false"><span
                                aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Playback Rate</span></button>
                        <div class="vjs-menu">
                            <ul class="vjs-menu-content" role="menu"></ul>
                        </div>
                    </div>
                    <div
                        class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                        <button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button"
                            type="button" aria-disabled="false" title="Chapters" aria-haspopup="true"
                            aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                class="vjs-control-text" aria-live="polite">Chapters</span></button>
                        <div class="vjs-menu">
                            <ul class="vjs-menu-content" role="menu">
                                <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                        <button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button"
                            type="button" aria-disabled="false" title="Descriptions" aria-haspopup="true"
                            aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                class="vjs-control-text" aria-live="polite">Descriptions</span></button>
                        <div class="vjs-menu">
                            <ul class="vjs-menu-content" role="menu">
                                <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio"
                                    aria-disabled="false" aria-checked="true"><span
                                        class="vjs-menu-item-text">descriptions off</span><span class="vjs-control-text"
                                        aria-live="polite">, selected</span></li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                        <button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button"
                            type="button" aria-disabled="false" title="Captions" aria-haspopup="true"
                            aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                class="vjs-control-text" aria-live="polite">Captions</span></button>
                        <div class="vjs-menu">
                            <ul class="vjs-menu-content" role="menu">
                                <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem"
                                    aria-disabled="false"><span class="vjs-menu-item-text">captions settings</span><span
                                        class="vjs-control-text" aria-live="polite">, opens captions settings
                                        dialog</span></li>
                                <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio"
                                    aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">captions
                                        off</span><span class="vjs-control-text" aria-live="polite">, selected</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                        <button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                            aria-disabled="false" title="Audio Track" aria-haspopup="true" aria-expanded="false"><span
                                aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                aria-live="polite">Audio Track</span></button>
                        <div class="vjs-menu">
                            <ul class="vjs-menu-content" role="menu"></ul>
                        </div>
                    </div><button class="vjs-picture-in-picture-control vjs-control vjs-button vjs-disabled"
                        type="button" title="Picture-in-Picture" aria-disabled="true" disabled="disabled"><span
                            aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                            aria-live="polite">Picture-in-Picture</span></button><button
                        class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen"
                        aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                            class="vjs-control-text" aria-live="polite">Fullscreen</span></button>
                </div>
                <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1"
                    aria-describedby="productVideo_component_473_description" aria-hidden="true"
                    aria-label="Modal Window" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="productVideo_component_473_description">
                        This is a modal window.</p>
                    <div class="vjs-modal-dialog-content" role="document"></div>
                </div>
                <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1"
                    aria-describedby="productVideo_component_479_description" aria-hidden="true"
                    aria-label="Caption Settings Dialog" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="productVideo_component_479_description">
                        Beginning of dialog window. Escape will cancel and close the window.</p>
                    <div class="vjs-modal-dialog-content" role="document">
                        <div class="vjs-track-settings-colors">
                            <fieldset class="vjs-fg-color vjs-track-setting">
                                <legend id="captions-text-legend-productVideo_component_479">Text</legend><label
                                    id="captions-foreground-color-productVideo_component_479"
                                    class="vjs-label">Color</label><select
                                    aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479">
                                    <option id="captions-foreground-color-productVideo_component_479-White" value="#FFF"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-White">
                                        White</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Black" value="#000"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Black">
                                        Black</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Red" value="#F00"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Red">
                                        Red</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Green" value="#0F0"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Green">
                                        Green</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Blue" value="#00F"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Blue">
                                        Blue</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Yellow"
                                        value="#FF0"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Yellow">
                                        Yellow</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Magenta"
                                        value="#F0F"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Magenta">
                                        Magenta</option>
                                    <option id="captions-foreground-color-productVideo_component_479-Cyan" value="#0FF"
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-color-productVideo_component_479 captions-foreground-color-productVideo_component_479-Cyan">
                                        Cyan</option>
                                </select><span class="vjs-text-opacity vjs-opacity"><label
                                        id="captions-foreground-opacity-productVideo_component_479"
                                        class="vjs-label">Transparency</label><select
                                        aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-opacity-productVideo_component_479">
                                        <option id="captions-foreground-opacity-productVideo_component_479-Opaque"
                                            value="1"
                                            aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-opacity-productVideo_component_479 captions-foreground-opacity-productVideo_component_479-Opaque">
                                            Opaque</option>
                                        <option id="captions-foreground-opacity-productVideo_component_479-SemiTransparent"
                                            value="0.5"
                                            aria-labelledby="captions-text-legend-productVideo_component_479 captions-foreground-opacity-productVideo_component_479 captions-foreground-opacity-productVideo_component_479-SemiTransparent">
                                            Semi-Transparent</option>
                                    </select></span>
                            </fieldset>
                            <fieldset class="vjs-bg-color vjs-track-setting">
                                <legend id="captions-background-productVideo_component_479">Background</legend><label
                                    id="captions-background-color-productVideo_component_479"
                                    class="vjs-label">Color</label><select
                                    aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479">
                                    <option id="captions-background-color-productVideo_component_479-Black" value="#000"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Black">
                                        Black</option>
                                    <option id="captions-background-color-productVideo_component_479-White" value="#FFF"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-White">
                                        White</option>
                                    <option id="captions-background-color-productVideo_component_479-Red" value="#F00"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Red">
                                        Red</option>
                                    <option id="captions-background-color-productVideo_component_479-Green" value="#0F0"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Green">
                                        Green</option>
                                    <option id="captions-background-color-productVideo_component_479-Blue" value="#00F"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Blue">
                                        Blue</option>
                                    <option id="captions-background-color-productVideo_component_479-Yellow"
                                        value="#FF0"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Yellow">
                                        Yellow</option>
                                    <option id="captions-background-color-productVideo_component_479-Magenta"
                                        value="#F0F"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Magenta">
                                        Magenta</option>
                                    <option id="captions-background-color-productVideo_component_479-Cyan" value="#0FF"
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-color-productVideo_component_479 captions-background-color-productVideo_component_479-Cyan">
                                        Cyan</option>
                                </select><span class="vjs-bg-opacity vjs-opacity"><label
                                        id="captions-background-opacity-productVideo_component_479"
                                        class="vjs-label">Transparency</label><select
                                        aria-labelledby="captions-background-productVideo_component_479 captions-background-opacity-productVideo_component_479">
                                        <option id="captions-background-opacity-productVideo_component_479-Opaque"
                                            value="1"
                                            aria-labelledby="captions-background-productVideo_component_479 captions-background-opacity-productVideo_component_479 captions-background-opacity-productVideo_component_479-Opaque">
                                            Opaque</option>
                                        <option id="captions-background-opacity-productVideo_component_479-SemiTransparent"
                                            value="0.5"
                                            aria-labelledby="captions-background-productVideo_component_479 captions-background-opacity-productVideo_component_479 captions-background-opacity-productVideo_component_479-SemiTransparent">
                                            Semi-Transparent</option>
                                        <option id="captions-background-opacity-productVideo_component_479-Transparent"
                                            value="0"
                                            aria-labelledby="captions-background-productVideo_component_479 captions-background-opacity-productVideo_component_479 captions-background-opacity-productVideo_component_479-Transparent">
                                            Transparent</option>
                                    </select></span>
                            </fieldset>
                            <fieldset class="vjs-window-color vjs-track-setting">
                                <legend id="captions-window-productVideo_component_479">Window</legend><label
                                    id="captions-window-color-productVideo_component_479"
                                    class="vjs-label">Color</label><select
                                    aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479">
                                    <option id="captions-window-color-productVideo_component_479-Black" value="#000"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Black">
                                        Black</option>
                                    <option id="captions-window-color-productVideo_component_479-White" value="#FFF"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-White">
                                        White</option>
                                    <option id="captions-window-color-productVideo_component_479-Red" value="#F00"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Red">
                                        Red</option>
                                    <option id="captions-window-color-productVideo_component_479-Green" value="#0F0"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Green">
                                        Green</option>
                                    <option id="captions-window-color-productVideo_component_479-Blue" value="#00F"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Blue">
                                        Blue</option>
                                    <option id="captions-window-color-productVideo_component_479-Yellow" value="#FF0"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Yellow">
                                        Yellow</option>
                                    <option id="captions-window-color-productVideo_component_479-Magenta" value="#F0F"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Magenta">
                                        Magenta</option>
                                    <option id="captions-window-color-productVideo_component_479-Cyan" value="#0FF"
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-color-productVideo_component_479 captions-window-color-productVideo_component_479-Cyan">
                                        Cyan</option>
                                </select><span class="vjs-window-opacity vjs-opacity"><label
                                        id="captions-window-opacity-productVideo_component_479"
                                        class="vjs-label">Transparency</label><select
                                        aria-labelledby="captions-window-productVideo_component_479 captions-window-opacity-productVideo_component_479">
                                        <option id="captions-window-opacity-productVideo_component_479-Transparent"
                                            value="0"
                                            aria-labelledby="captions-window-productVideo_component_479 captions-window-opacity-productVideo_component_479 captions-window-opacity-productVideo_component_479-Transparent">
                                            Transparent</option>
                                        <option id="captions-window-opacity-productVideo_component_479-SemiTransparent"
                                            value="0.5"
                                            aria-labelledby="captions-window-productVideo_component_479 captions-window-opacity-productVideo_component_479 captions-window-opacity-productVideo_component_479-SemiTransparent">
                                            Semi-Transparent</option>
                                        <option id="captions-window-opacity-productVideo_component_479-Opaque"
                                            value="1"
                                            aria-labelledby="captions-window-productVideo_component_479 captions-window-opacity-productVideo_component_479 captions-window-opacity-productVideo_component_479-Opaque">
                                            Opaque</option>
                                    </select></span>
                            </fieldset>
                        </div>
                        <div class="vjs-track-settings-font">
                            <fieldset class="vjs-font-percent vjs-track-setting">
                                <legend id="captions-font-size-productVideo_component_479" class="">Font Size
                                </legend><select aria-labelledby="captions-font-size-productVideo_component_479">
                                    <option id="captions-font-size-productVideo_component_479-50" value="0.50"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-50">
                                        50%</option>
                                    <option id="captions-font-size-productVideo_component_479-75" value="0.75"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-75">
                                        75%</option>
                                    <option id="captions-font-size-productVideo_component_479-100" value="1.00"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-100">
                                        100%</option>
                                    <option id="captions-font-size-productVideo_component_479-125" value="1.25"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-125">
                                        125%</option>
                                    <option id="captions-font-size-productVideo_component_479-150" value="1.50"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-150">
                                        150%</option>
                                    <option id="captions-font-size-productVideo_component_479-175" value="1.75"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-175">
                                        175%</option>
                                    <option id="captions-font-size-productVideo_component_479-200" value="2.00"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-200">
                                        200%</option>
                                    <option id="captions-font-size-productVideo_component_479-300" value="3.00"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-300">
                                        300%</option>
                                    <option id="captions-font-size-productVideo_component_479-400" value="4.00"
                                        aria-labelledby="captions-font-size-productVideo_component_479 captions-font-size-productVideo_component_479-400">
                                        400%</option>
                                </select>
                            </fieldset>
                            <fieldset class="vjs-edge-style vjs-track-setting">
                                <legend id="productVideo_component_479" class="">Text Edge Style</legend><select
                                    aria-labelledby="productVideo_component_479">
                                    <option id="productVideo_component_479-None" value="none"
                                        aria-labelledby="productVideo_component_479 productVideo_component_479-None">None
                                    </option>
                                    <option id="productVideo_component_479-Raised" value="raised"
                                        aria-labelledby="productVideo_component_479 productVideo_component_479-Raised">
                                        Raised</option>
                                    <option id="productVideo_component_479-Depressed" value="depressed"
                                        aria-labelledby="productVideo_component_479 productVideo_component_479-Depressed">
                                        Depressed</option>
                                    <option id="productVideo_component_479-Uniform" value="uniform"
                                        aria-labelledby="productVideo_component_479 productVideo_component_479-Uniform">
                                        Uniform</option>
                                    <option id="productVideo_component_479-Dropshadow" value="dropshadow"
                                        aria-labelledby="productVideo_component_479 productVideo_component_479-Dropshadow">
                                        Dropshadow</option>
                                </select>
                            </fieldset>
                            <fieldset class="vjs-font-family vjs-track-setting">
                                <legend id="captions-font-family-productVideo_component_479" class="">Font Family
                                </legend><select aria-labelledby="captions-font-family-productVideo_component_479">
                                    <option id="captions-font-family-productVideo_component_479-ProportionalSansSerif"
                                        value="proportionalSansSerif"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-ProportionalSansSerif">
                                        Proportional Sans-Serif</option>
                                    <option id="captions-font-family-productVideo_component_479-MonospaceSansSerif"
                                        value="monospaceSansSerif"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-MonospaceSansSerif">
                                        Monospace Sans-Serif</option>
                                    <option id="captions-font-family-productVideo_component_479-ProportionalSerif"
                                        value="proportionalSerif"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-ProportionalSerif">
                                        Proportional Serif</option>
                                    <option id="captions-font-family-productVideo_component_479-MonospaceSerif"
                                        value="monospaceSerif"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-MonospaceSerif">
                                        Monospace Serif</option>
                                    <option id="captions-font-family-productVideo_component_479-Casual" value="casual"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-Casual">
                                        Casual</option>
                                    <option id="captions-font-family-productVideo_component_479-Script" value="script"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-Script">
                                        Script</option>
                                    <option id="captions-font-family-productVideo_component_479-SmallCaps"
                                        value="small-caps"
                                        aria-labelledby="captions-font-family-productVideo_component_479 captions-font-family-productVideo_component_479-SmallCaps">
                                        Small Caps</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="vjs-track-settings-controls"><button type="button" class="vjs-default-button"
                                title="restore all settings to the default values">Reset<span class="vjs-control-text">
                                    restore all settings to the default values</span></button><button type="button"
                                class="vjs-done-button">Done</button></div>
                    </div><button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false"
                        title="Close Modal Dialog"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                            class="vjs-control-text" aria-live="polite">Close Modal Dialog</span></button>
                    <p class="vjs-control-text">End of dialog window.</p>
                </div>
            </div>
            <div class="cont">
                <div class="inner">
                    <strong>Home Audio</strong>
                </div>
            </div>
        </section>
        <section class="bnr">
            <div
                class="bg"style="background-image: url('https://cdn.astellnkern.com/sub_main_banner/202110/20211008211721_c266fdb1-2161-4d5b-b4b4-1544c2e8c4ef.jpg');">
            </div>
            <div class="cont">
                <div class="title">
                    <strong>Amplifier</strong>
                </div>
                <div class="over"
                    style="display: none;height: 259px;padding-top: 0px;margin-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">
                    <ul>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=141">ACRO CA1000T</a>
                        </li>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=130">ACRO CA1000</a>
                        </li>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=10">ACRO L1000</a>
                        </li>
                    </ul>
                    <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=Amplifier"
                        class="btn-line-ty1">
                        <span> Discover more <em class="arrow"></em> </span>
                    </a>
                </div>
            </div>
        </section>
        <section class="bnr">
            <div class="bg"
                style="background-image: url('https://cdn.astellnkern.com/sub_main_banner/202111/20211108214125_37dc8d53-ac52-4ef5-8513-dba3fd3908e0.jpg');">
            </div>
            <div class="cont">
                <div class="title">
                    <strong>Speaker</strong>
                </div>
                <div class="over"
                    style="display: none;height: 223px;padding-top: 0px;margin-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">
                    <ul>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=127">ACRO BE100</a>
                        </li>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=11">ACRO S1000</a>
                        </li>
                    </ul>
                    <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=Speaker"
                        class="btn-line-ty1">
                        <span> Discover more <em class="arrow"></em> </span>
                    </a>
                </div>
            </div>
        </section>
        <section class="bnr">
            <div class="bg"
                style=" background-image: url('https://cdn.astellnkern.com/sub_main_banner/202110/20211008211131_5e8321af-1f31-4f23-b4be-612883287bf0.jpg');">
            </div>
            <div class="cont">
                <div class="title">
                    <strong>Network Player</strong>
                </div>
                <div class="over" style="display: none">
                    <ul>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=64">AK T1</a>
                        </li>
                        <li>
                            <a href="/product/product_detail.jsp?productNo=12">AK500N Series</a>
                        </li>
                    </ul>
                    <a href="/product/productSub.jsp?productCode1=HomeAudio&amp;productCode2=NetworkPlayer"
                        class="btn-line-ty1">
                        <span> Discover more <em class="arrow"></em> </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
