/**
 * Bugra SIKEL tarafindan eglence amacli hazirlanmistir.
 * author: @bugraskl
 * https://www.bugra.work
 * https://rgsteknoloji.com.tr
 * bugraskl@gmail.com
 */

var languages = navigator.language || navigator.userLanguage,
  userLang = languages.substr(0, 2);
if ("" == userLang || "tr" != userLang || "fr" != userLang || "es" != userLang)
  var jsonFile = "./assets/en.json";
if ("tr" == userLang) var jsonFile = "./assets/tr.json";
if ("fr" == userLang) var jsonFile = "./assets/fr.json";
if ("es" == userLang) var jsonFile = "./assets/es.json";
$.getJSON(jsonFile, function (a) {
  var b = "http://192.168.1.2/googledaarasana/",
    c = $("#searchinput"),
    d = $(".messages"),
    e = $(".bar"),
    f = $("#mouseCursor"),
    g = $("#google_search"),
    h = $(".clipboard"),
    i = $("#copyClipboard"),
    j = $(".title");
  $(".copyurl").click(function () {
    var a = document.getElementById("copyClipboard");
    a.select(),
      a.setSelectionRange(0, 99999),
      document.execCommand("copy"),
      $("#copied-success").fadeIn(800),
      $("#copied-success").fadeOut(800);
  }),
    $("#goButton").click(function () {
      window.open(i.val(), "_blank");
    }),
    $(document).ready(function () {
      var k = $("#searchinput").offset(),
        l = function (d) {
          var b,
            a,
            c = window.location.search.substring(1).split("&");
          for (a = 0; a < c.length; a++)
            if ((b = c[a].split("="))[0] === d)
              return void 0 === b[1] || decodeURIComponent(b[1]);
          return !1;
        };
      if ("" == l("q"))
        d.hide(),
          j.show(),
          c.attr("placeholder", a.placeHolder),
          g.text(a.generateLink),
          g.click(function () {
            if ("" == c.val())
              $("#copied-success").text(a.typeSome),
                $("#copied-success").fadeIn(800),
                $("#copied-success").fadeOut(800);
            else {
              $("html, body").animate(
                { scrollTop: $(document).height() },
                "slow"
              );
              var e = encodeURIComponent(c.val()),
                d = encodeURIComponent(b + "?q=" + e);
              $(".wp").attr("href", "whatsapp://send?text=" + a.thisHere + d),
                $(".tw").attr(
                  "href",
                  "https://twitter.com/intent/tweet?text=" + a.thisHere + d
                ),
                $(".ln").attr(
                  "href",
                  "https://www.linkedin.com/sharing/share-offsite/?url=" + d
                ),
                $(".tg").attr(
                  "href",
                  "https://t.me/share/url?url=" + d + "&text=" + a.thisHere
                ),
                i.val(b + "?q=" + e),
                $("#copied-success").html(a.shareable),
                h.show();
            }
          });
      else {
        $("body").css("cursor", "none");
        var n = 0,
          m = l("q"),
          o = 100;
        function p() {
          n < m.length &&
            ((document.getElementById("searchinput").value += m.charAt(n)),
            n++,
            setTimeout(p, o));
        }
        (timeCalc = 100 * m.length),
          setTimeout(function () {
            p();
          }, 2250),
          f.show(),
          f.animate({ left: k.left + 200, top: k.top + 15 }, 2e3),
          d.html(a.firstStep),
          setTimeout(function () {
            d.html(a.secondStep);
          }, 2e3),
          setTimeout(function () {
            e.css("box-shadow", "2px 2px 1px 1px #4885ed");
          }, 2100),
          setTimeout(function () {
            f.animate({ top: "+=80px", left: "-=50px" }, 400);
          }, (total = 2300 + timeCalc)),
          setTimeout(function () {
            g.css("border", "1px solid #4885ed");
          }, total + 390),
          setTimeout(function () {
            d.html(a.lastStep + total / 1e3 + a.seconds);
          }, total),
          setTimeout(function () {
            window.location.replace("https://google.com/search?q=" + m);
          }, total + 600);
      }
    });
});
