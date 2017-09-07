/* * LEGEND - Iconic Coming Soon Template
*
* This is a premium product available exclusively at this address http://themeforest.net/user/madeon08/portfolio
*
* This file is minified/crypted only for the demo, you will find an expanded, commented and accurate file in your download pack.
*
* Thanks for your support!
*
* */
$(window).load(function() {
    "use strict";
    setTimeout(function() {
        $("#preloader").velocity({
            opacity: "0",
            complete: function() {
                $("#loading").velocity("transition.shrinkOut", {
                    duration: 1e3,
                    easing: [.7, 0, .3, 1]
                })
            }
        })
    }, 3e3),
    setTimeout(function() {
        $("#home-wrap").velocity("transition.fadeIn", {
            opacity: "1",
            complete: function() {
                setTimeout(function() {
                    $(".text-intro").each(function(e) {
                        !function(o) {
                            setTimeout(function() {
                                $(o).addClass("animated-middle fadeInUp").removeClass("opacity-0")
                            }, 150 * e + 150)
                        }(this)
                    })
                }, 100)
            }
        }, {
            duration: 3e3,
            easing: [.7, 0, .3, 1]
        })
    }, 0)
}),
$(document).ready(function() {
    "use strict";
    function e() {
        o ? ($("body").addClass("scroll-touch"),
        $("a#open-more-info").on("click", function() {
            event.preventDefault();
            var e = "#" + this.getAttribute("data-target");
            $("body").animate({
                scrollTop: $(e).offset().top
            }, 500)
        })) : $("body").mCustomScrollbar({
            scrollInertia: 150,
            axis: "y",
            callbacks: {
                whileScrolling: function() {
                    var e = this.mcs.top;
                    -200 >= e ? $(".to-scroll").addClass("hide-scroll") : $(".to-scroll").removeClass("hide-scroll")
                }
            }
        })
    }
    $("#open-more-info").on("click", function() {
        $("#info-wrap").toggleClass("show-info"),
        $("#home-wrap").toggleClass("hide-left"),
        $(".global-overlay").toggleClass("hide-overlay"),
        $("#first-inside").toggleClass("hide-top"),
        $("#second-inside").toggleClass("hide-bottom"),
        $("#back-side").toggleClass("show-side"),
        $(".hide-content").toggleClass("open-hide"),
        $("#close-more-info").toggleClass("hide-close"),
        $(".command-info-wrap").toggleClass("show-command"),
        $(".mCSB_scrollTools").toggleClass("mCSB_scrollTools-left"),
        setTimeout(function() {
            $("#mcs_container").mCustomScrollbar("scrollTo", "#info-wrap", {
                scrollInertia: 500,
                callbacks: !1
            })
        }, 350)
    }),
    $(".to-close").on("click", function() {
        $("#info-wrap").removeClass("show-info"),
        $("#home-wrap").removeClass("hide-left"),
        $(".global-overlay").removeClass("hide-overlay"),
        $("#first-inside").toggleClass("hide-top"),
        $("#second-inside").toggleClass("hide-bottom"),
        $("#back-side").toggleClass("show-side"),
        $(".hide-content").toggleClass("open-hide"),
        $("#close-more-info").toggleClass("hide-close"),
        $(".command-info-wrap").toggleClass("show-command"),
        $(".mCSB_scrollTools").toggleClass("mCSB_scrollTools-left"),
        setTimeout(function() {
            $("#mcs_container").mCustomScrollbar("scrollTo", "#info-wrap", {
                scrollInertia: 500,
                callbacks: !1
            })
        }, 350)
    }),
    $(".expand-player").on("click", function() {
        $("#home-wrap").velocity({
            opacity: "0"
        }, {
            duration: 0,
            easing: [.7, 0, .3, 1],
            delay: 0,
            complete: function() {
                $(".global-overlay").velocity({
                    opacity: "0"
                }, {
                    duration: 0,
                    easing: [.7, 0, .3, 1],
                    delay: 0
                })
            }
        })
    }),
    $(".compress-player").on("click", function() {
        $("#home-wrap").velocity({
            opacity: "1"
        }, {
            duration: 0,
            easing: [.7, 0, .3, 1],
            delay: 0,
            complete: function() {
                $(".global-overlay").velocity({
                    opacity: "1"
                }, {
                    duration: 0,
                    easing: [.7, 0, .3, 1],
                    delay: 0
                })
            }
        })
    });
    $(function() {
        $("body").bind("mousewheel", function(e) {
            e.preventDefault();
            var o = this.scrollTop;
            this.scrollTop = o + e.deltaY * e.deltaFactor * -1
        })
    });
    var o = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/);
    e();
    window.matchMedia("(min-width: 1025px)").matches && $(function() {
        $("[data-toggle='tooltip']").tooltip()
    });
    $("#notifyMe").notifyMe();
    // function() {
    //     var e = document.querySelector("[data-dialog]")
    //       , o = document.getElementById(e.getAttribute("data-dialog"))
    //       , t = new DialogFx(o);
    //     e.addEventListener("click", t.toggle.bind(t))
    // }();
    var t = function(e) {
        for (var o = function(e) {
            for (var o = e.childNodes, t = o.length, n = [], i, l, a, s, r = 0; t > r; r++)
                i = o[r],
                1 === i.nodeType && (l = i.children[0],
                a = l.getAttribute("data-size").split("x"),
                s = {
                    src: l.getAttribute("href"),
                    w: parseInt(a[0], 10),
                    h: parseInt(a[1], 10)
                },
                i.children.length > 1 && (s.title = i.children[1].innerHTML),
                l.children.length > 0 && (s.msrc = l.children[0].getAttribute("src")),
                s.el = i,
                n.push(s));
            return n
        }, t = function d(e, o) {
            return e && (o(e) ? e : d(e.parentNode, o))
        }, n = function(e) {
            e = e || window.event,
            e.preventDefault ? e.preventDefault() : e.returnValue = !1;
            var o = e.target || e.srcElement
              , n = t(o, function(e) {
                return e.tagName && "FIGURE" === e.tagName.toUpperCase()
            });
            if (n) {
                for (var i = n.parentNode, a = n.parentNode.childNodes, s = a.length, r = 0, c, d = 0; s > d; d++)
                    if (1 === a[d].nodeType) {
                        if (a[d] === n) {
                            c = r;
                            break
                        }
                        r++
                    }
                return c >= 0 && l(c, i),
                !1
            }
        }, i = function() {
            var e = window.location.hash.substring(1)
              , o = {};
            if (e.length < 5)
                return o;
            for (var t = e.split("&"), n = 0; n < t.length; n++)
                if (t[n]) {
                    var i = t[n].split("=");
                    i.length < 2 || (o[i[0]] = i[1])
                }
            return o.gid && (o.gid = parseInt(o.gid, 10)),
            o
        }, l = function(e, t, n, i) {
            var l = document.querySelectorAll(".pswp")[0], a, s, r;
            if (r = o(t),
            s = {
                galleryUID: t.getAttribute("data-pswp-uid"),
                getThumbBoundsFn: function(e) {
                    var o = r[e].el.getElementsByTagName("img")[0]
                      , t = window.pageYOffset || document.documentElement.scrollTop
                      , n = o.getBoundingClientRect();
                    return {
                        x: n.left,
                        y: n.top + t,
                        w: n.width
                    }
                }
            },
            i)
                if (s.galleryPIDs) {
                    for (var c = 0; c < r.length; c++)
                        if (r[c].pid === e) {
                            s.index = c;
                            break
                        }
                } else
                    s.index = parseInt(e, 10) - 1;
            else
                s.index = parseInt(e, 10);
            isNaN(s.index) || (n && (s.showAnimationDuration = 0),
            a = new PhotoSwipe(l,PhotoSwipeUI_Default,r,s),
            a.init())
        }, a = document.querySelectorAll(e), s = 0, r = a.length; r > s; s++)
            a[s].setAttribute("data-pswp-uid", s + 1),
            a[s].onclick = n;
        var c = i();
        c.pid && c.gid && l(c.pid, a[c.gid - 1], !0, !0)
    };
    t(".my-gallery")
});
