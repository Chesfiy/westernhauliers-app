@extends('layouts.front')

@section('style')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <style>
            img:is([sizes="auto" i],
            [sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px
            }
        </style>
        <title>Home - Western Hauliers</title>
        <link rel="stylesheet" media="print" id="ao_optimized_gfonts"
            href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%2C%7CYantramanav%3A100%2C300%2C400%2C500%2C700%2C900%2C%7COpen+Sans%3A300%2C400%2C600%2C700%2C&amp;display=swap">
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Home - Western Hauliers" />
        <meta property="og:url" content="/" />
        <meta property="og:site_name" content="Western Hauliers" />
        <meta property="article:modified_time" content="2023-02-15T17:42:43+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <link rel='dns-prefetch' href='http://client.crisp.chat/' />
        <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
        <link href='https://fonts.gstatic.com/' crossorigin='anonymous' rel='preconnect' />
        <link rel="alternate" type="application/rss+xml" title="Western Hauliers &raquo; Feed" href="/" />
        <link rel="alternate" type="application/rss+xml" title="Western Hauliers &raquo; Comments Feed" href="/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link rel='stylesheet' id='wp-block-library-css' href='front_end/wp-includes/css/dist/block-library/style.min.css'
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
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_49cf2435fa366f178bf35990f06c5bfc.css'
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
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_3f4ce5e4a83ed11f5ff59bd2e094616e.css'
            type='text/css' media='all' />
        <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-9-css'
            href='front_end/wp-content/themes/backhoe/webfonts/fa-solid-900.html' type='text/css' media='all' />
        <link rel='preload' as='font' crossorigin='anonymous' id='fontawesome-file-4-css'
            href='front_end/wp-content/themes/backhoe/webfonts/fa-brands-400.html' type='text/css' media='all' />
        <link rel='stylesheet' id='daterangepickers-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_55e1d560821b4a4b141b0ab6cbb74d26.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='backhoe_booking_app-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_82d433c01bdf940795897412d80bd6dc.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_64ac31699f5326cb3c76122498b76f66.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wd_buy_style-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a7ea0840d6631e695afef8bbaa30f97e.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-layout-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e98f5279cacaef826050eb2595082e77.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_59d266c0ea580aae1113acb3761f7ad5.css'
            type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='woocommerce-general-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_f9db2117cb3f9bf8433a39bd81b3e492.css'
            type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible
            }
        </style>
        <link rel='stylesheet' id='brands-styles-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_48d56016b20f151be4f24ba6d0eb1be4.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='select2-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_e3e811600e32258de0b9ba53c7798db8.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='animate-custom-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_aab6e79d72b0f3ec5a3e252df621305c.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='icofont-css' href='front_end/wp-content/themes/backhoe/css/icofont.min.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='swiper-bundle-css'
            href='front_end/wp-content/themes/backhoe/css/swiper-bundle.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='backhoe-app-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_a83d0fe293dc799980ad5e884bd7cc46.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='backhoe-style-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css'
            type='text/css' media='all' />
        <style id='backhoe-style-inline-css' type='text/css'>
            :root {
                --primary-color: #E30613;
                --primary-color-contrast: #fff;
                --title-page-background: url(/images/pattern-brick.html);
                --title-page-background-color: #222;
                --title-page-text-color: #fefefe;
                --secondary-color: #412aab;
                --accent-color: #fff;
                --text-color: #202020;
                --header-color: #313131;
                --body-background-color: #fff;
                --header-top-bg-color: #7BC043;
                --header-top-text-color: #fff;
                --header-top-border-color: #7BC043;
                --topbar-background: #00000026;
                --topbar-text: #fff;
                --topbar-sticky-bg: #7BC043;
                --topbar-sticky-text: #fff;
                --topbar-hover-sticky-text: #fff;
                --topbar-hover-text: #fff;
                --footer-background: #7BC043;
                --footer-background-image: url(/images/pattern_dashed.html);
                --footer-text-color: rgba(255, 255, 255, .7);
                --copyright-background: #7BC043;
                --copyright-text: #fff
            }

            .titlebar {
                background-image: url(/images/pattern-brick.html)
            }

            .titlebar #page-title {
                text-align: left;
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
        <link rel='stylesheet' id='lightbox-css' href='front_end/wp-content/themes/backhoe/css/vendor/lightbox.min.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='all-css' href='front_end/wp-content/themes/backhoe/css/vendor/all.min.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='custom-line-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_52b48f989e60d9a4e38751bf151cc30e.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='dashicons-css' href='front_end/wp-includes/css/dashicons.min.css' type='text/css'
            media='all' />
        <link rel='stylesheet' id='simple-auction-css'
            href='front_end/wp-content/cache/autoptimize/1/css/autoptimize_single_d4fa6077311a8aad6a5f3943673785ba.css'
            type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'
            href='front_end/wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css'
            media='all' />
        <script type="text/javascript" src="front_end/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
        <script type="text/javascript" id="wd_main_js_functions-js-extra">
            var devia = {
                "ajax_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/wp-admin\/admin-ajax.php",
                "home_url": "https:\/\/themes.webdevia.com\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme",
                "date_format": "d\/m\/Y"
            };
        </script>
        <script type="module" src="front_end/wp-content/plugins/wd-main-plugin/js/PhotoSwipeLightbox.js"></script>
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
                "ajaxurl": "\/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme\/?wsa-ajax",
                "najax": "1",
                "last_activity": "1751156376",
                "focus": "yes"
            };
        </script>
        <link rel="https://api.w.org/" href="wp-json/index.html" />
        <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/636.json" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.7.3" />
        <meta name="generator" content="WooCommerce 10.1.1" />
        <link rel='shortlink' href='index.html' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="wp-json/oembed/1.0/embedaf5e.json?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="wp-json/oembed/1.0/embed50f7?url=https%3A%2F%2Fthemes.webdevia.com%2Fbackhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme%2F&amp;format=xml" />
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
            .vc_custom_1568850484830 {
                background-image: url(front_end/wp-content/uploads/2019/09/slider-bgcbf2.jpg?id=4829) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important
            }

            .vc_custom_1570125319426 {
                background-color: rgba(0, 0, 0, .02) !important;
                *background-color: #7BC043 !important;
            }

            .vc_custom_1569339400324 {
                background-position: 0 0 !important;
                background-repeat: no-repeat !important
            }

            .vc_custom_1569329885436 {
                margin-top: -130px !important
            }

            .vc_custom_1569339400324 {
                background-position: 0 0 !important;
                background-repeat: no-repeat !important
            }

            .vc_custom_1569329901110 {
                margin-top: -130px !important
            }

            .vc_custom_1569260648992 {
                background-position: 0 0 !important;
                background-repeat: no-repeat !important
            }

            .vc_custom_1569610275707 {
                background-color: #7BC043 !important
            }

            .vc_custom_1570182560154 {
                background-image: url(http://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/testimonial-bg.jpg?id=5011) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important
            }

            .vc_custom_1562340542408 {
                padding-top: 40px !important
            }

            .vc_custom_1562158357343 {
                padding-top: 10px !important;
                padding-bottom: 10px !important
            }

            .vc_custom_1570730699154 {
                margin-bottom: 0 !important;
                margin-left: 25px !important
            }

            .vc_custom_1568992250492 {
                padding-top: 28px !important;
                padding-bottom: 22px !important
            }

            .vc_custom_1562157304682 {
                padding-top: 10px !important
            }

            .vc_custom_1570994220145 {
                padding-right: 44px !important
            }

            .vc_custom_1569339505360 {
                margin-top: -100px !important
            }

            .vc_custom_1569340168765 {
                margin-top: -100px !important
            }

            .vc_custom_1569340175773 {
                margin-top: -100px !important
            }

            .vc_custom_1570994395551 {
                padding-right: 44px !important
            }

            .vc_custom_1569340182535 {
                margin-top: -100px !important
            }

            .vc_custom_1569340187354 {
                margin-top: -100px !important
            }

            .vc_custom_1570994468579 {
                padding-right: 40px !important
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
        class="home page-template-default page page-id-636 theme-backhoe woocommerce-no-js wd_page_transitions wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
@endsection
    @section('section')
        <div class="body field clearfix">
            <section class="wpb-content-wrapper">
                <div data-vc-full-width="true" data-vc-full-width-init="false"
                    class="vc_row wpb_row vc_row-fluid vc_custom_1568850484830 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wd_empty_space" data-heighttablet="150" data-heightdesktop="230"
                                    style="height:230px"></div>
                                <div class="wd-heading text-center" style="max-width:100%">
                                    <h2 class="title_b" style="margin:0;font-size:60px;color:#fff;"
                                        data-text="Find your construction machines and more!">
                                        Rent or Buy.
                                    </h2>
                                    <p class="sub_title_b" style="font-size:18px;color:#fff;">
                                        Find your construction machines and more!
                                    </p>
                                </div>
                                <div class="wd_empty_space" data-heightmobile="30" data-heightdesktop="40"
                                    style="height:40px"></div>
                                <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                <link rel="stylesheet"
                                    href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

                                <div class="brands_form one_line devia-anim item-target"
                                    data-devia-animate='{"triggerHandler":"inview","animationTarget":".item-target","duration":"1200","delay":"150","initValues":{"y":41,"z":-118,"rotateX":-65,"opacity":0},"animations":{"y":0,"z":0,"rotateX":0,"opacity":1,"delay":2,"ease":"easeOutQuint"}}'>
                                    <div class="html-before item-target"></div>
                                    <form role="search" method="get" action="{{ route('shop') }}">
                                        <ul class="inline-list">
                                            <li class="item-target">
                                                <input type="hidden" name="post_type" value="product">
                                                <select name="s" id="machine_name">
                                                    <option value=""></option>
                                                </select>
                                            </li>
                                            <li class="item-target">
                                                <select name="machine-category" id="term"
                                                    class="product_categories">
                                                    <option value="-1">Select category</option>
                                                    @foreach ($categories as $category)
                                                        @php
                                                            // Machines that belong directly to the category (no categoryType)
                                                            $directMachines = $category->machines->whereNull(
                                                                'category_type_id',
                                                            );
                                                            // Machines that belong to any categoryType under this category
                                                            $typeMachines = $category->categoryType->flatMap(function (
                                                                $type,
                                                            ) {
                                                                return $type->machines;
                                                            });
                                                            // Total count: direct + all types
                                                            $totalCount =
                                                                $directMachines->count() + $typeMachines->count();
                                                        @endphp
                                                        <option class="level-0" value="{{ 'category-' . $category->id }}">
                                                            {{ $category->name }}  ({{ $totalCount }})
                                                        </option>
                                                        @foreach ($category->categoryType as $type)
                                                            @php
                                                                // Machines that belong to this type only
                                                                $typeCount = $type->machines->count();
                                                            @endphp
                                                            <option class="level-1"
                                                                value="{{ 'categoryType-' . $type->id }}">
                                                                &nbsp;&nbsp;{{ $type->name }}  çç
                                                            </option>
                                                        @endforeach
                                                    @endforeach

                                                </select>
                                            </li>
                                            <li class="daterange item-target">
                                                <input type="text" name="daterange" />
                                            </li>
                                            <li class="item-target">
                                                <div class="submit-button item-target">
                                                    <input type="submit" class="button" value="Search">
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="html-after item-target"></div>
                                </div>
                                <div class="wpb_text_column wpb_content_element vc_custom_1562340542408">
                                    <div class="wpb_wrapper">
                                        <p style="text-align:center;color:#fff;">
                                            Or list all available equipment in <a href="/shop">marketplace.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="wd_empty_space" data-heightmobile="30" data-heighttablet="130px"
                                    data-heightdesktop="200" style="height:200px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <main class="l-main row">
                    <div class="main large-12 small-12 columns">
                        <article>
                            <div class="body field clearfix ">
                                <section class="wpb-content-wrapper">
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wd_empty_space" data-heightmobile="50"
                                                        data-heighttablet="50" data-heightdesktop="100"
                                                        style="height:100px"></div>
                                                    <div class="wd-heading text-left" style="max-width:100%">
                                                        <h2 class="title_a" style="margin:0;font-weight:800;"
                                                            data-text="Let's Choose">
                                                            Categories</h2>
                                                        <p class="sub_title_a">Let's Choose</p>
                                                        <hr class="hr_a" style="margin:10px;" />
                                                    </div>
                                                    <div class="wd_empty_space" data-heightmobile="20"
                                                        data-heighttablet="20" data-heightdesktop="60"
                                                        style="height:60px"></div>
                                                    <div class="woocommerce columns-4">
                                                        <ul class="products columns-4 grid">
                                                            @foreach ($categories as $category)
                                                                @php
                                                                    // Try to get the first machine with an image from direct machines
                                                                    $machine = $category->machines
                                                                        ->whereNotNull('image')
                                                                        ->first();
                                                                    // If not found, try from categoryType machines
                                                                    if (!$machine) {
                                                                        foreach ($category->categoryType as $type) {
                                                                            $machine = $type->machines
                                                                                ->whereNotNull('image')
                                                                                ->first();
                                                                            if ($machine) {
                                                                                break;
                                                                            }
                                                                        }
                                                                    }
                                                                    // If still not found, try to get any machine (even without image)
                                                                    if (!$machine) {
                                                                        $machine = $category->machines->first();
                                                                        if (!$machine) {
                                                                            foreach ($category->categoryType as $type) {
                                                                                $machine = $type->machines->first();
                                                                                if ($machine) {
                                                                                    break;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                    // Set image URL or fallback
                                                                    $imgUrl =
                                                                        $machine && $machine->img_url
                                                                            ? asset('storage/' . $machine->img_url)
                                                                            : 'https://placehold.co/600x518?text=No+Image';
                                                                    // Count all machines in this category (direct + all types)
                                                                    $directMachines = $category->machines->count();
                                                                    $typeMachines = $category->categoryType->sum(
                                                                        fn($type) => $type->machines->count(),
                                                                    );
                                                                    $totalCount = $directMachines + $typeMachines;
                                                                @endphp
                                                                <li class="product-category product">
                                                                    <a aria-label="Visit product category {{ $category->name }}"
                                                                        href="{{ route('shop', ['category_id' => $category->id]) }}">
                                                                        <img src="{{ $imgUrl }}"
                                                                            alt="{{ $category->name }}" width="700"
                                                                            height="518" style="object-fit:cover;" />
                                                                        <h2 class="woocommerce-loop-category__title">
                                                                            {{ $category->name }} <mark
                                                                                class="count">({{ $totalCount }})</mark>
                                                                        </h2>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="wd_empty_space" data-heightmobile="10"
                                                        data-heighttablet="25" data-heightdesktop="25"
                                                        style="height:25px;"></div>
                                                    <div class="wd_empty_space" data-heightmobile="100"
                                                        data-heighttablet="200" data-heightdesktop="200"
                                                        style="height:200px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid moved-box moved-box--left">
                                        <div class="wpb_column vc_column_container vc_col-sm-7">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class='wd_empty_space' data-heightmobile='0'
                                                        data-heighttablet='0' data-heightdesktop='0' style='height:0px'>
                                                    </div>
                                                    <div class="wd-heading text-left  " style="max-width: 100%">
                                                        <h5 style="font-weight:500;font-size:14px;color:#fdb900;text-transform:Uppercase;letter-spacing:1.4px;"
                                                            class="sub_title_b" data-text="SOME FEATURES AND"> SOME
                                                            FEATURES AND
                                                        </h5>
                                                        <h2 style="margin:0;font-weight:800;" class="title_b"> The
                                                            Benefits of
                                                            working with us</h2>
                                                    </div>
                                                    <div class='wd_empty_space' data-heightmobile='5'
                                                        data-heighttablet='5' data-heightdesktop='5' style='height:5px'>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>We are committed to providing our customers with super
                                                                exceptional service while offering our employees the best
                                                                training and a working environment in which they can excel
                                                                best
                                                                of all place for more than a half century.</p>
                                                            <p>This company focus has been in place for more than a half
                                                                century. We are committed to providing our customers with
                                                                exceptional service while offering our employees the best
                                                                training best of all and a working environment.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1562158357343">
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h5>Affordable Price</h5>
                                                                            <p class="p-small">Our rent prices and selling
                                                                                prices
                                                                                are very affordable and competitive.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h5>Proffessional Services</h5>
                                                                            <p class="p-small">Banks & Financial
                                                                                Institutions
                                                                                face a challenging & dynamic environment
                                                                                with…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wd-video-box-bg wpb_video_widget wpb_content_element vc_clearfix   vc_custom_1570730699154 vc_video-aspect-ratio- vc_video-el-width- vc_video-align-"
                                                        style="background: url() center center no-repeat;background-size: cover">
                                                        <div class="wpb_wrapper">
                                                            <div class="wd-video-box"
                                                                style="min-height: 100px; min-width: 100px;">
                                                                <div class="full_screen_video_wrapper  text-left"><a
                                                                        href="#" id="play"
                                                                        data-toggle="modal68a73a62c3846"
                                                                        data-reveal-id="modal68a73a62c3846"
                                                                        class="play popup1_open"><i
                                                                            class="fa fa-play fa-1x"></i><span>Watch video
                                                                            tour
                                                                            5 min lenght</span>
                                                                        <div class="playvideo_animation"></div>
                                                                        <div class="playvideo_animation"
                                                                            style="animation-delay: 1.2s;"></div>
                                                                        <div class="playvideo_animation"
                                                                            style="animation-delay: 2.4s;"></div>
                                                                    </a>
                                                                    <div class="medium reveal" id="modal68a73a62c3846"
                                                                        data-reveal data-reset-on-close="true"
                                                                        data-animation-in="fade-in"
                                                                        data-animation-out="fade-out">
                                                                        <div class="flex-video widescreen"> <iframe
                                                                                id="ytplayer" type="text/html"
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
                                        <div class="wpb_column vc_column_container vc_col-sm-5">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <noscript><img decoding="async"
                                                                        class="vc_single_image-img "
                                                                        src="wp-content/uploads/2019/06/moved-img-1%402x-578x704.jpg"
                                                                        width="578" height="704"
                                                                        alt="moved-img-1@2x"
                                                                        title="moved-img-1@2x" /></noscript><img
                                                                    decoding="async" class="lazyload vc_single_image-img "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20578%20704%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/moved-img-1@2x-578x704.jpg"
                                                                    width="578" height="704" alt="moved-img-1@2x"
                                                                    title="moved-img-1@2x" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                        class="vc_row wpb_row vc_row-fluid vc_custom_1570125319426 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner vc_custom_1568992250492">
                                                <div class="wpb_wrapper">
                                                    <div class="swiper wd-clients-carousel nav_arrow" data-clientshow="7">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/africab.jpg') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/africab.jpg') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/airtzlogo.png') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/airtzlogo.png') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/alaf.png') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/alaf.png') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/cameloil.jpg') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/cameloil.jpg') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/JAMBO-LOGO.png') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/JAMBO-LOGO.png') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/one way carriers ltd.png') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/one way carriers ltd.png') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                            <div class="swiper-slide wd-clients-carousel-item ">
                                                                <noscript><img decoding="async" class=""
                                                                        src="{{ asset('front_end/wp-content/uploads/2019/09/PMM-LOGO-.png') }}"
                                                                        width="125" height="50"
                                                                        alt="client"></noscript><img decoding="async"
                                                                    class="lazyload "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                                    data-src="{{ asset('front_end/wp-content/uploads/2019/09/PMM-LOGO-.png') }}"
                                                                    width="125" height="50" alt="client">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class='wd_empty_space' data-heightmobile='50'
                                                        data-heighttablet='50' data-heightdesktop='100'
                                                        style='height:100px'></div>
                                                    <div class="wd-heading text-left  " style="max-width: 100%">
                                                        <h2 style="margin:0;" class="title_a" data-text="Our Best">
                                                            Features
                                                        </h2>
                                                        <p style="" class="sub_title_a"> Our Best</p>
                                                        <hr class='hr_a' style=' margin: 10px;' />
                                                    </div>
                                                    <div class='wd_empty_space' data-heightmobile='20'
                                                        data-heighttablet='20' data-heightdesktop='50'
                                                        style='height:50px'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                                        <div class="text-icon__container  left ">
                                                            <div class="text-icon__icon-box "> <noscript><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2019/10/precision-icon.svg"
                                                                        alt='icon' /></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/precision-icon.svg"
                                                                    alt='icon' /></div>
                                                            <div class="text-icon__content-box">
                                                                <h4 class="text-icon__title "> Precison</h4>
                                                                <p class="text-icon__text  "> Accurately understand the
                                                                    needs of
                                                                    customers, provide efficient and cost-effective
                                                                    construction
                                                                    equipment for various customers in different operations.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                                        <div class="text-icon__container  left ">
                                                            <div class="text-icon__icon-box "> <noscript><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2019/10/study-icon.svg"
                                                                        alt='icon' /></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/study-icon.svg"
                                                                    alt='icon' /></div>
                                                            <div class="text-icon__content-box">
                                                                <h4 class="text-icon__title "> Study</h4>
                                                                <p class="text-icon__text  "> Constantly study industry
                                                                    trends,
                                                                    commit to new technologies and methods, and launch the
                                                                    latest technical construction engineering equipment.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                                        <div class="text-icon__container  left ">
                                                            <div class="text-icon__icon-box "> <noscript><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2019/10/no-delay-icon.svg"
                                                                        alt='icon' /></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/no-delay-icon.svg"
                                                                    alt='icon' /></div>
                                                            <div class="text-icon__content-box">
                                                                <h4 class="text-icon__title "> No delay</h4>
                                                                <p class="text-icon__text  "> Respond quickly to any
                                                                    questions
                                                                    and needs of customers, and collect the latest and best
                                                                    quality equipment for customers in the first time.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                                        <div class="text-icon__container  left ">
                                                            <div class="text-icon__icon-box "> <noscript><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2019/10/study-icon.svg"
                                                                        alt='icon' /></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/study-icon.svg"
                                                                    alt='icon' /></div>
                                                            <div class="text-icon__content-box">
                                                                <h4 class="text-icon__title "> Study</h4>
                                                                <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit, sed do eiusmod tempor
                                                                    incididunt ut labore et dolore. Lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur adipiscing elit.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_center">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <noscript><img decoding="async"
                                                                        class="vc_single_image-img "
                                                                        src="wp-content/uploads/2019/08/bulldozer-420x290.jpg"
                                                                        width="420" height="290" alt="bulldozer"
                                                                        title="bulldozer" /></noscript><img
                                                                    decoding="async" class="lazyload vc_single_image-img "
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20420%20290%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/08/bulldozer-420x290.jpg"
                                                                    width="420" height="290" alt="bulldozer"
                                                                    title="bulldozer" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                        class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                                        <div class="text-icon__container  left ">
                                                            <div class="text-icon__icon-box "> <noscript><img
                                                                        decoding="async"
                                                                        src="wp-content/uploads/2019/10/precision-icon.svg"
                                                                        alt='icon' /></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/precision-icon.svg"
                                                                    alt='icon' /></div>
                                                            <div class="text-icon__content-box">
                                                                <h4 class="text-icon__title "> Precison</h4>
                                                                <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit, sed do eiusmod tempor
                                                                    incididunt ut labore et dolore. Lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur adipiscing elit.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wd_empty_space" data-heightmobile="0"
                                                        data-heighttablet="50" data-heightdesktop="200"
                                                        style="height: 200px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>
                </main>
            </section>
        </div>
    @endsection
    @section('script')
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
