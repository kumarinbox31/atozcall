<meta charset="utf-8">
<!-- chrome frame -->
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<title><?php echo meta_title() ; ?></title>
<meta name="title" content="<?php echo meta_title() ; ?>" />
<meta name="description" content="<?php echo meta_description() ; ?>" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php 
// osc_enqueue_style('bootstrap', osc_current_web_theme_styles_url('bootstrap.min.css') );
osc_enqueue_style('custom', osc_current_web_theme_styles_url('custom.css') );
osc_enqueue_style('jquery-ui-datepicker', osc_assets_url('css/jquery-ui/jquery-ui.css'));
osc_enqueue_style('chosen-css', osc_current_web_theme_js_url('chosen/chosen.css') );
osc_register_script('global-theme-js', osc_current_web_theme_js_url('global.js'), 'jquery');
osc_register_script('chosen-js', osc_current_web_theme_js_url('chosen/chosen.jquery.min.js'), 'jquery');

osc_enqueue_script('jquery');
osc_enqueue_script('jquery-ui');
osc_enqueue_script('chosen-js');
osc_enqueue_script('global-theme-js');
osc_enqueue_script('php-date');
?>
    <!-- <script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) { var href = document.location.href; if (!href.match(/[?&]nowprocket/)) { if (href.indexOf("?") == -1) { if (href.indexOf("#") == -1) { document.location.href = href + "?nowprocket=1" } else { document.location.href = href.replace("#", "?nowprocket=1#") } } else { if (href.indexOf("#") == -1) { document.location.href = href + "&nowprocket=1" } else { document.location.href = href.replace("#", "&nowprocket=1#") } } } }</script> -->
    <!-- <script>class s { constructor() { this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this.touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this.interceptedClicks = [], window.addEventListener("pageshow", t => { this.persisted = t.persisted }), window.addEventListener("DOMContentLoaded", () => { this._preconnect3rdParties() }), this.delayedScripts = { normal: [], async: [], defer: [] }, this.trash = [], this.allJQueries = [] } _addUserInteractionListener(t) { if (document.hidden) { t._triggerListener(); return } this.triggerEvents.forEach(e => window.addEventListener(e, t.userEventHandler, { passive: !0 })), window.addEventListener("touchstart", t.touchStartHandler, { passive: !0 }), window.addEventListener("mousedown", t.touchStartHandler), document.addEventListener("visibilitychange", t.userEventHandler) } _removeUserInteractionListener() { this.triggerEvents.forEach(t => window.removeEventListener(t, this.userEventHandler, { passive: !0 })), document.removeEventListener("visibilitychange", this.userEventHandler) } _onTouchStart(t) { "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.addEventListener("mousemove", this.touchMoveHandler), t.target.addEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "onclick", "rocket-onclick"), this._pendingClickStarted()) } _onTouchMove(t) { window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.removeEventListener("mousemove", this.touchMoveHandler), t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this._pendingClickFinished() } _onTouchEnd(t) { window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, { passive: !0 }), window.removeEventListener("mousemove", this.touchMoveHandler) } _onClick(t) { t.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(t.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this._pendingClickFinished() } _replayClicks() { window.removeEventListener("touchstart", this.touchStartHandler, { passive: !0 }), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach(t => { t.target.dispatchEvent(new MouseEvent("click", { view: t.view, bubbles: !0, cancelable: !0 })) }) } _waitForPendingClicks() { return new Promise(t => { this._isClickPending ? this._pendingClickFinished = t : t() }) } _pendingClickStarted() { this._isClickPending = !0 } _pendingClickFinished() { this._isClickPending = !1 } _renameDOMAttribute(t, e, r) { t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(r, event.target.getAttribute(e)), event.target.removeAttribute(e)) } _triggerListener() { this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow() } _preconnect3rdParties() { let t = []; document.querySelectorAll("script[type=]").forEach(e => { if (e.hasAttribute("src")) { let r = new URL(e.html).origin; r !== location.origin && t.push({ src: r, crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type") }) } }), t = [...new Map(t.map(t => [JSON.stringify(t), t])).values()], this._batchInjectResourceHints(t, "preconnect") } async _loadEverythingNow() { this.lastBreath = Date.now(), this._delayEventListeners(this), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async); try { await this._triggerDOMContentLoaded(), await this._triggerWindowLoad() } catch (t) { console.error(t) } window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._waitForPendingClicks().then(() => { this._replayClicks() }), this._emptyTrash() } _registerAllDelayedScripts() { document.querySelectorAll("script[type=]").forEach(t => { t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t) }) } async _transformScript(t) { return new Promise((await this._littleBreath(), navigator.userAgent.indexOf("Firefox/index.html") > 0 || "" === navigator.vendor) ? e => { let r = document.createElement("script");[...t.attributes].forEach(t => { let e = t.nodeName; "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), r.setAttribute(e, t.nodeValue)) }), t.text && (r.text = t.text), r.hasAttribute("src") ? (r.addEventListener("load", e), r.addEventListener("error", e)) : (r.text = t.text, e()); try { t.parentNode.replaceChild(r, t) } catch (i) { e() } } : async e => { function r() { t.setAttribute("data-rocket-status", "failed"), e() } try { let i = t.getAttribute("data-rocket-type"), n = t.getAttribute("data-rocket-src"); t.text, i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", function r() { t.setAttribute("data-rocket-status", "executed"), e() }), t.addEventListener("error", r), n ? (t.removeAttribute("data-rocket-src"), t.src = n) : t.src = "data:text/javascript;base64," + btoa(t.text) } catch (s) { r() } }) } async _loadScriptsFromList(t) { let e = t.shift(); return e && e.isConnected ? (await this._transformScript(e), this._loadScriptsFromList(t)) : Promise.resolve() } _preloadAllScripts() { this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload") } _batchInjectResourceHints(t, e) { var r = document.createDocumentFragment(); t.forEach(t => { let i = t.getAttribute && t.getAttribute("data-rocket-src") || t.src; if (i) { let n = document.createElement("link"); n.href = i, n.rel = e, "preconnect" !== e && (n.as = "script"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), r.appendChild(n), this.trash.push(n) } }), document.head.appendChild(r) } _delayEventListeners(t) { let e = {}; function r(t, r) { !function t(r) { !e[r] && (e[r] = { originalFunctions: { add: r.addEventListener, remove: r.removeEventListener }, eventsToRewrite: [] }, r.addEventListener = function () { arguments[0] = i(arguments[0]), e[r].originalFunctions.add.apply(r, arguments) }, r.removeEventListener = function () { arguments[0] = i(arguments[0]), e[r].originalFunctions.remove.apply(r, arguments) }); function i(t) { return e[r].eventsToRewrite.indexOf(t) >= 0 ? "rocket-" + t : t } }(t), e[t].eventsToRewrite.push(r) } function i(t, e) { let r = t[e]; Object.defineProperty(t, e, { get: () => r || function () { }, set(i) { t["rocket" + e] = r = i } }) } r(document, "DOMContentLoaded"), r(window, "DOMContentLoaded"), r(window, "load"), r(window, "pageshow"), r(document, "readystatechange"), i(document, "onreadystatechange"), i(window, "onload"), i(window, "onpageshow") } _delayJQueryReady(t) { let e; function r(r) { if (r && r.fn && !t.allJQueries.includes(r)) { r.fn.ready = r.fn.init.prototype.ready = function (e) { return t.domReadyFired ? e.bind(document)(r) : document.addEventListener("rocket-DOMContentLoaded", () => e.bind(document)(r)), r([]) }; let i = r.fn.on; r.fn.on = r.fn.init.prototype.on = function () { if (this[0] === window) { function t(t) { return t.split(" ").map(t => "load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t).join(" ") } "string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = t(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach(e => { delete Object.assign(arguments[0], { [t(e)]: arguments[0][e] })[e] }) } return i.apply(this, arguments), this }, t.allJQueries.push(r) } e = r } r(window.jQuery), Object.defineProperty(window, "jQuery", { get: () => e, set(t) { r(t) } }) } async _triggerDOMContentLoaded() { this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange && document.rocketonreadystatechange() } async _triggerWindowLoad() { await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(), window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach(t => t(window).trigger("rocket-jquery-load")), await this._littleBreath(); let t = new Event("rocket-pageshow"); t.persisted = this.persisted, window.dispatchEvent(t), await this._littleBreath(), window.rocketonpageshow && window.rocketonpageshow({ persisted: this.persisted }) } _handleDocumentWrite() { let t = new Map; document.write = document.writeln = function (e) { let r = document.currentScript; r || console.error("WPRocket unable to document.write this: " + e); let i = document.createRange(), n = r.parentElement, s = t.get(r); void 0 === s && (s = r.nextSibling, t.set(r, s)); let a = document.createDocumentFragment(); i.setStart(a, 0), a.appendChild(i.createContextualFragment(e)), n.insertBefore(a, s) } } async _littleBreath() { Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now()) } async _requestAnimFrame() { return document.hidden ? new Promise(t => setTimeout(t)) : new Promise(t => requestAnimationFrame(t)) } _emptyTrash() { this.trash.forEach(t => t.remove()) } static run() { let t = new s; t._addUserInteractionListener(t) } } s.run();</script> -->

    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Lato%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap"
        media="print" onload="this.media='all'" /><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lato%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin&amp;display=swap" />
    </noscript>
    <link data-minify="1" rel='stylesheet' id='hfe-widgets-style-css'
        href='<?php echo osc_current_web_theme_url('wp-content/cache/min/1/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend2970.css?ver=1721995794'); ?>'
        type='text/css' media='all' />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
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
    <link rel='stylesheet' id='wp-block-library-css'
        href='<?php echo osc_current_web_theme_url('wp-includes/css/dist/block-library/style.minb6a4.css?ver=6.6.1'); ?>' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
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
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
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
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
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

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
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

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link data-minify="1" rel='stylesheet' id='woo_conditional_payments_css-css'
        href='<?php echo osc_current_web_theme_url('wp-content/cache/min/1/wp-content/plugins/conditional-payments-for-woocommerce/frontend/css/woo-conditional-payments2970.css?ver=1721995794'); ?>'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='hfe-style-css'
        href='<?php echo osc_current_web_theme_url('wp-content/cache/min/1/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor2970.css?ver=1721995794');?>'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='<?php echo osc_current_web_theme_url('wp-content/plugins/elementor/assets/css/frontend-lite.mind5d5.css?ver=3.23.4'); ?>' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/elementor/css/post-7fd47.css?ver=1720527465' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-3714-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/elementor/css/post-371479e3.css?ver=1722341691' type='text/css' media='all' />
    <link rel='stylesheet' id='deep-style-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/themes/elessi-theme-child/deep-style711c.html?cache=0.11087700+1724425727&amp;ver=6.6.1'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-fonts-icons-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/assets/minify-font-icons/fonts.min2970.css?ver=1721995794'
        type='text/css' media='all' />

    <link data-minify="1" rel='stylesheet' id='elessi-style-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/style4969.css?ver=1721995796' type='text/css'
        media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-child-style-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme-child/style2e72.css?ver=1722241372' type='text/css'
        media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-style-elementor-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/style-elementor4969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-style-crazy-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/assets/css/style-crazy-load4969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-style-large-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/assets/css/style-large4969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-loop-product-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/assets/css/style-loop-product-modern-64969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-style-font-weight-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/themes/elessi-theme/assets/css/style-font-weight-6004969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='nasa-sc-woo-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/plugins/nasa-core/assets/css/nasa-sc-woo4969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='nasa-sc-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/plugins/nasa-core/assets/css/nasa-sc4969.css?ver=1721995796'
        type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='elessi-style-dynamic-css'
        href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/uploads/nasa-dynamic/dynamic4969.css?ver=1721995796' type='text/css'
        media='all' />
    <style id='rocket-lazyload-inline-css' type='text/css'>
        .rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .rll-youtube-player:focus-within {
            outline: 2px solid currentColor;
            outline-offset: 5px;
        }

        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }

        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }

        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }

        .rll-youtube-player .play {
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            position: absolute;
            background: url(wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;
            background-color: transparent !important;
            cursor: pointer;
            border: none;
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/template" id="tmpl-variation-template">
    <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
    <!--n2css-->
    <script type="text/javascript" src="<?php echo osc_current_web_theme_url(); ?>wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js" defer></script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.1.4"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/aayuheal.com\/shopping-cart\/", "is_cart": "", "cart_redirect_after_add": "yes" };
        /* ]]> */
    </script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.1.4"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.1.4"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
        /* ]]> */
    </script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.1.4"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/themes/elessi-theme-child/deep-script.js?cache=0.11090400+1724425727&amp;ver=1"
        id="deep-script-js" defer></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_39cd1e98230ef5d75cee0026c39c3eab", "fragment_name": "wc_fragments_39cd1e98230ef5d75cee0026c39c3eab", "request_timeout": "5000" };
        /* ]]> */
    </script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=9.1.4"
        id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"
        defer></script>
    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
        /* ]]> */
    </script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-includes/js/wp-util.min.js?ver=6.6.1" id="wp-util-js"
        defer></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = { "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination." };
        /* ]]> */
    </script>
    <script type="" data-rocket-type="text/javascript"
        data-rocket-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.1.4"
        id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
    
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <script type="">

      window.OneSignal = window.OneSignal || [];

      OneSignal.push( function() {
        OneSignal.SERVICE_WORKER_UPDATER_PATH = 'OneSignalSDKUpdaterWorker.html';
                      OneSignal.SERVICE_WORKER_PATH = 'OneSignalSDKWorker.html';
                      OneSignal.SERVICE_WORKER_PARAM = { scope: '/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/push/onesignal/' };
        OneSignal.setDefaultNotificationUrl("index.html");
        var oneSignal_options = {};
        window._oneSignalInitOptions = oneSignal_options;

        oneSignal_options['wordpress'] = true;
oneSignal_options['appId'] = 'd66e256c-418e-49b9-ad73-b0de2bdb3d63';
oneSignal_options['allowLocalhostAsSecureOrigin'] = true;
oneSignal_options['welcomeNotification'] = { };
oneSignal_options['welcomeNotification']['title'] = "";
oneSignal_options['welcomeNotification']['message'] = "";
oneSignal_options['path'] = "wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/index.html";
oneSignal_options['promptOptions'] = { };
oneSignal_options['promptOptions']['actionMessage'] = "We'd like to show you notifications for the latest news and updates.";
oneSignal_options['promptOptions']['acceptButtonText'] = "Allow";
oneSignal_options['promptOptions']['cancelButtonText'] = "No Thanks";
oneSignal_options['promptOptions']['siteName'] = "index.html";
oneSignal_options['notifyButton'] = { };
oneSignal_options['notifyButton']['enable'] = true;
oneSignal_options['notifyButton']['position'] = 'bottom-right';
oneSignal_options['notifyButton']['theme'] = 'default';
oneSignal_options['notifyButton']['size'] = 'medium';
oneSignal_options['notifyButton']['showCredit'] = true;
oneSignal_options['notifyButton']['text'] = {};
                OneSignal.init(window._oneSignalInitOptions);
                OneSignal.showSlidedownPrompt();      });

      function documentInitOneSignal() {
        var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

        var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
          oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
      }

      if (document.readyState === 'complete') {
           documentInitOneSignal();
      }
      else {
           window.addEventListener("load", function(event){
               documentInitOneSignal();
          });
      }
    </script>
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style id='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('https://aayuheal.b-cdn.net/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <link rel="icon" href="wp-content/uploads/2024/03/favicon-trans-100x100.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2024/03/favicon-trans.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2024/03/favicon-trans.png" />
    <meta name="msapplication-TileImage"
        content="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/favicon-trans.png" />
    <style type="text/css" id="wp-custom-css">
        /*  Header padding between topwar and menu*/
        .site-header {
            padding: 0px 0px 0px 0px !important;
        }


        /* Marqueee */

        marquee {
            line-height: 1.4em !important;
        }

        .wpcf7-submit {
            margin-top: 50px !important;
        }

        @media only screen and (max-width: 767px) {
            marquee {
                line-height: 1.8em !important;
            }
        }

        /* marquee Parent Div Width */
        /*  .rtl-right{
    width:100% !important;
} */

        /* Menu Top margin */
        .nasa-bg-dark {
            margin-top: 0px !important;
        }

        .tabs-display ul.nasa-tabs {
            display: none !important;
        }

        .nasa-post-date-author,
        .entry-readmore a {
            display: inline-block;
            font-size: 90%;
            border-radius: 3px;
            padding: 10px 15px;
            color: #fff;
            background-color: #09552d !important;
        }

        .entry-readmore a:hover {
            color: #fff !important;
            background-color: #83b738 !important;
        }

        .nasa-post-date-author:hover {
            background-color: #83b738 !important;
        }

        /* .nasa-post-date-author:hover{
    background-color:#83b738 ;
}
 */

        #top-bar {
            height: 25px !important;
        }


        .btn-compare {
            display: none !important;
        }

        /* checkout page second form hide */
        .wc-block-checkout {
            display: none !important;
        }

        /* Sort bu option on archieve product page */
        .woocommerce-ordering {
            display: none !important;
        }

        /* Bredcrump subtitle path style */
        .breadcrumb a:hover {
            color: #fff !important;
        }

        /* Archieve post buttons  */
        .entry-readmore {
            opacity: 1 !important;
        }

        .filter-cat-icon {
            display: none !important;
        }

        .client .client-inner {
            padding: 30px !important;
        }

        /* Hide tagsOption in Floating menu */
        .widget_nasa_tag_cloud {
            display: none !important;
        }

        #nasa-footer .btn-submit-newsletters:hover {
            border-color: #83b738;
        }

        input[type="submit"] {
            color: #fff !important;
            background-color: #09552d !important;
            border: 0px;
        }

        input[type="submit"]:hover {
            color: #fff !important;
            background-color: #83b738 !important;
            border: 0px;
        }

        /* Single add to cart button border remove on hover */
        .single_add_to_cart_button:hover {
            border: 0px !important;
        }

        /* Request a callback and recently view sticky button hide*/
        .nasa-static-group-btn {
            display: none;
        }

        /* Grid Sections Button style*/
        /* 
span.nasa-post-date-author {
    font-size: 15px;
      transform: uppercase !important;
} */

        .nasa-post-read-more span {
            text-transform: capitalize;
            font-size: 15px;
            font-family: lato;
            font-weight: bold !important;
            padding: 8px 24px;
        }

        i.pe-7s-news-paper {
            display: none;
        }

        /* Blog Page Button*/

        .entry-readmore a {
            font-size: 15px;
            text-transform: capitalize !important;
            padding: 8px 24px;
            font-family: lato;
            font-weight: bold !important;
        }

        .add_to_cart_text {
            text-transform: capitalize !important;
        }

        /*dropdown-menu  */

        .header-nav>li.menu-item .nav-dropdown {
            margin-top: 0px;
        }

        @media only screen and (max-width: 767px) {
            .botpenguin-right {
                bottom: 10% !important;
            }

            .nasa-in-mobile #top-bar .topbar-mobile-text {
                line-height: 0px !important;
            }

            .mobile-menu {
                padding: 0px 30px !important;
            }

            .breadcrumb {
                margin-top: 50px !important;
            }

        }


        /* Menu View All Button */

        .Menu_view_all {
            font-weight: bold;
            color: #09552D;
        }

        .nasa-breadcrumb-has-bg {
            /* 	background-size:contain !important; */
            background-repeat: no-repeat !important;
            background-position: center !important;
        }

        .elementor-divider__element a {
            color: #09552d !important;
        }

        .breadcrumb-row {
            color: #09552d !important;
        }

        .breadcrumb-row span {
            color: #09552d !important;
        }

        /* .nasa-top-row-filter li.nasa-widget-toggle.nasa-widget-show:nth-child(4) {
  display: none;
} */
        #nasa_woocommerce_status_filter-2 {
            display: none !important;
        }

        .product_title.entry-title {
            text-transform: capitalize;
        }

        .nasa-show-one-line {
            text-transform: capitalize;
        }
    </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>
<style>
    #site-navigation{
        flex-wrap:wrap;
    }
</style>
<?php 


osc_run_hook('header') ;
?>

    <!-- Start Wrapper Site -->
    <div id="wrapper">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
