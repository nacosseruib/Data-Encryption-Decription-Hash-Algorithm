var revapi4,
    tpj;
(function() {
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad)
        else
    onLoad();
    function onLoad() {
        if (tpj===undefined) {
            tpj = jQuery;
            if("off" == "on") tpj.noConflict();
        }

        // Slider No
        if (tpj("#rs_slider_01").revolution == undefined){
            revslider_showDoubleJqueryError("#rs_slider_01");
        }else{
            revapi2 = tpj("#rs_slider_01").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                     mouseScrollReverse:"default",
                    onHoverStop:"off",
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1920,1024,778,480],
                gridheight:[830,700,750,600],
                lazyType:"none",
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }; /* END OF revapi call */

        if (tpj("#rs_slider_02").revolution == undefined){
            revslider_showDoubleJqueryError("#rs_slider_02");
        }else{
            revapi3 = tpj("#rs_slider_02").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                     mouseScrollReverse:"default",
                    onHoverStop:"off",
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:false,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1920,1024,778,480],
                gridheight: [950, 850, 800, 700],
                lazyType:"none",
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }; /* END OF revapi call */

        if (tpj("#rs_slider_03").revolution == undefined){
            revslider_showDoubleJqueryError("#rs_slider_03");
        }else{
            revapi4 = tpj("#rs_slider_03").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1920, 1024, 778, 480],
                gridheight: [830, 830, 700, 700],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }; /* END OF revapi call */

        if (tpj("#rs_slider_04").revolution == undefined){
            revslider_showDoubleJqueryError("#rs_slider_04");
        }else{
            revapi2 = tpj("#rs_slider_04").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                     mouseScrollReverse:"default",
                    onHoverStop:"off",
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1920,1024,778,480],
                gridheight:[950,750,800,600],
                lazyType:"none",
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }; /* END OF revapi call */

        }; 
}()); /* END OF WRAPPING FUNCTION */