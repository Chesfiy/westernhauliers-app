@extends('layouts.front')

@section('style')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
            /><style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>
        <title>Services - Western Hauliers</title>
        <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
            href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C%7CYantramanav%3A100%2C300%2C400%2C500%2C700%2C900%2C%7COpen+Sans%3A300%2C400%2C600%2C700%2C&amp;display=swap">
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Services - Western Hauliers" />
        <meta property="og:url" content="index.html" />
        <meta property="og:site_name" content="Western Hauliers" />
        <meta property="article:modified_time" content="2019-10-11T23:39:01+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="4 minutes" />
        <link rel='dns-prefetch' href='http://client.crisp.chat/' />
        <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
        <link href='https://fonts.gstatic.com/' crossorigin='anonymous' rel='preconnect' />
        <link rel="alternate" type="application/rss+xml" title="Western Hauliers &raquo; Feed" href="../feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Western Hauliers &raquo; Comments Feed"
            href="../comments/feed/index.html" />
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
                max-height: 400px
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
                box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
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
                border-radius: 4px;
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
                font-weight: 400
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
                padding: 63px 40px 20px
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
                font-weight: 400
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
                max-height: 40px;
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
                padding: 50px 30px 45px;
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
                font-weight: 400
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
                height: 45px;
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
                width: 48%
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
                --wp--preset--aspect-ratio--4-3: 4/3;
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
                --wp--preset--color--foreground: #000;
                --wp--preset--color--background: #fff;
                --wp--preset--color--primary: #1a4548;
                --wp--preset--color--secondary: #ffe2c7;
                --wp--preset--color--tertiary: #f6f6f6;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
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
                --wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);
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
                font-weight: 400;
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
                font-weight: 400;
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
                text-align: center;
                text-align: center
            }

            @media only screen and (min-width:64em) {
                .titlebar {
                    padding: 230px 0 60px
                }

                .titlebar #page-title {
                    font-size: 54px;
                    padding: 0 15px 40px
                }
            }

            body,
            body p {
                font-family: Open Sans;
                font-style: normal;
                font-weight: 400
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
                font-size: 42px;
                text-transform: uppercase;
                line-height: 46px
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
                max-height: 40
            }

            header.l-header.corporate-layout .logo-wrapper a img {
                max-height: 40
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
        <link rel='stylesheet' id='dashicons-css'
            href='{{ asset('front_end/wp-content/themes/backhoe/css/vendor/all.min.css') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='simple-auction-css'
            href='{{ asset('front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_d4fa6077311a8aad6a5f3943673785ba.css') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'
            href='{{ asset('front_end/wp-content/plugins/js_composer/assets/css/js_composer.min.css') }}' type='text/css'
            media='all' />
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
                "ajaxurl": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/services-1\/?wsa-ajax",
                "najax": "1",
                "last_activity": "1751156376",
                "focus": "yes"
            };
        </script>
        <link rel="https://api.w.org/" href="{{ asset('front_end/wp-json/index.html') }}" />
        <link rel="alternate" title="JSON" type="application/json"
            href="{{ asset('front_end/wp-json/wp/v2/pages/3289.json') }}" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD"
            href="{{ asset('front_end/xmlrpc0db0.php?rsd') }}" />
        <meta name="generator" content="WordPress 6.7.3" />
        <meta name="generator" content="WooCommerce 10.1.1" />
        <link rel='shortlink' href='{{ asset('front_end/indexb9a8.html?p=3289') }}' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="{{ asset('front_end/wp-json/oembed/1.0/embedfb60.json?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2Fservices-1%2F') }}" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="{{ asset('front_end/wp-json/oembed/1.0/embedc084?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2Fservices-1%2F&amp;format=xml') }}" />
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
        </style>
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1562174951021 {
                background-image: url({{ asset('front_end/wp-content/uploads/2019/07/testimonials-backgroundda7b.png?id=3935') }}) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important
            }

            .vc_custom_1562174918695 {
                margin-top: -440px !important
            }

            .vc_custom_1562674448213 {
                background-color: #313131 !important;
                background-position: 0 0 !important;
                background-repeat: no-repeat !important
            }

            .vc_custom_1561038794330 {
                padding-right: 75px !important;
                padding-left: 75px !important
            }

            .vc_custom_1561721539670 {
                margin-left: 50px !important
            }

            .vc_custom_1561041477277 {
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: contain !important
            }
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

    <body
        class="page-template-default page page-id-3289 theme-backhoe woocommerce-no-js wd_page_transitions wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
        {{-- <div class="page-loading">
            <div class="spinner-loading">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div> --}}
    @endsection

    @section('section')
        <section class="titlebar ">
            <div class="row">
                <div>
                    <h2 id="page-title" class="title">Our Services</h2>
                </div>
                <div>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><strong> Services</strong></li>
                    </ul>
                </div>
            </div>
        </section>
        <main class="l-main row">
            <div class="main large-12 small-12 columns">
                <article>
                    <div class="body field clearfix ">
                        <section class="wpb-content-wrapper">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='70'
                                                data-heightdesktop='50' style='height:50px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h2 style="margin:0;" class="title_a" data-text="Style One"> Style
                                                    One</h2>
                                                <hr class='hr_a' style=' margin: 10px;' />
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='67' data-heighttablet='67'
                                                data-heightdesktop='60' style='height:60px'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <ul class="team-list-style3 small-up-1 medium-up-2 large-up-4  clearfix">
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <img fetchpriority="high"
                                                                decoding="async" width="800" height="873"
                                                                src="../wp-content/uploads/2019/06/team-1.jpg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-295x322.jpg 295w"
                                                                sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Haaris Garrison</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>COE & Founder</span></p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-2.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Olivia Trejo</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>CTO</span></p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-4.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Sammy Lovell</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>Product Manager</span>
                                                            </p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-3.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Robson Garza</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>Project Manager</span>
                                                            </p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='70'
                                                data-heightdesktop='80' style='height:80px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h2 style="margin:0;" class="title_a" data-text="Style Two"> Style
                                                    Two</h2>
                                                <hr class='hr_a' style=' margin: 10px;' />
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='67' data-heighttablet='67'
                                                data-heightdesktop='70' style='height:70px'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <ul class="team-list-style2 small-up-1 medium-up-2 large-up-4  clearfix">
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <img fetchpriority="high"
                                                                decoding="async" width="800" height="873"
                                                                src="../wp-content/uploads/2019/06/team-1.jpg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-295x322.jpg 295w"
                                                                sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Haaris Garrison</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>COE & Founder</span></p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-2.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Olivia Trejo</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>CTO</span></p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-4.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-4-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Sammy Lovell</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>Product Manager</span>
                                                            </p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img decoding="async"
                                                                    width="800" height="873"
                                                                    src="../wp-content/uploads/2019/06/team-3.jpg"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-3-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Robson Garza</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>Project Manager</span>
                                                            </p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30" height="30"
                                                                            viewBox="0 0 48 48" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="wd_empty_space" data-heightmobile="5" data-heighttablet="10"
                                                data-heightdesktop="50" style="height: 50px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </article>
            </div>
        </main>
    @endsection

    @section('script')
        <style id='rs-plugin-settings-inline-css' type='text/css'></style>
        {{-- <script defer
            src='{{ asset('front_end/wp-content/cache/autoptimize/1/js/autoptimize_6634aecf610e4645998c1e77c1060f84.js') }}'>
        </script> --}}
    @endsection
