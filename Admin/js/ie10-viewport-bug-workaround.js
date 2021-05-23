/ *!
 * IE10 viewport hack para superfície / área de trabalho do Windows 8 bug
 * Copyright 2014-2015 Twitter, Inc.
 * Licenciado sob o MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * /

// Veja os documentos do Primeiros passos para mais informações:
// http://getbootstrap.com/getting-started/#support-ie10-width

(function () {
  'use strict';

  if (navigator.userAgent.match (/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement ('style')
    msViewportStyle.appendChild (
      document.createTextNode (
        '@ -ms-viewport {width: auto! important}'
      )
    )
    document.querySelector ('head'). appendChild (msViewportStyle)
  }

}) ();