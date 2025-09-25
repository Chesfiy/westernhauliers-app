@extends('layouts.front')

@section('style')

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
        /><style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>
    <title>About us - Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme</title>
    <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
        href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C%7CYantramanav%3A100%2C300%2C400%2C500%2C700%2C900%2C%7COpen+Sans%3A300%2C400%2C600%2C700%2C&amp;display=swap">
    <link rel="canonical" href="index.html")}} />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="About us - Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme" />
    <meta property="og:url" content="index.html")}} />
    <meta property="og:site_name"
        content="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme" />
    <meta property="article:modified_time" content="2019-10-11T23:18:44+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="15 minutes" />
    <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
    <link href='https://fonts.gstatic.com/' crossorigin='anonymous' rel='preconnect' />
    <link rel="alternate" type="application/rss+xml"
        title="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme &raquo; Feed"
        href="../feed/index.html")}} />
    <link rel="alternate" type="application/rss+xml"
        title="Backhoe - Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme &raquo; Comments Feed"
        href="../comments/feed/index.html")}} />
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel='stylesheet' id='wp-block-library-css' href='{{asset("front_end/wp-includes/css/dist/block-library/style.min.css")}}'
        type='text/css' media='all' />
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
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_49cf2435fa366f178bf35990f06c5bfc.css")}}'
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
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3f4ce5e4a83ed11f5ff59bd2e094616e.css")}}'
        type='text/css' media='all' />
    <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-9-css'
        href='{{asset("front_end/wp-content/themes/backhoe/webfonts/fa-solid-900.html")}}' type='text/css' media='all' />
    <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-4-css'
        href='{{asset("front_end/wp-content/themes/backhoe/webfonts/fa-brands-400.html")}}' type='text/css' media='all' />
    <link rel='stylesheet' id='daterangepickers-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_55e1d560821b4a4b141b0ab6cbb74d26.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='backhoe_booking_app-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_82d433c01bdf940795897412d80bd6dc.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_64ac31699f5326cb3c76122498b76f66.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wd_buy_style-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a7ea0840d6631e695afef8bbaa30f97e.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e98f5279cacaef826050eb2595082e77.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_59d266c0ea580aae1113acb3761f7ad5.css")}}'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_f9db2117cb3f9bf8433a39bd81b3e492.css")}}'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible
        }
    </style>
    <link rel='stylesheet' id='brands-styles-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_48d56016b20f151be4f24ba6d0eb1be4.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e3e811600e32258de0b9ba53c7798db8.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='animate-custom-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_aab6e79d72b0f3ec5a3e252df621305c.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='icofont-css' href='{{asset("front_end/wp-content/themes/backhoe/css/icofont.min.css")}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-bundle-css' href='{{asset("front_end/wp-content/themes/backhoe/css/swiper-bundle.min.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='backhoe-app-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a83d0fe293dc799980ad5e884bd7cc46.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='backhoe-style-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css")}}'
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
            background-image: url(front_end/wp-content/uploads/2019/09/titlebar-bg.jpg"
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
    <link rel='stylesheet' id='lightbox-css' href='{{asset("front_end/wp-content/themes/backhoe/css/vendor/lightbox.min.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='all-css' href='{{asset("front_end/wp-content/themes/backhoe/css/vendor/all.min.css")}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='custom-line-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{asset("front_end/wp-includes/css/dashicons.min.css")}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='simple-auction-css'
        href='{{asset("front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_d4fa6077311a8aad6a5f3943673785ba.css")}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='{{asset("front_end/wp-content/plugins/js_composer/assets/css/js_composer.min.css")}}' type='text/css' media='all' />
    <script type="text/javascript" src="{{asset("front_end/wp-includes/js/jquery/jquery.min.js")}}" id="jquery-core-js"></script>
    <script type="text/javascript" id="wd_main_js_functions-js-extra">
        var devia = {
            "ajax_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme",
            "date_format": "d\/m\/Y"
        };
    </script>
    <script type="module" src="{{asset("front_end/wp-content/plugins/wd-main-plugin/js/PhotoSwipeLightbox.js")}}"></script>
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
            "ajaxurl": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/about\/?wsa-ajax",
            "najax": "1",
            "last_activity": "1751156376",
            "focus": "yes"
        };
    </script>
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
                margin-top: 32px; //max-width:89.375rem}}'.brands_form form ul li .select2.select2-container{min-width:auto}@media screen and (min-width:64em){.brands_form form ul li .select2.select2-container{min-width:350px}}'
    </style>
    <style type="text/css" data-type="vc_custom-css">
        @media only screen and (max-width:678px) {
            .vc_custom_1562415105054 {
                background-image: url(front_end/wp-content/uploads/2019/07/Group-1498.png) !important;
                padding: 95px 25px !important
            }
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1569493727263 {
            background-image: url(front_end/wp-content/uploads/2019/07/bg225f.jpg?id=4125) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important
        }

        .vc_custom_1569520062184 {
            background-image: url(http://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/05/section_men-1.jpg?id=677) !important
        }

        .vc_custom_1568121501318 {
            padding-top: 0 !important;
            padding-right: 0 !important
        }

        .vc_custom_1561807457983 {
            padding-left: 20px !important
        }

        .vc_custom_1562413453755 {
            margin-top: -40px !important;
            margin-left: -40px !important;
            padding-right: 87px !important;
            padding-left: 87px !important;
            background-color: #E30613 !important
        }

        .vc_custom_1562415105054 {
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important
        }

        .vc_custom_1561378026069 {
            padding-left: 55px !important
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
    <body class="page-template-default page page-id-7 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
 @endsection

@section('section')
<section class="titlebar ">
            <div class="row">
                <div>
                    <h2 id="page-title" class="title">About us</h2>
                </div>
                <div>
                    <ul class="breadcrumbs">
                        <li><a href="../index.html")}}>Home</a></li>
                        <li><strong> About us</strong></li>
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
                                <div
                                    class="mi-column wpb_column vc_column_container vc_col-sm-1 vc_col-lg-1 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="single_image-bg wpb_column vc_column_container vc_col-sm-5">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="30" style="height: 30px;"></div>
                                            <div
                                                class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1568121501318">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            fetchpriority="high" decoding="async"
                                                            class="vc_single_image-img "
                                                            src="{{asset("front_end/wp-content/uploads/2019/06/moved-img-1%402x-620x480.jpg")}}"
                                                            width="620" height="480" alt="moved-img-1@2x"
                                                            title="moved-img-1@2x" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-1 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-5">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='50'
                                                data-heightdesktop='90' style='height:90px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h2 style="margin:0;" class="title_b"
                                                    data-text="We do the best of the best lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.">
                                                    We are Energetic Company</h2>
                                                <p style="" class="sub_title_b"> We do the best of the best
                                                    lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                    ut labore et dolore.</p>
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='20'
                                                data-heightdesktop='30' style='height:30px'></div>
                                            <div class="wd-video-box-bg wpb_video_widget wpb_content_element vc_clearfix   vc_custom_1561807457983 vc_video-aspect-ratio- vc_video-el-width- vc_video-align-"
                                                style="background: url() center center no-repeat;
background-size: cover">
                                                <div class="wpb_wrapper">
                                                    <div class="wd-video-box"
                                                        style="min-height: 100px; min-width: 100px;">
                                                        <div class="full_screen_video_wrapper  text-left"><a
                                                                href="#" id="play"
                                                                data-toggle="modal68a73a82d04c3"
                                                                data-reveal-id="modal68a73a82d04c3"
                                                                class="play popup1_open"><i
                                                                    class="fa fa-play fa-1x"></i><span>Watch video tour
                                                                    5 min lenght</span>
                                                                <div class="playvideo_animation"></div>
                                                                <div class="playvideo_animation"
                                                                    style="animation-delay: 1.2s;"></div>
                                                                <div class="playvideo_animation"
                                                                    style="animation-delay: 2.4s;"></div>
                                                            </a>
                                                            <div class="medium reveal" id="modal68a73a82d04c3"
                                                                data-reveal data-reset-on-close="true"
                                                                data-animation-in="fade-in"
                                                                data-animation-out="fade-out">
                                                                <div class="flex-video widescreen"> <iframe
                                                                        id="ytplayer" type="text/html")}}
                                                                        height="100%" data-video-id="v9nBysHSzhE"
                                                                        frameborder="0"></iframe></div> <a
                                                                    class="close-button" data-close
                                                                    aria-label="Close reveal">×</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const videoBoxes = document.querySelectorAll(".wd-video-box")
                                                    videoBoxes.forEach(videoBox => {
                                                        videoBox.querySelector("#play").addEventListener("click", e => {
                                                            const revealList = document.querySelectorAll(".reveal")
                                                            revealList.forEach(reveal => {
                                                                if (reveal.id == e.target.closest("#play").dataset.revealId) {
                                                                    const iframe = reveal.querySelector("iframe"),
                                                                        url =
                                                                        `https://www.youtube.com/embed/${iframe.dataset.videoId}?autoplay=1&origin=http://example.com`
                                                                    iframe.src = url
                                                                }
                                                            })
                                                        })
                                                    })
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="40" data-heighttablet="40"
                                                data-heightdesktop="80" style="height: 80px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class=" text-icon text-icon--icon-top_position boxes  clearfix">
                                                <div class="text-icon__container  left ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-922-1.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-922-1.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Precision</h4>
                                                        <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="40" style="height: 40px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class=" text-icon text-icon--icon-top_position boxes  clearfix">
                                                <div class="text-icon__container  left ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-923.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-923.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Study</h4>
                                                        <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="40" style="height: 40px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class=" text-icon text-icon--icon-top_position boxes  clearfix">
                                                <div class="text-icon__container  left ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-924.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-924.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> No delay</h4>
                                                        <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="40" style="height: 40px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid wd_row_shadow"
                                style="background-position: left center !important;">
                                <div class="box-place wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1562413453755">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='30'
                                                data-heightdesktop='50' style='height:50px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h3 style="margin:0;font-size:36px;color:#000000;" class="title_b"
                                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, fast growing sed do eiusmod tempor incididunt ut labore et dolore.">
                                                    25 years of undefeated success</h3>
                                                <p style="color:#000000;" class="sub_title_b"> Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit, fast growing sed do eiusmod
                                                    tempor incididunt ut labore et dolore.</p>
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='30' data-heighttablet='30'
                                                data-heightdesktop='30' style='height:30px'></div>
                                            <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="40"
                                                data-heightdesktop="65" style="height: 65px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="40" style="height: 40px;"></div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-899.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-899.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> 525</h4>
                                                        <p class="text-icon__text  "> Successfully finished projects
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-902.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-902.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> 112</h4>
                                                        <p class="text-icon__text  "> Capital (Millions) & investment
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="30"
                                                data-heightdesktop="40" style="height: 40px;"></div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-901.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-901.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> 27</h4>
                                                        <p class="text-icon__text  "> Year of experience with pride</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/Group-903.png")}}"
                                                                alt='icon' /></noscript><img class="lazyload"
                                                            decoding="async"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/Group-903.png"
                                                            alt='icon' /></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> 1524</h4>
                                                        <p class="text-icon__text  "> Collaegues & counting</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="60" data-heighttablet="80"
                                                data-heightdesktop="120" style="height: 120px;"></div>
                                            <div class="swiper wd-clients-carousel nav_arrow" data-clientshow = "6">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide wd-clients-carousel-item "> <noscript><img
                                                                decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-1.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-1.png"
                                                            width="125" height="50" alt="client"></div>
                                                    <div class="swiper-slide wd-clients-carousel-item ">
                                                        <noscript><img decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-2.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-2.png"
                                                            width="125" height="50" alt="client"></div>
                                                    <div class="swiper-slide wd-clients-carousel-item ">
                                                        <noscript><img decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-3.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-3.png"
                                                            width="125" height="50" alt="client"></div>
                                                    <div class="swiper-slide wd-clients-carousel-item ">
                                                        <noscript><img decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-4.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-4.png"
                                                            width="125" height="50" alt="client"></div>
                                                    <div class="swiper-slide wd-clients-carousel-item ">
                                                        <noscript><img decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-6.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-6.png"
                                                            width="125" height="50" alt="client"></div>
                                                    <div class="swiper-slide wd-clients-carousel-item ">
                                                        <noscript><img decoding="async" class=""
                                                                src="{{asset("front_end/wp-content/uploads/2018/04/client-5.png")}}"
                                                                width="125" height="50"
                                                                alt="client"></noscript><img decoding="async"
                                                            class="lazyload "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/client-5.png"
                                                            width="125" height="50" alt="client"></div>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="30"
                                                data-heighttablet="40" data-heightdesktop="70"
                                                style="height: 70px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1569493727263 vc_row-has-fill vc_row-o-content-bottom vc_row-flex"
                                style="background-position: center !important;">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                    <div class="vc_column-inner vc_custom_1562415105054">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='' data-heighttablet=''
                                                data-heightdesktop='' style='height:px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 495px">
                                                <h3 style="margin:0;color:#ffffff;" class="title_c"
                                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.">
                                                    Committed to keep people healthy & safe</h3>
                                                <p style="color:#ffffff;" class="sub_title_c"> Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                    ut labore et dolore.</p>
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='' data-heighttablet=''
                                                data-heightdesktop='' style='height:px'></div>
                                            <div class="wd_empty_space" data-heightmobile="50"
                                                data-heighttablet="50" data-heightdesktop="106"
                                                style="height: 106px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-icon-table wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner vc_custom_1561378026069">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='30'
                                                data-heighttablet='30' data-heightdesktop='60'
                                                style='height:60px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h3 style="margin:0;color:#000000;" class="title_b"
                                                    data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.">
                                                    We are the best in the business</h3>
                                                <p style="color:#000000;" class="sub_title_b"> Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                                    ut labore et dolore.</p>
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='15'
                                                data-heighttablet='15' data-heightdesktop='15'
                                                style='height:15px'></div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="40"
                                                            height="36.377" viewBox="0 0 40 36.377">
                                                            <g id="Group_906" data-name="Group 906"
                                                                transform="translate(-1345.455 -587.008)">
                                                                <path id="polygon257"
                                                                    d="M8286,3167.086h20.912V3152H8286Z"
                                                                    transform="translate(-6928.041 -2554.358)"
                                                                    fill="#fff" />
                                                                <path id="polygon259"
                                                                    d="M8613,3503.516h5.423V3502H8613Z"
                                                                    transform="translate(-7247.296 -2896.07)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon261"
                                                                    d="M8498,3376.492h10.87V3375H8498Z"
                                                                    transform="translate(-7135.02 -2772.077)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon263"
                                                                    d="M8254,2768.885h1.516V2734H8254Z"
                                                                    transform="translate(-6896.798 -2146.258)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path265"
                                                                    d="M8129.492,2737.861h14.47a8.006,8.006,0,0,0,7.981-7.981v-17.431a7.9,7.9,0,0,0-2.345-5.636,8,8,0,0,0-5.637-2.344h-14.47v33.393Zm14.47,1.516H8128V2703h15.962a9.482,9.482,0,0,1,6.7,2.771,9.385,9.385,0,0,1,2.771,6.7v17.43a9.482,9.482,0,0,1-2.771,6.7A9.344,9.344,0,0,1,8143.962,2739.376Z"
                                                                    transform="translate(-6773.783 -2115.992)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path267"
                                                                    d="M9261.516,4041.492v.995a.683.683,0,0,0,.213.5.731.731,0,0,0,1,0,.679.679,0,0,0,.213-.5v-.995h-1.421Zm.688,3.221a2.264,2.264,0,0,1-1.563-.639,2.163,2.163,0,0,1-.64-1.563V4040h4.405v2.51a2.266,2.266,0,0,1-.64,1.563A2.163,2.163,0,0,1,9262.2,4044.713Z"
                                                                    transform="translate(-7878.974 -3421.328)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon269"
                                                                    d="M9265.913,2944.352l-.781-1.705-.758,1.705-1.374-.616,2.132-4.737,2.154,4.737Z"
                                                                    transform="translate(-7881.903 -2346.403)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path271"
                                                                    d="M9261.516,3141.765h1.4v-20.272h-1.4Zm2.155,1.516h-2.913a.748.748,0,0,1-.758-.758v-21.765a.748.748,0,0,1,.758-.758h2.913a.748.748,0,0,1,.758.758v21.765A.748.748,0,0,1,9263.671,3143.28Z"
                                                                    transform="translate(-7878.974 -2523.116)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path273"
                                                                    d="M7759.516,2737.861h4.31v-33.369h-4.31Zm5.8,1.516H7758V2703h7.317Z"
                                                                    transform="translate(-6412.545 -2115.992)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon275"
                                                                    d="M7913,2826.516h2.913V2825H7913Z"
                                                                    transform="translate(-6563.874 -2235.103)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon277"
                                                                    d="M7913,2948.516h2.913V2947H7913Z"
                                                                    transform="translate(-6563.874 -2354.214)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon279"
                                                                    d="M7913,3071.516h2.913V3070H7913Z"
                                                                    transform="translate(-6563.874 -2474.301)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon281"
                                                                    d="M7913,3194.516h2.913V3193H7913Z"
                                                                    transform="translate(-6563.874 -2594.388)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon283"
                                                                    d="M7913,3317.492h2.913V3316H7913Z"
                                                                    transform="translate(-6563.874 -2714.475)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon285"
                                                                    d="M7913,3440.492h2.913V3439H7913Z"
                                                                    transform="translate(-6563.874 -2834.562)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon287"
                                                                    d="M7913,3562.516h2.913V3561H7913Z"
                                                                    transform="translate(-6563.874 -2953.672)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon289"
                                                                    d="M7913,3685.516h2.913V3684H7913Z"
                                                                    transform="translate(-6563.874 -3073.759)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon291"
                                                                    d="M7913,3808.492h2.913V3807H7913Z"
                                                                    transform="translate(-6563.874 -3193.846)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon293"
                                                                    d="M7913,3930.516h2.913V3929H7913Z"
                                                                    transform="translate(-6563.874 -3312.957)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon295"
                                                                    d="M7913,4053.516h2.913V4052H7913Z"
                                                                    transform="translate(-6563.874 -3433.044)"
                                                                    fill="#1d1d1d" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Sustainability</h4>
                                                        <p class="text-icon__text  "></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="40"
                                                            height="39.984" viewBox="0 0 40 39.984">
                                                            <g id="Group_911" data-name="Group 911"
                                                                transform="translate(-308.808 -1444.727)">
                                                                <path id="path2731"
                                                                    d="M12871.806,23129.438c.121,0,.241.025.387.025a5.549,5.549,0,0,0,4.008-1.666,5.693,5.693,0,0,0,1.4-5.723l-.145-.434,18.133-18.158.435.145a5.875,5.875,0,0,0,1.715.266,5.669,5.669,0,0,0,5.649-6.061l-3.55,3.551-5.287-5.289,3.549-3.549c-.12,0-.241-.025-.361-.025a5.544,5.544,0,0,0-4.009,1.668,5.692,5.692,0,0,0-1.4,5.723l.146.434-18.134,18.156-.435-.145a5.939,5.939,0,0,0-1.714-.266,5.669,5.669,0,0,0-5.65,6.061l3.55-3.572,5.287,5.287-3.549,3.549Zm.387,1.547a7.306,7.306,0,0,1-2.173-.338l-1.208-.387,4.395-4.395-3.114-3.115-4.395,4.395-.387-1.207a7.2,7.2,0,0,1,6.882-9.367,8.079,8.079,0,0,1,1.714.191l16.854-16.852a7.194,7.194,0,0,1,7-8.91,7.327,7.327,0,0,1,2.174.338l1.207.385-4.395,4.395,3.114,3.115,4.395-4.395.387,1.209a7.263,7.263,0,0,1-1.763,7.266,7.154,7.154,0,0,1-5.095,2.1h0a8.1,8.1,0,0,1-1.715-.193l-16.853,16.854a7.2,7.2,0,0,1-7,8.91Z"
                                                                    transform="translate(-12556.164 -21646.273)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path2733"
                                                                    d="M13686.066,23915.23a1.516,1.516,0,0,1-1.062.434,1.457,1.457,0,0,1-1.038-.434l-12.966-12.967,5.264-5.264,12.965,12.967a1.5,1.5,0,0,1,.436,1.037,1.561,1.561,0,0,1-.436,1.063Z"
                                                                    transform="translate(-13342.731 -22432.813)"
                                                                    fill="#fff" />
                                                                <path id="polygon2735"
                                                                    d="M13629,23859.162l2.053,2.053,3.162-3.164-2.052-2.051Z"
                                                                    transform="translate(-13301.745 -22392.803)"
                                                                    fill="#fff" />
                                                                <path id="path2737"
                                                                    d="M13628.173,23857.375l12.435,12.434a.746.746,0,0,0,1.015,0l3.163-3.162a.7.7,0,0,0,.217-.508.692.692,0,0,0-.217-.506l-12.436-12.436Zm12.942,14.172h0a2.227,2.227,0,0,1-1.594-.676L13626,23857.35l6.35-6.35,13.521,13.521a2.206,2.206,0,0,1,.652,1.594,2.313,2.313,0,0,1-.652,1.594l-3.163,3.162a2.2,2.2,0,0,1-1.593.652Z"
                                                                    transform="translate(-13298.817 -22387.922)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path2739"
                                                                    d="M13586.174,23815.25l.965.965,2.077-2.076-.966-.965Zm.965,3.139-3.139-3.139,4.25-4.25,3.139,3.139Z"
                                                                    transform="translate(-13257.831 -22348.889)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path2741"
                                                                    d="M12914.863,23142.143l1.353.1-.1-1.354-3.115-1.834,1.835,3.115Zm3.019,1.74-3.936-.266-2.946-5,1.618-1.617,4.974,2.945.266,3.912Z"
                                                                    transform="translate(-12601.081 -21691.162)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2743"
                                                                    d="M13151.869,23378.98l-12.869-12.895,1.087-1.086,12.869,12.895Z"
                                                                    transform="translate(-12823.576 -21913.658)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2745"
                                                                    d="M14280.086,23245.174l-1.086-1.088,1.086-1.086,1.087,1.086Z"
                                                                    transform="translate(-13936.051 -21794.604)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2747"
                                                                    d="M13017.087,24507.172l-1.087-1.086,1.087-1.086,1.087,1.086Z"
                                                                    transform="translate(-12703.546 -23026.133)"
                                                                    fill="#1d1d1d" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Sustainability</h4>
                                                        <p class="text-icon__text  "></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="40"
                                                            height="39.096" viewBox="0 0 40 39.096">
                                                            <g id="Group_912" data-name="Group 912"
                                                                transform="translate(-344.926 -1534.313)">
                                                                <path id="path2777"
                                                                    d="M18172.246,23438v21.971h-8.061a14.273,14.273,0,0,0,1.055-5.4v-8.236l-9.617-4.469-9.617,4.469v8.236a14.363,14.363,0,0,0,1.055,5.4H18139V23438h33.246Z"
                                                                    transform="translate(-17790.684 -21895.527)"
                                                                    fill="#fff" />
                                                                <path id="path2779"
                                                                    d="M18005.607,23117.795h36.785v-3.189h-36.785Zm38.393,1.607h-40v-6.4h40Z"
                                                                    transform="translate(-17659.074 -21578.688)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2781"
                                                                    d="M18157,23209.607h1.607V23208H18157Z"
                                                                    transform="translate(-17808.232 -21671.303)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2783"
                                                                    d="M18285,23209.607h1.582V23208H18285Z"
                                                                    transform="translate(-17933.018 -21671.303)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2785"
                                                                    d="M18412,23209.607h1.607V23208H18412Z"
                                                                    transform="translate(-18056.83 -21671.303)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2787"
                                                                    d="M18044,23332.676h-12.781v-1.607h11.174v-25.461h-36.785v25.461h11.174v1.607H18004V23304h40Z"
                                                                    transform="translate(-17659.074 -21764.891)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path2789"
                                                                    d="M18601.547,23900.273a5.273,5.273,0,1,1-5.273-5.273A5.274,5.274,0,0,1,18601.547,23900.273Z"
                                                                    transform="translate(-18231.334 -22341.051)"
                                                                    fill="#E30613" />
                                                                <path id="polygon2791"
                                                                    d="M18678.586,24024.8l-2.586-2.586,1.129-1.131,1.457,1.457,2.535-2.537,1.131,1.131Z"
                                                                    transform="translate(-18314.201 -22462.912)"
                                                                    fill="#fff" />
                                                                <path id="path2793"
                                                                    d="M18386.607,23562.852v7.732a9.4,9.4,0,1,0,17.627,0v-7.732l-8.814-4.094Zm8.813,22.1-.25-.1a15.12,15.12,0,0,1-10.17-14.264v-8.738l10.42-4.846,10.422,4.846v8.738a15.1,15.1,0,0,1-10.17,14.264Z"
                                                                    transform="translate(-18030.508 -22011.539)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2795"
                                                                    d="M18769,23594.842h1.582V23591H18769Z"
                                                                    transform="translate(-18404.865 -22044.686)"
                                                                    fill="#1d1d1d" />
                                                                <path id="polygon2797"
                                                                    d="M18769,24486.844h1.582V24483H18769Z"
                                                                    transform="translate(-18404.865 -22914.287)"
                                                                    fill="#1d1d1d" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Sustainability</h4>
                                                        <p class="text-icon__text  "></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class=" no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                                <div class="text-icon__container   ">
                                                    <div class="text-icon__icon-box "> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="40"
                                                            height="40" viewBox="0 0 40 40">
                                                            <g id="Group_913" data-name="Group 913"
                                                                transform="translate(-411.982 -1340.953)">
                                                                <path id="path2363"
                                                                    d="M13287.969,13270.025a10.714,10.714,0,0,0-7.332,17.727l7.356-7.356V13270Z"
                                                                    transform="translate(-12856.752 -11919.807)"
                                                                    fill="#fff" />
                                                                <path id="path2365"
                                                                    d="M13431.357,13727l-7.357,7.357a10.713,10.713,0,0,0,17.728-7.357h-10.37Z"
                                                                    transform="translate(-12999.086 -12365.331)" />
                                                                <path id="path2367"
                                                                    d="M13736.607,13272.883a9.22,9.22,0,0,1,6.478,6.479h-6.478ZM13735,13271v9.943h9.943A10.714,10.714,0,0,0,13735,13271Z"
                                                                    transform="translate(-13302.277 -11920.781)"
                                                                    fill="#1d1d1d" />
                                                                <path id="path2369"
                                                                    d="M12928.184,12940.394h1.607l.828-4.093.553-.075a13.527,13.527,0,0,0,3.063-.829l.527-.2,2.763,3.139,1.381-.8-1.331-3.942.428-.352a15.926,15.926,0,0,0,2.26-2.235l.352-.427,3.941,1.331.8-1.381-3.113-2.762.2-.527a13.5,13.5,0,0,0,.829-3.063l.075-.553,4.068-.8v-1.607l-4.068-.828-.075-.553a13.476,13.476,0,0,0-.829-3.062l-.2-.527,3.113-2.763-.8-1.381-3.941,1.331-.352-.428a14.676,14.676,0,0,0-2.26-2.234l-.453-.352,1.332-3.942-1.382-.8-2.762,3.139-.527-.2a16.243,16.243,0,0,0-3.063-.829l-.553-.075-.828-4.093h-1.607l-.828,4.093-.553.075a13.6,13.6,0,0,0-3.063.829l-.527.2-2.762-3.139-1.382.8,1.331,3.968-.427.352a13.435,13.435,0,0,0-2.234,2.234l-.352.428-3.942-1.331-.8,1.381,3.113,2.762-.2.527a15.994,15.994,0,0,0-.829,3.038l-.075.553-4.093.828v1.607l4.093.829.075.552a13.535,13.535,0,0,0,.829,3.063l.2.527-3.113,2.763.8,1.381,3.942-1.331.352.452a13.435,13.435,0,0,0,2.234,2.234l.427.352-1.331,3.968,1.382.8,2.762-3.139.527.2a14.958,14.958,0,0,0,3.063.829l.553.075.828,4.093Zm2.912,1.606h-4.218l-.854-4.293a15.056,15.056,0,0,1-2.31-.628l-2.888,3.289-3.641-2.109,1.406-4.143a15.67,15.67,0,0,1-1.708-1.708l-4.143,1.406-2.109-3.641,3.265-2.888a14.836,14.836,0,0,1-.628-2.31l-4.269-.854v-4.218l4.293-.854a14.915,14.915,0,0,1,.628-2.31l-3.265-2.888,2.109-3.642,4.144,1.382a18.191,18.191,0,0,1,1.708-1.708l-1.406-4.143,3.641-2.109,2.888,3.289a15.026,15.026,0,0,1,2.31-.628l.854-4.294h4.219l.854,4.294a15.007,15.007,0,0,1,2.311.628l2.888-3.289,3.641,2.109-1.406,4.143a18.309,18.309,0,0,1,1.708,1.708l4.143-1.382,2.109,3.642-3.264,2.888a15.022,15.022,0,0,1,.627,2.31l4.27.854v4.218l-4.27.854a15.052,15.052,0,0,1-.627,2.31l3.264,2.888-2.109,3.641-4.143-1.406a18.309,18.309,0,0,1-1.708,1.708l1.406,4.143-3.641,2.109-2.888-3.289a15.007,15.007,0,0,1-2.311.628l-.854,4.293Z"
                                                                    transform="translate(-12497.018 -11561.047)"
                                                                    fill="#1d1d1d" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="text-icon__content-box">
                                                        <h4 class="text-icon__title "> Sustainability</h4>
                                                        <p class="text-icon__text  "></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="40"
                                                data-heighttablet="40" data-heightdesktop="40"
                                                style="height: 40px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="90"
                                                data-heighttablet="90" data-heightdesktop="90"
                                                style="height: 90px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='0'
                                                data-heighttablet='0' data-heightdesktop='0' style='height:0px'>
                                            </div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h2 style="margin:0;" class="title_a"
                                                    data-text="Awesome Services"> Industries We Serve</h2>
                                                <p style="" class="sub_title_a"> Awesome Services</p>
                                                <hr class='hr_a'
                                                    style=' margin: 10px;width: 72px;border-bottom-color: #ffc13c;' />
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='67'
                                                data-heighttablet='67' data-heightdesktop='60'
                                                style='height:60px'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='small-up-1 medium-up-2 large-up-1'>
                                                <div class="column column-block ">
                                                    <article
                                                        class="wd-post wd-post--without-thumbnail  post-258 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                                                        <div class="wd-post__content">
                                                            <h3 class="wd-post__title"> <a
                                                                    href="../blog/2019/08/28/best-practices-of-hr-management/index.html")}}>Best
                                                                    Practices of HR management</a></h3>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="column column-block ">
                                                    <article
                                                        class="wd-post wd-post--without-thumbnail  post-260 post type-post status-publish format-standard has-post-thumbnail hentry category-updates">
                                                        <div class="wd-post__content">
                                                            <h3 class="wd-post__title"> <a
                                                                    href="../blog/2019/03/30/10-tips-to-find-best-backhoe/index.html")}}>10
                                                                    Tips to Find Best Backhoe</a></h3>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="column column-block ">
                                                    <article
                                                        class="wd-post wd-post--without-thumbnail  post-262 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                                                        <div class="wd-post__content">
                                                            <h3 class="wd-post__title"> <a
                                                                    href="../blog/2017/12/28/how-to-organize-a-construction-site/index.html")}}>How
                                                                    to Setup a Construction Site</a></h3>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="20"
                                                data-heighttablet="20" data-heightdesktop="20"
                                                style="height: 20px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                        <noscript><img decoding="async" class="vc_single_image-img "
                                                                src="{{asset("front_end/wp-content/uploads/2019/06/photo-1505082527911-33423132c73d-560x515.png")}}"
                                                                width="560" height="515"
                                                                alt="photo-1505082527911-33423132c73d"
                                                                title="photo-1505082527911-33423132c73d" /></noscript><img
                                                            decoding="async" class="lazyload vc_single_image-img "
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20560%20515%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/photo-1505082527911-33423132c73d-560x515.png"
                                                            width="560" height="515"
                                                            alt="photo-1505082527911-33423132c73d"
                                                            title="photo-1505082527911-33423132c73d" /></div>
                                                </figure>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="90"
                                                data-heighttablet="90" data-heightdesktop="90"
                                                style="height: 90px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1569520062184 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="60"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                            <div class="wd-count-up "> <noscript><img decoding="async"
                                                        width="62" height="62"
                                                        src="{{asset("front_end/wp-content/uploads/2019/06/champion-2842_fcb453b6-d2d7-4d18-b67f-ecc793150b3f.png")}}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="" /></noscript><img decoding="async"
                                                    width="62" height="62"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2062%2062%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/champion-2842_fcb453b6-d2d7-4d18-b67f-ecc793150b3f.png"
                                                    class="lazyload attachment-thumbnail size-thumbnail"
                                                    alt="" />
                                                <h3 class="wd-count-up__counter small-heading" data-file="15"
                                                    style = 'color: #ffffff'> 15</h3>
                                                <h4 class="wd-count-up__title small-heading"
                                                    style = 'color: #ffffff'>Awwards</h4>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                            <div class="wd-count-up "> <noscript><img decoding="async"
                                                        width="62" height="50"
                                                        src="{{asset("front_end/wp-content/uploads/2019/06/team-2715_cef8922e-7aa0-4ddd-96a7-34fde8bdc608.png")}}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="" /></noscript><img decoding="async"
                                                    width="62" height="50"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2062%2050%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2715_cef8922e-7aa0-4ddd-96a7-34fde8bdc608.png"
                                                    class="lazyload attachment-thumbnail size-thumbnail"
                                                    alt="" />
                                                <h3 class="wd-count-up__counter small-heading" data-file="1024"
                                                    style = 'color: #ffffff'> 1024</h3>
                                                <h4 class="wd-count-up__title small-heading"
                                                    style = 'color: #ffffff'>Happy clients</h4>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                            <div class="wd-count-up "> <noscript><img decoding="async"
                                                        width="50" height="62"
                                                        src="{{asset("front_end/wp-content/uploads/2019/06/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.png")}}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="" /></noscript><img decoding="async"
                                                    width="50" height="62"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2050%2062%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.png"
                                                    class="lazyload attachment-thumbnail size-thumbnail"
                                                    alt="" />
                                                <h3 class="wd-count-up__counter small-heading" data-file="1024"
                                                    style = 'color: #ffffff'> 1024</h3>
                                                <h4 class="wd-count-up__title small-heading"
                                                    style = 'color: #ffffff'>Projects</h4>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                            <div class="wd-count-up "> <noscript><img decoding="async"
                                                        width="64" height="64"
                                                        src="{{asset("front_end/wp-content/uploads/2019/06/safe-2291_ffa36413-4b0a-4d71-b890-8c672e1bac8c.png")}}"
                                                        class="attachment-thumbnail size-thumbnail"
                                                        alt="" /></noscript><img decoding="async"
                                                    width="64" height="64"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2064%2064%22%3E%3C/svg%3E'
                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/safe-2291_ffa36413-4b0a-4d71-b890-8c672e1bac8c.png"
                                                    class="lazyload attachment-thumbnail size-thumbnail"
                                                    alt="" />
                                                <h3 class="wd-count-up__counter small-heading" data-file="99"
                                                    style = 'color: #ffffff'> 99</h3>
                                                <h4 class="wd-count-up__title small-heading"
                                                    style = 'color: #ffffff'>Up Time</h4>
                                            </div>
                                            <div class="wd_empty_space" data-heightmobile="60"
                                                data-heighttablet="80" data-heightdesktop="100"
                                                style="height: 100px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class='wd_empty_space' data-heightmobile='30'
                                                data-heighttablet='70' data-heightdesktop='100'
                                                style='height:100px'></div>
                                            <div class="wd-heading text-left  " style="max-width: 100%">
                                                <h2 style="margin:0;" class="title_a" data-text="Awesome"> People
                                                </h2>
                                                <p style="" class="sub_title_a"> Awesome</p>
                                                <hr class='hr_a'
                                                    style=' margin: 10px;width: 73px;border-bottom-color: #ffc13c;border-bottom-width: 6px;' />
                                            </div>
                                            <div class='wd_empty_space' data-heightmobile='67'
                                                data-heighttablet='67' data-heightdesktop='50'
                                                style='height:50px'></div>
                                            <ul class="team-list-style2 small-up-1 medium-up-2 large-up-4  clearfix">
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img
                                                                    decoding="async" width="800" height="873"
                                                                    src="{{asset("front_end/wp-content/uploads/2019/06/team-1.jpg")}}"
                                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-295x322.jpg 295w"
                                                                    sizes="(max-width: 800px) 100vw, 800px" /></noscript><img
                                                                decoding="async" width="800" height="873"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20873%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1.jpg"
                                                                class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1.jpg 800w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-275x300.jpg 275w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-768x838.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-1-295x322.jpg 295w"
                                                                data-sizes="(max-width: 800px) 100vw, 800px" /></div>
                                                        <div class="team-member__info">
                                                            <h4 class="team-member__name"><span>Haaris Garrison</span>
                                                            </h4>
                                                            <p class="team-member__job"><span>COE & Founder</span></p>
                                                        </div>
                                                        <div class="team-member__socialmedia">
                                                            <ul>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img
                                                                    decoding="async" width="800" height="873"
                                                                    src="{{asset("front_end/wp-content/uploads/2019/06/team-2.jpg")}}"
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
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img
                                                                    decoding="async" width="800" height="873"
                                                                    src="{{asset("front_end/wp-content/uploads/2019/06/team-4.jpg")}}"
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
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=" column column-block">
                                                    <div class="team-member">
                                                        <div class="team-member__picture"> <noscript><img
                                                                    decoding="async" width="800" height="873"
                                                                    src="{{asset("front_end/wp-content/uploads/2019/06/team-3.jpg")}}"
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
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M6 24C6 32.9 12.5 40.3 21 41.8L21.1003 41.7197C21.0669 41.7133 21.0334 41.7067 21 41.7V29H16.5V24H21V20C21 15.5 23.9 13 28 13C29.3 13 30.7 13.2 32 13.4V18H29.7C27.5 18 27 19.1 27 20.5V24H31.8L31 29H27V41.7C26.9666 41.7067 26.9331 41.7133 26.8997 41.7197L27 41.8C35.5 40.3 42 32.9 42 24C42 14.1 33.9 6 24 6C14.1 6 6 14.1 6 24Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M24.0006 6.54547C19.2604 6.54547 18.6655 6.5662 16.8038 6.65093C14.9456 6.73602 13.6773 7.0302 12.5675 7.46183C11.4196 7.90765 10.4458 8.50402 9.47562 9.47456C8.50474 10.4447 7.9084 11.4186 7.46114 12.5662C7.02842 13.6764 6.73389 14.9451 6.65025 16.8026C6.56698 18.6644 6.54517 19.2597 6.54517 24C6.54517 28.7404 6.56626 29.3335 6.65062 31.1953C6.73607 33.0535 7.03024 34.3218 7.4615 35.4317C7.90767 36.5797 8.50402 37.5535 9.47453 38.5237C10.4443 39.4946 11.4181 40.0924 12.5653 40.5382C13.6759 40.9698 14.9445 41.264 16.8023 41.3491C18.6641 41.4338 19.2586 41.4546 23.9985 41.4546C28.739 41.4546 29.3321 41.4338 31.1939 41.3491C33.052 41.264 34.3218 40.9698 35.4323 40.5382C36.5799 40.0924 37.5522 39.4946 38.522 38.5237C39.4929 37.5535 40.0892 36.5797 40.5365 35.432C40.9656 34.3218 41.2601 33.0531 41.3474 31.1957C41.431 29.3338 41.4528 28.7404 41.4528 24C41.4528 19.2597 41.431 18.6647 41.3474 16.8029C41.2601 14.9447 40.9656 13.6764 40.5365 12.5666C40.0892 11.4186 39.4929 10.4447 38.522 9.47456C37.5511 8.50365 36.5803 7.90729 35.4312 7.46183C34.3185 7.0302 33.0495 6.73602 31.1913 6.65093C29.3296 6.5662 28.7369 6.54547 23.9952 6.54547H24.0006ZM22.4349 9.69093C22.8996 9.6902 23.4181 9.69093 24.0006 9.69093C28.6609 9.69093 29.2132 9.70765 31.0535 9.79129C32.7553 9.86911 33.6789 10.1535 34.2941 10.3924C35.1087 10.7087 35.6894 11.0869 36.2999 11.6978C36.9108 12.3087 37.289 12.8906 37.606 13.7051C37.8449 14.3197 38.1297 15.2433 38.2071 16.9451C38.2907 18.7851 38.3089 19.3378 38.3089 23.996C38.3089 28.6542 38.2907 29.2069 38.2071 31.0469C38.1293 32.7487 37.8449 33.6724 37.606 34.2869C37.2897 35.1015 36.9108 35.6815 36.2999 36.292C35.689 36.9029 35.109 37.2811 34.2941 37.5975C33.6796 37.8375 32.7553 38.1211 31.0535 38.1989C29.2136 38.2826 28.6609 38.3007 24.0006 38.3007C19.3401 38.3007 18.7877 38.2826 16.9478 38.1989C15.246 38.1204 14.3224 37.836 13.7068 37.5971C12.8922 37.2807 12.3104 36.9026 11.6996 36.2917C11.0887 35.6807 10.7105 35.1004 10.3934 34.2855C10.1545 33.6709 9.86979 32.7473 9.79234 31.0455C9.70871 29.2055 9.69198 28.6527 9.69198 23.9917C9.69198 19.3306 9.70871 18.7807 9.79234 16.9407C9.87016 15.2389 10.1545 14.3153 10.3934 13.7C10.7098 12.8855 11.0887 12.3037 11.6996 11.6927C12.3104 11.0818 12.8922 10.7037 13.7068 10.3866C14.322 10.1466 15.246 9.86293 16.9478 9.78474C18.5579 9.71202 19.1819 9.6902 22.4349 9.68656V9.69093ZM33.3174 12.5891C32.1611 12.5891 31.223 13.5262 31.223 14.6829C31.223 15.8393 32.1611 16.7775 33.3174 16.7775C34.4738 16.7775 35.4119 15.8393 35.4119 14.6829C35.4119 13.5266 34.4738 12.5884 33.3174 12.5884V12.5891ZM24.0006 15.0364C19.0506 15.0364 15.0373 19.0498 15.0373 24C15.0373 28.9502 19.0506 32.9618 24.0006 32.9618C28.9507 32.9618 32.9625 28.9502 32.9625 24C32.9625 19.0498 28.9503 15.0364 24.0003 15.0364H24.0006ZM24.0006 18.1818C27.2136 18.1818 29.8186 20.7866 29.8186 24C29.8186 27.2131 27.2136 29.8182 24.0006 29.8182C20.7873 29.8182 18.1826 27.2131 18.1826 24C18.1826 20.7866 20.7873 18.1818 24.0006 18.1818V18.1818Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                                <li><a href="#"> <svg width="30"
                                                                            height="30" viewBox="0 0 48 48"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M37.323 18.1522C37.3346 18.452 37.3385 18.7517 37.3385 19.0515C37.3385 28.141 30.9444 38.6343 19.252 38.6343C15.6603 38.6343 12.3205 37.4895 9.50659 35.5408C10.004 35.5953 10.5092 35.6363 11.0221 35.6363C14.0001 35.6363 16.743 34.5322 18.9187 32.6789C16.137 32.638 13.7882 30.6348 12.9782 27.9093C13.367 27.9911 13.7675 28.0321 14.1771 28.0321C14.7546 28.0321 15.3153 27.9504 15.8528 27.7869C12.942 27.16 10.7495 24.3801 10.7495 21.0414C10.7495 21.0005 10.7495 20.9868 10.7495 20.9595C11.6074 21.4638 12.5893 21.777 13.6319 21.8179C11.9239 20.5778 10.8011 18.4656 10.8011 16.0808C10.8011 14.8271 11.1138 13.6415 11.6642 12.6194C14.7985 16.7894 19.4846 19.5285 24.7675 19.8147C24.659 19.3105 24.6034 18.7792 24.6034 18.2477C24.6034 14.4456 27.4496 11.3658 30.9612 11.3658C32.7894 11.3658 34.4405 12.1972 35.5994 13.5327C37.0503 13.2329 38.4095 12.6605 39.6395 11.8702C39.1627 13.4782 38.1563 14.827 36.841 15.6719C38.1278 15.5084 39.3553 15.1407 40.4935 14.5956C39.6395 15.972 38.5646 17.1847 37.323 18.1522Z"
                                                                                fill="white" />
                                                                        </svg> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="wd_empty_space" data-heightmobile="0"
                                                data-heighttablet="30" data-heightdesktop="60"
                                                style="height: 60px;"></div>
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
        <script async data-noptimize="1" src='front_end/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js'>
        </script>
        <link rel='stylesheet' id='wc-blocks-style-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3c68ad9b345b9b2f5fc71372d90cb3b9.css")}}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_26612f0758857e9fd3992bb65d0a2ca4.css")}}'
            type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'></style>

        <script type="text/javascript" src="front_end/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
        <script type="text/javascript" src="front_end/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
        <script defer src="front_end/wp-content/cache/autoptimize/1/js/autoptimize_6634aecf610e4645998c1e77c1060f84.js">
        </script>

        <script>
            jQuery(document).ready(function($) {
                "use strict";
                var currentDate = moment().format("MM/DD/YYYY");
                var form_input = $('input[name="daterange"]');
                if (form_input.length) {
                    form_input.daterangepicker({
                        opens: 'left',
                        minDate: currentDate
                    }, function(start, end, label) {
                        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' +
                            end.format('YYYY-MM-DD'));
                    });
                }
            });
        </script>
@endsection