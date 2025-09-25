@extends('layouts.front')

@section('style')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>
        <title>{{ $machine->name }} - Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress
            Theme</title>
        <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
            href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C%7CYantramanav%3A100%2C300%2C400%2C500%2C700%2C900%2C%7COpen+Sans%3A300%2C400%2C600%2C700%2C&amp;display=swap">
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="{{ $machine->name }} - Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme" />
        <meta property="og:description"
            content="Mel an esse salutandi, eos wisi nonumes democritum id. Eu affert dolore rationibus mel. Porro vocent ut vel. Rebum deleniti voluptua at sed, ut tollit prodesset eum, ea eos nostrud." />
        <meta property="og:url" content="index.html" />
        <meta property="og:site_name"
            content="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme" />
        <meta property="article:modified_time" content="2021-05-18T16:04:28+00:00" />
        <meta property="og:image" content="front_end/wp-content/uploads/2019/06/product_0010__.jpg" />
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="760" />
        <meta property="og:image:type" content="image/jpeg" />
        <link rel='dns-prefetch' href='http://www.openlayers.org/' />
        <link rel='dns-prefetch' href='http://client.crisp.chat/' />
        <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
        <link href='https://fonts.gstatic.com/' crossorigin='anonymous' rel='preconnect' />
        <link rel="alternate" type="application/rss+xml"
            title="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme &raquo; Feed"
            href="../../feed/index.html" />
        <link rel="alternate" type="application/rss+xml"
            title="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme &raquo; Comments Feed"
            href="../../comments/feed/index.html" />
        <link rel="alternate" type="application/rss+xml"
            title="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme &raquo; 35000 &#8211; 39000 lbs, Excavator Comments Feed"
            href="feed/index.html" />
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link rel='stylesheet' id='wp-block-library-css'
            href='{{ asset('front_end/wp-includes/css/dist/block-library/style.min.css') }}' type='text/css'
            media='all' />
        <style id='webdevia-all-products-style-inline-css' type='text/css'>
            .wp-block-webdevia-all-products {
                position: relative
            }

            .wp-block-webdevia-all-products .product-box-preview {
                display: flex;
                flex-direction: column
            }

            .wp-block-webdevia-all-products .product-box-preview figure {
                height: 100%;
                max-height400px
            }

            .wp-block-webdevia-all-products .product-box-preview figure img {
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                width: 100%
            }

            .wp-block-webdevia-all-products .pagination {
                align-items: center;
                display: flex;
                justify-content: flex-end
            }

            .wp-block-webdevia-all-products .pagination button {
                padding: 8px 16px;
                text-decoration: none
            }

            .wp-block-webdevia-all-products .pagination button:hover {
                cursor: pointer
            }

            .wp-block-webdevia-all-products .overlay {
                background-color: hsla(0, 0%, 81%, .509);
                display: none;
                height: 100%;
                position: absolute;
                width: 100%;
                z-index: 1
            }

            .wp-block-webdevia-all-products .overlay__content {
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%)
            }

            .wp-block-webdevia-all-products .overlay.loading {
                display: block
            }

            .wp-block-webdevia-all-products .wd_spinner {
                animation: spin 1s linear infinite;
                border-color: var(--primary-color-contrast);
                border-radius: 100%;
                border-style: solid;
                border-top-color: var(--primary-color);
                border-width: 2px;
                display: inline-block;
                height: 75px;
                width: 75px
            }

            @keyframes spin {
                to {
                    transform: rotate(1turn)
                }
            }
        </style>
        <style id='webdevia-categories-list-style-inline-css' type='text/css'>
            .wp-block-webdevia-first-block {
                background-color: #21759b;
                color: #fff;
                padding: 2px
            }
        </style>
        <style id='webdevia-responsive-spacer-style-inline-css' type='text/css'></style>
        <style id='webdevia-carousel-style-inline-css' type='text/css'>
            .wp-block-webdevia-carousel .swiper-wrapper .swiper-slide img {
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                width: 100%
            }
        </style>
        <style id='webdevia-accordion-block-style-inline-css' type='text/css'>
            .wd-blocks-accordion__title {
                --gray-2-color: #fdf8f2;
                align-items: center;
                background: var(--gray-2-color);
                display: flex;
                justify-content: space-between;
                padding: .5em
            }

            .wd-blocks-accordion__title__text {
                margin: 0 0 0 .5rem
            }

            .wd-blocks-accordion__title__icon {
                display: flex;
                transition: transform .5s ease-in-out .2s
            }

            .wd-blocks-accordion__title__icon.accordion-hide {
                transform: rotate(-180deg)
            }

            .wd-blocks-accordion__title__icon svg {
                height: 20px;
                width: 20px
            }

            .wd-blocks-accordion__title:hover {
                cursor: pointer
            }

            .wd-blocks-accordion__content {
                display: grid;
                grid-template-rows: 1fr;
                padding-inline: .5rem;
                transition: grid-template-rows ease-in-out
            }

            .wd-blocks-accordion__content__wrapper {
                overflow: hidden
            }

            .wd-blocks-accordion__content.accordion-hide {
                grid-template-rows: 0fr
            }
        </style>
        <style id='webdevia-team-member-style-inline-css' type='text/css'>
            .wp-block-webdevia-team-member {
                margin-inline: auto !important;
                position: relative;
                width: 100%
            }

            .wp-block-webdevia-team-member.team-list-style1 {
                margin: 0 -15px
            }

            .wp-block-webdevia-team-member.team-list-style1 li {
                list-style: none
            }

            .wp-block-webdevia-team-member.team-list-style1 .components-responsive-wrapper,
            .wp-block-webdevia-team-member.team-list-style1 .team-member__picture {
                margin: 0 15px;
                padding: 0 15px
            }

            .wp-block-webdevia-team-member.team-list-style1 .components-responsive-wrapper img,
            .wp-block-webdevia-team-member.team-list-style1 .team-member__picture img {
                border-radius: 50% !important;
                transition: all .3s cubic-bezier(.02, .54, .58, 1);
                width: 100%
            }

            .wp-block-webdevia-team-member.team-list-style1 .team-member__info {
                text-align: center
            }

            .wp-block-webdevia-team-member.team-list-style1 .team-member__name {
                margin-bottom: 5px;
                margin-top: 30px
            }

            .wp-block-webdevia-team-member.team-list-style1 .team-member__name span {
                position: relative
            }

            .wp-block-webdevia-team-member.team-list-style1 .team-member__name span:before {
                background: var(--primary-color);
                border-radius: 5px;
                bottom: 3px;
                content: "";
                height: 3px;
                left: 0;
                position: absolute;
                transform: scaleX(0);
                transition: .1s linear;
                visibility: hidden;
                width: 100%
            }

            .wp-block-webdevia-team-member.team-list-style1 .team-member__socialmedia {
                display: none
            }

            .wp-block-webdevia-team-member.team-list-style1:hover .components-responsive-wrapper img,
            .wp-block-webdevia-team-member.team-list-style1:hover .team-member__picture img {
                box-shadow: 4px 15px rgba(0, 0, 0, .1);
                transform: translate3d(0, -8px, 0)
            }

            .wp-block-webdevia-team-member.team-list-style1:hover h3 span:before,
            .wp-block-webdevia-team-member.team-list-style1:hover h4 span:before {
                transform: scaleX(1);
                visibility: visible
            }

            .wp-block-webdevia-team-member.team-list-style2 {
                background: var(--gray-2-color);
                border: 1px solid transparent;
                border-radius: 5px;
                margin: 0 -15px;
                overflow: hidden;
                position: relative;
                transition: all .35s cubic-bezier(.45, .05, .55, .95)
            }

            .wp-block-webdevia-team-member.team-list-style2 li {
                list-style: none
            }

            .wp-block-webdevia-team-member.team-list-style2.team-member:hover {
                box-shadow: 0 20px 60px hsla(0, 0%, 50%, .2);
                transform: translate3d(0, -20px, 0)
            }

            .wp-block-webdevia-team-member.team-list-style2 .components-responsive-wrapper,
            .wp-block-webdevia-team-member.team-list-style2 .team-member__picture {
                padding: 0
            }

            .wp-block-webdevia-team-member.team-list-style2 .components-responsive-wrapper img,
            .wp-block-webdevia-team-member.team-list-style2 .team-member__picture img {
                border-radius: 5px 5px 0 0;
                width: 100%
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__info {
                padding: 25px 30px 10px
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__name {
                margin: 0 0 5px
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__job {
                font-size: 15px
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia {
                background: var(--accent-color);
                border-radius4px;
                box-shadow: 0 6px 21px rgba(2, 2, 2, .3);
                display: inline;
                padding: 5px 15px;
                position: absolute;
                right: -100%;
                top: 10px;
                transition: all .25s ease-in-out
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul {
                margin: 0
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul li {
                display: inline
            }

            .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul li a {
                color: #fff;
                font-size: 20px;
                font-weight400
            }

            .wp-block-webdevia-team-member.team-list-style2:hover .team-member__socialmedia {
                right: -2px
            }

            .wp-block-webdevia-team-member.team-list-style3 {
                margin: 0 -15px;
                padding: 0 20px
            }

            .wp-block-webdevia-team-member.team-list-style3 .components-responsive-wrapper img,
            .wp-block-webdevia-team-member.team-list-style3 .team-member__picture img {
                border: 20px solid #fff;
                border-radius: 50%;
                box-shadow: 0 8px 21px #ebebec;
                width: 100%
            }

            .wp-block-webdevia-team-member.team-list-style3 .team-member__info {
                border-radius: 34px 34px 0;
                box-shadow: 0 8px 21px #ebebec;
                margin-top: -40px;
                padding: 63p40px 20px
            }

            .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia {
                background: var(--accent-color);
                border-radius: 24px 24px 0;
                box-shadow: 0 6px 21px rgba(2, 2, 2, .3);
                display: inline;
                padding: 5px 28px;
                position: absolute;
                right: -10px;
                top: 10px;
                transition: all .25s ease-in-out
            }

            .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul {
                margin: 0
            }

            .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul li {
                display: inline;
                margin: 0
            }

            .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul li a {
                color: #fff;
                font-size: 20px;
                font-weight400
            }

            .wp-block-webdevia-team-member.team-list-style3:hover .team-member__socialmedia {
                right: 60px
            }

            .wp-block-webdevia-team-member.team-list-style2 ul,
            .wp-block-webdevia-team-member.team-list-style3 ul {
                align-items: center;
                display: flex
            }

            .wp-block-webdevia-team-member.team-list-style2 ul li,
            .wp-block-webdevia-team-member.team-list-style3 ul li {
                max-height40px;
                width: 50%
            }

            .wp-block-webdevia-team-member.team-list-style2 ul li a,
            .wp-block-webdevia-team-member.team-list-style3 ul li a {
                display: block;
                width: 50px
            }

            .wp-block-webdevia-team-member.team-list-style2 ul li a svg,
            .wp-block-webdevia-team-member.team-list-style3 ul li a svg {
                display: block;
                width: 100%
            }
        </style>
        <style id='webdevia-count-up-style-inline-css' type='text/css'>
            .wp-block-webdevia-count-up {
                padding: 1rem;
                text-align: center
            }

            .wp-block-webdevia-count-up__picture {
                margin: 0 auto 1.25em
            }

            .wp-block-webdevia-count-up__picture img {
                width: 100%
            }

            .wp-block-webdevia-count-up__info__counter,
            .wp-block-webdevia-count-up__info__label {
                margin: 0
            }
        </style>
        <style id='webdevia-text-with-icon-style-inline-css' type='text/css'>
            .wp-block-webdevia-text-with-icon {
                display: flex;
                gap: 1rem
            }

            .wp-block-webdevia-text-with-icon img {
                width: 100%
            }

            .wp-block-webdevia-text-with-icon p {
                margin: 5px 0
            }

            .wp-block-webdevia-text-with-icon__info__title__position-top {
                flex-direction: column;
                gap: .2rem
            }

            .wp-block-webdevia-text-with-icon__info__title__position-right {
                align-items: center;
                flex-direction: row-reverse;
                gap: 1rem;
                justify-content: flex-end
            }

            .wp-block-webdevia-text-with-icon__info__title__position-bottom {
                flex-direction: column-reverse;
                gap: .2rem
            }

            .wp-block-webdevia-text-with-icon__info__title__position-left {
                align-items: center;
                flex-direction: row;
                gap: 1rem;
                justify-content: flex-start
            }

            @media(max-width:750px) {

                .wp-block-webdevia-text-with-icon__info__title__position-bottom,
                .wp-block-webdevia-text-with-icon__info__title__position-left,
                .wp-block-webdevia-text-with-icon__info__title__position-right,
                .wp-block-webdevia-text-with-icon__info__title__position-top {
                    align-items: center !important;
                    justify-content: center !important;
                    text-align: center !important
                }
            }

            .wp-block-webdevia-text-with-icon__info__title__text {
                margin: 0
            }

            .wp-block-webdevia-text-with-icon__position-top {
                flex-direction: column;
                gap: .2rem
            }

            .wp-block-webdevia-text-with-icon__position-right {
                flex-direction: row-reverse;
                justify-content: flex-start
            }

            .wp-block-webdevia-text-with-icon__position-bottom {
                flex-direction: column-reverse;
                gap: .2rem
            }

            .wp-block-webdevia-text-with-icon__position-left {
                flex-direction: row
            }

            @media(max-width:750px) {

                .wp-block-webdevia-text-with-icon__position-bottom,
                .wp-block-webdevia-text-with-icon__position-left,
                .wp-block-webdevia-text-with-icon__position-right,
                .wp-block-webdevia-text-with-icon__position-top {
                    align-items: center !important;
                    justify-content: center !important;
                    text-align: center !important
                }
            }
        </style>
        <style id='webdevia-pricing-table-style-inline-css' type='text/css'>
            .wp-block-webdevia-pricing-table {
                margin-inline: auto;
                padding: 50px 30p45px;
                transition: all .4s ease-in-out
            }

            .wp-block-webdevia-pricing-table:hover {
                transform: translate3d(0, -10px, 0) !important;
                transition: all .3s cubic-bezier(.68, -.55, .27, 1.55)
            }

            .wp-block-webdevia-pricing-table hr {
                max-width: unset !important
            }

            .wp-block-webdevia-pricing-table li,
            .wp-block-webdevia-pricing-table ul {
                font-size: inherit !important
            }

            .wp-block-webdevia-pricing-table ul {
                padding: 0 !important
            }

            .wp-block-webdevia-pricing-table li {
                color: inherit !important;
                list-style-type: none
            }

            .wp-block-webdevia-pricing-table__header {
                align-items: center;
                display: flex;
                justify-content: space-between
            }

            .wp-block-webdevia-pricing-table__header h3 {
                font-size: inherit !important
            }

            .wp-block-webdevia-pricing-table__header-left h3,
            .wp-block-webdevia-pricing-table__header-right h3 {
                -webkit-margin-after: 0;
                margin-block-end: 0
            }

            .wp-block-webdevia-pricing-table__header-left>:nth-child(2),
            .wp-block-webdevia-pricing-table__header-right>:nth-child(2) {
                font-size: 14px
            }

            .wp-block-webdevia-pricing-table__body {
                font-weight400
            }

            .wp-block-webdevia-pricing-table__body__option__icon svg {
                display: block;
                height: 100%;
                width: 30px
            }

            .wp-block-webdevia-pricing-table__body__option__icon__check {
                fill: #fff
            }

            .wp-block-webdevia-pricing-table__body__option__icon__close {
                fill: #ffc400
            }

            .wp-block-webdevia-pricing-table__sub-body {
                font-weight: 500
            }

            .wp-block-webdevia-pricing-table__body__option,
            .wp-block-webdevia-pricing-table__sub-body__option {
                align-items: center;
                display: flex;
                justify-content: space-between
            }
        </style>
        <style id='webdevia-progress-bar-style-inline-css' type='text/css'>
            .wd-block-webdevia-progress-bar .meter {
                background-color: #ccc;
                box-shadow: inset 0 -1px 1px hsla(0, 0%, 100%, .3);
                color: inherit;
                display: block;
                height45px;
                margin-bottom: 10px;
                position: relative
            }

            .wd-block-webdevia-progress-bar .meter>span {
                background-color: #2bc253;
                background-image: linear-gradient(0deg, #2bc253 37%, #54f054 69%);
                box-shadow: inset 0 2px 9px hsla(0, 0%, 100%, .3), inset 0 -2px 6px rgba(0, 0, 0, .4);
                color: inherit;
                display: block;
                height: 100%;
                overflow: hidden;
                position: relative;
                transition: width 1.5s ease-out
            }

            .wd-block-webdevia-progress-bar .meter p {
                -webkit-padding-start: .7rem;
                color: inherit;
                font-size: 1.3rem;
                margin: 0;
                padding-inline-start: .7rem;
                position: absolute;
                top: 50%;
                transform: translateY(-50%)
            }

            .wd-block-webdevia-progress-bar .meter>span:after {
                background-image: linear-gradient(-45deg, hsla(0, 0%, 100%, .2) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .2) 0, hsla(0, 0%, 100%, .2) 75%, transparent 0, transparent);
                background-size: 50px 50px;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 8px;
                border-top-left-radius: 20px;
                border-top-right-radius: 8px;
                bottom: 0;
                content: "";
                left: 0;
                overflow: hidden;
                position: absolute;
                right: 0;
                top: 0;
                z-index: 1
            }

            .wd-block-webdevia-progress-bar .meter>span.animate-stripes:after {
                animation: move 1.5s linear infinite
            }

            .wd-block-webdevia-progress-bar .animate>span:after {
                display: none
            }

            @keyframes move {
                0% {
                    background-position: 0 0
                }

                to {
                    background-position: 50px 50px
                }
            }

            .wd-block-webdevia-progress-bar .nostripes>span:after,
            .wd-block-webdevia-progress-bar .nostripes>span>span {
                background-image: none
            }
        </style>
        <link rel='stylesheet' id='webdevia-tabs-style-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_49cf2435fa366f178bf35990f06c5bfc.css') }}'
            type='text/css' media='all' />
        <style id='webdevia-tab-style-inline-css' type='text/css'>
            .wp-block-webdevia-tab {
                max-width: unset !important
            }
        </style>
        <style id='webdevia-panorama-style-inline-css' type='text/css'>
            .wp-block-webdevia-panorama {
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover
            }

            .wp-block-webdevia-panorama #container {
                height: 100%;
                width: 100%
            }

            .wp-block-webdevia-panorama__content {
                display: flex;
                flex-direction: column;
                gap: 10px;
                height: 100%
            }

            .wp-block-webdevia-panorama__content__title {
                margin: 0
            }

            .wp-block-webdevia-panorama__content.is-vertically-aligned-top {
                justify-content: flex-start
            }

            .wp-block-webdevia-panorama__content.is-vertically-aligned-center {
                justify-content: center
            }

            .wp-block-webdevia-panorama__content.is-vertically-aligned-bottom {
                justify-content: flex-end
            }

            .wp-block-webdevia-panorama__content.is-horizontally-aligned-left {
                align-items: flex-start
            }

            .wp-block-webdevia-panorama__content.is-horizontally-aligned-center {
                align-items: center
            }

            .wp-block-webdevia-panorama__content.is-horizontally-aligned-right {
                align-items: flex-end
            }
        </style>
        <style id='webdevia-banner-style-inline-css' type='text/css'>
            .wd-block-webdevia-banner {
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover
            }

            .wd-block-webdevia-banner__content {
                display: flex;
                flex-direction: column;
                gap: 10px;
                height: 100%
            }

            .wd-block-webdevia-banner__content__title {
                margin: 0
            }

            .wd-block-webdevia-banner__content.is-vertically-aligned-top {
                justify-content: flex-start
            }

            .wd-block-webdevia-banner__content.is-vertically-aligned-center {
                justify-content: center
            }

            .wd-block-webdevia-banner__content.is-vertically-aligned-bottom {
                justify-content: flex-end
            }

            .wd-block-webdevia-banner__content.is-horizontally-aligned-left {
                align-items: flex-start
            }

            .wd-block-webdevia-banner__content.is-horizontally-aligned-center {
                align-items: center
            }

            .wd-block-webdevia-banner__content.is-horizontally-aligned-right {
                align-items: flex-end
            }
        </style>
        <style id='webdevia-testimonial-style-inline-css' type='text/css'></style>
        <style id='webdevia-timeline-style-inline-css' type='text/css'>
            .wd-block-webdevia-timeline {
                position: relative
            }

            .wd-block-webdevia-timeline__events {
                align-items: center;
                display: flex;
                gap: 20px;
                list-style-type: none;
                margin: 0;
                padding: 10px
            }

            .wd-block-webdevia-timeline__events .timeline__event {
                display: flex;
                position: relative;
                width: 100%
            }

            .wd-block-webdevia-timeline__events .timeline__event__img {
                height: 200px;
                -o-object-fit: contain;
                object-fit: contain
            }

            .wd-block-webdevia-timeline__events .timeline__event__content__head {
                margin: 0
            }

            .wd-block-webdevia-timeline__events .timeline__event__content__head a {
                text-decoration: none
            }

            .wd-block-webdevia-timeline__events .timeline__event:before {
                background-color: #0f0000;
                border-radius: 50%;
                content: "";
                height: 17px;
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 17px
            }

            .wd-block-webdevia-timeline__events:before {
                background-color: #d3d3d3;
                content: "";
                position: absolute
            }

            .wd-block-webdevia-timeline__events-layout-ha,
            .wd-block-webdevia-timeline__events-layout-hs {
                flex-direction: row;
                flex-wrap: nowrap;
                gap: 15px;
                overflow-x: scroll
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event,
            .wd-block-webdevia-timeline__events-layout-hs .timeline__event {
                gap: 60px
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event__content,
            .wd-block-webdevia-timeline__events-layout-hs .timeline__event__content {
                text-align: center
            }

            .wd-block-webdevia-timeline__events-layout-ha:before,
            .wd-block-webdevia-timeline__events-layout-hs:before {
                height: 2px;
                left: 50%;
                transform: translateX(-50%);
                width: 95%
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event {
                flex-direction: column
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event__content,
            .wd-block-webdevia-timeline__events-layout-ha .timeline__event__img {
                padding-block: 0 30px
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) {
                flex-direction: column-reverse
            }

            .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) .timeline__event__content,
            .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) .timeline__event__img {
                padding-block: 30px 0
            }

            .wd-block-webdevia-timeline__events-layout-hs .timeline__event {
                flex-direction: column;
                gap: 0
            }

            .wd-block-webdevia-timeline__events-layout-hs .timeline__event__img {
                padding-block: 0 80px
            }

            .wd-block-webdevia-timeline__events-layout-vse,
            .wd-block-webdevia-timeline__events-layout-vsi {
                flex-direction: column
            }

            .wd-block-webdevia-timeline__events-layout-vse .timeline__event,
            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event {
                align-items: center
            }

            .wd-block-webdevia-timeline__events-layout-vse .timeline__event__content,
            .wd-block-webdevia-timeline__events-layout-vse .timeline__event__img,
            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event__content,
            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event__img {
                width: 50%
            }

            .wd-block-webdevia-timeline__events-layout-vse:before,
            .wd-block-webdevia-timeline__events-layout-vsi:before {
                height: 95%;
                width: 2px
            }

            .wd-block-webdevia-timeline__events-layout-vse .timeline__event {
                flex-direction: row;
                gap: 100px
            }

            .wd-block-webdevia-timeline__events-layout-vse .timeline__event:nth-child(2n) {
                flex-direction: row-reverse
            }

            .wd-block-webdevia-timeline__events-layout-vse .timeline__event:nth-child(2n) .timeline__event__content {
                text-align: right
            }

            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event {
                flex-direction: row-reverse;
                gap: 20px;
                margin: 0 0 0 52%;
                width48%
            }

            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:before {
                left: -4.2%
            }

            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:nth-child(2n) {
                flex-direction: row;
                margin: 0 52% 0 0
            }

            .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:nth-child(2n):before {
                left: 104.2%
            }

            .wd-block-webdevia-timeline__events__navigation__next,
            .wd-block-webdevia-timeline__events__navigation__prev {
                cursor: pointer;
                display: flex;
                height: 30px;
                position: absolute;
                width: 30px
            }

            .wd-block-webdevia-timeline__events__navigation__next {
                right: 0
            }

            .wd-block-webdevia-timeline__events__navigation__prev {
                left: 0
            }

            .wd-block-webdevia-timeline__events::-webkit-scrollbar {
                display: none
            }
        </style>
        <style id='webdevia-portfolio-style-inline-css' type='text/css'></style>
        <style id='webdevia-maps-style-inline-css' type='text/css'></style>
        <style id='global-styles-inline-css' type='text/css'>
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-34/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #7BC043;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #fff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--foreground: #7BC043;
                --wp--preset--color--background: #fff;
                --wp--preset--color--primary: #1a4548;
                --wp--preset--color--secondary: #ffe2c7;
                --wp--preset--color--tertiary: #f6f6f6;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2ab40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
                --wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--tertiary) 100%);
                --wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--background) 100%);
                --wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom, var(--wp--preset--color--tertiary) 0%, var(--wp--preset--color--background) 100%);
                --wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--foreground) 100%);
                --wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--secondary) 50%, var(--wp--preset--color--background) 50%);
                --wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--secondary) 50%);
                --wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--tertiary) 50%, var(--wp--preset--color--background) 50%);
                --wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--tertiary) 50%);
                --wp--preset--font-size--small: .9rem;
                --wp--preset--font-size--medium: 1rem;
                --wp--preset--font-size--large: 1.75rem;
                --wp--preset--font-size--x-large: clamp(1.75rem, 3vw, 2.25rem);
                --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
                --wp--preset--spacing--20: .44rem;
                --wp--preset--spacing--30: .67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
                --wp--custom--spacing--small: max(1.25rem, 5vw);
                --wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap)));
                --wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);
                --wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);
                --wp--custom--typography--font-size--huge: clamp(2.25rem4vw, 2.75rem);
                --wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);
                --wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);
                --wp--custom--typography--line-height--tiny: 1.15;
                --wp--custom--typography--line-height--small: 1.2;
                --wp--custom--typography--line-height--medium: 1.4;
                --wp--custom--typography--line-height--normal: 1.6
            }

            :root {
                --wp--style--global--content-size: 1300px;
                --wp--style--global--wide-size: 1600px
            }

            :where(body) {
                margin: 0
            }

            .wp-site-blocks>.alignleft {
                float: left;
                margin-right: 2em
            }

            .wp-site-blocks>.alignright {
                float: right;
                margin-left: 2em
            }

            .wp-site-blocks>.aligncenter {
                justify-content: center;
                margin-left: auto;
                margin-right: auto
            }

            :where(.wp-site-blocks)>* {
                margin-block-start: 1.5rem;
                margin-block-end: 0
            }

            :where(.wp-site-blocks)>:first-child {
                margin-block-start: 0
            }

            :where(.wp-site-blocks)>:last-child {
                margin-block-end: 0
            }

            :root {
                --wp--style--block-gap: 1.5rem
            }

            :root :where(.is-layout-flow)>:first-child {
                margin-block-start: 0
            }

            :root :where(.is-layout-flow)>:last-child {
                margin-block-end: 0
            }

            :root :where(.is-layout-flow)>* {
                margin-block-start: 1.5rem;
                margin-block-end: 0
            }

            :root :where(.is-layout-constrained)>:first-child {
                margin-block-start: 0
            }

            :root :where(.is-layout-constrained)>:last-child {
                margin-block-end: 0
            }

            :root :where(.is-layout-constrained)>* {
                margin-block-start: 1.5rem;
                margin-block-end: 0
            }

            :root :where(.is-layout-flex) {
                gap: 1.5rem
            }

            :root :where(.is-layout-grid) {
                gap: 1.5rem
            }

            .is-layout-flow>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em
            }

            .is-layout-flow>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0
            }

            .is-layout-flow>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .is-layout-constrained>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em
            }

            .is-layout-constrained>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0
            }

            .is-layout-constrained>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .is-layout-constrained>:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important
            }

            .is-layout-constrained>.alignwide {
                max-width: var(--wp--style--global--wide-size)
            }

            body .is-layout-flex {
                display: flex
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center
            }

            .is-layout-flex>:is(*, div) {
                margin: 0
            }

            body .is-layout-grid {
                display: grid
            }

            .is-layout-grid>:is(*, div) {
                margin: 0
            }

            body {
                background-color: var(--wp--preset--color--background);
                color: var(--wp--preset--color--foreground);
                font-family: var(--wp--preset--font-family--system-font);
                font-size: var(--wp--preset--font-size--medium);
                line-height: var(--wp--custom--typography--line-height--normal);
                padding-top: 0;
                padding-right: 0;
                padding-bottom: 0;
                padding-left: 0
            }

            a:where(:not(.wp-element-button)) {
                color: var(--wp--preset--color--foreground);
                text-decoration: underline
            }

            h1 {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--custom--typography--font-size--colossal);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--tiny)
            }

            h2 {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--custom--typography--font-size--gigantic);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--small)
            }

            h3 {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--custom--typography--font-size--huge);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--tiny)
            }

            h4 {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--preset--font-size--x-large);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--tiny)
            }

            h5 {
                font-family: var(--wp--preset--font-family--system-font);
                font-size: var(--wp--preset--font-size--medium);
                font-weight: 700;
                line-height: var(--wp--custom--typography--line-height--normal);
                text-transform: uppercase
            }

            h6 {
                font-family: var(--wp--preset--font-family--system-font);
                font-size: var(--wp--preset--font-size--medium);
                font-weight400;
                line-height: var(--wp--custom--typography--line-height--normal);
                text-transform: uppercase
            }

            :root :where(.wp-element-button, .wp-block-button__link) {
                background-color: #32373c;
                border-width: 0;
                color: #fff;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important
            }

            .has-foreground-color {
                color: var(--wp--preset--color--foreground) !important
            }

            .has-background-color {
                color: var(--wp--preset--color--background) !important
            }

            .has-primary-color {
                color: var(--wp--preset--color--primary) !important
            }

            .has-secondary-color {
                color: var(--wp--preset--color--secondary) !important
            }

            .has-tertiary-color {
                color: var(--wp--preset--color--tertiary) !important
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important
            }

            .has-foreground-background-color {
                background-color: var(--wp--preset--color--foreground) !important
            }

            .has-background-background-color {
                background-color: var(--wp--preset--color--background) !important
            }

            .has-primary-background-color {
                background-color: var(--wp--preset--color--primary) !important
            }

            .has-secondary-background-color {
                background-color: var(--wp--preset--color--secondary) !important
            }

            .has-tertiary-background-color {
                background-color: var(--wp--preset--color--tertiary) !important
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important
            }

            .has-foreground-border-color {
                border-color: var(--wp--preset--color--foreground) !important
            }

            .has-background-border-color {
                border-color: var(--wp--preset--color--background) !important
            }

            .has-primary-border-color {
                border-color: var(--wp--preset--color--primary) !important
            }

            .has-secondary-border-color {
                border-color: var(--wp--preset--color--secondary) !important
            }

            .has-tertiary-border-color {
                border-color: var(--wp--preset--color--tertiary) !important
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important
            }

            .has-vertical-secondary-to-tertiary-gradient-background {
                background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important
            }

            .has-vertical-secondary-to-background-gradient-background {
                background: var(--wp--preset--gradient--vertical-secondary-to-background) !important
            }

            .has-vertical-tertiary-to-background-gradient-background {
                background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important
            }

            .has-diagonal-primary-to-foreground-gradient-background {
                background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important
            }

            .has-diagonal-secondary-to-background-gradient-background {
                background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important
            }

            .has-diagonal-background-to-secondary-gradient-background {
                background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important
            }

            .has-diagonal-tertiary-to-background-gradient-background {
                background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important
            }

            .has-diagonal-background-to-tertiary-gradient-background {
                background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important
            }

            .has-system-font-font-family {
                font-family: var(--wp--preset--font-family--system-font) !important
            }

            .has-source-serif-pro-font-family {
                font-family: var(--wp--preset--font-family--source-serif-pro) !important
            }

            :root :where(.wp-block-button .wp-block-button__link) {
                background-color: var(--wp--preset--color--primary);
                border-radius: 0;
                color: var(--wp--preset--color--background);
                font-size: var(--wp--preset--font-size--medium)
            }

            :root :where(.wp-block-pullquote) {
                border-width: 1px 0;
                font-size: 1.5em;
                line-height: 1.6
            }

            :root :where(.wp-block-post-title) {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--custom--typography--font-size--gigantic);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--tiny)
            }

            :root :where(.wp-block-post-comments) {
                padding-top: var(--wp--custom--spacing--small)
            }

            :root :where(.wp-block-query-title) {
                font-family: var(--wp--preset--font-family--source-serif-pro);
                font-size: var(--wp--custom--typography--font-size--gigantic);
                font-weight: 300;
                line-height: var(--wp--custom--typography--line-height--small)
            }

            :root :where(.wp-block-quote) {
                border-width: 1px
            }

            :root :where(.wp-block-site-title) {
                font-family: var(--wp--preset--font-family--system-font);
                font-size: var(--wp--preset--font-size--medium);
                font-weight400;
                line-height: var(--wp--custom--typography--line-height--normal)
            }
        </style>
        <link rel='stylesheet' id='wd_demo_panel_style-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3f4ce5e4a83ed11f5ff59bd2e094616e.css') }}'
            type='text/css' media='all' />
        <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-9-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/webfonts/fa-solid-900.html') }}' type='text/css'
            media='all' />
        <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-4-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/webfonts/fa-brands-400.html') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='daterangepickers-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_55e1d560821b4a4b141b0ab6cbb74d26.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='backhoe_booking_app-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_82d433c01bdf940795897412d80bd6dc.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_64ac31699f5326cb3c76122498b76f66.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wd_buy_style-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a7ea0840d6631e695afef8bbaa30f97e.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='photoswipe-css'
            href='{{ asset('front_end/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='photoswipe-default-skin-css'
            href='{{ asset('front_end/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e98f5279cacaef826050eb2595082e77.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_59d266c0ea580aae1113acb3761f7ad5.css') }}'
            type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_f9db2117cb3f9bf8433a39bd81b3e492.css') }}'
            type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible
            }
        </style>
        <link rel='stylesheet' id='brands-styles-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_48d56016b20f151be4f24ba6d0eb1be4.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='select2-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e3e811600e32258de0b9ba53c7798db8.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='animate-custom-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_aab6e79d72b0f3ec5a3e252df621305c.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='icofont-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/css/icofont.min.css') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='swiper-bundle-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/css/swiper-bundle.min.css') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='backhoe-app-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a83d0fe293dc799980ad5e884bd7cc46.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='backhoe-style-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css') }}'
            type='text/css' media='all' />
        <style id='backhoe-style-inline-css' type='text/css'>
            :root {
                --primary-color: #E30613;
                --primary-color-contrast: #7BC043;
                --title-page-background: url(../images/pattern-brick.html);
                --title-page-background-color: #222;
                --title-page-text-color: #fefefe;
                --secondary-color: #412aab;
                --accent-color: #f92245;
                --text-color: #202020;
                --header-color: #313131;
                --body-background-color: #fff;
                --header-top-bg-color: #7BC043;
                --header-top-text-color: #fff;
                --header-top-border-color: #7BC043;
                --topbar-background: rgba(0, 0, 0, .15);
                --topbar-text: #fff;
                --topbar-sticky-bg: #1d1d1d;
                --topbar-sticky-text: #fff;
                --topbar-hover-sticky-text: #fff;
                --topbar-hover-text: #fff;
                --footer-background: #7BC043;
                --footer-background-image: url(../images/pattern_dashed.html);
                --footer-text-color: rgba(255, 255, 255, .7);
                --copyright-background: #7BC043;
                --copyright-text: #fff
            }

            .titlebar {
                background-image: url(../images/pattern-brick.html)
            }

            .titlebar #page-title {
                text-align: center
            }

            @media only screen and (min-width:64em) {
                .titlebar {
                    padding: 230px 0 60px
                }

                .titlebar #page-title {
                    font-size: 54px;
                    padding: 0 15p40px
                }
            }

            body,
            body p {
                font-family: Open Sans;
                font-style: normal;
                font-weight400
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .menu-list a {
                font-family: Yantramanav;
                font-style: normal;
                font-weight: 900
            }

            header.l-header .top-bar-container.sticky .site-navigation.top-bar .top-bar-right .menu li a {
                font-family: Open Sans;
                font-size: 16px;
                font-style: normal;
                font-weight: 600
            }

            .wd-heading .title_a {
                font-size: 36px;
                color: #313131
            }

            .wd-heading .sub_title_a {
                font-size: 18px
            }

            .wd-heading .title_b {
                font-size42px;
                text-transform: uppercase;
                line-height46px
            }

            .wd-heading .hr_a {
                border-bottom-style: solid;
                border-bottom-width: 6px;
                border-bottom-color: #E30613;
                width: 73px
            }

            .wd-heading .hr_b {
                border-bottom-style: solid;
                border-bottom-color: #E30613
            }

            .wd-heading .hr_c {
                border-bottom-style: solid;
                border-bottom-color: #E30613
            }

            header.l-header .top-bar-container .top-bar .top-bar-left .logo-wrapper a img {
                max-height40
            }

            header.l-header.corporate-layout .logo-wrapper a img {
                max-height40
            }

            header.l-header .top-bar-container.sticky .site-navigation.top-bar .top-bar-left .top-bar-title .logo-wrapper .menu-text,
            header.l-header .top-bar-container.sticky .site-navigation.top-bar .top-bar-left .top-bar-title .logo-wrapper {
                padding: 0
            }
        </style>
        <link rel='stylesheet' id='lightbox-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/css/vendor/lightbox.min.css') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='all-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/css/vendor/all.min.css') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='custom-line-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='dashicons-css' href='{{ asset('front_end/wp-includes/css/dashicons.min.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='simple-auction-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_d4fa6077311a8aad6a5f3943673785ba.css') }}'
            type='text/css' media='all' />
        <script type="text/javascript" src="{{ asset('front_end/wp-includes/js/jquery/jquery.min.js') }}" id="jquery-core-js">
        </script>
        <script type="text/javascript" id="wd_main_js_functions-js-extra">
            var devia = {
                "ajax_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                "home_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme",
                "date_format": "d\/m\/Y"
            };
        </script>
        <script type="module" src="{{ asset('front_end/wp-content/plugins/wd-main-plugin/js/PhotoSwipeLightbox.js') }}">
        </script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            var wc_add_to_cart_params = {
                "ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View cart",
                "cart_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
        </script>
        <script type="text/javascript" id="wc-single-product-js-extra">
            var wc_single_product_params = {
                "i18n_required_rating_text": "Please select a rating",
                "i18n_rating_options": ["1 of 5 stars", "2 of 5 stars", "3 of 5 stars", "4 of 5 stars", "5 of 5 stars"],
                "i18n_product_gallery_trigger_text": "View full-screen image gallery",
                "review_rating_required": "yes",
                "flexslider": {
                    "rtl": false,
                    "animation": "slide",
                    "smoothHeight": true,
                    "directionNav": false,
                    "controlNav": "thumbnails",
                    "slideshow": false,
                    "animationSpeed": 500,
                    "animationLoop": false,
                    "allowOneSlide": false
                },
                "zoom_enabled": "1",
                "zoom_options": [],
                "photoswipe_enabled": "1",
                "photoswipe_options": {
                    "shareEl": false,
                    "closeOnScroll": false,
                    "history": false,
                    "hideAnimationDuration": 0,
                    "showAnimationDuration": 0
                },
                "flexslider_enabled": ""
            };
        </script>
        <script type="text/javascript" id="woocommerce-js-extra">
            var woocommerce_params = {
                "ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/?wc-ajax=%%endpoint%%",
                "i18n_password_show": "Show password",
                "i18n_password_hide": "Hide password"
            };
        </script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK-lm5gdnsKARlSb10nkRfKoGCycwH49Y&amp;ver=4.4.2"
            id="googleapis-js"></script>
        <script type="text/javascript" id="simple-auction-countdown-language-js-extra">
            var countdown_language_data = {
                "labels": {
                    "Years": "Years",
                    "Months": "Months",
                    "Weeks": "Weeks",
                    "Days": "Days",
                    "Hours": "Hours",
                    "Minutes": "Minutes",
                    "Seconds": "Seconds"
                },
                "labels1": {
                    "Year": "Year",
                    "Month": "Month",
                    "Week": "Week",
                    "Day": "Day",
                    "Hour": "Hour",
                    "Minute": "Minute",
                    "Second": "Second"
                },
                "compactLabels": {
                    "y": "y",
                    "m": "m",
                    "w": "w",
                    "d": "d"
                }
            };
        </script>
        <script type="text/javascript" id="simple-auction-frontend-js-extra">
            var data = {
                "finished": "Auction has finished!",
                "checking": "Patience please, we are checking if auction is finished!",
                "gtm_offset": "0",
                "started": "Auction has started! Please refresh your page.",
                "no_need": "No need to bid. Your bid is winning! ",
                "compact_counter": "no",
                "outbid_message": "\n<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\tYou've been outbid!\t\t<\/li>\n\t<\/ul>\n",
                "interval": "1"
            };
            var SA_Ajax = {
                "ajaxurl": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/product\/telescopic-handler-copy-4\/?wsa-ajax",
                "najax": "1",
                "last_activity": "1751156376",
                "focus": "yes"
            };
        </script>
        <link rel="https://api.w.org/" href="../../wp-json/index.html" />
        <link rel="alternate" title="JSON" type="application/json" href="../../wp-json/wp/v2/product/3701.json" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.7.3" />
        <meta name="generator" content="WooCommerce 10.1.1" />
        <link rel='shortlink' href='../../indexc5ac.html?p=3701' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="../../wp-json/oembed/1.0/embeda6da.json?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2Fproduct%2Ftelescopic-handler-copy-4%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="../../wp-json/oembed/1.0/embed6a36?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2Fproduct%2Ftelescopic-handler-copy-4%2F&amp;format=xml" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62552021-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-62552021-1');
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62552021-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-62552021-1');
        </script> <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important
                }
            </style>
        </noscript>
        <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
        <meta name="generator"
            content="Powered by Slider Revolution 6.6.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style type="text/css" id="wp-custom-css">
            .text-icon-table.text-icon {
                max-width: 15px;
                display: inline-table;
                padding: 15px;
                padding: 15px 70px 15px 15px
            }

            body,
            body p {
                font-family: -apple-system, BlinkMacSystemFont, Roboto, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
            }

            @media screen and (min-width:64em) {
                .logged-in header.l-header .top-bar-container.sticky.fixed {
                    margin-top: 32px; //max-width:89.375rem}}.brands_form form ul li .select2.select2-container{min-width:auto}@media screen and (min-width:64em){.brands_form form ul li .select2.select2-container{min-width:350px}}
        </style><noscript>
            <style>
                .wpb_animate_when_almost_visible {
                    opacity: 1
                }
            </style>
        </noscript>
    </head>
@endsection

@section('body-tag')

    <body class="product-template-default single single-product postid-3701 theme-backhoe woocommerce woocommerce-page woocommerce-no-js wd_page_transitions wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
    @endsection

    @section('shop')
        <section class="titlebar">
            <div class="row">
                <div class="large-12 columns">
                    <h1 id="page-title" class="title">Shop</h1>
                </div>
            </div>
        </section>
        
        <div class="row content-wrapper">
            <div class="main-content- sngle-prd-style-2">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-3701"
                            class="product type-product post-3701 status-publish first instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-variable wd-wc-style-1">
                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                                <div class="woocommerce-product-gallery__wrapper">
                                    <div data-thumb="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                        data-thumb-alt="{{ $machine->name }}"
                                        data-thumb-srcset="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 200w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 150w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 194w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w"
                                        data-thumb-sizes="(max-width: 200px) 100vw, 200px"
                                        class="woocommerce-product-gallery__image"><a
                                            href="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"><img
                                                width="800" height="608"
                                                src="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                class="wp-post-image" alt="{{ $machine->name }}" data-caption=""
                                                data-src="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                data-large_image="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                data-large_image_width="1000" data-large_image_height="760"
                                                decoding="async"
                                                srcset="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 800w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 300w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 768w, {{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 1000w"
                                                sizes="(max-width: 800px) 100vw, 800px" /></a></div>


                                    @foreach ($machine->pictures as $photo)
                                        <div data-thumb="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                            data-thumb-alt="{{ $machine->name }} {{ $loop->index + 1 }}"
                                            data-thumb-srcset="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 200w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 150w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 194w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 314w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 700w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 100w"
                                            data-thumb-sizes="(max-width: 200px) 100vw, 200px"
                                            class="woocommerce-product-gallery__image"><a
                                                href="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"><img
                                                    width="200" height="200"
                                                    src="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                    class=""
                                                    alt="{{ $machine->name }} {{ $loop->index + 1 }}"
                                                    data-caption=""
                                                    data-src="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                    data-large_image="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                    data-large_image_width="1000" data-large_image_height="760"
                                                    decoding="async"
                                                    srcset="{{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 200w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 150w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 194w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 314w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 700w, {{ isset($machine) ? asset('storage/' . $photo->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 100w"
                                                    sizes="(max-width: 200px) 100vw, 200px" /></a></div>
                                    @endforeach

                                    <div data-thumb="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                        data-thumb-alt="{{ $machine->name }} 3"
                                        data-thumb-srcset="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w"
                                        data-thumb-sizes="(max-width: 200px) 100vw, 200px"
                                        class="woocommerce-product-gallery__image"><a
                                            href="../../wp-content/uploads/2019/06/product_0010__.jpg"><img width="200"
                                                height="200"
                                                src="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }}"
                                                class="" alt="{{ $machine->name }} 3"
                                                data-caption=""
                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__.jpg"
                                                data-large_image="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__.jpg"
                                                data-large_image_width="1000" data-large_image_height="760"
                                                decoding="async"
                                                srcset="{{ isset($machine) ? asset('storage/' . $machine->img_url) : asset('admin/assets/img/img_place_holder.webp') }} 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w"
                                                sizes="(max-width: 200px) 100vw, 200px" /></a></div>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{ $machine->name }}</h1>
                                <div class="pricing-location">
                                    <div class="pricing-partial rates-3">
                                        <h5>Hire</h5>
                                        <ul>
                                            <li class="pricing pricing-day">
                                                <div><span class="woocommerce-Price-amount amount"
                                                        aria-hidden="true"><bdi>
                                                            @if ($machine->rental_price_per_day > 999)
                                                                {{ number_format($machine->rental_price_per_day / 1000, 1) }}K
                                                            @else
                                                                {{ number_format($machine->rental_price_per_day) }}
                                                            @endif
                                                            <span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                    <span aria-hidden="true">–</span> <span
                                                        class="woocommerce-Price-amount amount"
                                                        aria-hidden="true"><bdi>
                                                            @if ($machine->price_month > 999)
                                                                {{ number_format($machine->price_month / 1000, 1) }}K
                                                            @elseif ($machine->price_month > 999999)
                                                                {{ number_format($machine->price_month / 1000000, 1) }}M
                                                            @else
                                                                {{ number_format($machine->price_month) }}
                                                            @endif
                                                            <span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                    <span class="screen-reader-text">Price range: {{ number_format($machine->rental_price_per_day) }} through
                                                        {{ number_format($machine->rental_price_per_day) }}</span> <small> / Day</small>
                                                </div>
                                            </li>
                                            <li class="pricing pricing-week">
                                                <div><span class="woocommerce-Price-amount amount">
                                                    @if ($machine->rental_price_per_week > 999)
                                                        {{ number_format($machine->rental_price_per_week / 1000, 1) }}K
                                                    @else
                                                        {{ number_format($machine->rental_price_per_week) }}
                                                    @endif
                                                    <span class="woocommerce-Price-currencySymbol">tsh</span></span>
                                                    <small> / Week</small>
                                                </div>
                                            </li>
                                            <li class="pricing pricing-fourWeek">
                                                <div><span class="woocommerce-Price-amount amount">
                                                    @if ($machine->price_month > 999)
                                                        {{ number_format($machine->rental_price_per_month / 1000, 1) }}K
                                                    @elseif ($machine->price_month > 999999)
                                                        {{ number_format($machine->rental_price_per_month / 1000000, 1) }}M
                                                    @else
                                                        {{ number_format($machine->rental_price_per_month) }}
                                                    @endif
                                                    <span class="woocommerce-Price-currencySymbol">$</span></span>
                                                    <small> / Month</small>
                                                </div>
                                        </ul>
                                    </div>
                                    <div class="with-operator">
                                        <h5>Hire with operator</h5>
                                        <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>{{$machine->rental_price_per_hour}}</bdi></span>
                                            <small> / Hour</small>
                                        </div>
                                    </div>
                                    <div class="location"> San Francisco, CA</div>
                                </div>
                                <div class="woocommerce-product-details__short-description">
                                    <p>{{ $machine->description }}</p>
                                </div>
                                <form class="variations_form cart" action="{{ route('shop.quotationDetails') }}"
                                    method="GET" enctype='multipart/form-data'>
                                    <table class="variations" cellspacing="0" role="presentation">
                                        <tbody>
                                            <tr>
                                                <th class="label"><label for="pa_payement-frequency">Payment
                                                        frequency</label></th>
                                                <td class="value"> <select id="pa_payement-frequency" class=""
                                                        name="payment_frequency"
                                                        data-attribute_name="payment_frequency"
                                                        data-show_option_none="yes">
                                                        <option value="">Choose an option</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="weekly">Weekly</option>
                                                    </select><a class="reset_variations" href="#"
                                                        aria-label="Clear options">Clear</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="reset_variations_alert screen-reader-text" role="alert"
                                        aria-live="polite" aria-relevant="all"></div>
                                    <div class="single_variation_wrap">
                                        <div class="woocommerce-variation single_variation" role="alert"
                                            aria-relevant="additions"></div>
                                        <div class="woocommerce-variation-add-to-cart variations_button">
                                            <div class="quantity"> <label class="screen-reader-text"
                                                    for="quantity_68a73aa84fc03">{{ $machine->name }}
                                                    quantity</label> <input type="number" id="quantity_68a73aa84fc03"
                                                    class="input-text qty text" name="quantity"
                                                    aria-label="Product quantity" min="1" step="1"
                                                    placeholder="1" inputmode="numeric" autocomplete="off" /></div>
                                            <button type="submit" class="single_add_to_cart_button button alt">Add to
                                                cart</button> <input type="hidden" name="add-to-cart" value="3701" />
                                            <input type="hidden" name="machine_id" value="{{ $machine->id }}" /> <input
                                                type="hidden" name="variation_id" class="variation_id"
                                                value="0" />
                                        </div>
                                    </div>
                                </form>
                                <div class="product_meta"> <span class="sku_wrapper">SKU: <span
                                            class="sku">{{ $machine->sku }}</span></span> <span
                                        class="posted_in">Categories: <a
                                            href="../../product-category/earthmoving-equipment/index.html"
                                            rel="tag">{{ $machine->category->name }}</a>, <a
                                            href="../../product-category/earthmoving-equipment/excavator/index.html"
                                            rel="tag">{{ $machine->type->name }}</a></span></div>
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li role="presentation" class="description_tab" id="tab-title-description"> <a
                                            href="#tab-description" role="tab" aria-controls="tab-description">
                                            Description </a></li>
                                    <li role="presentation" class="additional_information_tab"
                                        id="tab-title-additional_information"> <a href="#tab-additional_information"
                                            role="tab" aria-controls="tab-additional_information"> Additional
                                            information </a></li>
                                    <li role="presentation" class="reviews_tab" id="tab-title-reviews"> <a
                                            href="#tab-reviews" role="tab" aria-controls="tab-reviews"> Reviews
                                            (0) </a></li>
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                    id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    {{$machine->notes}}
                                </div>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                                    id="tab-additional_information" role="tabpanel"
                                    aria-labelledby="tab-title-additional_information">
                                    <h2>Additional information</h2>
                                    <table class="woocommerce-product-attributes shop_attributes"
                                        aria-label="Product Details">
                                        <tr
                                            class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_location">
                                            <th class="woocommerce-product-attributes-item__label" scope="row">
                                                Location</th>
                                            <td class="woocommerce-product-attributes-item__value">
                                                <p><a href="../../location/san-francisco-ca/index.html" rel="tag">San
                                                        Francisco, CA</a></p>
                                            </td>
                                        </tr>
                                        <tr
                                            class="woocommerce-product-attributes-item woocommerce-product-attributes-item--payment_frequency">
                                            <th class="woocommerce-product-attributes-item__label" scope="row">
                                                Payement frequency</th>
                                            <td class="woocommerce-product-attributes-item__value">
                                                <p>Daily, Monthly, Weekly</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                    id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                    <div id="reviews" class="woocommerce-Reviews">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title"> Reviews</h2>
                                            <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                        </div>
                                        <p class="woocommerce-verification-required">Only logged in customers who have
                                            purchased this product may leave a review.</p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <section class="related products">
                                <h2>Related products</h2>
                                <ul class="products columns-4 grid">
                                    <li
                                        class="product type-product post-3698 status-publish first instock product_cat-earthmoving-equipment product_cat-bulldozer has-post-thumbnail featured shipping-taxable purchasable product-type-backhoe_bookin_product wd-wc-style-1">
                                        <div class='product-image-wrapper'><a href="../cat-3046/index.html"><noscript><img
                                                        width="700" height="700"
                                                        src="{{ 'front_end/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg' }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="Cat 3046" decoding="async"
                                                        srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-100x100.jpg 100w"
                                                        sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                    width="700" height="700"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg"
                                                    class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Cat 3046" decoding="async"
                                                    data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-100x100.jpg 100w"
                                                    data-sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                        <div class="product-details-wrapper">
                                            <h2 class="woocommerce-loop-product__title"> <a
                                                    href="../cat-3046/index.html">Cat 3046 </a></h2>
                                            <div class="pricing-location">
                                                <div class="pricing-partial rates-3">
                                                    <h5>Hire</h5>
                                                    <ul>
                                                        <li class="pricing pricing-day">
                                                            <div>
                                                                <p class="label">Day Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>290.00</bdi></span><small>/
                                                                        Day</small> <small> / Day</small></div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-week">
                                                            <div>
                                                                <p class="label">Week Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>630.00</bdi></span>
                                                                    <small> / Week</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-fourWeek">
                                                            <div>
                                                                <p class="label">Month Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>3,600.00</bdi></span>
                                                                    <small> / Month</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="with-operator">
                                                    <h5>Hire with operator</h5>
                                                    <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>150.00</bdi></span>
                                                        <small> / Hour</small>
                                                    </div>
                                                </div>
                                                <div class="location"> San Francisco, CA</div>
                                            </div>
                                            <div class="description"> Pellentesque habitant morbi tristique senectus et
                                                netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                                placerat eleifend leo.</div> <a href="indexd2c5.html?add-to-cart=3698"
                                                data-quantity="1"
                                                class="button product_type_backhoe_bookin_product add_to_cart_button ajax_add_to_cart"
                                                data-product_id="3698" data-product_sku="woo-sunglasses-5"
                                                aria-label="Add to cart: &ldquo;Cat 3046&rdquo;" rel="nofollow">Add
                                                to cart</a>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-6 status-publish instock product_cat-excavator has-post-thumbnail shipping-taxable product-type-simple wd-wc-style-1">
                                        <div class='product-image-wrapper'><a
                                                href="../yellow-excavator/index.html"><noscript><img width="700"
                                                        height="700"
                                                        src="{{ 'front_end/wp-content/uploads/2018/03/img17-700x700.jpg' }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="{{ $machine->name }}" decoding="async"
                                                        srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-100x100.jpg 100w"
                                                        sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                    width="700" height="700"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-700x700.jpg"
                                                    class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="{{ $machine->name }}" decoding="async"
                                                    data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/img17-100x100.jpg 100w"
                                                    data-sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                        <div class="product-details-wrapper">
                                            <h2 class="woocommerce-loop-product__title"> <a
                                                    href="../yellow-excavator/index.html">35000 &#8211; 39000 lbs,
                                                    Excavator </a></h2>
                                            <div class="pricing-location">
                                                <div class="location"> Columbus, OH</div>
                                            </div>
                                            <div class="description"> The 35,000 to 39,000 lb excavator is primarily
                                                used for excavating or earthmoving tasks such as trenching, demolition
                                                clearing, foundation digging, general landscaping tasks or backfilling
                                                excavated areas.</div> <a href="../yellow-excavator/index.html"
                                                data-quantity="1" class="button product_type_simple" data-product_id="6"
                                                data-product_sku="woo-hoodie"
                                                aria-label="Read more about &ldquo;{{ $machine->name }}&rdquo;"
                                                rel="nofollow">Read more</a>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-3699 status-publish instock product_cat-earthmoving-equipment product_cat-bulldozer has-post-thumbnail featured shipping-taxable purchasable product-type-backhoe_bookin_product wd-wc-style-1">
                                        <div class='product-image-wrapper'><a
                                                href="../cat-c32-acert/index.html"><noscript><img width="700"
                                                        height="700"
                                                        src="{{ asset('front_end/wp-content/uploads/2019/06/product_0008__-700x700.jpg') }}"
                                                        data-src="{{ asset('front_end/wp-content/uploads/2019/06/product_0008__-700x700.jpg') }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="Cat® C32 ACERT™" decoding="async"
                                                        srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-600x600.jpg 600w"
                                                        sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                    width="700" height="700"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-700x700.jpg"
                                                    class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Cat® C32 ACERT™" decoding="async"
                                                    data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0008__-600x600.jpg 600w"
                                                    data-sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                        <div class="product-details-wrapper">
                                            <h2 class="woocommerce-loop-product__title"> <a
                                                    href="../cat-c32-acert/index.html">Cat® C32 ACERT™ </a></h2>
                                            <div class="pricing-location">
                                                <div class="pricing-partial rates-3">
                                                    <h5>Hire</h5>
                                                    <ul>
                                                        <li class="pricing pricing-day">
                                                            <div>
                                                                <p class="label">Day Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>290.00</bdi></span><small>/
                                                                        Day</small> <small> / Day</small></div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-week">
                                                            <div>
                                                                <p class="label">Week Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>630.00</bdi></span>
                                                                    <small> / Week</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-fourWeek">
                                                            <div>
                                                                <p class="label">Month Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>3,600.00</bdi></span>
                                                                    <small> / Month</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="with-operator">
                                                    <h5>Hire with operator</h5>
                                                    <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>150.00</bdi></span>
                                                        <small> / Hour</small>
                                                    </div>
                                                </div>
                                                <div class="location"> San Francisco, CA</div>
                                            </div>
                                            <div class="description"> This product has mutiple features and a yellow
                                                color, and can be used for multiple tasks. Visite maker website for more
                                                details and warranty details.
                                                &lt;i class=&quot;fas fa-check&quot;&gt;&lt;/i&gt; Free delivery
                                                available.
                                                &lt;i class=&quot;fas fa-check&quot;&gt;&lt;/i&gt; Use promo-code and
                                                save up to 30%.</div> <a href="indexc4b8.html?add-to-cart=3699"
                                                data-quantity="1"
                                                class="button product_type_backhoe_bookin_product add_to_cart_button ajax_add_to_cart"
                                                data-product_id="3699" data-product_sku="woo-sunglasses-6"
                                                aria-label="Add to cart: &ldquo;Cat® C32 ACERT™&rdquo;" rel="nofollow">Add
                                                to cart</a>
                                        </div>
                                    </li>
                                    <li
                                        class="product type-product post-11 status-publish last instock product_cat-earthmoving-equipment product_cat-backhoe-loader has-post-thumbnail featured shipping-taxable purchasable product-type-simple wd-wc-style-1">
                                        <div class='product-image-wrapper'><a
                                                href="../wheel-loader/index.html"><noscript><img width="700"
                                                        height="700"
                                                        src="{{ asset('front_end/wp-content/uploads/2018/03/product_0031_3-700x700.jpg') }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="2800 lbs, Wheel, Skid Steer Loader" decoding="async"
                                                        srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-100x100.jpg 100w"
                                                        sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                    width="700" height="700"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-700x700.jpg"
                                                    class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="2800 lbs, Wheel, Skid Steer Loader" decoding="async"
                                                    data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/03/product_0031_3-100x100.jpg 100w"
                                                    data-sizes="(max-width: 700px) 100vw, 700px" /></a></div>
                                        <div class="product-details-wrapper">
                                            <h2 class="woocommerce-loop-product__title"> <a
                                                    href="../wheel-loader/index.html">2800 lbs, Wheel, Skid Steer
                                                    Loader </a></h2>
                                            <div class="pricing-location">
                                                <div class="pricing-partial rates-3">
                                                    <h5>Hire</h5>
                                                    <ul>
                                                        <li class="pricing pricing-day">
                                                            <div>
                                                                <p class="label">Day Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>125,000.00</bdi></span>
                                                                    <small> / Day</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-week">
                                                            <div>
                                                                <p class="label">Week Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>299.00</bdi></span>
                                                                    <small> / Week</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="pricing pricing-fourWeek">
                                                            <div>
                                                                <p class="label">Month Rate</p>
                                                                <div class="price_value"> <span
                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>2,099.00</bdi></span>
                                                                    <small> / Month</small>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="with-operator">
                                                    <h5>Hire with operator</h5>
                                                    <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>150.00</bdi></span>
                                                        <small> / Hour</small>
                                                    </div>
                                                </div>
                                                <div class="location"> Los Angeles, CA</div>
                                            </div>
                                            <div class="description"> The 2,800 lb wheel skid steer loader comes
                                                equipped with two lifting arms and tires, making it a great choice for
                                                steering and navigating on job sites with rough outdoor terrain. With
                                                over 70 horsepower (hp),</div> <a href="indexa46f.html?add-to-cart=11"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="11" data-product_sku="woo-cap"
                                                aria-label="Add to cart: &ldquo;2800 lbs, Wheel, Skid Steer Loader&rdquo;"
                                                rel="nofollow">Add to cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script async data-noptimize="1"
            src='{{ asset('front_end/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js') }}'
            id='woocommerce-add-to-cart-js'></script>
        <script async data-noptimize="1"
            src='    {{ asset('front_end/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js') }}'
            id='lazysizes-js'></script>
        </script>
        <div class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div> <button class="pswp__button pswp__button--zoom"
                            aria-label="Zoom in/out"></button> <button class="pswp__button pswp__button--fs"
                            aria-label="Toggle fullscreen"></button> <button class="pswp__button pswp__button--share"
                            aria-label="Share"></button> <button class="pswp__button pswp__button--close"
                            aria-label="Close (Esc)"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div> <button class="pswp__button pswp__button--arrow--left"
                        aria-label="Previous (arrow left)"></button> <button
                        class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript'>
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <link rel='stylesheet' id='wc-blocks-style-css'
            href="{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3c68ad9b345b9b2f5fc71372d90cb3b9.css') }}"
            type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_26612f0758857e9fd3992bb65d0a2ca4.css') }}'
            type='text/css' media='all' />
        <script type="text/javascript" src="{{ asset('front_end/wp-includes/js/dist/hooks.min.js') }}" id="wp-hooks-js">
        </script>
        <script type="text/javascript" src="{{ asset('front_end/wp-includes/js/dist/i18n.min.js') }}" id="wp-i18n-js"></script>
        <script defer
            src="{{ asset('front_end/wp-content/cache/autoptimize/1/js/autoptimize_1224a3685c24c4d21b1a0bd0921f3651.js') }}">
        </script>
    @endsection
