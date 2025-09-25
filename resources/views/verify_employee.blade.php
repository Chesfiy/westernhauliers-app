@extends('layouts.front')

@section('style')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>
        <title>{{ isset($employee->name) ? $employee->name : '' }} Badge.</title>
        <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
            href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C%7CYantramanav%3A100%2C300%2C400%2C500%2C700%2C900%2C%7COpen+Sans%3A300%2C400%2C600%2C700%2C&amp;display=swap">
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="{{ isset($employee->name) ? $employee->name : '' }} - Badge" />
        <meta property="og:description"
            content="Mel an esse salutandi, eos wisi nonumes democritum id. Eu affert dolore rationibus mel. Porro vocent ut vel. Rebum deleniti voluptua at sed, ut tollit prodesset eum, ea eos nostrud." />
        <meta property="og:url" content="index.html" />
        <meta property="og:site_name"
            content="Western Hauliers" />
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
            title="Western Hauliers &raquo; Feed"
            href="../../feed/index.html" />
        <link rel="alternate" type="application/rss+xml"
            title="Western Hauliers &raquo; Comments Feed"
            href="../../comments/feed/index.html" />
        <link rel="alternate" type="application/rss+xml"
            title="Western Hauliers &raquo; 35000 &#8211; 39000 lbs, Excavator Comments Feed"
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
        <style>
            /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #111827;
    background-color: #f9fafb;
}

/* Container and Layout */
.container {
    min-height: 100vh;
    padding: 2rem;
}

.header {
    text-align: center;
    margin-bottom: 2rem;
    max-width: 1152px;
    margin-left: auto;
    margin-right: auto;
}

.header h1 {
    font-size: 1.875rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 0.5rem;
}

.header p {
    color: #6b7280;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: start;
    max-width: 1152px;
    margin: 0 auto;
}

@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

/* Form Styles */
.form-container {
    display: flex;
    justify-content: center;
}

.card {
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    width: 100%;
    max-width: 28rem;
}

.card-header {
    padding: 1.5rem 1.5rem 0 1.5rem;
}

.card-header h2 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #111827;
}

.card-content {
    padding: 1.5rem;
}

/* Card Display Styles */
.card-display {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.display-header {
    margin-bottom: 1rem;
    text-align: center;
}

.display-header h2 {
    font-size: 1.25rem;
    font-weight: 500;
    color: #1f2937;
    margin-bottom: 0.25rem;
}

.display-header p {
    color: #6b7280;
    font-size: 0.875rem;
}

/* Employee ID Card Styles */
.employee-card {
    background-color: #1f2937;
    border-radius: 1rem;
    padding: 1.5rem;
    width: 20rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    color: white;
}

.card-header-section {
    text-align: center;
    margin-bottom: 1.5rem;
}

.logo-placeholder {
    width: 3rem;
    height: 2rem;
    background-color: #4b5563;
    border-radius: 0.25rem;
    margin: 0 auto 0.75rem auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-placeholder span {
    color: white;
    font-size: 0.75rem;
    font-weight: 500;
}

.card-header-section h3 {
    color: white;
    font-size: 1.25rem;
    font-weight: 500;
}

/* Photo Section */
.photo-section {
    position: relative;
    margin-bottom: 1.5rem;
}

.gradient-border {
    background: linear-gradient(to right, #34d399, #06b6d4, #3b82f6);
    border-radius: 1rem;
    padding: 1px;
}

.photo-container {
    background-color: #22d3ee;
    border-radius: calc(1rem - 1px);
    overflow: hidden;
    aspect-ratio: 3/4;
    position: relative;
}

.photo-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.photo-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom right, #67e8f9, #06b6d4);
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    left: 0;
}

.avatar-circle {
    width: 6rem;
    height: 6rem;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.avatar-circle svg {
    width: 3rem;
    height: 3rem;
    color: rgba(255, 255, 255, 0.6);
}

/* Employee Information */
.employee-info {
    text-align: center;
    margin-bottom: 1.5rem;
}

.employee-info h4 {
    color: #34d399;
    font-size: 1.25rem;
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.employee-info p {
    margin-bottom: 0.5rem;
}

.employee-info p:first-of-type {
    color: #d1d5db;
}

.employee-info p:last-of-type {
    color: #9ca3af;
    font-size: 0.875rem;
}

/* Footer */
.card-footer {
    text-align: center;
}

.card-footer p {
    color: #6b7280;
    font-size: 0.75rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }
    
    .employee-card {
        width: 18rem;
        padding: 1.25rem;
    }
    
    .card {
        max-width: none;
    }
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

@section('shop')
    <section class="titlebar">
        <div class="row">
            <div class="large-12 columns">
                @if(isset($employee->name))
                    <h1 class="mt-20" style="color:#ccc">Badge for <strong>{{ $employee->name}} </strong></h1>
                @else
                    <h1 class="mt-20" style="color:#ccc">Badge for Employee not found</h1>
                @endif
            </div>
        </div>
    </section>
        @if(isset($employee))
            <div class="content-grid" style="margin: 0 auto; text-align: center; margin-bottom: 30px;">
            
            <!-- Employee Card Display -->
            <div class="card-display" style="display: inline-block;">
                <div class="display-header">
                    <h2>Current Employee</h2>
                    <p id="employeeInfo">{{$employee->name}}</p>
                </div>
                
                <!-- Employee ID Card -->
                <div class="employee-card">
                    <!-- Header with Company Logo -->
                    <div class="card-header-section">
                        <div class="logo-placeholder">
                            <div><img src="{{asset("front_end/wp-content/themes/backhoe/images/logo.png")}}" alt="western hauliers" /></noscript></div>
                        </div>
                        <h3>Employee ID Card</h3>
                    </div>

                    <!-- Photo Section -->
                    <div class="photo-section">
                        <div class="gradient-border">
                            <div class="photo-container">
                                <img id="employeePhoto" src="{{ asset('storage/' . $employee->img_url) }}" alt="Employee photo">
                                <div id="photoPlaceholder" class="photo-placeholder" style="display: none;">
                                    <div class="avatar-circle">
                                        <svg viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Employee Information -->
                    <div class="employee-info">
                        <h4 id="employeeName">{{$employee->name}}</h4>
                        <p id="employeeJobTitle">{{$employee->position}}</p>
                        <p id="employeeIdText">Employee ID: {{$employee->employee_no}}</p>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer">
                        <p id="copyright">© 2024 WH Corporation. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        @endif
@endsection
