(function(jQuery, $, window){
/*
 * jQuery Highlight plugin
 *
 * Based on highlight v3 by Johann Burkard
 * http://johannburkard.de/blog/programming/javascript/highlight-javascript-text-higlighting-jquery-plugin.html
 * Copyright (c) 2009 Bartek Szopka
 *
 * Licensed under MIT license.
 *
 */
;if ( typeof jQuery != 'undefined' ) {
    jQuery.extend({
        highlight: function (node, re, nodeName, className, excludeParents) {
            excludeParents = excludeParents == '' ? '.exhghttt' : excludeParents;
            if (node.nodeType === 3) {
                var normalized = node.data.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                var match = normalized.match(re);
                if (match) {
                    var highlight = document.createElement(nodeName || 'span');
                    highlight.className = className || 'highlight';
                    if (/\.|,|\s/.test(match[0].charAt(0)))
                        var index = match.index + 1;
                    else
                        var index = match.index;
                    var wordNode = node.splitText(index);
                    wordNode.splitText(match[1].length);
                    var wordClone = wordNode.cloneNode(true);
                    highlight.appendChild(wordClone);
                    wordNode.parentNode.replaceChild(highlight, wordNode);
                    return 1; //skip added node in parent
                }
            } else if ((node.nodeType === 1 && node.childNodes) && // only element nodes that have children
                !/(script|style)/i.test(node.tagName) && // ignore script and style nodes
                !jQuery(node).closest(excludeParents).length > 0 &&
                !(node.tagName === nodeName.toUpperCase() && node.className === className)) { // skip if already highlighted
                for (var i = 0; i < node.childNodes.length; i++) {
                    i += jQuery.highlight(node.childNodes[i], re, nodeName, className, excludeParents);
                }
            }
            return 0;
        }
    });

    jQuery.fn.unhighlight = function (options) {
        var settings = {className: 'highlight', element: 'span'};
        jQuery.extend(settings, options);

        return this.find(settings.element + "." + settings.className).each(function () {
            var parent = this.parentNode;
            parent.replaceChild(this.firstChild, this);
            parent.normalize();
        }).end();
    };

    jQuery.fn.highlight = function (words, options) {
        var settings = {
            className: 'highlight',
            element: 'span',
            caseSensitive: false,
            wordsOnly: false,
            excludeParents: ''
        };
        jQuery.extend(settings, options);

        if (words.constructor === String) {
            words = [words];
        }
        words = jQuery.grep(words, function (word, i) {
            return word != '';
        });
        words = jQuery.map(words, function (word, i) {
            return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&").normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        });
        if (words.length == 0) {
            return this;
        }
        ;

        var flag = settings.caseSensitive ? "" : "i";
        var pattern = "(" + words.join("|") + ")";
        if (settings.wordsOnly) {
            pattern = "(?:,|^|\\s)" + pattern + "(?:,|$|\\s)";
        }
        var re = new RegExp(pattern, flag);

        return this.each(function () {
            jQuery.highlight(this, re, settings.element, settings.className, settings.excludeParents);
        });
    };
}
})(asljQuery, asljQuery, window);