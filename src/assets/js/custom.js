"use strict";




//FOR THE PRODUCT INCREAMENT AND DECREAMENT
// Starts here

$('.plus').click(function () {
	changeValue(1);
});
$('.minus').click(function () {
	changeValue(-1);
});

function changeValue(val) {
	var container = $('.value');
	var current = parseInt(container.html(), 10);

	container.html(Math.max(0, current + val).toString());
}
// Ends here




//FOR THE ADD TO CART POPUP
// Starts here
var modal = document.getElementById("addtocart-popup");
var btn = document.getElementsByClassName("add-to-cart");
var span = document.getElementsByClassName("close")[0];

$(".add-to-cart").click(function () {
	var $modal = $('#addtocart-popup');
	$modal.addClass('active');
});

$(".close-popup").click(function () {
	var $modal = $('#addtocart-popup');
	$modal.removeClass('active');
});

window.onclick = function (event) {
	if (event.target == modal) {
		var $modal = $('#addtocart-popup');
		$modal.removeClass('active');
	}
}
// Ends here





// FOR THE TABS
// Starts here
function openTab(evt, tabTitle) {
	// Declare all variables
	var i, tabcontent, tab;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tab-content");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// // Get all elements with class="tab" and remove the class "active"
	tab = document.getElementsByClassName("tab");
	for (i = 0; i < tab.length; i++) {
		tab[i].className = tab[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(tabTitle).style.display = "grid";
	evt.currentTarget.className += " active";
}
// Ends here




// This adds a padding bottom to the <body> tag so things don't go underneath the bottom menu
// Starts here
$('body.with-bottom-menu').css({
	'padding-bottom': $('#bottom-menu').height() + "px"
});
// Ends here





// // This adds a margin bottom to the .search-suggestions in the Discover page so it doesn't don't go underneath the bottom menu.
// Starts here
$('body.with-bottom-menu .search-sugestions').css({
	'margin-bottom': $('#bottom-menu').height() + "px"
});
// Ends here






// This helps to add a .searching class when the user clicks the search input box. the .searching class brings up the .search-suggestions popup.
// if the .searching class is removed, the search popup hides immediately
// Starts here
$('#search-input').focus(function () {
	$("body").addClass('searching');
});

// this closes the search popup
$('.close-search').click(function () {
	$("body").removeClass('searching');
});

// this also closes the popup when the esc button is pressed
$(document).keypress(function (e) {
	if (e.keyCode === 27) {
		$("body").removeClass('searching');
	}
});
// Ends here









// SVG EXTRACTOR STARTS
// THIS HELPS EXTRACT SVGS WHEN A WEBPAGE LOADS SO YOU CAN CHANGE THEIR COLORS OR CUSTOMIZE THEM

var pAgree = '1';

jQuery('img.svg').each(function () {
	var $img = jQuery(this);
	var imgID = $img.attr('id');
	var imgClass = $img.attr('class');
	var imgURL = $img.attr('src');

	jQuery.get(imgURL, function (data) {
		// Get the SVG tag, ignore the rest
		var $svg = jQuery(data).find('svg');

		// Add replaced image's ID to the new SVG
		if (typeof imgID !== 'undefined') {
			$svg = $svg.attr('id', imgID);
		}
		// Add replaced image's classes to the new SVG
		if (typeof imgClass !== 'undefined') {
			$svg = $svg.attr('class', imgClass + ' replaced-svg');
		}

		// Remove any invalid XML tags as per http://validator.w3.org
		$svg = $svg.removeAttr('xmlns:a');

		// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
		if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
			$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
		}

		// Replace image with new SVG
		$img.replaceWith($svg);

	}, 'xml');

});

// SVG EXTRACTOR STOPS


// ==========================================
// ! (function) => img2svg
// ==========================================

// ((window, {
//     implementation
// }) => {
//     const isLocal = window.location.protocol === "file:";
//     const hasSvgSupport = implementation.hasFeature(
//         "http://www.w3.org/TR/SVG11/feature#BasicStructure",
//         "1.1"
//     );

//     function uniqueClasses(list) {
//         list = list.split(" ");
//         const hash = {};
//         let i = list.length;
//         const out = [];
//         while (i--) {
//             if (!hash.hasOwnProperty(list[i])) {
//                 hash[list[i]] = 1;
//                 out.unshift(list[i]);
//             }
//         }
//         return out.join(" ");
//     }

//     const forEach =
//         Array.prototype.forEach ||
//         function (fn, scope) {
//             if (this === void 0 || this === null || typeof fn !== "function") {
//                 throw new TypeError();
//             }

//             let i;
//             const len = this.length >>> 0;
//             for (i = 0; i < len; ++i) {
//                 if (i in this) {
//                     fn.call(scope, this[i], i, this);
//                 }
//             }
//         };

//     const svgCache = {};
//     let svgCount = 0;
//     const svgCountEls = [];
//     const requestQueue = [];
//     const ranScripts = {};
//     const svgClone = (sourceSvg) => sourceSvg.cloneNode(true);
//     const queueRequest = (url, callback) => {
//         requestQueue[url] = requestQueue[url] || [];
//         requestQueue[url].push(callback);
//     };
//     const processRequestQueue = (url) => {
//         for (let i = 0, len = requestQueue[url].length; i < len; i++) {
//             ((index) => {
//                 setTimeout(() => {
//                     requestQueue[url][index](svgClone(svgCache[url]));
//                 }, 0);
//             })(i);
//         }
//     };
//     const svgLoad = (url, callback) => {
//         if (!window.SVGSVGElement) return;
//         if (svgCache[url] !== undefined) {
//             if (svgCache[url] instanceof SVGSVGElement) {
//                 callback(svgClone(svgCache[url]));
//             } else {
//                 queueRequest(url, callback);
//             }
//         } else {
//             if (!window.XMLHttpRequest) {
//                 callback("Browser does not support XMLHttpRequest");
//                 return false;
//             }
//             svgCache[url] = {};
//             queueRequest(url, callback);
//             const httpRequest = new XMLHttpRequest();
//             httpRequest.onreadystatechange = () => {
//                 if (httpRequest.readyState === 4) {
//                     if (httpRequest.status === 404 || httpRequest.responseXML === null) {
//                         callback(`Unable to load SVG file: ${url}`);
//                         if (isLocal)
//                             callback(
//                                 "Note: SVG injection ajax calls do not work locally without adjusting security setting in your browser. Or consider using a local webserver."
//                             );
//                         callback();
//                         return false;
//                     }
//                     if (httpRequest.status === 200 || (isLocal && httpRequest.status === 0)) {
//                         if (httpRequest.responseXML instanceof Document) {
//                             svgCache[url] = httpRequest.responseXML.documentElement;
//                         } else if (DOMParser && DOMParser instanceof Function) {
//                             let xmlDoc;
//                             try {
//                                 const parser = new DOMParser();
//                                 xmlDoc = parser.parseFromString(httpRequest.responseText, "text/xml");
//                             } catch (e) {
//                                 xmlDoc = undefined;
//                             }
//                             if (!xmlDoc || xmlDoc.getElementsByTagName("parsererror").length) {
//                                 callback(`Unable to parse SVG file: ${url}`);
//                                 return false;
//                             } else {
//                                 svgCache[url] = xmlDoc.documentElement;
//                             }
//                         }
//                         processRequestQueue(url);
//                     } else {
//                         callback(
//                             `There was a problem injecting the SVG: ${httpRequest.status} ${httpRequest.statusText}`
//                         );
//                         return false;
//                     }
//                 }
//             };
//             httpRequest.open("GET", url);
//             if (httpRequest.overrideMimeType) httpRequest.overrideMimeType("text/xml");
//             httpRequest.send();
//         }
//     };
//     const injectElement = (el, evalScripts, pngFallback, callback) => {
//         const imgUrl = el.getAttribute("data-src") || el.getAttribute("src");
//         if (!/\.svg/i.test(imgUrl)) {
//             callback(`Attempted to inject a file with a non-svg extension: ${imgUrl}`);
//             return;
//         }
//         if (!hasSvgSupport) {
//             const perElementFallback =
//                 el.getAttribute("data-fallback") || el.getAttribute("data-png");
//             if (perElementFallback) {
//                 el.setAttribute("src", perElementFallback);
//                 callback(null);
//             } else if (pngFallback) {
//                 el.setAttribute(
//                     "src",
//                     `${pngFallback}/${imgUrl.split("/").pop().replace(".svg", ".png")}`
//                 );
//                 callback(null);
//             } else {
//                 callback(
//                     "This browser does not support SVG and no PNG fallback was defined."
//                 );
//             }
//             return;
//         }
//         if (svgCountEls.includes(el)) {
//             return;
//         }

//         svgCountEls.push(el);
//         el.setAttribute("src", "");
//         svgLoad(imgUrl, (svg) => {
//             if (typeof svg === "undefined" || typeof svg === "string") {
//                 callback(svg);
//                 return false;
//             }
//             const imgId = el.getAttribute("id");
//             if (imgId) {
//                 svg.setAttribute("id", imgId);
//             }
//             const imgTitle = el.getAttribute("title");
//             if (imgTitle) {
//                 svg.setAttribute("title", imgTitle);
//             }
//             const classMerge = []
//                 .concat(
//                     svg.getAttribute("class") || [],
//                     "injected-svg",
//                     el.getAttribute("class") || []
//                 )
//                 .join(" ");
//             svg.setAttribute("class", uniqueClasses(classMerge));
//             const imgStyle = el.getAttribute("style");
//             if (imgStyle) {
//                 svg.setAttribute("style", imgStyle);
//             }
//             const imgData = [].filter.call(
//                 el.attributes,
//                 ({
//                     name
//                 }) => /^data-\w[\w\-]*$/.test(name) || "onclick".match(name)
//             );
//             forEach.call(imgData, ({
//                 name,
//                 value
//             }) => {
//                 if (name && value) {
//                     svg.setAttribute(name, value);
//                 }
//             });

//             const iriElementsAndProperties = {
//                 clipPath: ["clip-path"],
//                 "color-profile": ["color-profile"],
//                 cursor: ["cursor"],
//                 filter: ["filter"],
//                 linearGradient: ["fill", "stroke"],
//                 marker: ["marker", "marker-start", "marker-mid", "marker-end"],
//                 mask: ["mask"],
//                 pattern: ["fill", "stroke"],
//                 radialGradient: ["fill", "stroke"]
//             };
//             let element;
//             let elementDefs;
//             let properties;
//             let currentId;
//             let newId;
//             Object.keys(iriElementsAndProperties).forEach((key) => {
//                 element = key;
//                 properties = iriElementsAndProperties[key];
//                 elementDefs = svg.querySelectorAll(`defs ${element}[id]`);
//                 for (let i = 0, elementsLen = elementDefs.length; i < elementsLen; i++) {
//                     currentId = elementDefs[i].id;
//                     newId = `${currentId}-${svgCount}`;
//                     let referencingElements;
//                     forEach.call(properties, (property) => {
//                         referencingElements = svg.querySelectorAll(
//                             `[${property}*="${currentId}"]`
//                         );
//                         for (
//                             let j = 0, referencingElementLen = referencingElements.length; j < referencingElementLen; j++
//                         ) {
//                             referencingElements[j].setAttribute(property, `url(#${newId})`);
//                         }
//                     });
//                     elementDefs[i].id = newId;
//                 }
//             });
//             svg.removeAttribute("xmlns:a");
//             const scripts = svg.querySelectorAll("script");
//             const scriptsToEval = [];
//             let script;
//             let scriptType;
//             for (let k = 0, scriptsLen = scripts.length; k < scriptsLen; k++) {
//                 scriptType = scripts[k].getAttribute("type");
//                 if (
//                     !scriptType ||
//                     scriptType === "application/ecmascript" ||
//                     scriptType === "application/javascript"
//                 ) {
//                     script = scripts[k].innerText || scripts[k].textContent;
//                     scriptsToEval.push(script);
//                     svg.removeChild(scripts[k]);
//                 }
//             }
//             if (
//                 scriptsToEval.length > 0 &&
//                 (evalScripts === "always" ||
//                     (evalScripts === "once" && !ranScripts[imgUrl]))
//             ) {
//                 for (
//                     let l = 0, scriptsToEvalLen = scriptsToEval.length; l < scriptsToEvalLen; l++
//                 ) {
//                     new Function(scriptsToEval[l])(window);
//                 }
//                 ranScripts[imgUrl] = true;
//             }
//             const styleTags = svg.querySelectorAll("style");
//             forEach.call(styleTags, (styleTag) => {
//                 styleTag.textContent += "";
//             });
//             el.parentNode.replaceChild(svg, el);
//             delete svgCountEls[svgCountEls.indexOf(el)];
//             el = null;
//             svgCount++;
//             callback(svg);
//         });
//     };

//     const img2svg = (elements, options = {}, done) => {
//         const evalScripts = options.evalScripts || "always";
//         const pngFallback = options.pngFallback || false;
//         const eachCallback = options.each;
//         if (elements && elements.length !== undefined) {
//             let elementsLoaded = 0;
//             forEach.call(elements, (element) => {
//                 injectElement(element, evalScripts, pngFallback, (svg) => {
//                     if (eachCallback && typeof eachCallback === "function") eachCallback(svg);
//                     if (done && elements.length === ++elementsLoaded) done(elementsLoaded);
//                 });
//             });
//         } else {
//             if (elements) {
//                 injectElement(elements, evalScripts, pngFallback, (svg) => {
//                     if (eachCallback && typeof eachCallback === "function") eachCallback(svg);
//                     if (done) done(1);
//                     elements = null;
//                 });
//             } else {
//                 if (done) done(0);
//             }
//         }
//     };
//     if (typeof module === "object" && typeof module.exports === "object") {
//         module.exports = exports = img2svg;
//     } else if (typeof define === "function" && define.amd) {
//         define(() => img2svg);
//     } else if (typeof window === "object") {
//         window.img2svg = img2svg;
//     }
// })(window, document);

// // ==========================================
// // ! (function) => document ready
// // ==========================================

// const readytorun = (callback) => {
//     if (document.readyState !== "loading") {
//         callback();
//     } else {
//         document.addEventListener("DOMContentLoaded", callback);
//     }
// };

// // ==========================================
// // ! (function) => initialize
// // ==========================================

// readytorun(() => {
//     const el = document.querySelectorAll(".svg");
//     img2svg(el);
// });