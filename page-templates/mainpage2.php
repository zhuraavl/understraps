<?php
/**
 * Template Name: main page 2
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
/*
if($_GET['lll']) {
    global $wp_query;
    $projects = array('projects' => array());
    
    while ( $wp_query->have_posts() ) : $wp_query->the_post();
    $post = $wp_query->get_post();
    
    $project = array(
        "title" => "Changes on the Fly",
        "id" => 1039,
        "slug" => "changes-on-the-fly",
        "images" => array(),
        "repeatedimages" => array(array(
            "src"=>'/wp-content/themes/understraps/pic/1.png',
            "w" => 1366,
            "h" => 2048
        )),
        "videos" => array()
    );
    
    
    static $instance = 0;
    $instance++;
    
    if ( ! empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) ) {
            $attr['orderby'] = 'post__in';
        }
        $attr['include'] = $attr['ids'];
    }
    
    $output = apply_filters( 'post_gallery', '', $attr, $instance );
    
    if ( ! empty( $output ) ) {
        return $output;
    }
    
    $html5 = current_theme_supports( 'html5', 'gallery' );
    $atts  = shortcode_atts(
        array(
            'order'      => 'ASC',
            'orderby'    => 'menu_order ID',
            'id'         => $post ? $post->ID : 0,
            'itemtag'    => $html5 ? 'figure' : 'dl',
            'icontag'    => $html5 ? 'div' : 'dt',
            'captiontag' => $html5 ? 'figcaption' : 'dd',
            'columns'    => 3,
            'size'       => 'thumbnail',
            'include'    => '',
            'exclude'    => '',
            'link'       => '',
        ),
        $attr,
        'gallery'
        );
    
    $id = (int) $atts['id'];
    
    if ( ! empty( $atts['include'] ) ) {
        $_attachments = get_posts(
            array(
                'include'        => $atts['include'],
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
        
        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[ $val->ID ] = $_attachments[ $key ];
        }
    } elseif ( ! empty( $atts['exclude'] ) ) {
        $attachments = get_children(
            array(
                'post_parent'    => $id,
                'exclude'        => $atts['exclude'],
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
    } else {
        $attachments = get_children(
            array(
                'post_parent'    => $id,
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
    }
    
    if ( empty( $attachments ) ) {
        return '';
    }
    
    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment ) {
            if ( ! empty( $atts['link'] ) ) {
                if ( 'none' === $atts['link'] ) {
                    $output .= wp_get_attachment_image( $att_id, $atts['size'], false, $attr );
                } else {
                    $output .= wp_get_attachment_link( $att_id, $atts['size'], false );
                }
            } else {
                $output .= wp_get_attachment_link( $att_id, $atts['size'], true );
            }
            $output .= "\n";
        }
        return $output;
    }
    
    $itemtag    = tag_escape( $atts['itemtag'] );
    $captiontag = tag_escape( $atts['captiontag'] );
    $icontag    = tag_escape( $atts['icontag'] );
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) ) {
        $itemtag = 'dl';
    }
    if ( ! isset( $valid_tags[ $captiontag ] ) ) {
        $captiontag = 'dd';
    }
    if ( ! isset( $valid_tags[ $icontag ] ) ) {
        $icontag = 'dt';
    }
    
    $columns   = (int) $atts['columns'];
    $itemwidth = $columns > 0 ? floor( 100 / $columns ) : 100;
    $float     = is_rtl() ? 'right' : 'left';
    
    $selector = "gallery-{$instance}";
    
    $gallery_style = '';
    
    
    
    $size_class  = sanitize_html_class( is_array( $atts['size'] ) ? implode( 'x', $atts['size'] ) : $atts['size'] );
    
    foreach ( $attachments as $id => $attachment ) {
        
        $attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
        
        if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], false, false, false, $attr );
        } elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], false, $attr );
        } else {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], true, false, false, $attr );
        }
        
        $image_meta = wp_get_attachment_metadata( $id );
        
        $orientation = '';
        
        if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
            $orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
        }
        
        $project["images"][] = array(
            "src"=>$image_output,
            "w" => 1366,
            "h" => 2048
        );
        
    }
    
    $projects["projects"][] = $project;
    
    endwhile;
    
    print_r( json_encode($projects));
    exit();
}
*/
if($_GET['lll']) {
    global $wp_query, $post;
    $queried_post = get_page_by_path($wp_query->query_vars['pagename'],OBJECT,'page');
    $projects = array('projects' => array());
    
    
    $project = array(
        "title" => "Changes on the Fly",
        "id" => 1039,
        "slug" => "changes-on-the-fly",
        "images" => array(),
        "repeatedimages" => array(/*array(
            "src"=>'/wp-content/themes/understraps/pic/1.png',
            "w" => 1366,
            "h" => 2048
        )*/),
        "videos" => array()
    );
    
    $images = array();
    foreach (get_post_gallery_images( $queried_post->ID) as $id => $attachment ) {
        
        $project["images"][] = array(
            "src"=>$attachment,
            "w" => 1366,
            "h" => 2048
        );
        
        
    }
    $projects["projects"][] = $project;
    
   print_r(json_encode($projects));
    
    exit();
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/understraps/css/app.css">
</head>


<body>
	<?php get_header(); ?>
	
	<div class="appwrapper">
	<div id="app" class="loaded-content">
		
	</div>
	</div>
	
	<style>
	.appwrapper {
		position: relative;
		height: 100vh;
        max-width: 100%;
        overflow: hidden;
	}
	.appwrapper div {
		z-index: 8;
	}
	.appwrapper canvas {
		z-index: 7;
	}
	.appwrapper .first {
		display: none !important;
	}
	</style>
	<script type="text/javascript">
	(function(e) {
	    function t(t) {
	        for (var i, s, a = t[0], l = t[1], c = t[2], u = 0, d = []; u < a.length; u++)
	            s = a[u],
	            Object.prototype.hasOwnProperty.call(n, s) && n[s] && d.push(n[s][0]),
	            n[s] = 0;
	        for (i in l)
	            Object.prototype.hasOwnProperty.call(l, i) && (e[i] = l[i]);
	        h && h(t);
	        while (d.length)
	            d.shift()();
	        return o.push.apply(o, c || []),
	        r()
	    }
	    function r() {
	        for (var e, t = 0; t < o.length; t++) {
	            for (var r = o[t], i = !0, a = 1; a < r.length; a++) {
	                var l = r[a];
	                0 !== n[l] && (i = !1)
	            }
	            i && (o.splice(t--, 1),
	            e = s(s.s = r[0]))
	        }
	        return e
	    }
	    var i = {}
	      , n = {
	        app: 0
	    }
	      , o = [];
	    function s(t) {
	        if (i[t])
	            return i[t].exports;
	        var r = i[t] = {
	            i: t,
	            l: !1,
	            exports: {}
	        };
	        return e[t].call(r.exports, r, r.exports, s),
	        r.l = !0,
	        r.exports
	    }
	    s.m = e,
	    s.c = i,
	    s.d = function(e, t, r) {
	        s.o(e, t) || Object.defineProperty(e, t, {
	            enumerable: !0,
	            get: r
	        })
	    }
	    ,
	    s.r = function(e) {
	        "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
	            value: "Module"
	        }),
	        Object.defineProperty(e, "__esModule", {
	            value: !0
	        })
	    }
	    ,
	    s.t = function(e, t) {
	        if (1 & t && (e = s(e)),
	        8 & t)
	            return e;
	        if (4 & t && "object" === typeof e && e && e.__esModule)
	            return e;
	        var r = Object.create(null);
	        if (s.r(r),
	        Object.defineProperty(r, "default", {
	            enumerable: !0,
	            value: e
	        }),
	        2 & t && "string" != typeof e)
	            for (var i in e)
	                s.d(r, i, function(t) {
	                    return e[t]
	                }
	                .bind(null, i));
	        return r
	    }
	    ,
	    s.n = function(e) {
	        var t = e && e.__esModule ? function() {
	            return e["default"]
	        }
	        : function() {
	            return e
	        }
	        ;
	        return s.d(t, "a", t),
	        t
	    }
	    ,
	    s.o = function(e, t) {
	        return Object.prototype.hasOwnProperty.call(e, t)
	    }
	    ,
	    s.p = "/dist/";
	    var a = window["webpackJsonp"] = window["webpackJsonp"] || []
	      , l = a.push.bind(a);
	    a.push = t,
	    a = a.slice();
	    for (var c = 0; c < a.length; c++)
	        t(a[c]);
	    var h = l;
	    o.push([0, "chunk-vendors"]),
	    r()
	}
	)({
	    0: function(e, t, r) {
	        e.exports = r("56d7")
	    },
	    4251: function(e, t, r) {},
	    "56d7": function(e, t, r) {
	        "use strict";
	        r.r(t);
	        r("e260"),
	        r("e6cf"),
	        r("cca6"),
	        r("a79d");
	        var i = r("2b0e")
	          , n = function() {
	            var e = this
	              , t = e.$createElement
	              , r = e._self._c || t;
	            return e.loaded ? r("div", {
	                class: {
	                    "loaded-content": e.loadedContent,
	                    "started-scrolling": e.startedScrolling
	                },
	                attrs: {
	                    id: "app"
	                }
	            }, [r("home", {
	                staticClass: "content",
	                attrs: {
	                    content: e.content
	                },
	                on: {
	                    startedScrolling: e.onStartedScrolling,
	                    "loaded-content": e.hasLoadedContent
	                }
	            }), r("div", {
	                staticClass: "first"
	            }, [r("img", {
	                attrs: {
	                    src: e.content.first,
	                    alt: ""
	                }
	            })]), e._m(0)], 1) : e._e()
	        }
	          , o = [function() {
	            var e = this
	              , t = e.$createElement
	              , i = e._self._c || t;
	            return i("div", {
	                staticClass: "loader"
	            }, [i("img", {
	                attrs: {
	                    src: r("cf1c"),
	                    alt: ""
	                }
	            })])
	        }
	        ]
	          , s = (r("d3b7"),
	        function() {
	            var e = this
	              , t = e.$createElement
	              , r = e._self._c || t;
	            return r("div", [r("div", {
	                staticClass: "home"
	            }, [r("div", {
	                ref: "scrollsurface",
	                staticClass: "scrollsurface"
	            }, [r("div", {
	                ref: "scrollpane",
	                staticClass: "scrollpane"
	            })]), r("canvas", {
	                ref: "ree",
	                class: {
	                    orbit: e.useOrbitControls
	                }
	            })]), r("div", {
	                staticClass: "videowrapper"
	            }, [r("video", {
	                ref: "video",
	                class: {
	                    visible: e.videoVisible
	                },
	                attrs: {
	                    autoplay: "",
	                    loop: "",
	                    muted: "",
	                    playsinline: "",
	                    src: e.videoSource
	                },
	                domProps: {
	                    muted: !0
	                }
	            })])])
	        }
	        )
	          , a = []
	          , l = (r("a4d3"),
	        r("e01a"),
	        r("d28b"),
	        r("4de4"),
	        r("d81d"),
	        r("45fc"),
	        r("3ca3"),
	        r("38cf"),
	        r("ddb0"),
	        r("5a89"))
	          , c = (r("6397"),
	        r("c8b5"))
	          , h = {
	            name: "home",
	            props: {
	                content: Object
	            },
	            data: function() {
	                return {
	                    items: [],
	                    y: 0,
	                    pinchScale: 0,
	                    lastY: 0,
	                    lastDelta: 0,
	                    renderer: null,
	                    camera: null,
	                    debugText: "debug",
	                    scene: {},
	                    meshes: [],
	                    useOrbitControls: !1,
	                    useOrbitCamera: !1,
	                    orbitControls: {},
	                    orbitCamera: {},
	                    cameraHelper: {},
	                    visibleQueue: [],
	                    videoVisible: !1,
	                    videoSource: "",
	                    empty: !0,
	                    emptyInterval: -1,
	                    startedScrolling: !1,
	                    nextMesh: 0,
	                    sequentialMode: !1
	                }
	            },
	            methods: {
	                onPinch: function(e) {
	                    alert(e)
	                },
	                checkEmpty: function() {
	                    var e = this.meshes.filter((function(e) {
	                        return 1 == e.material.map.loaded
	                    }
	                    ));
	                    e.length > 13 && (clearInterval(this.emptyInterval),
	                    this.$emit("loaded-content"),
	                    this.empty = !1,
	                    this.handleScroll())
	                },
	                checkOrbitControls: function(e) {
	                    e.target.checked ? (this.useOrbitControls = !0,
	                    this.animateOrbitControls()) : (this.useOrbitControls = !1,
	                    this.animate())
	                },
	                checkOrbitCamera: function(e) {
	                    e.target.checked ? (this.useOrbitCamera = !0,
	                    this.animateOrbitControls()) : (this.useOrbitCamera = !1,
	                    this.animate())
	                },
	                bendPlaneGeometry: function(e, t) {
	                    for (var r = new l["CubicBezierCurve3"](e.vertices[0],new l["Vector3"](e.parameters.width / 2,0,t),new l["Vector3"](e.parameters.width / 2,0,t),e.vertices[e.vertices.length - 1]), i = r.getPoints(Math.abs(e.vertices.length) - 1), n = 1; n < 2; n++)
	                        for (var o = 0; o < i.length; o++)
	                            e.vertices[2 === n ? i.length + o : o].z = i[o].z;
	                    return e.computeFaceNormals(),
	                    e.computeVertexNormals(),
	                    e
	                },
	                bendPlaneGeometryHalf: function(e, t) {
	                    for (var r = new l["CubicBezierCurve3"](e.vertices[0],new l["Vector3"](e.parameters.width / 2,0,t),new l["Vector3"](e.parameters.width / 2,0,t),e.vertices[e.vertices.length / 2 - 1]), i = r.getPoints(Math.abs(e.vertices.length / 2) - 1), n = 1; n < 3; n++)
	                        for (var o = 0; o < i.length - 1; o++)
	                            e.vertices[2 === n ? i.length + o : o].z = i[o].z;
	                    return e.computeFaceNormals(),
	                    e.computeVertexNormals(),
	                    e
	                },
	                bendPlaneGeometryVertical: function(e, t, r) {
	                    for (var i = new l["CubicBezierCurve3"](e.vertices[0],new l["Vector3"](e.parameters.width / 2,0,t),new l["Vector3"](e.parameters.width / 2,0,t),e.vertices[e.parameters.widthSegments]), n = e.parameters.heightSegments, o = e.parameters.widthSegments, s = i.getPoints(o), a = 0, c = 0; c < n + 1; c++)
	                        for (var h = 0; h < o + 1; h++)
	                            e.vertices[a++].z = s[h].z;
	                    return e.computeFaceNormals(),
	                    e.computeVertexNormals(),
	                    e
	                },
	                resetZ: function(e) {
	                    var t = !0
	                      , r = !1
	                      , i = void 0;
	                    try {
	                        for (var n, o = e.vertices[Symbol.iterator](); !(t = (n = o.next()).done); t = !0) {
	                            var s = n.value;
	                            s.z = 0
	                        }
	                    } catch (a) {
	                        r = !0,
	                        i = a
	                    } finally {
	                        try {
	                            t || null == o.return || o.return()
	                        } finally {
	                            if (r)
	                                throw i
	                        }
	                    }
	                    return e
	                },
	                shuffleArray: function(e) {
	                    for (var t = e.length - 1; t > 0; t--) {
	                        var r = Math.floor(Math.random() * (t + 1))
	                          , i = [e[r], e[t]];
	                        e[t] = i[0],
	                        e[r] = i[1]
	                    }
	                    return e
	                },
	                onResize: function() {
	                    var e = window.innerWidth
	                      , t = window.innerHeight
	                      , r = window.innerWidth * window.innerHeight / 1e6;
	                    r < .5 && (this.camera.fov = 75),
	                    r >= .5 && r < .9 && (this.camera.fov = 65),
	                    r >= .9 && r < 1.6 && (this.camera.fov = 60),
	                    r >= 1.6 && r < 2 && (this.camera.fov = 58),
	                    this.camera.aspect = e / t,
	                    this.camera.updateProjectionMatrix(),
	                    this.renderer.setSize(e, t),
	                    this.renderer.render(this.scene, this.camera)
	                },
	                handleScroll: function() {
	                    this.$refs.scrollpane.offsetHeight,
	                    window.innerHeight;
	                    this.y = this.$refs.scrollsurface.scrollTop + 100 * this.pinchScale,
	                    !this.startedScrolling && this.$refs.scrollsurface.scrollTop > 20 && (this.startedScrolling = !0,
	                    this.$emit("startedScrolling")),
	                    this.useOrbitControls || this.animate()
	                },
	                animateOrbitControls: function() {
	                    this.useOrbitControls && (requestAnimationFrame(this.animateOrbitControls),
	                    this.orbitControls.update(),
	                    this.useOrbitCamera ? this.renderer.render(this.scene, this.orbitCamera) : this.renderer.render(this.scene, this.camera))
	                },
	                createVector: function(e, t, r, i, n, o) {
	                    var s = new l["Vector3"](e,t,r)
	                      , a = s.project(i);
	                    return a.x = (a.x + 1) / 2 * n,
	                    a.y = -(a.y - 1) / 2 * o,
	                    a
	                },
	                updateVisibleQueue: function() {
	                    var e = this
	                      , t = !0
	                      , r = !1
	                      , i = void 0;
	                    try {
	                        for (var n, o = this.visibleQueue[Symbol.iterator](); !(t = (n = o.next()).done); t = !0) {
	                            var s = n.value
	                              , a = this.y - this.lastY;
	                            s.position.z += a / 2,
	                            this.lastDelta = a,
	                            s.position.z > 1500 && (s.toBeRemoved = !0),
	                            s.position.z < -2e3 && (s.toBeRemoved = !0)
	                        }
	                    } catch (w) {
	                        r = !0,
	                        i = w
	                    } finally {
	                        try {
	                            t || null == o.return || o.return()
	                        } finally {
	                            if (r)
	                                throw i
	                        }
	                    }
	                    var l = this.visibleQueue.filter((function(e) {
	                        return !0 === e.toBeRemoved
	                    }
	                    ))
	                      , c = this.visibleQueue.filter((function(e) {
	                        return !0 !== e.toBeRemoved
	                    }
	                    ))
	                      , h = !0
	                      , u = !1
	                      , d = void 0;
	                    try {
	                        for (var f, v = l[Symbol.iterator](); !(h = (f = v.next()).done); h = !0) {
	                            var m = f.value;
	                            m.visible = !1,
	                            m.toBeRemoved = !1
	                        }
	                    } catch (w) {
	                        u = !0,
	                        d = w
	                    } finally {
	                        try {
	                            h || null == v.return || v.return()
	                        } finally {
	                            if (u)
	                                throw d
	                        }
	                    }
	                    this.visibleQueue = c;
	                    var p = this.meshes.filter((function(e) {
	                        return 1 == e.material.map.loaded
	                    }
	                    ))
	                      , b = this.meshes.length;
	                    if (!(this.sequentialMode && p.length < b)) {
	                        var y = function() {
	                            var t = null;
	                            if (e.sequentialMode ? (t = p[e.nextMesh],
	                            e.nextMesh++,
	                            e.nextMesh > p.length - 1 && (e.nextMesh = 0)) : t = p[Math.floor(Math.random() * p.length)],
	                            !e.sequentialMode && e.visibleQueue.some((function(e) {
	                                return e === t
	                            }
	                            )))
	                                return "continue";
	                            0 === e.visibleQueue.length ? (t.position.z = 200,
	                            e.visibleQueue.push(t)) : (e.lastDelta >= 0 ? (t.position.z = e.visibleQueue[0].position.z - 300,
	                            e.visibleQueue.unshift(t)) : (t.position.z = e.visibleQueue[e.visibleQueue.length - 1].position.z + 300,
	                            e.visibleQueue.push(t)),
	                            t.visible = !0)
	                        };
	                        while (this.visibleQueue.length < 10)
	                            y();
	                        this.lastY = this.y
	                    }
	                },
	                warpCloseMeshes: function() {
	                    var e = !0
	                      , t = !1
	                      , r = void 0;
	                    try {
	                        for (var i, n = this.visibleQueue[Symbol.iterator](); !(e = (i = n.next()).done); e = !0) {
	                            var o = i.value;
	                            if (null !== o.videoAttached && o.position.z > -100 && o.position.z < 175) {
	                                this.videoVisible = !0,
	                                this.videoSource = o.videoAttached;
	                                var s = o.position.x - o.geometry.parameters.width / 2
	                                  , a = o.position.x + o.geometry.parameters.width / 2
	                                  , l = o.position.y - o.geometry.parameters.height / 2
	                                  , c = o.position.y + o.geometry.parameters.height / 2
	                                  , h = this.createVector(s, l, o.position.z, this.camera, window.innerWidth, window.innerHeight)
	                                  , u = this.createVector(a, l, o.position.z, this.camera, window.innerWidth, window.innerHeight)
	                                  , d = this.createVector(s, c, o.position.z, this.camera, window.innerWidth, window.innerHeight);
	                                this.createVector(a, c, o.position.z, this.camera, window.innerWidth, window.innerHeight);
	                                this.$refs.video.style.top = d.y + "px",
	                                this.$refs.video.style.left = h.x + "px";
	                                var f = u.x - h.x;
	                                this.$refs.video.style.width = f + "px"
	                            }
	                            o.position.z >= 175 && this.videoSource === o.videoAttached && (this.videoVisible = !1,
	                            this.videoSource = ""),
	                            o.position.z < -100 && this.videoSource === o.videoAttached && (this.videoVisible = !1,
	                            this.videoSource = ""),
	                            o.position.z > 0 ? "regular" === o.typeObject && null !== o.effect && (0 === o.effect && (o.geometry = this.bendPlaneGeometryVertical(o.geometry, -o.position.z / 1.2, 2)),
	                            1 === o.effect && (o.geometry = this.bendPlaneGeometry(o.geometry, -o.position.z / 1.2)),
	                            2 === o.effect && (o.geometry = this.bendPlaneGeometryHalf(o.geometry, -o.position.z / 1.2)),
	                            o.geometry.verticesNeedUpdate = !0,
	                            o.customNeedsReset = !0) : o.customNeedsReset && (o.geometry = this.resetZ(o.geometry),
	                            o.geometry.verticesNeedUpdate = !0,
	                            o.customNeedsReset = !1)
	                        }
	                    } catch (v) {
	                        t = !0,
	                        r = v
	                    } finally {
	                        try {
	                            e || null == n.return || n.return()
	                        } finally {
	                            if (t)
	                                throw r
	                        }
	                    }
	                },
	                animate: function() {
	                    this.empty || (this.updateVisibleQueue(),
	                    this.warpCloseMeshes(),
	                    this.useOrbitCamera ? (this.camera.updateMatrixWorld(!0),
	                    this.cameraHelper.update(),
	                    this.renderer.render(this.scene, this.orbitCamera)) : this.renderer.render(this.scene, this.camera))
	                }
	            },
	            beforeDestroy: function() {
	                this.$refs.scrollsurface.removeEventListener("scroll", this.handleScroll),
	                window.removeEventListener("resize", this.onResize)
	            },
	            mounted: function() {
	                var e = this
	                  , t = new c(this.$refs.scrollsurface,{});
	                t.get("pinch").set({
	                    enable: !1
	                }),
	                this.$refs.scrollsurface.addEventListener("touchstart", (function(e) {
	                    e.touches.length >= 2 && t.get("pinch").set({
	                        enable: !0
	                    })
	                }
	                )),
	                this.$refs.scrollsurface.addEventListener("touchend", (function(e) {
	                    e.touches.length < 2 && t.get("pinch").set({
	                        enable: !1
	                    })
	                }
	                )),
	                this.debugText = "-",
	                t.on("pinch", (function(t) {
	                    e.pinchScale = t.scale,
	                    e.handleScroll()
	                }
	                )),
	                t.on("pinchend", (function(t) {
	                    e.$refs.scrollsurface.scrollTop = e.$refs.scrollsurface.scrollTop + 100 * e.pinchScale,
	                    e.pinchScale = 0
	                }
	                )),
	                window.addEventListener("resize", this.onResize),
	                this.$refs.scrollsurface.addEventListener("scroll", this.handleScroll),
	                this.scene = new l["Scene"];
	                var r = 75
	                  , i = window.innerWidth / window.innerHeight
	                  , n = 75
	                  , o = 1500;
	                this.camera = new l["PerspectiveCamera"](r,i,n,o),
	                this.camera.position.z = 150,
	                this.renderer = new l["WebGLRenderer"]({
	                    canvas: this.$refs.ree,
	                    antialias: !0
	                }),
	                this.renderer.setSize(window.innerWidth, window.innerHeight);
	                var s = new l["TextureLoader"];
	                s.setCrossOrigin("anonymous");
	                var a = !0
	                  , h = !1
	                  , u = void 0;
	                try {
	                    for (var d, f = this.content.projects[Symbol.iterator](); !(a = (d = f.next()).done); a = !0) {
	                        var v = d.value
	                          , m = !0
	                          , p = !1
	                          , b = void 0;
	                        try {
	                            for (var y, w = v.images[Symbol.iterator](); !(m = (y = w.next()).done); m = !0) {
	                                var g = y.value
	                                  , C = new l["MeshBasicMaterial"]({
	                                    map: s.load(g.src, (function(e) {
	                                        e.loaded = !0
	                                    }
	                                    ))
	                                });
	                                C.anisotropy = this.renderer.capabilities.getMaxAnisotropy(),
	                                C.map.minFilter = l["LinearFilter"];
	                                var S = 0
	                                  , x = 2
	                                  , z = Math.floor(Math.random() * (x - S + 1) + S)
	                                  , O = null;
	                                O = 0 === z ? new l["PlaneGeometry"](g.w / 10,g.h / 10,30,1) : new l["PlaneGeometry"](g.w / 10,g.h / 10,1,30);
	                                var M = new l["Mesh"](O,C);
	                                M.visible = !1,
	                                M.effect = z,
	                                M.typeObject = "regular",
	                                M.videoAttached = null,
	                                this.meshes.push(M),
	                                this.scene.add(M)
	                            }
	                        } catch (q) {
	                            p = !0,
	                            b = q
	                        } finally {
	                            try {
	                                m || null == w.return || w.return()
	                            } finally {
	                                if (p)
	                                    throw b
	                            }
	                        }
	                        var V = !0
	                          , P = !1
	                          , j = void 0;
	                        try {
	                            for (var $, Q = v.videos[Symbol.iterator](); !(V = ($ = Q.next()).done); V = !0) {
	                                var H = $.value
	                                  , R = new l["MeshBasicMaterial"]({
	                                    map: s.load(H.src, (function(e) {
	                                        e.loaded = !0
	                                    }
	                                    ))
	                                });
	                                R.anisotropy = this.renderer.capabilities.getMaxAnisotropy(),
	                                R.map.minFilter = l["LinearFilter"];
	                                var _ = null;
	                                _ = new l["PlaneGeometry"](H.w / 10,H.h / 10,1,1);
	                                var E = new l["Mesh"](_,R);
	                                E.visible = !1,
	                                E.effect = null,
	                                E.typeObject = "regular",
	                                E.isVideo = !0,
	                                E.videoAttached = H.url,
	                                this.meshes.push(E),
	                                this.scene.add(E)
	                            }
	                        } catch (q) {
	                            P = !0,
	                            j = q
	                        } finally {
	                            try {
	                                V || null == Q.return || Q.return()
	                            } finally {
	                                if (P)
	                                    throw j
	                            }
	                        }
	                        var L = !0
	                          , A = !1
	                          , W = void 0;
	                        try {
	                            for (var B, G = v.repeatedimages[Symbol.iterator](); !(L = (B = G.next()).done); L = !0) {
	                                var N = B.value
	                                  , T = new l["MeshBasicMaterial"]({
	                                    map: s.load(N.src, (function(e) {
	                                        e.wrapS = e.wrapT = l["RepeatWrapping"],
	                                        e.offset.set(0, 0),
	                                        e.repeat.set(10, 10),
	                                        e.loaded = !0
	                                    }
	                                    ))
	                                });
	                                T.anisotropy = this.renderer.capabilities.getMaxAnisotropy(),
	                                T.map.minFilter = l["LinearFilter"];
	                                var F = new l["PlaneGeometry"](2 * N.w,2 * N.h,1,1)
	                                  , k = new l["Mesh"](F,T);
	                                k.visible = !1,
	                                k.typeObject = "large",
	                                k.rotation.y = .2,
	                                k.videoAttached = null,
	                                this.meshes.push(k),
	                                this.scene.add(k)
	                            }
	                        } catch (q) {
	                            A = !0,
	                            W = q
	                        } finally {
	                            try {
	                                L || null == G.return || G.return()
	                            } finally {
	                                if (A)
	                                    throw W
	                            }
	                        }
	                    }
	                } catch (q) {
	                    h = !0,
	                    u = q
	                } finally {
	                    try {
	                        a || null == f.return || f.return()
	                    } finally {
	                        if (h)
	                            throw u
	                    }
	                }
	                this.orbitCamera = new l["PerspectiveCamera"](45,window.innerWidth / window.innerHeight,1,1e4),
	                this.orbitCamera.position.set(-900, 0, 1500),
	                this.orbitControls = new l["OrbitControls"](this.orbitCamera,this.renderer.domElement),
	                this.orbitControls.enableKeys = !0,
	                this.orbitControls.target = new l["Vector3"](0,0,-100),
	                this.useOrbitControls && this.animateOrbitControls(),
	                this.onResize(),
	                this.emptyInterval = setInterval(this.checkEmpty, 300)
	            }
	        }
	          , u = h
	          , d = (r("dbc2"),
	        r("2877"))
	          , f = Object(d["a"])(u, s, a, !1, null, null, null)
	          , v = f.exports
	          , m = {
	            name: "app",
	            data: function() {
	                return {
	                    content: {},
	                    loaded: !1,
	                    loadedContent: !1,
	                    inverted: !0,
	                    startedScrolling: !1
	                }
	            },
	            components: {
	                home: v
	            },
	            mounted: function() {
	                var e = this;
	                fetch("<?php echo $_SERVER['REQUEST_URI']?>?lll=1").then((function(e) { //fetch("/content/").then((function(e) {
	                    return e.json()
	                }
	                )).then((function(t) {
	                    e.content = t,
	                    e.tags = t.tags,
	                    e.loaded = !0
	                }
	                )).catch((function(e) {
	                    alert("Error while fetching data." + e)
	                }
	                ))
	            },
	            methods: {
	                hasLoadedContent: function() {
	                    this.loadedContent = !0
	                },
	                onStartedScrolling: function() {
	                    this.startedScrolling = !0
	                }
	            }
	        }
	          , p = m
	          , b = (r("5c0b"),
	        Object(d["a"])(p, n, o, !1, null, null, null))
	          , y = b.exports;
	        i["a"].config.productionTip = !1,
	        new i["a"]({
	            render: function(e) {
	                return e(y)
	            }
	        }).$mount("#app")
	    },
	    "5c0b": function(e, t, r) {
	        "use strict";
	        var i = r("9c0c")
	          , n = r.n(i);
	        n.a
	    },
	    "9c0c": function(e, t, r) {},
	    cf1c: function(e, t, r) {
	        e.exports = r.p + "img/loading.d6c434ba.gif"
	    },
	    dbc2: function(e, t, r) {
	        "use strict";
	        var i = r("4251")
	          , n = r.n(i);
	        n.a
	    }
	});
	//# sourceMappingURL=app.js.map

	</script>
	<script type="text/javascript" src="/wp-content/themes/understraps/js/chunk-vendors.js"></script>
	
		
		


	<?php get_footer(); ?>

	<?php wp_footer(); ?>
	
</body>
</html>
