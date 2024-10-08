(function ($) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */
    var Wdb_Offcanvas_Menu = function ($scope, $) {
        var offcanvas_html = $scope.find(".wdb-element-transfer-to-body");
        if (offcanvas_html.length) {
            $(
                $scope.find(".wdb-element-transfer-to-body").prop("outerHTML")
            ).appendTo("body");
            offcanvas_html.remove();
        }
        var content_source = $scope
            .find(".wdb--info-animated-offcanvas")
            .attr("data-content_source");
        var preset = $scope
            .find(".wdb--info-animated-offcanvas")
            .attr("data-preset");
        var canvas_gl = null;
        if (typeof gsap === "object") {
            canvas_gl = gsap.timeline();
        }

        $(document).on("click", ".wdb--info-animated-offcanvas", function (e) {
            e.preventDefault();

            if (typeof gsap === "object") {
                if (content_source === "elementor_shortcode") {
                    canvas_gl.to(".wdb-offcanvas-gl-style", {
                        top: 0,
                        visibility: "visible",
                        duration: 0.8,
                        opacity: 1,
                        rotationX: 0,
                        perspective: 0,
                    });
                } else {
                    var canvas2 = gsap.timeline();
                    canvas2.to(".wdb-offcanvas-gl-style", {
                        duration: 0.5,
                        opacity: 1,
                        "z-index": 9999,
                    });
                    canvas2.to(
                        ".offcanvas__left-2",
                        {
                            duration: 0.6,
                            top: 0,
                            opacity: 1,
                            visibility: "visible",
                        },
                        "-==.5"
                    );
                    // Part 2
                    canvas2.to(
                        ".offcanvas__right-2",
                        {
                            duration: 0.6,
                            bottom: 0,
                            opacity: 1,
                            visibility: "visible",
                        },
                        "-=0.6"
                    );
                }
            } else {
                $(".wdb-offcanvas-gl-style").css({
                    opacity: 1,
                    visibility: "visible",
                    transition: "all 0.5s",
                    "z-index": 998,
                });

                $(".offcanvas__left-2").css({
                    opacity: 1,
                    top: 0,
                    visibility: "visible",
                    transition: "all 0.5s",
                });

                $(".offcanvas__right-2").css({
                    opacity: 1,
                    bottom: 0,
                    visibility: "visible",
                    transition: "all 0.5s",
                });

                $(".offcanvas-3__area").css({
                    transform: "unset",
                });

                $(
                    ".offcanvas-4__area,.offcanvas-4__menu ul li,.offcanvas-3__meta, .offcanvas-3__social"
                ).css({
                    transform: "unset",
                    opacity: 1,
                    visibility: "visible",
                    top: 0,
                });

                $(".offcanvas-4__thumb,.offcanvas-4__meta").css({
                    opacity: 1,
                    left: 0,
                    visibility: "visible",
                });

                $(".wdb-offcanvas-gl-style").css({
                    "z-index": 9999,
                });

                $(".offcanvas-6__menu-wrapper,.offcanvas-6__meta-wrapper").css({
                    left: 0,
                    visibility: "visible",
                    opacity: "1",
                    transform: "unset",
                });
            } // gsap end
        });

        $(document).on("click", ".offcanvas--close--button-js", function () {
            if (typeof gsap === "object") {
                if (content_source === "elementor_shortcode") {
                    canvas_gl.to(".wdb-offcanvas-gl-style", {
                        top: "-20%",
                        duration: 0.8,
                        rotationX: 25,
                        perspective: 359,
                        opacity: 0,
                        index: -1,
                    });

                    canvas_gl.to(".wdb-offcanvas-gl-style", {
                        visibility: "hidden",
                        duration: 0.8,
                    });
                } else {
                    var canvas2 = gsap.timeline();
                    // Part 2
                    canvas2.to(".offcanvas__right-2", {
                        duration: 0.6,
                        bottom: "-50%",
                        opacity: 0,
                    });

                    canvas2.to(
                        ".offcanvas__left-2",
                        {
                            duration: 0.6,
                            top: "-50%",
                            opacity: 0,
                        },
                        "-=.6"
                    );

                    canvas2.to(".wdb-offcanvas-gl-style", {
                        duration: 0.8,
                        opacity: 0,
                        "z-index": -1,
                    });

                    $(".wdb--info-animated-offcanvas").css({
                        cursor: "wait",
                        "pointer-events": "none",
                    });

                    setTimeout(function () {
                        $(".wdb--info-animated-offcanvas").removeAttr("style");
                    }, 1000);
                }
            } else {
                $(".wdb-offcanvas-gl-style").css({
                    opacity: 0,
                    visibility: "hidden",
                    transition: "all 0.5s",
                    "z-index": -1,
                });
            }
        });

        $(".offcanvas__menu-2").meanmenu({
            meanScreenWidth: "5000",
            meanMenuContainer: ".offcanvas__menu-2-wrapper",
            meanMenuCloseSize: "36px",
            disable_megamenu_mobile: "default",
        });
    };

    // Make sure you run this code under Elementor.
    $(window).on("elementor/frontend/init", function () {
        elementorFrontend.hooks.addAction(
            "frontend/element_ready/wdb--offcanvas-menu.default",
            Wdb_Offcanvas_Menu
        );
    });
})(jQuery);
