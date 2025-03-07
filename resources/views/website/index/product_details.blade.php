<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

    <meta property="og:url" content="index.html')}}" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="Shoes" />
    <meta property="og:description" content="Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor massa. Cum sociis natoque penatibus et magnis dis part urient." />
    <meta property="og:image" content="{{url('website/wp-content/uploads/2017/10/runing-shop-7.jpg')}}" />
    <meta charset="UTF-8" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
   
    <title>{{__("lan.product details")}}</title>
    <meta name="robots" content="max-image-preview:large" />

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png')}}",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/trackstore.qodeinteractive.com\/wp-includes\/js\/wp-emoji-release.min.js')}}?ver=6.3.4"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{url('website/wp-includes/css/dist/block-library/style.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="{{url('website/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style71f0.css')}}?ver=10.9.3" type="text/css" media="all" />
    <link rel="stylesheet" id="wc-all-blocks-style-css" href="{{url('website/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-all-blocks-style71f0.css')}}?ver=10.9.3" type="text/css" media="all" />
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="titan-adminbar-styles-css" href="{{url('website/wp-content/plugins/anti-spam/assets/css/admin-bara927.css')}}?ver=7.3.5" type="text/css" media="all" />
    <link rel="stylesheet" id="contact-form-7-css" href="{{url('website/wp-content/plugins/contact-form-7/includes/css/stylesf658.css')}}?ver=5.8.1" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-membership-style-css" href="{{url('website/wp-content/plugins/eltd-membership/assets/css/membership.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-membership-responsive-style-css" href="{{url('website/wp-content/plugins/eltd-membership/assets/css/membership-responsive.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd_toolbar_handle_toolbar_style-css" href="{{url('website/wp-content/plugins/eltd-toolbar/assets/css/toolbar11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="rabbit_css-css" href="{{url('website/_toolbar/assets/css/rbt-modules11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="photoswipe-css" href="{{url('website/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min12c8.css')}}?ver=8.1.1" type="text/css" media="all" />
    <link rel="stylesheet" id="photoswipe-default-skin-css" href="{{url('website/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min12c8.css')}}?ver=8.1.1" type="text/css" media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="yith-quick-view-css" href="{{url('website/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view65f0.css')}}?ver=1.31.0" type="text/css" media="all" />
    <style id="yith-quick-view-inline-css" type="text/css">
        #yith-quick-view-modal .yith-wcqv-main {
            background: #ffffff;
        }

        #yith-quick-view-close {
            color: #cdcdcd;
        }

        #yith-quick-view-close:hover {
            color: #ff0000;
        }
    </style>
    <link rel="stylesheet" id="trackstore-elated-default-style-css" href="{{url('website/wp-content/themes/trackstore/style11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-modules-css" href="{{url('website/wp-content/themes/trackstore/assets/css/modules.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <style id="trackstore-elated-modules-inline-css" type="text/css">
        @media only screen and (max-width: 769px) {

            .eltd-title-holder{
                height: 136px !important;
            }
            .eltd-title-wrapper{
                height: 136px !important;
            }
            .eltd-woo-single-page .eltd-single-product-content .eltd-single-product-summary{
                margin: 4px 0 0 !important;
            }
            .eltd-woo-single-page .woocommerce-tabs ul.tabs>li {
                padding: 0 0px 0 0 !important;
            }
            .eltd-woo-single-page .woocommerce-tabs ul.tabs>li a{
                padding: 13px 6px !important;
                font-size: 14px !important;
            }
            .eltd-woo-single-page .eltd-single-product-summary .eltd-single-product-title{
                margin: 15px 0 12px !important;
            }
            .woocommerce-product-gallery--with-images{
                display: flex !important; 
                justify-content: center;
                align-content: center;
            }
            .eltd-woo-single-page .eltd-single-product-summary .price * {
                font-size: 20px !important ; 
            }
        }
        @media only screen and (min-width: 769px) {
            .eltd-woo-single-page:not(.eltd-woo-single-wide-gallery).eltd-woo-single-thumb-on-left-side .eltd-single-product-content .images.woocommerce-product-gallery .woocommerce-product-gallery__image:first-child {
                left: 227px;
                width: calc(100% - 227px);
            }

            .eltd-woo-single-page:not(.eltd-woo-single-wide-gallery).eltd-woo-single-thumb-on-left-side .eltd-single-product-content .images .woocommerce-product-gallery--with-images.woocommerce-product-gallery .woocommerce-product-gallery__image:not(:first-child) {
                width: 190px;
            }
        }
    </style>
     <meta name="keywords" content="
        air conditioner,
        best air conditioner,
        portable air conditioner,
        window air conditioner,
        best portable air conditioner,
        best portable air conditioners,
        midea air conditioner,
        air conditioning,
        best air conditioner 2023,
        best portable air conditioners 2023,
        best window air conditioner,
        midea window air conditioner,
        best portable air conditioner 2023,
        portable air conditioners,
        best window air conditioners,
        u air conditioner,
        mini air conditioner,
        u shaped air conditioner,
        تكييف,
        تكييف كاريير,
        تكييف شارب,
        افضل تكييف,
        تكييف ميديا,
        تكييفات,
        افضل تكييف في مصر,
        احسن تكييف,
        تكييف صحراوي,
        سعر تكييف شارب,
        احسن تكييفات في مصر,
        تكييف كاريير اوبتى ماكس,
        تكييف فريش,
        تكييف كارير,
        تكييف كاريير 1.5 حصان,
        افضل سعر تكييف,
        تكييف تورنيدو,
        افضل تكييف موفر للكهرباء,
        تكييف كاريير optimax pro,
        سعر تكييف كاريير 1.5 حصان,
        مميزات وعيوب تكييف ميديا,
        تكييف كاريير optimax 2.25,
        تكييف ميديا ميشن,
        افضل تكييفات,
        تكييف شارب انفرتر,
        افضل تكييف انفرتر,
        تكييف مركزي,تكييف,
        التكييف المركزي,
        مؤسسة تكييف مركزي,
        مكييف مركزي,
        تكبيف مركزي,
        مؤسسة تكييف,
        تكييف صحراوي مركزي,
        مركزي,
        تعلم التكييف المركزي,
        تكييف شارب,
        التكييف,
        المركزي,
        للتكييف,
        التكييف الصحراوي المركزي,
        صرف الطاقة في التكييف المركزي,
        افضل قناة لتعلم التكييف المركزي,
        دكت التكييف,
        هندسة التكييف,
        تكييف مخفي,
        تكييف منفصل,
        مقاولات التكييف,
        افضل تكييف,
        تكييف شباك,
        تكييف اسبلت,
        مركزى,
        تكييف صحراوي,
        تكييف اسبليت,
        كنترول مركزي,
        افضل تكييف 2021,
        تكييف صحراوي جاك
    ">
    <link rel="stylesheet" id="eltd-font_awesome-css" href="{{url('website/wp-content/themes/trackstore/assets/css/font-awesome/css/font-awesome.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-font_elegant-css" href="{{url('website/wp-content/themes/trackstore/assets/css/elegant-icons/style.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-ion_icons-css" href="{{url('website/wp-content/themes/trackstore/assets/css/ion-icons/css/ionicons.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-linea_icons-css" href="{{url('website/wp-content/themes/trackstore/assets/css/linea-icons/style11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-linear_icons-css" href="{{url('website/wp-content/themes/trackstore/assets/css/linear-icons/style11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-simple_line_icons-css" href="{{url('website/wp-content/themes/trackstore/assets/css/simple-line-icons/simple-line-icons11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="eltd-dripicons-css" href="{{url('website/wp-content/themes/trackstore/assets/css/dripicons/dripicons11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="mediaelement-css" href="{{url('website/wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css')}}?ver=4.2.17" type="text/css" media="all" />
    <link rel="stylesheet" id="wp-mediaelement-css" href="{{url('website/wp-includes/js/mediaelement/wp-mediaelement.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-woo-css" href="{{url('website/wp-content/themes/trackstore/assets/css/woocommerce.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <style id="trackstore-elated-woo-inline-css" type="text/css">
        /* generated in /home/qodeinteractive/trackstore/public_html/wp-content/themes/trackstore/framework/admin/options/general/map.php trackstore_elated_page_general_style function */
        .postid-726.eltd-boxed .eltd-wrapper {
            background-attachment: fixed;
        }

        /* generated in /home/qodeinteractive/trackstore/public_html/wp-content/themes/trackstore/framework/modules/header/helper-functions.php trackstore_elated_header_area_style function */
        .postid-111 .eltd-page-header .eltd-sticky-header .eltd-sticky-holder {
            border-color: ;
        }

        /* generated in /home/qodeinteractive/trackstore/public_html/wp-content/themes/trackstore/functions.php trackstore_elated_content_padding_top function */
        .postid-111 .eltd-content .eltd-content-inner>.eltd-container>.eltd-container-inner,
        .postid-111 .eltd-content .eltd-content-inner>.eltd-full-width>.eltd-full-width-inner {
            padding-top: 0px;
        }
    </style>
    <link rel="stylesheet" id="trackstore-elated-woo-responsive-css" href="{{url('website/wp-content/themes/trackstore/assets/css/woocommerce-responsive.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-style-dynamic-css" href="{{url('website/wp-content/themes/trackstore/assets/css/style_dynamic5e14.css')}}?ver=1669717059" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-modules-responsive-css" href="{{url('website/wp-content/themes/trackstore/assets/css/modules-responsive.min11c9.css')}}?ver=6.3.4" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-style-dynamic-responsive-css" href="{{url('website/wp-content/themes/trackstore/assets/css/style_dynamic_responsive5e14.css')}}?ver=1669717059" type="text/css" media="all" />
    <link rel="stylesheet" id="trackstore-elated-google-fonts-css" href="https://fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C700%7CRoboto+Condensed%3A300%2C400%2C700&amp;subset=latin-ext&amp;ver=1.0.0" type="text/css" media="all" />
    <link rel="stylesheet" id="js_composer_front-css" href="{{url('website/wp-content/plugins/js_composer/assets/css/js_composer.min8717.css')}}?ver=7.0" type="text/css" media="all" />
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/jquery.min3088.js')}}?ver=3.7.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/jquery-migrate.min5589.js')}}?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{url('website/apis.google.com/js/platform.js')}}" id="eltd-membership-google-plus-api-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/revslider/public/assets/js/rbtools.min4261.js')}}?ver=6.6.16" async id="tp-tools-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/revslider/public/assets/js/rs6.min4261.js')}}?ver=6.6.16" async id="revmin-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minf111.js')}}?ver=2.7.0-wc.8.1.1" id="jquery-blockui-js"></script>
    

    
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '410874774844747');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=410874774844747&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->

    <link rel="icon" href="{{url('images/logos/black_logo.png')}}" sizes="32x32" />
    <link rel="icon" href="{{url('images/logos/black_logo.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{url('images/logos/black_logo.png')}}" />
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/trackstore.qodeinteractive.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min12c8.js')}}?ver=8.1.1" id="wc-add-to-cart-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart8717.js')}}?ver=7.0" id="vc_woocommerce-add-to-cart-js-js"></script>
    <link rel="alternate" type="application/json" href="{{url('website/wp-json/wp/v2/product/111.js')}}on" />




    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>

</head>

<body class="product-template-default single single-product postid-111 theme-trackstore eltd-core-1.2.5 eltd-social-login-1.2 eltd-toolbar-1.0 woocommerce woocommerce-page woocommerce-no-js trackstore-ver-1.8 eltd-grid-1300 eltd-light-header eltd-enable-header-style-on-scroll eltd-sticky-header-on-scroll-down-up eltd-dropdown-animate-height eltd-header-standard eltd-menu-area-shadow-disable eltd-menu-area-in-grid-shadow-disable eltd-menu-area-border-disable eltd-menu-area-in-grid-border-disable eltd-logo-area-border-disable eltd-logo-area-in-grid-border-disable eltd-header-vertical-shadow-disable eltd-header-vertical-border-disable eltd-side-menu-slide-from-right eltd-woocommerce-page eltd-woo-single-page eltd-woocommerce-columns-3 eltd-woo-normal-space eltd-woo-pl-info-below-image eltd-woo-single-standard eltd-woo-single-thumb-on-left-side eltd-woo-single-has-photo-swipe eltd-default-mobile-header eltd-sticky-up-mobile-header eltd-fullscreen-search eltd-search-fade wpb-js-composer js-comp-ver-7.0 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
  

    {{            !$images = explode("_", $product->images);                }}


{{--     
    <div class="photo" style="position: fixed;width: 60%;height: 60%;z-index: 200000;left: 20%;top: 20%;    display: flex; justify-content: center; align-items:center; border-radius: 10px; backdrop-filter: blur(8px);     background: #0000002e; ">
        <img src="{{url("images/product/$images[0]")}}" style="object-fit: contain; height: 100%; width: 100%;" alt="">
    </div> --}}


    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
          <div class="pswp__item" style="display: block; transform: translate3d(-2134px, 0px, 0px);">
            <div class="pswp__zoom-wrap" style="transform: translate3d(653px, 180px, 0px) scale(0.688863);">
                <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank" style="width: 871px; height: 871px; display: none;"></div>
                <img class="pswp__img" src="" alt="d" style="width: 871px; height: 871px;object-fit:contain"></div></div>
          <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(517px, 44px, 0px) scale(1);">
            <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank" style="width: 871px; height: 871px; display: none;"></div>
            <img class="pswp__img" src="{{url("images/product/$images[0]")}}" alt="f" style="display: block; width: 871px; height: 871px;object-fit:contain"></div></div>
          <div class="pswp__item" style="display: block; transform: translate3d(2134px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(653px, 180px, 0px) scale(0.688863);">
            <div class="pswp__img pswp__img--placeholder pswp__img--placeholder--blank" style="width: 871px; height: 871px; display: none;"></div>
            <img class="pswp__img" src="" alt="d" style="width: 871px; height: 871px;object-fit:contain"></div></div>
        </div>
        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter">1 / 4</div>
            <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share pswp__element--disabled" aria-label="Share"></button>
            <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap pswp__element--disabled">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center">runing-shop-7</div>
          </div>
        </div>
      </div>
    </div>

    <div class="eltd-wrapper">
        <div class="eltd-wrapper-inner">
            @include("website.layouts.header")



            <div class="eltd-content">
                <div class="eltd-content-inner">
                    <div class="eltd-title-holder eltd-standard-with-breadcrumbs-type" style="height: 240px" data-height="240">
                        <div class="eltd-title-wrapper" style="height: 240px">
                            <div class="eltd-title-inner">
                                <div class="eltd-grid">
                                    <div class="eltd-title-info">
                                        <h3 class="eltd-page-title entry-title">{{__("lan.product details")}}</h3>
                                    </div>
                                    <div class="eltd-breadcrumbs-info">
                                        <div itemprop="breadcrumb" class="eltd-breadcrumbs "><a itemprop="url" href="{{route('index')}}">{{__("lan.home")}}</a><span class="eltd-delimiter">&nbsp; / &nbsp;</span><a itemprop="url" href="{{route('shop')}}">{{__("lan.Shop")}}</a><span class="eltd-delimiter">&nbsp; / &nbsp;</span><span class="eltd-current">{{__("lan.product details")}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="eltd-container">
                        <div class="eltd-container-inner clearfix">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div id="product-111" class="product type-product post-111 status-publish first instock product_cat-running product_tag-equipment product_tag-running product_tag-sport has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                <div class="eltd-single-product-content">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                                        <div class="woocommerce-product-gallery__wrapper" style="width:100%">
                                            


                                            <div data-thumb="{{url("images/product/$images[0]")}}" style="padding: 0px; " data-thumb-alt="f" class="woocommerce-product-gallery__image multi_photo">

                                                <link rel="stylesheet" href="{{url('website/swiper.css')}}" />
                                                <style>
                                                    div.swiper-button-next, div.swiper-button-prev {
                                                        top: 50%
                                                    }
                                                </style>
                                                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                                                <div class="swiper mySwiper">
                                                    <div class="swiper-wrapper">
                                                        @if(isset($images[0]))
                                                            <div class="swiper-slide slide_1">
                                                            <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[0]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                                data-src="{{url("images/product/$images[0]")}}" data-large_image="{{url("images/product/$images[0]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                                srcset="{{url("images/product/$images[0]")}} 606w, {{url("images/product/$images[0]")}} 150w, 
                                                                {{url("images/product/$images[0]")}} 300w, {{url("images/product/$images[0]")}} 768w, 
                                                                {{url("images/product/$images[0]")}} 1024w, {{url("images/product/$images[0]")}} 550w, {{url("images/product/$images[0]")}} 100w, {{url("images/product/$images[0]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                            </div>
                                                        @endif
                                                        @if(isset($images[1]))
                                                        <div class="swiper-slide slide_2">
                                                          <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[1]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                             data-src="{{url("images/product/$images[1]")}}" data-large_image="{{url("images/product/$images[1]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                             srcset="{{url("images/product/$images[1]")}} 606w, {{url("images/product/$images[1]")}} 150w, 
                                                             {{url("images/product/$images[1]")}} 300w, {{url("images/product/$images[1]")}} 768w, 
                                                             {{url("images/product/$images[1]")}} 1024w, {{url("images/product/$images[1]")}} 550w, {{url("images/product/$images[1]")}} 100w, {{url("images/product/$images[1]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </div>

                                                        @endif
                                                        @if(isset($images[2]))
                                                        <div class="swiper-slide slide_3">
                                                          <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[2]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                             data-src="{{url("images/product/$images[2]")}}" data-large_image="{{url("images/product/$images[2]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                             srcset="{{url("images/product/$images[2]")}} 606w, {{url("images/product/$images[2]")}} 150w, 
                                                             {{url("images/product/$images[2]")}} 300w, {{url("images/product/$images[2]")}} 768w, 
                                                             {{url("images/product/$images[2]")}} 1024w, {{url("images/product/$images[2]")}} 550w, {{url("images/product/$images[2]")}} 100w, {{url("images/product/$images[2]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </div>

                                                        @endif
                                                        @if(isset($images[3]))
                                                        <div class="swiper-slide slide_4">
                                                          <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[3]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                             data-src="{{url("images/product/$images[3]")}}" data-large_image="{{url("images/product/$images[3]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                             srcset="{{url("images/product/$images[3]")}} 606w, {{url("images/product/$images[3]")}} 150w, 
                                                             {{url("images/product/$images[3]")}} 300w, {{url("images/product/$images[3]")}} 768w, 
                                                             {{url("images/product/$images[3]")}} 1024w, {{url("images/product/$images[3]")}} 550w, {{url("images/product/$images[3]")}} 100w, {{url("images/product/$images[3]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </div>

                                                        @endif
                                                        @if(isset($images[4]))

                                                        <div class="swiper-slide slide_5">
                                                          <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[4]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                             data-src="{{url("images/product/$images[4]")}}" data-large_image="{{url("images/product/$images[4]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                             srcset="{{url("images/product/$images[4]")}} 606w, {{url("images/product/$images[4]")}} 150w, 
                                                             {{url("images/product/$images[4]")}} 300w, {{url("images/product/$images[4]")}} 768w, 
                                                             {{url("images/product/$images[4]")}} 1024w, {{url("images/product/$images[4]")}} 550w, {{url("images/product/$images[4]")}} 100w, {{url("images/product/$images[4]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </div>
                                                        @endif
                                                        @if(isset($images[5]))

                                                        <div class="swiper-slide slide_5">
                                                          <img style="object-fit: cover; width:606px; height: 416px; " src="{{url("images/product/$images[5]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                             data-src="{{url("images/product/$images[5]")}}" data-large_image="{{url("images/product/$images[5]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                             srcset="{{url("images/product/$images[5]")}} 606w, {{url("images/product/$images[5]")}} 150w, 
                                                             {{url("images/product/$images[5]")}} 300w, {{url("images/product/$images[5]")}} 768w, 
                                                             {{url("images/product/$images[5]")}} 1024w, {{url("images/product/$images[5]")}} 550w, {{url("images/product/$images[5]")}} 100w, {{url("images/product/$images[4]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                                
                                                
                                                <script >
                                                    let swiper = new Swiper(".mySwiper", {
                                                        pagination: {
                                                            el: ".swiper-pagination",
                                                        },
                                                    });
                                                </script>
                                                
                                            </div>

                                            <div class="single_photo">
                                                @if(isset($images[0]))
                                               
    
                                                    <div data-thumb="{{url("images/product/$images[0]")}}" data-thumb-alt="f" class="woocommerce-product-gallery__image">
                                                        <a href="{{url("images/product/$images[0]")}}">
                                                          <img style="object-fit: contain; width:606px; height:606px; " src="{{url("images/product/$images[0]")}}" class="wp-post-image" alt="f" decoding="async" title="runing-shop-7" data-caption=""
                                                           data-src="{{url("images/product/$images[0]")}}" data-large_image="{{url("images/product/$images[0]")}}" data-large_image_width="1100" data-large_image_height="1100" 
                                                           srcset="{{url("images/product/$images[0]")}} 606w, {{url("images/product/$images[0]")}} 150w, 
                                                           {{url("images/product/$images[0]")}} 300w, {{url("images/product/$images[0]")}} 768w, 
                                                           {{url("images/product/$images[0]")}} 1024w, {{url("images/product/$images[0]")}} 550w, {{url("images/product/$images[0]")}} 100w, {{url("images/product/$images[0]")}} 1100w" sizes="(max-width: 606px) 100vw, 606px" loading="eager">
                                                        </a>
                                                    </div>
    
                                                @endif
    
    
                                                @if(isset($images[1]))
                                                   
                                                    <div data-thumb="{{url("images/product/$images[1]")}}" class="woocommerce-product-gallery__image"><a href="{{url("images/product/$images[1]")}}">
                                                        <img style="width:100%; height:100%; object-fit:contain;" src="{{url("images/product/$images[1]")}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" 
                                                        alt="d" decoding="async" title="running-product-2-img-2" data-caption="" data-src="{{url("images/product/$images[1]")}}"
                                                         data-large_image="{{url("images/product/$images[1]")}}" data-large_image_width="600" data-large_image_height="600" 
                                                         srcset="{{url("images/product/$images[1]")}} 300w, {{url("images/product/$images[1]")}}
                                                          150w, {{url("images/product/$images[1]")}} 550w,
                                                           {{url("images/product/$images[1]")}} 100w,
                                                            {{url("images/product/$images[1]")}} 600w" sizes="(max-width: 300px) 100vw, 300px" 
                                                            loading="eager"></a>
                                                    </div>
                                                @endif
    
    
                                                @if(isset($images[2]))
                                                   
                                                    <div data-thumb="{{url("images/product/$images[2]")}}" 
                                                    class="woocommerce-product-gallery__image"><a href="{{url("images/product/$images[2]")}}">
                                                        <img style="width:100%; height:100%; object-fit:contain;" src="{{url("images/product/$images[2]")}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" 
                                                        alt="d" decoding="async" title="running-product-2-img-2" data-caption="" data-src="{{url("images/product/$images[2]")}}"
                                                         data-large_image="{{url("images/product/$images[2]")}}" data-large_image_width="600" data-large_image_height="600" 
                                                         srcset="{{url("images/product/$images[2]")}} 300w, {{url("images/product/$images[2]")}}
                                                          150w, {{url("images/product/$images[2]")}} 550w,
                                                           {{url("images/product/$images[2]")}} 100w,
                                                            {{url("images/product/$images[2]")}} 600w" sizes="(max-width: 300px) 100vw, 300px" 
                                                            loading="eager"></a></div>
                                                @endif
    
    
                                                @if(isset($images[3]))
                                                   
                                                    <div data-thumb="{{url("images/product/$images[3]")}}" 
                                                    class="woocommerce-product-gallery__image"><a href="{{url("images/product/$images[3]")}}">
                                                        <img style="width:100%; height:100%; object-fit:contain;" src="{{url("images/product/$images[3]")}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" 
                                                        alt="d" decoding="async" title="running-product-2-img-2" data-caption="" data-src="{{url("images/product/$images[3]")}}"
                                                         data-large_image="{{url("images/product/$images[3]")}}" data-large_image_width="600" data-large_image_height="600" 
                                                         srcset="{{url("images/product/$images[3]")}} 300w, {{url("images/product/$images[3]")}}
                                                          150w, {{url("images/product/$images[3]")}} 550w,
                                                           {{url("images/product/$images[3]")}} 100w,
                                                            {{url("images/product/$images[3]")}} 600w" sizes="(max-width: 300px) 100vw, 300px" 
                                                            loading="eager"></a></div>
                                                @endif

                                            </div>



                                            @if($product->quantity == "0")

                                                <span class="eltd-out-of-stock">
                                                    {{__("lan.OUT OF STOCK")}}
                                                </span>

                                            @elseif($product->discount != "" && $product->discount >= 1)

                                                <span class="eltd-onsale">
                                                    {{$product->discount}}
                                                </span>

                                            @endif


                                        </div>
                                    </div>
                                    <div class="eltd-single-product-summary">
                                        <div class="summary entry-summary">


                                            <h2 itemprop="name" class="eltd-single-product-title">
                                                {{$product->product_name}}
                                            </h2>
                                           
                                            <p class="price">
                                                
                                                <ins>
													<span class="woocommerce-Price-amount amount">
														<bdi >
															<span class="woocommerce-Price-currencySymbol">
																EGP
															</span>{{$product->product_price}} 
														</bdi>
													</span>
												</ins>


                                                @if($product->discount >= 1 )
                                                    <del aria-hidden="true" style="color:red">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi style="color:black">
                                                                <span class="woocommerce-Price-currencySymbol">
                                                                    EGP
                                                                </span>
                                                                <?php
                                                                    if(strpos($product->discount, "%") !== false){
                                                                        $discount_number = str_ireplace("%", "", $product->discount);
                                                                        $per = (100 - $discount_number) / 100 ; 
                                                                        echo $product->product_price / $per ; 


                                                                    }else{
                                                                        echo $product->discount + $product->product_price ; 
                                                                    }
                                                                ?>
                                                            </bdi>
                                                        </span>
                                                    </del> 
                                                @endif
												
											</p>
                                           
                                            <div class="woocommerce-product-details__short-description">
                                                <p >
                                                    {{!$desc = "desc_" . Lang::locale();}}
                                                    <?= substr(html_entity_decode($product->$desc), 0, 190)?>
                                                </p>
                                            </div>
                                            

                                            @if($product->quantity >= 1)
                                                
                                                <span class="sku_wrapper" style="    display: flex;justify-content: flex-start;align-items: center; margin-top:20px ">
                                                    <div class="ani" style=""></div>
                                                    <span class="sku" style="font-weight: bold;">In stock, ready to ship</span>

                                                    <style>
                                                        .ani{
                                                            position: relative;
                                                            width: 7px;
                                                            height: 7px;
                                                            background: #26d726;
                                                            margin-right: 8px;
                                                            border-radius: 50%;
                                                            box-shadow: 0px 0px 6px 2px #26d726;
                                                            animation: ani infinite 1s ; 
                                                        }
                                                        @keyframes ani {
                                                            from{
                                                                box-shadow: 0px 0px 6px 2px #007200;
                                                            }
                                                            to{
                                                                box-shadow: 0px 0px 6px 2px #26d726;
                                                            }
                                                        }
                                                    </style>
                                                </span>

                                            @endif

                                            <div class="product_meta" > 
                                                <span class="sku_wrapper" style="    display: flex;"><img style="width: 24px;margin-right: 16px;object-fit: contain;" src="{{url('images/icons/checkbox_3363959.png')}}" alt="">
                                                     <span class="sku">Order before 5 PM ship next day.</span></span>
                                            </div>
                                            <div class="product_meta" > 
                                                <span class="sku_wrapper" style="    display: flex;"><img style="width: 24px;margin-right: 16px;object-fit: contain;" src="{{url('images/icons/tracking_10265645.png')}}" alt=""> 
                                                    <span class="sku">Check Delivery for more info</span></span>
                                            </div>






                                            <form class="variations_form cart"  method="post" enctype="multipart/form-data"  >
                                             
                                                <div style="display: flex;">
                                                    @foreach($options as $option)
                                                        @if($option->option_key == 'color' || $option->option_key == "Color")
                                                            @if($option->value == "white" || $option->value == "White")
                                                                <a href="{{route('product', ['id' => 99])}}" style="margin: 0px 5px">
                                                                    <div style="background: {{$option->value}};width: 25px;height: 25px;border-radius: 50%;cursor: pointer;box-shadow: 0px 0px 10px 0px black;"> </div>
                                                                </a> 
                                                            @elseif($option->value == "black" || $option->value == "Black")
                                                                <a href="{{route('product', ['id' => 98])}}" style="margin: 0px 5px">
                                                                    <div style="background: {{$option->value}};width: 25px;height: 25px;border-radius: 50%;cursor: pointer;box-shadow: 0px 0px 10px 0px black;"> </div>
                                                                </a>
                                                            @else 
                                                                <a style="margin: 0px 5px">
                                                                    <div style="background: {{$option->value}};width: 25px;height: 25px;border-radius: 50%;cursor: pointer;box-shadow: 0px 0px 10px 0px black;"> </div>
                                                                </a>
                                                            @endif
                                                        @endif
                                                   
                                                    @endforeach
                                                </div>

                                                   
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"></div>
                                                    <div class="woocommerce-variation-add-to-cart variations_button" style="display: flex;justify-content: flex-start;align-items: center;">
                                                        <div class="eltd-quantity-buttons quantity">
                                                            <label class="screen-reader-text" for="quantity_6659f3c62ed21{{$product->product_id}}"></label>
                                                            <span class="eltd-quantity-minus fa fa-angle-down"></span>
                                                            <input type="number" id="quantity_6659f3c62ed21{{$product->product_id}}" class="input-text qty text eltd-quantity-input" name="quantity" value="1" aria-label="Product quantity" size="4" data-min="1" data-max="50" data-step="1" placeholder inputmode="numeric" autocomplete="off" />
                                                            <span class="eltd-quantity-plus fa fa-angle-up"></span>
                                                        </div>
                                                        @if($product->quantity >= 1)
                                                            <button  type="button" style=" font-family: 'Roboto Condensed', sans-serif;
                                                                position: relative;
                                                                display: inline-block;
                                                                vertical-align: middle;
                                                                width: auto;
                                                                outline: 0;
                                                                font-size: 16px;
                                                                line-height: 2em;
                                                                letter-spacing: -.4px;
                                                                font-weight: 600;
                                                                text-transform: uppercase;
                                                                -webkit-box-sizing: border-box;
                                                                box-sizing: border-box;
                                                                margin: 0;
                                                                -webkit-transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                                                                transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                                                                padding: 9px 57px;
                                                                color: white;
                                                                background-color: black;
                                                                border: 1px solid transparent;
                                                                white-space: nowrap;
                                                                cursor: pointer;
                                                                z-index: 3;
                                                                border-radius: 0;
                                                                float: right" onclick="add_cart('{{$product->product_id}}')" class=" button alt">{{__("lan.add cart")}}</button>
                                                        @else
                                                            <button disabled type="button" style=" font-family: 'Roboto Condensed', sans-serif;
                                                                position: relative;
                                                                display: inline-block;
                                                                vertical-align: middle;
                                                                width: auto;
                                                                outline: 0;
                                                                font-size: 16px;
                                                                line-height: 2em;
                                                                letter-spacing: -.4px;
                                                                font-weight: 600;
                                                                text-transform: uppercase;
                                                                -webkit-box-sizing: border-box;
                                                                box-sizing: border-box;
                                                                margin: 0;
                                                                -webkit-transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                                                                transition: color .2s ease-in-out, background-color .2s ease-in-out, border-color .2s ease-in-out;
                                                                padding: 9px 57px;
                                                                color: white;
                                                                background-color: #484848;
                                                                border: 1px solid transparent;
                                                                white-space: nowrap;
                                                                cursor: no-drop;
                                                                z-index: 3;
                                                                width: 50% !important;
                                                                border-radius: 0;
                                                                float: right" class=" button alt">{{__("lan.OUT OF STOCK")}}</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-111  no-icon wishlist-fragment on-first-load" data-fragment-ref="111" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:111,&quot;parent_product_id&quot;:111,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="woocommerce-tabs wc-tabs-wrapper">
                                    <ul class="tabs wc-tabs" role="tablist">
                                        <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                            <a href="#tab-description">
                                                {{__("lan.description")}}
                                            </a>
                                        </li>
                                        <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                            <a href="#tab-additional_information">
                                                {{__("lan.delivery")}} 
                                            </a>
                                        </li>
                                        <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                            <a href="#tab-reviews">
                                                {{__("lan.Reviews")}} ({{count($review_product)}}) </a>
                                        </li>
                                        {{-- <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews2">
                                            <a href="#tab-reviews2">
                                                3D </a>
                                        </li> --}}
                                    </ul>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                        <h2>{{__("lan.description")}}</h2>
                                        <section class="wpb-content-wrapper">
                                            <div class="vc_row wpb_row vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p >
                                                                        <?= html_entity_decode($product->$desc)?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                                        <h2>{{__("lan.ADDITIONAL INFORMATION")}} </h2>
                                        <p>
                                        @if(Lang::locale() == 'en')
                                                <p><br></p>
                                                
                                                <p>Our fulfillment partners work diligently to ensure your orders reach you promptly. </p>
                                                <p>Once you place an order, you will receive an email confirmation as we
                                                    begin processing it, followed by updates on its status.</p>
                                                    <p><strong>Orders placed before 5 PM are typically processed on the same day.</strong></p>
                                                    <p>Delivery Times for Orders Placed Before 5 PM:</p>
                                                    <p><strong>Greater Cairo Area</strong>: 1-2 business days</p>
                                                    <p><strong>Rest of Egypt</strong>: 2-4 business days</p>
                                             
                                        @else
                                                    
                                                    
                                                    <p><br></p>
                                                <p>يعمل شركاء التنفيذ لدينا بجد لضمان وصول طلباتكم إليكم بسرعة. بمجرد أن تقوموا بوضع الطلب، ستتلقون رسالة تأكيد عبر البريد الإلكتروني عندما نبدأ في</p>
                                                <p>معالجته، متبوعًا بتحديثات حول حالته.</p>
                                                <p><strong>يتم عادةً معالجة الطلبات التي يتم تقديمها قبل الساعة 5 مساءً في نفس اليوم.</strong></p>
                                                <p>أوقات التوصيل للطلبات المقدمة قبل الساعة 5 مساءً:</p>
                                                <p><strong>منطقة القاهرة الكبرى</strong>: 1-2 يوم عمل</p>
                                                <p><strong>باقي أنحاء مصر</strong>: 2-4 أيام عمل</p>
                                             
                                            @endif
                                        </p>
                                    </div>


                                    <style>
                                        .rating:not(:checked) > input {
                                        position: absolute;
                                        appearance: none;
                                        }
                                        .rating:not(:checked) > label {
                                        float: right;
                                        cursor: pointer;
                                        font-size: 17px;
                                        color: #666;
                                        }
                                        .rating:not(:checked) > label:before {
                                            content: '★';
                                        }
                                        .rating > input:checked + label:hover,
                                        .rating > input:checked + label:hover ~ label,
                                        .rating > input:checked ~ label:hover,
                                        .rating > input:checked ~ label:hover ~ label,
                                        .rating > label:hover ~ input:checked ~ label {
                                        color: #e58e09;
                                        }
                                        .rating:not(:checked) > label:hover,
                                        .rating:not(:checked) > label:hover ~ label {
                                        color: #ff9e0b;
                                        }
                                        .rating > input:checked ~ label {
                                        color: #ffa723;
                                        }




                                    </style>


                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div id="reviews" class="woocommerce-Reviews">


                                            
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">
                                                    ({{count($review_product)}}) {{__("lan.REVIEW")}} <span>{{$product->product_name}}</span> </h2>
                                                <ol class="commentlist">
                                                    @foreach($review_product as $review)
                                                        <li class="comment even thread-even depth-1" id="li-comment-{{$review->id}}">
                                                            <div id="comment-{{$review->id}}" class="comment_container">
                                                                <img alt src="{{url("images/profile/$review->image")}}" 
                                                                srcset="{{url("images/profile/$review->image")}} 2x" class="avatar avatar-60 photo" height="60" width="60" decoding="async" />
                                                                <div class="comment-text">


                                                                    <p class="meta">
                                                                        <strong class="woocommerce-review__author">{{$review->username}} </strong>
                                                                        <span class="woocommerce-review__dash">&ndash;</span> <div class="woocommerce-review__published-date" >{{$review->created_at}}</div>
                                                                    </p>

                                                                    <div class="rating" style="display: flex; flex-direction: row-reverse; justify-content: flex-end;">
                                                                        @if($review->rating == '1')
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                        @elseif($review->rating == '2')
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                        @elseif($review->rating == '3')
                                                                                <label title="text" ></label>
                                                                                <label title="text" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                        @elseif($review->rating == '4')
                                                                                <label title="text" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                        @elseif($review->rating == '5')
                                                                                <label title="text" style="color: #ff9e0b;" for="star5"></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                                <label title="text" style="color: #ff9e0b;" ></label>
                                                                        @endif
                                                                    </div>


                                                                    
                                                                    <div class="description">
                                                                        <p>{{$review->comment}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>


                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title">{{__("lan.Add a review")}} <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html')}}#respond" style="display:none;">Cancel reply</a></small></span>
                                                        
                                                        
                                                        <form  method="post" id="commentform" class="">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{$product->product_id}}">


                                                            <div class="rating" style="display: flex; flex-direction: row-reverse; justify-content: flex-end;">
                                                                <input style="display: none;" value="5" name="rating" id="star5" type="radio" checked=""> <label title="text" for="star5"></label>
                                                                <input style="display: none;" value="4" name="rating" id="star4" type="radio"> <label title="text" for="star4"></label>
                                                                <input style="display: none;" value="3" name="rating" id="star3" type="radio" > <label title="text" for="star3"></label>
                                                                <input style="display: none;" value="2" name="rating" id="star2" type="radio"> <label title="text" for="star2"></label>
                                                                <input style="display: none;" value="1" name="rating" id="star1" type="radio" > <label title="text" for="star1"></label>
                                                            </div>
                                                         


                                                            <p class="comment-form-comment">
                                                                <label for="comment">{{__("lan.Your review")}}&nbsp;
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                            </p>


                                                            @if($guest == '0')
                                                                <p class="comment-form-email">
                                                                    <label for="email">{{__("lan.email")}}&nbsp;
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <input id="email" disabled type="email" value="{{$user->email}}" size="30" required />
                                                                </p>
                                                            @endif




                                                            <p class="form-submit">
                                                                <input type="submit" id="submit" onclick="set_comment(this)" class="submit" value="{{__('lan.Submit')}}" /> 
                                                            </p>
                                                            
                                                        </form>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                    {{-- <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews2" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div id="reviews" class="woocommerce-Reviews">

      

                                            <!-- Use it like any other HTML element -->
                                            <model-viewer style="      box-shadow: 0px 0px 18px -10px black; border-radius: 10px;  width: 100%; height: 642px;" alt="Neil Armstrong's Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum" 
                                            src="{{url('images/sockswhite.glb')}}" ar environment-image="{{url('images/HQ-2-3.hdr')}}"
                                            poster="{{url('images/product/1721401283.png')}}" shadow-intensity="1"
                                            camera-controls touch-action="pan-y"></model-viewer>
        
                                          
                                        </div>
                                    </div> --}}










                                </div>







                                {{-- <section class="related products">
                                    <h2>{{__("lan.RELATED PRODUCTS")}}</h2>
                                    <ul class="products columns-4" id="related_products">
                                       
                                    </ul>
                                </section> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include("website.layouts.footer")
        </div>
    </div>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    @include("website.Auth.login")


    <div id="yith-quick-view-modal">
        <div class="yith-quick-view-overlay"></div>
        <div class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
                <div class="yith-wcqv-head">
                    <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                </div>
                <div id="yith-quick-view-content" class="woocommerce single-product"></div>
            </div>
        </div>
    </div>


    <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org\/",
            "@type": "Product",
            "@id": "https:\/\/trackstore.qodeinteractive.com\/product\/shoes\/#product",
            "name": "Shoes",
            "url": "https:\/\/trackstore.qodeinteractive.com\/product\/shoes\/",
            "description": "Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor massa. Cum sociis natoque penatibus et magnis dis part urient.",
            "image": "https:\/\/trackstore.qodeinteractive.com\/wp-content\/uploads\/2017\/10\/runing-shop-7.jpg",
            "sku": "70",
            "offers": [{
                "@type": "Offer",
                "price": "50.00",
                "priceValidUntil": "2025-12-31",
                "priceSpecification": {
                    "price": "50.00",
                    "priceCurrency": "USD",
                    "valueAddedTaxIncluded": "false"
                },
                "priceCurrency": "USD",
                "availability": "http:\/\/schema.org\/InStock",
                "url": "https:\/\/trackstore.qodeinteractive.com\/product\/shoes\/",
                "seller": {
                    "@type": "Organization",
                    "name": "Trackstore",
                    "url": "https:\/\/trackstore.qodeinteractive.com"
                }
            }],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5.00",
                "reviewCount": 1
            },
            "review": [{
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "bestRating": "5",
                    "ratingValue": "5",
                    "worstRating": "1"
                },
                "author": {
                    "@type": "Person",
                    "name": "Anny Nelson"
                },
                "reviewBody": "Lovely colors",
                "datePublished": "2017-10-09T12:40:07+00:00"
            }]
        }
    </script>

    



    <script>

        function open_photo (ele){
            console.log(ele.getAttribute("data-thumb"));
            //Custom Image
            Swal.fire({
                title: "",
                text: "",
                imageUrl: ele.getAttribute("data-thumb"),
            });
        }


        function related_products (){
            const div = document.getElementById("related_products") ; 
            $.ajax({
                type:"post",
                url: "{{   route('related_products')   }}",
                data: {
                    "_token" : "{{csrf_token()}}"
                },            
                success: function (data){
                    div.innerHTML = data ;
                },
            });
        }
        function set_comment (ele){
            let email = document.getElementById("email");
            let comment = document.getElementById("comment");
            if(email.value != "" &&  comment.value != "" ){
                let data_form = new FormData($("#commentform")[0]);
                ele.setAttribute("disabled", "")

                $.ajax({
                    type:"post",
                    enctype : "multipart/form-data",
                    url: "{{   route('set_comment')   }}",
                    data: data_form,
                    contentType: false,
                    cache: false ,
                    processData: false,
                    success: function (data){
                        ele.removeAttribute("disabled");
                        console.log(data);
                        if(data.status_code == 200){
                            msg(data.msg, "Success", "success");
                            setTimeout(() => {
                                location.reload(); 
                            }, 1800);
                        }else{
                            msg(data.msg, "error", "error");
                        }
                    },
                });
            }else{
                msg("email and comment is required", "error", "error");
            }
        }
        function add_cart (id){
            const input = document.getElementById("quantity_6659f3c62ed21" + id) ; 

            $.ajax({
                type:"post",
                url: "{{   route('add_cart')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                    "product_id" : id,
                    "value" : input.value
                },            
                success: function (data){
                    if(data.status_code == 200){
                        msg(data.msg , "Cart product", 'success');
                        cart_shop(); 
                    }else{
                        msg(data.msg , "Cart product", 'error');
                    }
                },
            });
   
        }
        // related_products(); 
    </script>


    <link rel="stylesheet" id="rs-plugin-settings-css" href="{{url('website/wp-content/plugins/revslider/public/assets/css/rs64261.css')}}?ver=6.6.16" type="text/css" media="all" />
    <style id="rs-plugin-settings-inline-css" type="text/css">
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js')}}?ver=1.2.0" id="jquery-selectBox-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js')}}?ver=3.1.6" id="prettyPhoto-js"></script>
    <script type="text/javascript" id="jquery-yith-wcwl-js-extra">
        /* <![CDATA[ */
        var yith_wcwl_l10n = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "yith_wcwl_button_position": "",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "enable_ajax_loading": "",
            "ajax_loader_url": "https:\/\/trackstore.qodeinteractive.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
            "remove_from_wishlist_after_add_to_cart": "1",
            "is_wishlist_responsive": "1",
            "time_to_close_prettyphoto": "3000",
            "fragments_index_glue": ".",
            "reload_on_found_variation": "1",
            "mobile_media_query": "768",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                "load_mobile_action": "load_mobile",
                "delete_item_action": "delete_item",
                "save_title_action": "save_title",
                "save_privacy_action": "save_privacy",
                "load_fragments": "load_fragments"
            },
            "nonce": {
                "add_to_wishlist_nonce": "15ed16766d",
                "remove_from_wishlist_nonce": "766dc60ea9",
                "reload_wishlist_and_adding_elem_nonce": "acd257f67d",
                "load_mobile_nonce": "0982bd3da3",
                "delete_item_nonce": "113d179391",
                "save_title_nonce": "d8c78dad5f",
                "save_privacy_nonce": "5938a0f1fd",
                "load_fragments_nonce": "cc8ab31085"
            },
            "redirect_after_ask_estimate": "",
            "ask_estimate_redirect_url": "https:\/\/trackstore.qodeinteractive.com"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min503b.js')}}?ver=3.25.0" id="jquery-yith-wcwl-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/anti-spam/assets/js/anti-spama927.js')}}?ver=7.3.5" id="anti-spam-script-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/contact-form-7/includes/swv/js/indexf658.js')}}?ver=5.8.1" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/trackstore.qodeinteractive.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/contact-form-7/includes/js/indexf658.js')}}?ver=5.8.1" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/underscore.mind584.js')}}?ver=1.13.4" id="underscore-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/core.min3f14.js')}}?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/tabs.min3f14.js')}}?ver=1.13.2" id="jquery-ui-tabs-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/datepicker.min3f14.js')}}?ver=1.13.2" id="jquery-ui-datepicker-js"></script>
    <script id="jquery-ui-datepicker-js-after" type="text/javascript">
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "dd\/mm\/yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/mouse.min3f14.js')}}?ver=1.13.2" id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/sortable.min3f14.js')}}?ver=1.13.2" id="jquery-ui-sortable-js"></script>
    <script type="text/javascript" id="trackstore-elated-modules-js-extra">
        /* <![CDATA[ */
        var eltdGlobalVars = {
            "vars": {
                "eltdAddForAdminBar": 0,
                "eltdElementAppearAmount": -100,
                "eltdAjaxUrl": "https:\/\/trackstore.qodeinteractive.com\/wp-admin\/admin-ajax.php",
                "eltdStickyHeaderHeight": 0,
                "eltdStickyHeaderTransparencyHeight": 105,
                "eltdTopBarHeight": 0,
                "eltdLogoAreaHeight": 0,
                "eltdMenuAreaHeight": 105,
                "eltdMobileHeaderHeight": 70
            }
        };
        var eltdPerPageVars = {
            "vars": {
                "eltdStickyScrollAmount": 0,
                "eltdHeaderTransparencyHeight": 0,
                "eltdHeaderVerticalWidth": 0
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules.min11c9.js')}}?ver=6.3.4" id="trackstore-elated-modules-js"></script>
    <script id="trackstore-elated-modules-js-after" type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $(".eltd-trackstore-loader").find(".eltd-trackstore-loader-counter .eltd-trackstore-loader-number").countTo({
                    from: 0,
                    to: 100,
                    speed: 2000,
                    refreshInterval: 50,
                    onComplete: function() {
                        revapi9.revstart();
                    }
                });
            });
        })(jQuery);
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-membership/assets/js/membership.min11c9.js')}}?ver=6.3.4" id="eltd-membership-script-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/jquery/ui/accordion.min3f14.js')}}?ver=1.13.2" id="jquery-ui-accordion-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-toolbar/assets/js/toolbar11c9.js')}}?ver=6.3.4" id="edge_toolbar_handle_toolbar_script-js"></script>
    <script type="text/javascript" src="{{url('website/_toolbar/assets/js/rbt-modules11c9.js')}}?ver=6.3.4" id="rabbit_js-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min2420.js')}}?ver=4.1.1-wc.8.1.1" id="photoswipe-js"></script>


    
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min2420.js')}}?ver=4.1.1-wc.8.1.1" id="photoswipe-ui-default-js"></script>
    <script type="text/javascript" id="wc-single-product-js-extra">
        /* <![CDATA[ */
        var wc_single_product_params = {
            "review_rating_required": "no",
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
            "zoom_enabled": "",
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
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min12c8.js')}}?ver=8.1.1" id="wc-single-product-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min956a.js')}}?ver=2.1.4-wc.8.1.1" id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min12c8.js')}}?ver=8.1.1" id="woocommerce-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker7100.js')}}?ver=1.18.1" id="gtm4wp-form-move-tracker-js"></script>
    <script type="text/javascript" id="yith-wcqv-frontend-js-extra">
        /* <![CDATA[ */
        var yith_qv = {
            "ajaxurl": "\/wp-admin\/admin-ajax.php",
            "loader": "https:\/\/trackstore.qodeinteractive.com\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
            "lang": ""
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min65f0.js')}}?ver=1.31.0" id="yith-wcqv-frontend-js"></script>
    <script id="mediaelement-core-js-before" type="text/javascript">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js')}}?ver=4.2.17" id="mediaelement-core-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/mediaelement/mediaelement-migrate.min11c9.js')}}?ver=6.3.4" id="mediaelement-migrate-js"></script>

    <script type="text/javascript" src="{{url('website/wp-includes/js/mediaelement/wp-mediaelement.min11c9.js')}}?ver=6.3.4" id="wp-mediaelement-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.appear11c9.js')}}?ver=6.3.4" id="appear-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/modernizr.min11c9.js')}}?ver=6.3.4" id="modernizr-js"></script>
    <script type="text/javascript" src="{{url('website/wp-includes/js/hoverIntent.min3e5a.js')}}?ver=1.10.2" id="hoverIntent-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.plugin11c9.js')}}?ver=6.3.4" id="jquery-plugin-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/owl.carousel.min11c9.js')}}?ver=6.3.4" id="owl-carousel-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.waypoints.min11c9.js')}}?ver=6.3.4" id="waypoints-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/Chart.min11c9.js')}}?ver=6.3.4" id="chart-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/fluidvids.min11c9.js')}}?ver=6.3.4" id="fluidvids-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min8717.js')}}?ver=7.0" id="prettyphoto-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.nicescroll.min11c9.js')}}?ver=6.3.4" id="nicescroll-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/skrollr11c9.js')}}?ver=6.3.4" id="skrollr-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/perfect-scrollbar.jquery.min11c9.js')}}?ver=6.3.4" id="perfectscrollbar-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/ScrollToPlugin.min11c9.js')}}?ver=6.3.4" id="ScrollToPlugin-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/parallax.min11c9.js')}}?ver=6.3.4" id="parallax-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.waitforimages11c9.js')}}?ver=6.3.4" id="waitforimages-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.easing.1.311c9.js')}}?ver=6.3.4" id="jquery-easing-1.3-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min8717.js')}}?ver=7.0" id="isotope-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/packery-mode.pkgd.min11c9.js')}}?ver=6.3.4" id="packery-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/swiper.min11c9.js')}}?ver=6.3.4" id="swiper-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/slick.min11c9.js')}}?ver=6.3.4" id="slick-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/themes/trackstore/assets/js/modules/plugins/jquery.parallax-scroll11c9.js')}}?ver=6.3.4" id="parallaxScroll-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-core/shortcodes/countdown/assets/js/plugins/jquery.countdown.min11c9.js')}}?ver=6.3.4" id="countdown-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-core/shortcodes/counter/assets/js/plugins/counter11c9.js')}}?ver=6.3.4" id="counter-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-core/shortcodes/counter/assets/js/plugins/absoluteCounter.min11c9.js')}}?ver=6.3.4" id="absoluteCounter-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-core/shortcodes/custom-font/assets/js/plugins/typed11c9.js')}}?ver=6.3.4" id="typed-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/eltd-core/shortcodes/pie-chart/assets/js/plugins/easypiechart11c9.js')}}?ver=6.3.4" id="easypiechart-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min839b.js')}}?ver=4.0.3-wc.8.1.1" id="select2-js"></script>
  
    <script type="text/javascript" src="{{url('website/wp-includes/js/comment-reply.min11c9.js')}}?ver=6.3.4" id="comment-reply-js"></script>

    <script type="text/javascript" src="{{url('website/wp-includes/js/wp-util.min11c9.js')}}?ver=6.3.4" id="wp-util-js"></script>

    <script type="text/javascript" src="{{url('website/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min12c8.js')}}?ver=8.1.1" id="wc-add-to-cart-variation-js"></script>
    <script type="text/javascript" src="{{url('website/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min8717.js')}}?ver=7.0" id="wpb_composer_front_js-js"></script>

    
</body>


</html>