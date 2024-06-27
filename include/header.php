<?php
include "constant.php";

$url = $URL . "notification/read_notification.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>
<!DOCTYPE html>
<html class="html" lang="en">
<!-- Mirrored from onlinepandit.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2024 11:14:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <link data-optimized="2" rel="stylesheet"
    href="wp-content/litespeed/css/ae600c8650cfeabe4050bb73a3c2df528679.css?ver=655c4" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>Pt. Gaurav Shastri Best Service at Bangalore By Call</title>
  <meta name='robots' content='max-image-preview:large' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel="alternate" type="application/rss+xml" title="Pt. Gaurav Shastri &raquo; Feed" href="feed/index.php" />
  <link rel="alternate" type="application/rss+xml" title="Pt. Gaurav Shastri &raquo; Comments Feed"
    href="comments/feed/index.php" />
  <script>
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/onlinepandit.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.4"
      }
    };
    /*! This file is auto-generated */
    ! function (i, n) {
      var o, s, e;

      function c(e) {
        try {
          var t = {
            supportTests: e,
            timestamp: (new Date).valueOf()
          };
          sessionStorage.setItem(o, JSON.stringify(t))
        } catch (e) { }
      }

      function p(e, t, n) {
        e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
        var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
          r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
        return t.every(function (e, t) {
          return e === r[t]
        })
      }

      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
          case "emoji":
            return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
        }
        return !1
      }

      function f(e, t, n) {
        var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
          a = r.getContext("2d", {
            willReadFrequently: !0
          }),
          o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
        return e.forEach(function (e) {
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
      }, e = new Promise(function (e) {
        i.addEventListener("DOMContentLoaded", e, {
          once: !0
        })
      }), new Promise(function (t) {
        var n = function () {
          try {
            var e = JSON.parse(sessionStorage.getItem(o));
            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
          } catch (e) { }
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
            return void (a.onmessage = function (e) {
              c(n = e.data), a.terminate(), t(n)
            })
          } catch (e) { }
          c(n = f(s, u, p))
        }
        t(n)
      }).then(function (e) {
        for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
        n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () {
          n.DOMReady = !0
        }
      }).then(function () {
        return e
      }).then(function () {
        var e;
        n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
      }))
    }((window, document), window._wpemojiSettings);
  </script>
  <style>
    @media screen and (max-width: 650px) {
      body {
        padding-bottom: 60px;
      }
    }
  </style>
  <style id='wp-emoji-styles-inline-css'>
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
  <style id='classic-theme-styles-inline-css'>
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
  <style id='global-styles-inline-css'>
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
  <link rel='stylesheet' id='oceanwp-google-font-roboto-slab-css'
    href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100i%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i%2C800i%2C900i&amp;subset=latin&amp;display=swap&amp;ver=6.5.4'
    media='all' />
  <style id='elementor-frontend-inline-css'>
    @-webkit-keyframes ha_fadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    @keyframes ha_fadeIn {
      0% {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    @-webkit-keyframes ha_zoomIn {
      0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
      }

      50% {
        opacity: 1
      }
    }

    @keyframes ha_zoomIn {
      0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
      }

      50% {
        opacity: 1
      }
    }

    @-webkit-keyframes ha_rollIn {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
      }

      to {
        opacity: 1
      }
    }

    @keyframes ha_rollIn {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
      }

      to {
        opacity: 1
      }
    }

    @-webkit-keyframes ha_bounce {

      0%,
      20%,
      53%,
      to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      40%,
      43% {
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
      }

      70% {
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
      }

      80% {
        -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
        transition-timing-function: cubic-bezier(.215, .61, .355, 1);
        -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
        transform: translate3d(0, 0, 0) scaleY(.95)
      }

      90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02)
      }
    }

    @keyframes ha_bounce {

      0%,
      20%,
      53%,
      to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      40%,
      43% {
        -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
        transform: translate3d(0, -30px, 0) scaleY(1.1);
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
      }

      70% {
        -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
        transform: translate3d(0, -15px, 0) scaleY(1.05);
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
      }

      80% {
        -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
        transition-timing-function: cubic-bezier(.215, .61, .355, 1);
        -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
        transform: translate3d(0, 0, 0) scaleY(.95)
      }

      90% {
        -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
        transform: translate3d(0, -4px, 0) scaleY(1.02)
      }
    }

    @-webkit-keyframes ha_bounceIn {

      0%,
      20%,
      40%,
      60%,
      80%,
      to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
      }

      40% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03)
      }

      80% {
        -webkit-transform: scale3d(.97, .97, .97);
        transform: scale3d(.97, .97, .97)
      }

      to {
        opacity: 1
      }
    }

    @keyframes ha_bounceIn {

      0%,
      20%,
      40%,
      60%,
      80%,
      to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
      }

      40% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03)
      }

      80% {
        -webkit-transform: scale3d(.97, .97, .97);
        transform: scale3d(.97, .97, .97)
      }

      to {
        opacity: 1
      }
    }

    @-webkit-keyframes ha_flipInX {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
      }
    }

    @keyframes ha_flipInX {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
        transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
        transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
      }
    }

    @-webkit-keyframes ha_flipInY {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
      }
    }

    @keyframes ha_flipInY {
      0% {
        opacity: 0;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      40% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      60% {
        opacity: 1;
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
        transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
      }

      80% {
        -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
        transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
      }
    }

    @-webkit-keyframes ha_swing {
      20% {
        -webkit-transform: rotate3d(0, 0, 1, 15deg);
        transform: rotate3d(0, 0, 1, 15deg)
      }

      40% {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
        transform: rotate3d(0, 0, 1, -10deg)
      }

      60% {
        -webkit-transform: rotate3d(0, 0, 1, 5deg);
        transform: rotate3d(0, 0, 1, 5deg)
      }

      80% {
        -webkit-transform: rotate3d(0, 0, 1, -5deg);
        transform: rotate3d(0, 0, 1, -5deg)
      }
    }

    @keyframes ha_swing {
      20% {
        -webkit-transform: rotate3d(0, 0, 1, 15deg);
        transform: rotate3d(0, 0, 1, 15deg)
      }

      40% {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
        transform: rotate3d(0, 0, 1, -10deg)
      }

      60% {
        -webkit-transform: rotate3d(0, 0, 1, 5deg);
        transform: rotate3d(0, 0, 1, 5deg)
      }

      80% {
        -webkit-transform: rotate3d(0, 0, 1, -5deg);
        transform: rotate3d(0, 0, 1, -5deg)
      }
    }

    @-webkit-keyframes ha_slideInDown {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
      }
    }

    @keyframes ha_slideInDown {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
      }
    }

    @-webkit-keyframes ha_slideInUp {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
      }
    }

    @keyframes ha_slideInUp {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
      }
    }

    @-webkit-keyframes ha_slideInLeft {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
      }
    }

    @keyframes ha_slideInLeft {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
      }
    }

    @-webkit-keyframes ha_slideInRight {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
      }
    }

    @keyframes ha_slideInRight {
      0% {
        visibility: visible;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
      }
    }

    .ha_fadeIn {
      -webkit-animation-name: ha_fadeIn;
      animation-name: ha_fadeIn
    }

    .ha_zoomIn {
      -webkit-animation-name: ha_zoomIn;
      animation-name: ha_zoomIn
    }

    .ha_rollIn {
      -webkit-animation-name: ha_rollIn;
      animation-name: ha_rollIn
    }

    .ha_bounce {
      -webkit-transform-origin: center bottom;
      -ms-transform-origin: center bottom;
      transform-origin: center bottom;
      -webkit-animation-name: ha_bounce;
      animation-name: ha_bounce
    }

    .ha_bounceIn {
      -webkit-animation-name: ha_bounceIn;
      animation-name: ha_bounceIn;
      -webkit-animation-duration: .75s;
      -webkit-animation-duration: calc(var(--animate-duration)*.75);
      animation-duration: .75s;
      animation-duration: calc(var(--animate-duration)*.75)
    }

    .ha_flipInX,
    .ha_flipInY {
      -webkit-animation-name: ha_flipInX;
      animation-name: ha_flipInX;
      -webkit-backface-visibility: visible !important;
      backface-visibility: visible !important
    }

    .ha_flipInY {
      -webkit-animation-name: ha_flipInY;
      animation-name: ha_flipInY
    }

    .ha_swing {
      -webkit-transform-origin: top center;
      -ms-transform-origin: top center;
      transform-origin: top center;
      -webkit-animation-name: ha_swing;
      animation-name: ha_swing
    }

    .ha_slideInDown {
      -webkit-animation-name: ha_slideInDown;
      animation-name: ha_slideInDown
    }

    .ha_slideInUp {
      -webkit-animation-name: ha_slideInUp;
      animation-name: ha_slideInUp
    }

    .ha_slideInLeft {
      -webkit-animation-name: ha_slideInLeft;
      animation-name: ha_slideInLeft
    }

    .ha_slideInRight {
      -webkit-animation-name: ha_slideInRight;
      animation-name: ha_slideInRight
    }

    .ha-css-transform-yes {
      -webkit-transition-duration: var(--ha-tfx-transition-duration, .2s);
      transition-duration: var(--ha-tfx-transition-duration, .2s);
      -webkit-transition-property: -webkit-transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform;
      -webkit-transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
      transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0))
    }

    .ha-css-transform-yes:hover {
      -webkit-transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)));
      transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)))
    }

    .happy-addon>.elementor-widget-container {
      word-wrap: break-word;
      overflow-wrap: break-word
    }

    .happy-addon>.elementor-widget-container,
    .happy-addon>.elementor-widget-container * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    .happy-addon p:empty {
      display: none
    }

    .happy-addon .elementor-inline-editing {
      min-height: auto !important
    }

    .happy-addon-pro img {
      max-width: 100%;
      height: auto;
      -o-object-fit: cover;
      object-fit: cover
    }

    .ha-screen-reader-text {
      position: absolute;
      overflow: hidden;
      clip: rect(1px, 1px, 1px, 1px);
      margin: -1px;
      padding: 0;
      width: 1px;
      height: 1px;
      border: 0;
      word-wrap: normal !important;
      -webkit-clip-path: inset(50%);
      clip-path: inset(50%)
    }

    .ha-has-bg-overlay>.elementor-widget-container {
      position: relative;
      z-index: 1
    }

    .ha-has-bg-overlay>.elementor-widget-container:before {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      width: 100%;
      height: 100%;
      content: ""
    }

    .ha-popup--is-enabled .ha-js-popup,
    .ha-popup--is-enabled .ha-js-popup img {
      cursor: -webkit-zoom-in !important;
      cursor: zoom-in !important
    }

    .mfp-wrap .mfp-arrow,
    .mfp-wrap .mfp-close {
      background-color: transparent
    }

    .mfp-wrap .mfp-arrow:focus,
    .mfp-wrap .mfp-close:focus {
      outline-width: thin
    }

    .ha-advanced-tooltip-enable {
      position: relative;
      cursor: pointer;
      --ha-tooltip-arrow-color: black;
      --ha-tooltip-arrow-distance: 0
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content {
      position: absolute;
      z-index: 999;
      display: none;
      padding: 5px 0;
      width: 120px;
      height: auto;
      border-radius: 6px;
      background-color: #000;
      color: #fff;
      text-align: center;
      opacity: 0
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content::after {
      position: absolute;
      border-width: 5px;
      border-style: solid;
      content: ""
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.no-arrow::after {
      visibility: hidden
    }

    .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.show {
      display: inline-block;
      opacity: 1
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content {
      top: unset;
      right: 0;
      bottom: calc(101% + var(--ha-tooltip-arrow-distance));
      left: 0;
      margin: 0 auto
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content::after {
      top: 100%;
      right: unset;
      bottom: unset;
      left: 50%;
      border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content {
      top: calc(101% + var(--ha-tooltip-arrow-distance));
      right: 0;
      bottom: unset;
      left: 0;
      margin: 0 auto
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content::after {
      top: unset;
      right: unset;
      bottom: 100%;
      left: 50%;
      border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content {
      top: 50%;
      right: calc(101% + var(--ha-tooltip-arrow-distance));
      bottom: unset;
      left: unset;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content::after {
      top: 50%;
      right: unset;
      bottom: unset;
      left: 100%;
      border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content {
      top: 50%;
      right: unset;
      bottom: unset;
      left: calc(101% + var(--ha-tooltip-arrow-distance));
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content::after,
    body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content::after {
      top: 50%;
      right: 100%;
      bottom: unset;
      left: unset;
      border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content {
      top: unset;
      right: 0;
      bottom: calc(101% + var(--ha-tooltip-arrow-distance));
      left: 0;
      margin: 0 auto
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content::after {
      top: 100%;
      right: unset;
      bottom: unset;
      left: 50%;
      border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content {
      top: calc(101% + var(--ha-tooltip-arrow-distance));
      right: 0;
      bottom: unset;
      left: 0;
      margin: 0 auto
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content::after {
      top: unset;
      right: unset;
      bottom: 100%;
      left: 50%;
      border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content {
      top: 50%;
      right: calc(101% + var(--ha-tooltip-arrow-distance));
      bottom: unset;
      left: unset;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content::after {
      top: 50%;
      right: unset;
      bottom: unset;
      left: 100%;
      border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content {
      top: 50%;
      right: unset;
      bottom: unset;
      left: calc(101% + var(--ha-tooltip-arrow-distance));
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content::after {
      top: 50%;
      right: 100%;
      bottom: unset;
      left: unset;
      border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    body.elementor-editor-active .happy-addon.ha-gravityforms .gform_wrapper {
      display: block !important
    }

    .ha-scroll-to-top-wrap.ha-scroll-to-top-hide {
      display: none
    }

    .ha-scroll-to-top-wrap.edit-mode,
    .ha-scroll-to-top-wrap.single-page-off {
      display: none !important
    }

    .ha-scroll-to-top-button {
      position: fixed;
      right: 15px;
      bottom: 15px;
      z-index: 9999;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      align-items: center;
      -ms-flex-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50px;
      background-color: #5636d1;
      color: #fff;
      text-align: center;
      opacity: 1;
      cursor: pointer;
      -webkit-transition: all .3s;
      transition: all .3s
    }

    .ha-scroll-to-top-button i {
      color: #fff;
      font-size: 16px
    }

    .ha-scroll-to-top-button:hover {
      background-color: #e2498a
    }
  </style>
  <link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlayfair+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5.4'
    media='all' />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
  <script data-optimized="1" src="wp-content/litespeed/js/b51217376475e5c71721907bf9341ca51aa2.js?ver=55eeb"
    id="jquery-migrate-js"></script>
  <script data-optimized="1" src="wp-content/litespeed/js/a4ffc90911061920554ea3e867388683b082.js?ver=7a766"
    id="font-awesome-4-shim-js"></script>
  <link rel="https://api.w.org/" href="wp-json/index.php" />
  <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/838.json" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <meta name="generator" content="WordPress 6.5.4" />
  <link rel="canonical" href="index.php" />
  <link rel='shortlink' href='index.php' />
  <link rel="alternate" type="application/json+oembed"
    href="wp-json/oembed/1.0/embed5e35.json?url=https%3A%2F%2Fonlinepandit.in%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="wp-json/oembed/1.0/embedb1a4?url=https%3A%2F%2Fonlinepandit.in%2F&amp;format=xml" />
  <meta name="generator"
    content="Elementor 3.21.8; features: e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
  <style>
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
  </style>
  <link rel="icon" href="img/cropped-5a018de87ca233f48ba6270f-32x32.png" sizes="32x32" />
  <link rel="icon" href="img/cropped-5a018de87ca233f48ba6270f-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="img/cropped-5a018de87ca233f48ba6270f-180x180.png" />
  <meta name="msapplication-TileImage"
    content="https://onlinepandit.in/img/cropped-5a018de87ca233f48ba6270f-270x270.png" />
  <style id="wp-custom-css">
    .wpcf7-form input,
    .wpcf7-form textarea {
      text-align: center
    }

    .elementor-element.elementor-element-jtqnlxa .elementor-icon i {
      text-align: center
    }

    /** Start Block Kit CSS:144-3-3a7d335f39a8579c20cdf02f8d462582 **/
    .envato-block__preview {
      overflow: visible
    }

    /* Envato Kit 141 Custom Styles - Applied to the element under Advanced */
    .elementor-headline-animation-type-drop-in .elementor-headline-dynamic-wrapper {
      text-align: center
    }

    .envato-kit-141-top-0 h1,
    .envato-kit-141-top-0 h2,
    .envato-kit-141-top-0 h3,
    .envato-kit-141-top-0 h4,
    .envato-kit-141-top-0 h5,
    .envato-kit-141-top-0 h6,
    .envato-kit-141-top-0 p {
      margin-top: 0
    }

    .envato-kit-141-newsletter-inline .elementor-field-textual.elementor-size-md {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .envato-kit-141-bottom-0 p {
      margin-bottom: 0
    }

    .envato-kit-141-bottom-8 .elementor-price-list .elementor-price-list-item .elementor-price-list-header {
      margin-bottom: .5rem
    }

    .envato-kit-141.elementor-widget-testimonial-carousel.elementor-pagination-type-bullets .swiper-container {
      padding-bottom: 52px
    }

    .envato-kit-141-display-inline {
      display: inline-block
    }

    .envato-kit-141 .elementor-slick-slider ul.slick-dots {
      bottom: -40px
    }

    /** End Block Kit CSS:144-3-3a7d335f39a8579c20cdf02f8d462582 **/
    /** Start Block Kit CSS:141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
    .envato-kit-138-bracket .elementor-widget-container>*:before {
      content: "[";
      color: #ffab00;
      display: inline-block;
      margin-right: 4px;
      line-height: 1em;
      position: relative;
      top: -1px
    }

    .envato-kit-138-bracket .elementor-widget-container>*:after {
      content: "]";
      color: #ffab00;
      display: inline-block;
      margin-left: 4px;
      line-height: 1em;
      position: relative;
      top: -1px
    }

    /** End Block Kit CSS:141-3-1d55f1e76be9fb1a8d9de88accbe962f **/
    /** Start Block Kit CSS:136-3-fc37602abad173a9d9d95d89bbe6bb80 **/
    .envato-block__preview {
      overflow: visible !important
    }

    /** End Block Kit CSS:136-3-fc37602abad173a9d9d95d89bbe6bb80 **/
    /** Start Block Kit CSS:71-3-d415519effd9e11f35d2438c58ea7ebf **/
    .envato-block__preview {
      overflow: visible
    }

    /** End Block Kit CSS:71-3-d415519effd9e11f35d2438c58ea7ebf **/
  </style>
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = '../www.googletagmanager.com/gtm5445.php?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MZNW755D');
  </script>
  <style type="text/css">
    /* General CSS */
    a:hover,
    a.light:hover,
    .theme-heading .text::before,
    .theme-heading .text::after,
    #top-bar-content>a:hover,
    #top-bar-social li.oceanwp-email a:hover,
    #site-navigation-wrap .dropdown-menu>li>a:hover,
    #site-header.medium-header #medium-searchform button:hover,
    .oceanwp-mobile-menu-icon a:hover,
    .blog-entry.post .blog-entry-header .entry-title a:hover,
    .blog-entry.post .blog-entry-readmore a:hover,
    .blog-entry.thumbnail-entry .blog-entry-category a,
    ul.meta li a:hover,
    .dropcap,
    .single nav.post-navigation .nav-links .title,
    body .related-post-title a:hover,
    body #wp-calendar caption,
    body .contact-info-widget.default i,
    body .contact-info-widget.big-icons i,
    body .custom-links-widget .oceanwp-custom-links li a:hover,
    body .custom-links-widget .oceanwp-custom-links li a:hover:before,
    body .posts-thumbnails-widget li a:hover,
    body .social-widget li.oceanwp-email a:hover,
    .comment-author .comment-meta .comment-reply-link,
    #respond #cancel-comment-reply-link:hover,
    #footer-widgets .footer-box a:hover,
    #footer-bottom a:hover,
    #footer-bottom #footer-bottom-menu a:hover,
    .sidr a:hover,
    .sidr-class-dropdown-toggle:hover,
    .sidr-class-menu-item-has-children.active>a,
    .sidr-class-menu-item-has-children.active>a>.sidr-class-dropdown-toggle,
    input[type=checkbox]:checked:before {
      color: #ffaa00
    }

    .single nav.post-navigation .nav-links .title .owp-icon use,
    .blog-entry.post .blog-entry-readmore a:hover .owp-icon use,
    body .contact-info-widget.default .owp-icon use,
    body .contact-info-widget.big-icons .owp-icon use {
      stroke: #ffaa00
    }

    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    button[type="submit"],
    .button,
    #site-navigation-wrap .dropdown-menu>li.btn>a>span,
    .thumbnail:hover i,
    .post-quote-content,
    .omw-modal .omw-close-modal,
    body .contact-info-widget.big-icons li:hover i,
    body div.wpforms-container-full .wpforms-form input[type=submit],
    body div.wpforms-container-full .wpforms-form button[type=submit],
    body div.wpforms-container-full .wpforms-form .wpforms-page-button {
      background-color: #ffaa00
    }

    .thumbnail:hover .link-post-svg-icon {
      background-color: #ffaa00
    }

    body .contact-info-widget.big-icons li:hover .owp-icon {
      background-color: #ffaa00
    }

    .widget-title {
      border-color: #ffaa00
    }

    blockquote {
      border-color: #ffaa00
    }

    #searchform-dropdown {
      border-color: #ffaa00
    }

    .dropdown-menu .sub-menu {
      border-color: #ffaa00
    }

    .blog-entry.large-entry .blog-entry-readmore a:hover {
      border-color: #ffaa00
    }

    .oceanwp-newsletter-form-wrap input[type="email"]:focus {
      border-color: #ffaa00
    }

    .social-widget li.oceanwp-email a:hover {
      border-color: #ffaa00
    }

    #respond #cancel-comment-reply-link:hover {
      border-color: #ffaa00
    }

    body .contact-info-widget.big-icons li:hover i {
      border-color: #ffaa00
    }

    #footer-widgets .oceanwp-newsletter-form-wrap input[type="email"]:focus {
      border-color: #ffaa00
    }

    blockquote,
    .wp-block-quote {
      border-left-color: #ffaa00
    }

    body .contact-info-widget.big-icons li:hover .owp-icon {
      border-color: #ffaa00
    }

    input[type="button"]:hover,
    input[type="reset"]:hover,
    input[type="submit"]:hover,
    button[type="submit"]:hover,
    input[type="button"]:focus,
    input[type="reset"]:focus,
    input[type="submit"]:focus,
    button[type="submit"]:focus,
    .button:hover,
    .button:focus,
    #site-navigation-wrap .dropdown-menu>li.btn>a:hover>span,
    .post-quote-author,
    .omw-modal .omw-close-modal:hover,
    body div.wpforms-container-full .wpforms-form input[type=submit]:hover,
    body div.wpforms-container-full .wpforms-form button[type=submit]:hover,
    body div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
      background-color: #6aa32d
    }

    table th,
    table td,
    hr,
    .content-area,
    body.content-left-sidebar #content-wrap .content-area,
    .content-left-sidebar .content-area,
    #top-bar-wrap,
    #site-header,
    #site-header.top-header #search-toggle,
    .dropdown-menu ul li,
    .centered-minimal-page-header,
    .blog-entry.post,
    .blog-entry.grid-entry .blog-entry-inner,
    .blog-entry.thumbnail-entry .blog-entry-bottom,
    .single-post .entry-title,
    .single .entry-share-wrap .entry-share,
    .single .entry-share,
    .single .entry-share ul li a,
    .single nav.post-navigation,
    .single nav.post-navigation .nav-links .nav-previous,
    #author-bio,
    #author-bio .author-bio-avatar,
    #author-bio .author-bio-social li a,
    #related-posts,
    #comments,
    .comment-body,
    #respond #cancel-comment-reply-link,
    #blog-entries .type-page,
    .page-numbers a,
    .page-numbers span:not(.elementor-screen-only),
    .page-links span,
    body #wp-calendar caption,
    body #wp-calendar th,
    body #wp-calendar tbody,
    body .contact-info-widget.default i,
    body .contact-info-widget.big-icons i,
    body .posts-thumbnails-widget li,
    body .tagcloud a {
      border-color:
    }

    body .contact-info-widget.big-icons .owp-icon,
    body .contact-info-widget.default .owp-icon {
      border-color:
    }

    form input[type="text"],
    form input[type="password"],
    form input[type="email"],
    form input[type="url"],
    form input[type="date"],
    form input[type="month"],
    form input[type="time"],
    form input[type="datetime"],
    form input[type="datetime-local"],
    form input[type="week"],
    form input[type="number"],
    form input[type="search"],
    form input[type="tel"],
    form input[type="color"],
    form select,
    form textarea {
      padding: 18px 15px 18px 15px
    }

    body div.wpforms-container-full .wpforms-form input[type=date],
    body div.wpforms-container-full .wpforms-form input[type=datetime],
    body div.wpforms-container-full .wpforms-form input[type=datetime-local],
    body div.wpforms-container-full .wpforms-form input[type=email],
    body div.wpforms-container-full .wpforms-form input[type=month],
    body div.wpforms-container-full .wpforms-form input[type=number],
    body div.wpforms-container-full .wpforms-form input[type=password],
    body div.wpforms-container-full .wpforms-form input[type=range],
    body div.wpforms-container-full .wpforms-form input[type=search],
    body div.wpforms-container-full .wpforms-form input[type=tel],
    body div.wpforms-container-full .wpforms-form input[type=text],
    body div.wpforms-container-full .wpforms-form input[type=time],
    body div.wpforms-container-full .wpforms-form input[type=url],
    body div.wpforms-container-full .wpforms-form input[type=week],
    body div.wpforms-container-full .wpforms-form select,
    body div.wpforms-container-full .wpforms-form textarea {
      padding: 18px 15px 18px 15px;
      height: auto
    }

    form input[type="text"],
    form input[type="password"],
    form input[type="email"],
    form input[type="url"],
    form input[type="date"],
    form input[type="month"],
    form input[type="time"],
    form input[type="datetime"],
    form input[type="datetime-local"],
    form input[type="week"],
    form input[type="number"],
    form input[type="search"],
    form input[type="tel"],
    form input[type="color"],
    form select,
    form textarea,
    .select2-container .select2-choice,
    .woocommerce .woocommerce-checkout .select2-container--default .select2-selection--single {
      border-color: #eeeeee
    }

    body div.wpforms-container-full .wpforms-form input[type=date],
    body div.wpforms-container-full .wpforms-form input[type=datetime],
    body div.wpforms-container-full .wpforms-form input[type=datetime-local],
    body div.wpforms-container-full .wpforms-form input[type=email],
    body div.wpforms-container-full .wpforms-form input[type=month],
    body div.wpforms-container-full .wpforms-form input[type=number],
    body div.wpforms-container-full .wpforms-form input[type=password],
    body div.wpforms-container-full .wpforms-form input[type=range],
    body div.wpforms-container-full .wpforms-form input[type=search],
    body div.wpforms-container-full .wpforms-form input[type=tel],
    body div.wpforms-container-full .wpforms-form input[type=text],
    body div.wpforms-container-full .wpforms-form input[type=time],
    body div.wpforms-container-full .wpforms-form input[type=url],
    body div.wpforms-container-full .wpforms-form input[type=week],
    body div.wpforms-container-full .wpforms-form select,
    body div.wpforms-container-full .wpforms-form textarea {
      border-color: #eeeeee
    }

    form input[type="text"]:focus,
    form input[type="password"]:focus,
    form input[type="email"]:focus,
    form input[type="tel"]:focus,
    form input[type="url"]:focus,
    form input[type="search"]:focus,
    form textarea:focus,
    .select2-drop-active,
    .select2-dropdown-open.select2-drop-above .select2-choice,
    .select2-dropdown-open.select2-drop-above .select2-choices,
    .select2-drop.select2-drop-above.select2-drop-active,
    .select2-container-active .select2-choice,
    .select2-container-active .select2-choices {
      border-color: #84c340
    }

    body div.wpforms-container-full .wpforms-form input:focus,
    body div.wpforms-container-full .wpforms-form textarea:focus,
    body div.wpforms-container-full .wpforms-form select:focus {
      border-color: #84c340
    }

    .theme-button,
    input[type="submit"],
    button[type="submit"],
    button,
    .button,
    body div.wpforms-container-full .wpforms-form input[type=submit],
    body div.wpforms-container-full .wpforms-form button[type=submit],
    body div.wpforms-container-full .wpforms-form .wpforms-page-button {
      border-radius: 1px
    }

    /* Header CSS */
    #site-logo #site-logo-inner,
    .oceanwp-social-menu .social-menu-inner,
    #site-header.full_screen-header .menu-bar-inner,
    .after-header-content .after-header-content-inner {
      height: 70px
    }

    #site-navigation-wrap .dropdown-menu>li>a,
    .oceanwp-mobile-menu-icon a,
    .mobile-menu-close,
    .after-header-content-inner>a {
      line-height: 70px
    }

    #site-header.has-header-media .overlay-header-media {
      background-color: rgba(0, 0, 0, 0.5)
    }

    #site-logo #site-logo-inner a img,
    #site-header.center-header #site-navigation-wrap .middle-site-logo a img {
      max-width: 62px
    }

    #site-navigation-wrap .dropdown-menu>li>a:hover,
    .oceanwp-mobile-menu-icon a:hover,
    #searchform-header-replace-close:hover {
      color: #f79413
    }

    #site-navigation-wrap .dropdown-menu>li>a:hover .owp-icon use,
    .oceanwp-mobile-menu-icon a:hover .owp-icon use,
    #searchform-header-replace-close:hover .owp-icon use {
      stroke: #f79413
    }

    /* Top Bar CSS */
    #top-bar-wrap,
    .oceanwp-top-bar-sticky {
      background-color: #f99522
    }

    #top-bar-wrap {
      border-color: #f79e51
    }

    #top-bar-wrap,
    #top-bar-content strong {
      color: #ffffff
    }

    #top-bar-content a,
    #top-bar-social-alt a {
      color: #ffffff
    }

    #top-bar-content a:hover,
    #top-bar-social-alt a:hover {
      color: #f7803b
    }

    #top-bar-social li a {
      color: #ffffff
    }

    #top-bar-social li a .owp-icon use {
      stroke: #ffffff
    }

    #top-bar-social li a:hover {
      color: #4d8221 !important
    }

    #top-bar-social li a:hover .owp-icon use {
      stroke: #4d8221 !important
    }

    /* Footer Widgets CSS */
    #footer-widgets {
      background-color: #f5f5f5
    }

    #footer-widgets,
    #footer-widgets p,
    #footer-widgets li a:before,
    #footer-widgets .contact-info-widget span.oceanwp-contact-title,
    #footer-widgets .recent-posts-date,
    #footer-widgets .recent-posts-comments,
    #footer-widgets .widget-recent-posts-icons li .fa {
      color: #777777
    }

    #footer-widgets li,
    #footer-widgets #wp-calendar caption,
    #footer-widgets #wp-calendar th,
    #footer-widgets #wp-calendar tbody,
    #footer-widgets .contact-info-widget i,
    #footer-widgets .oceanwp-newsletter-form-wrap input[type="email"],
    #footer-widgets .posts-thumbnails-widget li,
    #footer-widgets .social-widget li a {
      border-color: #aaaaaa
    }

    #footer-widgets .contact-info-widget .owp-icon {
      border-color: #aaaaaa
    }

    #footer-widgets .footer-box a,
    #footer-widgets a {
      color: #333333
    }

    /* Footer Bottom CSS */
    #footer-bottom {
      background-color: #f26d07
    }

    #footer-bottom a:hover,
    #footer-bottom #footer-bottom-menu a:hover {
      color: #ffb23f
    }

    /* Typography CSS */
    body {
      font-family: Roboto Slab;
      font-size: 15px
    }

    #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.full_screen-header .fs-dropdown-menu>li>a,
    #site-header.top-header #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.center-header #site-navigation-wrap .dropdown-menu>li>a,
    #site-header.medium-header #site-navigation-wrap .dropdown-menu>li>a,
    .oceanwp-mobile-menu-icon a {
      text-transform: uppercase
    }

    #footer-widgets .footer-box .widget-title {
      color: #292929
    }

    #footer-bottom #copyright {
      font-size: 13px;
      letter-spacing: 1px
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    function toggleMenu() {
      $('.mobile-menu').toggleClass('opened');
      $('#mobile-dropdown').toggle();
    }

    function toggleSearch() {
      $('.search-toggle-li').toggleClass('active');
      $('#searchform-dropdown').toggleClass('show');
    }
  </script>
</head>

<body
  class="home page-template-default page page-id-838 wp-custom-logo wp-embed-responsive oceanwp-theme dropdown-mobile default-breakpoint content-full-screen has-topbar page-header-disabled elementor-default elementor-kit-5 elementor-page elementor-page-838"
  itemscope="itemscope" itemtype="https://schema.org/WebPage">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.php?id=GTM-MZNW755D" height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>
  <div id="outer-wrap" class="site clr">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrap" class="clr">
      <div id="top-bar-wrap" class="clr">
        <div id="top-bar" class="clr container">
          <div id="top-bar-inner" class="clr">
            <div id="top-bar-content" class="clr has-content top-bar-left">
              <span class="topbar-content">
                <i class="icon-phone" style="margin: 0 7px 0 0"></i> (+91) 639-040-6468 <i class="icon-envelope-letter"
                  style="margin: 0 7px"></i>gauravpsln18@gmail.com </span>
            </div>
          </div>
        </div>
      </div>
      <header id="site-header" class="minimal-header clr" data-height="70" itemscope="itemscope"
        itemtype="https://schema.org/WPHeader" role="banner">
        <div id="site-header-inner" class="clr container">
          <div id="site-logo" class="clr has-responsive-logo" itemscope itemtype="https://schema.org/Brand">
            <div id="site-logo-inner" class="clr">
              <a href="index.php" class="custom-logo-link" rel="home" aria-current="page">
                <img fetchpriority="high" width="1242" height="1280" src="img/5a018de87ca233f48ba6270f.png"
                  class="custom-logo" alt="Pt. Gaurav Shastri" decoding="async"
                  srcset="img/5a018de87ca233f48ba6270f.png 1x, img/5a018de87ca233f48ba6270f.png 2x"
                  sizes="(max-width: 1242px) 100vw, 1242px" />
              </a>
              <a href="index.php" class="responsive-logo-link" rel="home">
                <img src="img/5a018de87ca233f48ba6270f.png" class="responsive-logo" width="200" height="125" alt="" />
              </a>
            </div>
          </div>

          <!-- Menu Start -->
          <div id="site-navigation-wrap" class="clr">
            <nav id="site-navigation" class="navigation main-navigation clr" itemscope="itemscope"
              itemtype="https://schema.org/SiteNavigationElement" role="navigation">
              <ul id="menu-main-menu" class="main-menu dropdown-menu sf-menu">
                <li id="menu-item-924"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-838 current_page_item menu-item-924">
                  <a href="index.php" class="menu-link">
                    <span class="text-wrap">Home</span>
                  </a>
                </li>
                <li id="menu-item-925" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-925">
                  <a href="about.php" class="menu-link">
                    <span class="text-wrap">About</span>
                  </a>
                </li>
                <li id="menu-item-925" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-925">
                  <a href="services.php" class="menu-link">
                    <span class="text-wrap">Type of Puja</span>
                  </a>
                </li>

                <li id="menu-item-925" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-925">
                  <a href="portfolio.php" class="menu-link">
                    <span class="text-wrap">Portfolio</span>
                  </a>
                </li>
                <li id="menu-item-925" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-925">
                  <a href="booknow.php" class="menu-link">
                    <span class="text-wrap">Book Now</span>
                  </a>
                </li>

                <li id="menu-item-926" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-926">
                  <a href="contact.php" class="menu-link">
                    <span class="text-wrap">Contact</span>
                  </a>
                </li>
                <li class="search-toggle-li">
                  <a href="javascript:void(0)" onclick="toggleSearch()"
                    class="site-search-toggle search-dropdown-toggle">
                    <span class="screen-reader-text">Toggle website search</span>
                    <i class=" icon-magnifier" aria-hidden="true" role="img"></i>
                  </a>
                </li>
              </ul>
              <div id="searchform-dropdown" class="header-searchform-wrap clr">
                <form aria-label="Search this website" role="search" method="get" class="searchform"
                  action="https://onlinepandit.in/">
                  <input aria-label="Insert search query" type="search" id="ocean-search-form-1" class="field"
                    autocomplete="off" placeholder="Search" name="s">
                </form>
              </div>
            </nav>
          </div>
          <div class="oceanwp-mobile-menu-icon clr mobile-right">
            <a href="javascript:void(0)" onclick="toggleMenu()" class="mobile-menu" aria-label="Mobile Menu">
              <i class="fa fa-bars" aria-hidden="true"></i>
              <span class="oceanwp-text">Menu</span>
              <span class="oceanwp-close-text">Close</span>
            </a>
          </div>
        </div>
        <div id="mobile-dropdown" class="clr">
          <nav class="clr" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
            <ul id="menu-main-menu-1" class="menu">
              <li
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-838 current_page_item menu-item-924">
                <a href="index.php" aria-current="page">HOME</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-925">
                <a href="about.php">ABOUT</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-926">
                <a href="services.php">TYPE OF PUJA</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-926">
                <a href="portfolio.php">PORTFOLIO</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-926">
                <a href="booknow.php">BOOK NOW</a>
              </li>

              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-926">
                <a href="contact.php">CONTACT</a>
              </li>
              <li class="search-toggle-li">
                <a href="index.php#" class="site-search-toggle search-dropdown-toggle">
                  <span class="screen-reader-text">Toggle website search</span>
                  <i class=" icon-magnifier" aria-hidden="true" role="img"></i>
                </a>
              </li>
            </ul>
            <div id="mobile-menu-search" class="clr">
              <form aria-label="Search this website" method="get" action="https://onlinepandit.in/"
                class="mobile-searchform">
                <input aria-label="Insert search query" value="" class="field" id="ocean-mobile-search-2" type="search"
                  name="s" autocomplete="off" placeholder="Search" />
                <button aria-label="Submit search" type="submit" class="searchform-submit">
                  <i class=" icon-magnifier" aria-hidden="true" role="img"></i>
                </button>
              </form>
            </div>
          </nav>
        </div>
      </header>
      <div style="background-color: #f99522;font-weight: bold;">
        <?php

        $counter = 0;
        foreach ($result as $key => $value) {
          foreach ($value as $key1 => $value1) {
            ?>
            <marquee behavior="" direction="">
              <a style="color: white;" href="admin/image/notification_pdf/<?php echo $value1->id; ?>/pdf/<?php echo $value1->id; ?>.pdf"
              target="_blank">
                <?php echo $value1->n_title; ?>
            </a>
          </marquee>
          <?php }
        } ?>
      </div>
      <main id="main" class="site-main clr" role="main">
        <div id="content-wrap" class="container clr">
          <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
              <article class="single-page-article clr">
                <div class="entry clr" itemprop="text">
                  <div data-elementor-type="wp-page" data-elementor-id="838" class="elementor elementor-838">
                    <section
                      class="elementor-section elementor-top-section elementor-element elementor-element-1dc3d2d1 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default"
                      data-id="1dc3d2d1" data-element_type="section"
                      data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:1187,&quot;url&quot;:&quot;img\/IMG-20221016-WA0011.jpg&quot;},{&quot;id&quot;:1190,&quot;url&quot;:&quot;img\/IMG-20221016-WA0014.jpg&quot;},{&quot;id&quot;:1185,&quot;url&quot;:&quot;img\/IMG-20221016-WA0009.jpg&quot;},{&quot;id&quot;:1026,&quot;url&quot;:&quot;img\/MKvr3t.jpg&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;_ha_eqh_enable&quot;:false}">
                      <div
                        class="elementor-background-slideshow swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl swiper-watch-progress"
                        dir="rtl">
                        <div class="swiper-wrapper" id="swiper-wrapper-87e55a2eead42c9c" aria-live="off"
                          style="transition-duration: 0ms;">
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(1519px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(3038px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(4557px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate-active"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(6076px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(7595px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide" data-swiper-slide-index="2"
                            role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(9114px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(10633px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-active"
                            data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 1; transform: translate3d(12152px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0011.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(13671px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0014.jpg&quot;);"></div>
                          </div>
                          <div class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(15190px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/IMG-20221016-WA0009.jpg&quot;);"></div>
                          </div>
                          <div
                            class="elementor-background-slideshow__slide swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(16709px, 0px, 0px);">
                            <div class="elementor-background-slideshow__slide__image"
                              style="background-image: url(&quot;img/slide/MKvr3t.jpg&quot;);"></div>
                          </div>
                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                      </div>
                      <div class="elementor-background-overlay"></div>
                      <div class="elementor-container elementor-column-gap-default">
                        <div
                          class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d9f1060"
                          data-id="3d9f1060" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                              class="elementor-section elementor-inner-section elementor-element elementor-element-5b24a46c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                              data-id="5b24a46c" data-element_type="section"
                              data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                              <div class="elementor-container elementor-column-gap-no">
                                <div
                                  class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2bd7183a"
                                  data-id="2bd7183a" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-f4745b3 elementor-widget elementor-widget-heading"
                                      data-id="f4745b3" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">North Indian Pandit
                                          in Bangalore</h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <section
                              class="elementor-section elementor-inner-section elementor-element elementor-element-374ed4c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn"
                              data-id="374ed4c2" data-element_type="section"
                              data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400,&quot;_ha_eqh_enable&quot;:false}">
                              <div class="elementor-container elementor-column-gap-narrow">
                                <div
                                  class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-778c7ca8"
                                  data-id="778c7ca8" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-391fe58 elementor-align-right elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                      data-id="391fe58" data-element_type="widget" data-widget_type="button.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-md"
                                            href="contact.php">
                                            <span class="elementor-button-content-wrapper">
                                              <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2dc34f30"
                                  data-id="2dc34f30" data-element_type="column">
                                  <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                      class="elementor-element elementor-element-5893ee77 elementor-align-left elementor-mobile-align-justify elementor-widget elementor-widget-button"
                                      data-id="5893ee77" data-element_type="widget" data-widget_type="button.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-md"
                                            href="about.php">
                                            <span class="elementor-button-content-wrapper">
                                              <span class="elementor-button-text">Learn About Us</span>
                                            </span>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>
                        </div>
                      </div>
                    </section>