<?php

/* partials/mirror_bottom_scripts.html.twig */
class __TwigTemplate_5f18f454a0261083421d595a25f2d2ef8318375551d5b0c75d17a08212e2a30a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
    // CodeMirror, copyright (c) by Marijn Haverbeke and others
    // Distributed under an MIT license: https://codemirror.net/LICENSE

    (function(mod) {
      if (typeof exports == \"object\" && typeof module == \"object\") // CommonJS
        mod(require(\"../../lib/codemirror\"));
      else if (typeof define == \"function\" && define.amd) // AMD
        define([\"../../lib/codemirror\"], mod);
      else // Plain browser env
        mod(CodeMirror);
    })(function(CodeMirror) {
      \"use strict\";

      CodeMirror.defineMode(\"commonlisp\", function(config) {
        var specialForm = /^(block|let*|return-from|catch|load-time-value|setq|eval-when|locally|symbol-macrolet|flet|macrolet|tagbody|function|multiple-value-call|the|go|multiple-value-prog1|throw|if|progn|unwind-protect|labels|progv|let|quote)\$/;
        var assumeBody = /^with|^def|^do|^prog|case\$|^cond\$|bind\$|when\$|unless\$/;
        var numLiteral = /^(?:[+\\-]?(?:\\d+|\\d*\\.\\d+)(?:[efd][+\\-]?\\d+)?|[+\\-]?\\d+(?:\\/[+\\-]?\\d+)?|#b[+\\-]?[01]+|#o[+\\-]?[0-7]+|#x[+\\-]?[\\da-f]+)/;
        var symbol = /[^\\s'`,@()\\[\\]\";]/;
        var type;

        function readSym(stream) {
          var ch;
          while (ch = stream.next()) {
            if (ch == \"\\\\\") stream.next();
            else if (!symbol.test(ch)) {
              stream.backUp(1);
              break;
            }
          }
          return stream.current();
        }

        function base(stream, state) {
          if (stream.eatSpace()) {
            type = \"ws\";
            return null;
          }
          if (stream.match(numLiteral)) return \"number\";
          var ch = stream.next();
          if (ch == \"\\\\\") ch = stream.next();

          if (ch == '\"') return (state.tokenize = inString)(stream, state);
          else if (ch == \"(\") {
            type = \"open\";
            return \"bracket\";
          } else if (ch == \")\" || ch == \"]\") {
            type = \"close\";
            return \"bracket\";
          } else if (ch == \";\") {
            stream.skipToEnd();
            type = \"ws\";
            return \"comment\";
          } else if (/['`,@]/.test(ch)) return null;
          else if (ch == \"|\") {
            if (stream.skipTo(\"|\")) {
              stream.next();
              return \"symbol\";
            } else {
              stream.skipToEnd();
              return \"error\";
            }
          } else if (ch == \"#\") {
            var ch = stream.next();
            if (ch == \"(\") {
              type = \"open\";
              return \"bracket\";
            } else if (/[+\\-=\\.']/.test(ch)) return null;
            else if (/\\d/.test(ch) && stream.match(/^\\d*#/)) return null;
            else if (ch == \"|\") return (state.tokenize = inComment)(stream, state);
            else if (ch == \":\") {
              readSym(stream);
              return \"meta\";
            } else if (ch == \"\\\\\") {
              stream.next();
              readSym(stream);
              return \"string-2\"
            } else return \"error\";
          } else {
            var name = readSym(stream);
            if (name == \".\") return null;
            type = \"symbol\";
            if (name == \"nil\" || name == \"t\" || name.charAt(0) == \":\") return \"atom\";
            if (state.lastType == \"open\" && (specialForm.test(name) || assumeBody.test(name))) return \"keyword\";
            if (name.charAt(0) == \"&\") return \"variable-2\";
            return \"variable\";
          }
        }

        function inString(stream, state) {
          var escaped = false,
            next;
          while (next = stream.next()) {
            if (next == '\"' && !escaped) {
              state.tokenize = base;
              break;
            }
            escaped = !escaped && next == \"\\\\\";
          }
          return \"string\";
        }

        function inComment(stream, state) {
          var next, last;
          while (next = stream.next()) {
            if (next == \"#\" && last == \"|\") {
              state.tokenize = base;
              break;
            }
            last = next;
          }
          type = \"ws\";
          return \"comment\";
        }

        return {
          startState: function() {
            return {
              ctx: {
                prev: null,
                start: 0,
                indentTo: 0
              },
              lastType: null,
              tokenize: base
            };
          },

          token: function(stream, state) {
            if (stream.sol() && typeof state.ctx.indentTo != \"number\")
              state.ctx.indentTo = state.ctx.start + 1;

            type = null;
            var style = state.tokenize(stream, state);
            if (type != \"ws\") {
              if (state.ctx.indentTo == null) {
                if (type == \"symbol\" && assumeBody.test(stream.current()))
                  state.ctx.indentTo = state.ctx.start + config.indentUnit;
                else
                  state.ctx.indentTo = \"next\";
              } else if (state.ctx.indentTo == \"next\") {
                state.ctx.indentTo = stream.column();
              }
              state.lastType = type;
            }
            if (type == \"open\") state.ctx = {
              prev: state.ctx,
              start: stream.column(),
              indentTo: null
            };
            else if (type == \"close\") state.ctx = state.ctx.prev || state.ctx;
            return style;
          },

          indent: function(state, _textAfter) {
            var i = state.ctx.indentTo;
            return typeof i == \"number\" ? i : state.ctx.start + 1;
          },

          closeBrackets: {
            pairs: \"()[]{}\\\"\\\"\"
          },
          lineComment: \";;\",
          blockCommentStart: \"#|\",
          blockCommentEnd: \"|#\"
        };
      });

      CodeMirror.defineMIME(\"text/x-common-lisp\", \"commonlisp\");

    });
</script>
<script>

var editorElements = document.querySelectorAll('.cmEditor');
var outputElements = document.querySelectorAll('.cmOutput');
var editorIds = [];
var outputIds = [];

window.codeMirrors = [];

editorElements.forEach(function (el, index) {
  bindEditorAndOutput(el.id, outputElements[index].id);
});

function bindEditorAndOutput(editorId, outputId) {
  console.log(editorId, outputId);
  if (!editorId || !outputId) return;

  \$('#' + editorId).bind('focusout', function(e) {
    if(!isValid(\$(this).val())) {
      e.preventDefault();
      \$(this).focus();
    }
  });

  // http://stackoverflow.com/questions/14501185/detect-windows-vs-mac-os
  var OSName=\"unk\";
  if (navigator.appVersion.indexOf(\"Win\")!=-1) OSName=\"win\";
  else if (navigator.appVersion.indexOf(\"Mac\")!=-1) OSName=\"mac\";
  else if (navigator.appVersion.indexOf(\"X11\")!=-1) OSName=\"nix\";
  else if (navigator.appVersion.indexOf(\"Linux\")!=-1) OSName=\"nux\";

  function getURL(url, c) {
    var xhr = new XMLHttpRequest();
    xhr.open(\"get\", url, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState != 4) return;
      if (xhr.status < 400) return c(null, xhr.responseText);
      var e = new Error(xhr.responseText || \"No response\");
      e.status = xhr.status;
      c(e);
    };
  }

  function hotkey(e) {
    console.log(e);
  }


    function enter() { alert(\"eval\"); }
    function save() { 
      var text = \$('#' + editorId).val();
      var results = ac(text);
      var str = string(results);

      \$('#' + outputId).text(str); }

  function clear() {
    \$('#' + outputId).text(\"\"); 
  }

  function readstrsafe(s) {
  var x = (function () { try { return [true, readstr(s)]; } catch (_e1) {  return([false, _e1.message]); }})();

  return x[1];
  }

  var server;
  // getURL(\"http://ternjs.net/defs/ecma5.json\", function(err, code) {
  //   if (err) throw new Error(\"Request for ecma5.json: \" + err);
  //   server = new CodeMirror.TernServer({defs: [JSON.parse(code)]});


  //   editor.setOption(\"extraKeys\", {
  //     \"Ctrl-Space\": function(cm) { 
  //       server.complete(cm); },
  //     \"Ctrl-I\": function(cm) { 
  //       server.showType(cm); },
  //     \"Ctrl-O\": function(cm) { 
  //       server.showDocs(cm); },
  //     \"Alt-.\": function(cm) { 
  //       server.jumpToDef(cm); },
  //     \"Alt-,\": function(cm) { 
  //       server.jumpBack(cm); },
  //     \"Ctrl-Q\": function(cm) { 
  //       server.rename(cm); },
  //     \"Ctrl-.\": function(cm) { 
  //       server.selectName(cm); },
  //     \"Cmd-S\": function(cm) { 
  //       save(); },
  //     \"Ctrl-S\": function(cm) { 
  //       save(); },
  //     \"Cmd-Enter\": function(cm) { 
  //       enter(); },
  //     \"Ctrl-Enter\": function(cm) { 
  //       enter(); },
  //     // Tab: function(e) {
  //     //   var IndentWithTabs = true;
  //     //   IndentWithTabs ? e.execCommand(\"defaultTab\") : e.somethingSelected() ? e.indentSelection(\"add\") : e.execCommand(\"insertSoftTab\")

  //     // }
  //     Tab: function(cm) {
  //       var spaces = Array(cm.getOption(\"indentUnit\") + 1).join(\" \");
  //       cm.replaceSelection(spaces);
  //     }
  //   })
  //   editor.on(\"cursorActivity\", function(cm) { server.updateArgHints(cm); });
  // });

  var editor = CodeMirror.fromTextArea(document.getElementById(editorId), {
    lineNumbers: true,
    mode: \"commonlisp\",
    theme: \"railscasts\",
    tabSize: 2,
    smartIndent: false,
    autoCloseBrackets: false,
    matchBrackets: true,
    gutters: [\"gutter-variableVals\", \"CodeMirror-linenumbers\", \"breakpoints\"],
    showCursorWhenSelecting: true,
    scrollbarStyle: null,
    autofocus: false
    /*onKeyEvent: function (e, s) {

      hotkey(\$.event.fix(s));
      if (s.type == \"keyup\") {
          save();
          CodeMirror.showHint(e);
      }
    }*/
  });

  window.codeMirrors.push(editor);
  
  function save(idx) { 

    if (window.codeMirrors.length - 1 < idx) return;
    if (!window.codeMirrors[idx]) return;

    var text = window.codeMirrors[idx].getValue();
    var exprs = ac(readstrsafe(text)); 

    var o = \"\"; 
    map(function (x) { 
      var ok = x[1];
      if (!ok) {

      }
      // o += string(x[0]); o += \"\\n\";
      o += string(x[2]); o += \"\\n\";
      //o += \"\\n\"; 

  }, exprs);

      //\$(\"#output\").append(o); 
      writeOutput(o, idx);

   }
  //if gutter is clicked, set a breakpoint at that line
  editor.on(\"gutterClick\", function(cm, n) {
      var info = cm.lineInfo(n);
    cm.setGutterMarker(n, \"breakpoints\", info.gutterMarkers ? null : makeMarker());
  });


  typed = now();
  setInterval(function() {
    if (typed && ms_since(typed) > 300) {
      typed = null;
      save(0);
      save(1);
      save(2);
    }
  }, 200);

  editor.on('keyup', function(){
      //CodeMirror.commands.autocomplete(editor);
      typed = now();
  });


  //creates html element for breakpoint
  function makeMarker() {
    var marker = document.createElement(\"div\");
    marker.style.color = \"rgb(163, 21, 80)\";
    marker.innerHTML = \"●\";
    return marker;
  };

  function writeOutput(text, idx) {
  //  var text = editor.doc.getValue();
  CodeMirror.runMode(text, \"clojure\", outputElements[idx]);
  //document.getElementById(\"output\").textContent = text;
  };

  \$(function() {
    save();
  });
}

</script>";
    }

    public function getTemplateName()
    {
        return "partials/mirror_bottom_scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    // CodeMirror, copyright (c) by Marijn Haverbeke and others
    // Distributed under an MIT license: https://codemirror.net/LICENSE

    (function(mod) {
      if (typeof exports == \"object\" && typeof module == \"object\") // CommonJS
        mod(require(\"../../lib/codemirror\"));
      else if (typeof define == \"function\" && define.amd) // AMD
        define([\"../../lib/codemirror\"], mod);
      else // Plain browser env
        mod(CodeMirror);
    })(function(CodeMirror) {
      \"use strict\";

      CodeMirror.defineMode(\"commonlisp\", function(config) {
        var specialForm = /^(block|let*|return-from|catch|load-time-value|setq|eval-when|locally|symbol-macrolet|flet|macrolet|tagbody|function|multiple-value-call|the|go|multiple-value-prog1|throw|if|progn|unwind-protect|labels|progv|let|quote)\$/;
        var assumeBody = /^with|^def|^do|^prog|case\$|^cond\$|bind\$|when\$|unless\$/;
        var numLiteral = /^(?:[+\\-]?(?:\\d+|\\d*\\.\\d+)(?:[efd][+\\-]?\\d+)?|[+\\-]?\\d+(?:\\/[+\\-]?\\d+)?|#b[+\\-]?[01]+|#o[+\\-]?[0-7]+|#x[+\\-]?[\\da-f]+)/;
        var symbol = /[^\\s'`,@()\\[\\]\";]/;
        var type;

        function readSym(stream) {
          var ch;
          while (ch = stream.next()) {
            if (ch == \"\\\\\") stream.next();
            else if (!symbol.test(ch)) {
              stream.backUp(1);
              break;
            }
          }
          return stream.current();
        }

        function base(stream, state) {
          if (stream.eatSpace()) {
            type = \"ws\";
            return null;
          }
          if (stream.match(numLiteral)) return \"number\";
          var ch = stream.next();
          if (ch == \"\\\\\") ch = stream.next();

          if (ch == '\"') return (state.tokenize = inString)(stream, state);
          else if (ch == \"(\") {
            type = \"open\";
            return \"bracket\";
          } else if (ch == \")\" || ch == \"]\") {
            type = \"close\";
            return \"bracket\";
          } else if (ch == \";\") {
            stream.skipToEnd();
            type = \"ws\";
            return \"comment\";
          } else if (/['`,@]/.test(ch)) return null;
          else if (ch == \"|\") {
            if (stream.skipTo(\"|\")) {
              stream.next();
              return \"symbol\";
            } else {
              stream.skipToEnd();
              return \"error\";
            }
          } else if (ch == \"#\") {
            var ch = stream.next();
            if (ch == \"(\") {
              type = \"open\";
              return \"bracket\";
            } else if (/[+\\-=\\.']/.test(ch)) return null;
            else if (/\\d/.test(ch) && stream.match(/^\\d*#/)) return null;
            else if (ch == \"|\") return (state.tokenize = inComment)(stream, state);
            else if (ch == \":\") {
              readSym(stream);
              return \"meta\";
            } else if (ch == \"\\\\\") {
              stream.next();
              readSym(stream);
              return \"string-2\"
            } else return \"error\";
          } else {
            var name = readSym(stream);
            if (name == \".\") return null;
            type = \"symbol\";
            if (name == \"nil\" || name == \"t\" || name.charAt(0) == \":\") return \"atom\";
            if (state.lastType == \"open\" && (specialForm.test(name) || assumeBody.test(name))) return \"keyword\";
            if (name.charAt(0) == \"&\") return \"variable-2\";
            return \"variable\";
          }
        }

        function inString(stream, state) {
          var escaped = false,
            next;
          while (next = stream.next()) {
            if (next == '\"' && !escaped) {
              state.tokenize = base;
              break;
            }
            escaped = !escaped && next == \"\\\\\";
          }
          return \"string\";
        }

        function inComment(stream, state) {
          var next, last;
          while (next = stream.next()) {
            if (next == \"#\" && last == \"|\") {
              state.tokenize = base;
              break;
            }
            last = next;
          }
          type = \"ws\";
          return \"comment\";
        }

        return {
          startState: function() {
            return {
              ctx: {
                prev: null,
                start: 0,
                indentTo: 0
              },
              lastType: null,
              tokenize: base
            };
          },

          token: function(stream, state) {
            if (stream.sol() && typeof state.ctx.indentTo != \"number\")
              state.ctx.indentTo = state.ctx.start + 1;

            type = null;
            var style = state.tokenize(stream, state);
            if (type != \"ws\") {
              if (state.ctx.indentTo == null) {
                if (type == \"symbol\" && assumeBody.test(stream.current()))
                  state.ctx.indentTo = state.ctx.start + config.indentUnit;
                else
                  state.ctx.indentTo = \"next\";
              } else if (state.ctx.indentTo == \"next\") {
                state.ctx.indentTo = stream.column();
              }
              state.lastType = type;
            }
            if (type == \"open\") state.ctx = {
              prev: state.ctx,
              start: stream.column(),
              indentTo: null
            };
            else if (type == \"close\") state.ctx = state.ctx.prev || state.ctx;
            return style;
          },

          indent: function(state, _textAfter) {
            var i = state.ctx.indentTo;
            return typeof i == \"number\" ? i : state.ctx.start + 1;
          },

          closeBrackets: {
            pairs: \"()[]{}\\\"\\\"\"
          },
          lineComment: \";;\",
          blockCommentStart: \"#|\",
          blockCommentEnd: \"|#\"
        };
      });

      CodeMirror.defineMIME(\"text/x-common-lisp\", \"commonlisp\");

    });
</script>
<script>

var editorElements = document.querySelectorAll('.cmEditor');
var outputElements = document.querySelectorAll('.cmOutput');
var editorIds = [];
var outputIds = [];

window.codeMirrors = [];

editorElements.forEach(function (el, index) {
  bindEditorAndOutput(el.id, outputElements[index].id);
});

function bindEditorAndOutput(editorId, outputId) {
  console.log(editorId, outputId);
  if (!editorId || !outputId) return;

  \$('#' + editorId).bind('focusout', function(e) {
    if(!isValid(\$(this).val())) {
      e.preventDefault();
      \$(this).focus();
    }
  });

  // http://stackoverflow.com/questions/14501185/detect-windows-vs-mac-os
  var OSName=\"unk\";
  if (navigator.appVersion.indexOf(\"Win\")!=-1) OSName=\"win\";
  else if (navigator.appVersion.indexOf(\"Mac\")!=-1) OSName=\"mac\";
  else if (navigator.appVersion.indexOf(\"X11\")!=-1) OSName=\"nix\";
  else if (navigator.appVersion.indexOf(\"Linux\")!=-1) OSName=\"nux\";

  function getURL(url, c) {
    var xhr = new XMLHttpRequest();
    xhr.open(\"get\", url, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState != 4) return;
      if (xhr.status < 400) return c(null, xhr.responseText);
      var e = new Error(xhr.responseText || \"No response\");
      e.status = xhr.status;
      c(e);
    };
  }

  function hotkey(e) {
    console.log(e);
  }


    function enter() { alert(\"eval\"); }
    function save() { 
      var text = \$('#' + editorId).val();
      var results = ac(text);
      var str = string(results);

      \$('#' + outputId).text(str); }

  function clear() {
    \$('#' + outputId).text(\"\"); 
  }

  function readstrsafe(s) {
  var x = (function () { try { return [true, readstr(s)]; } catch (_e1) {  return([false, _e1.message]); }})();

  return x[1];
  }

  var server;
  // getURL(\"http://ternjs.net/defs/ecma5.json\", function(err, code) {
  //   if (err) throw new Error(\"Request for ecma5.json: \" + err);
  //   server = new CodeMirror.TernServer({defs: [JSON.parse(code)]});


  //   editor.setOption(\"extraKeys\", {
  //     \"Ctrl-Space\": function(cm) { 
  //       server.complete(cm); },
  //     \"Ctrl-I\": function(cm) { 
  //       server.showType(cm); },
  //     \"Ctrl-O\": function(cm) { 
  //       server.showDocs(cm); },
  //     \"Alt-.\": function(cm) { 
  //       server.jumpToDef(cm); },
  //     \"Alt-,\": function(cm) { 
  //       server.jumpBack(cm); },
  //     \"Ctrl-Q\": function(cm) { 
  //       server.rename(cm); },
  //     \"Ctrl-.\": function(cm) { 
  //       server.selectName(cm); },
  //     \"Cmd-S\": function(cm) { 
  //       save(); },
  //     \"Ctrl-S\": function(cm) { 
  //       save(); },
  //     \"Cmd-Enter\": function(cm) { 
  //       enter(); },
  //     \"Ctrl-Enter\": function(cm) { 
  //       enter(); },
  //     // Tab: function(e) {
  //     //   var IndentWithTabs = true;
  //     //   IndentWithTabs ? e.execCommand(\"defaultTab\") : e.somethingSelected() ? e.indentSelection(\"add\") : e.execCommand(\"insertSoftTab\")

  //     // }
  //     Tab: function(cm) {
  //       var spaces = Array(cm.getOption(\"indentUnit\") + 1).join(\" \");
  //       cm.replaceSelection(spaces);
  //     }
  //   })
  //   editor.on(\"cursorActivity\", function(cm) { server.updateArgHints(cm); });
  // });

  var editor = CodeMirror.fromTextArea(document.getElementById(editorId), {
    lineNumbers: true,
    mode: \"commonlisp\",
    theme: \"railscasts\",
    tabSize: 2,
    smartIndent: false,
    autoCloseBrackets: false,
    matchBrackets: true,
    gutters: [\"gutter-variableVals\", \"CodeMirror-linenumbers\", \"breakpoints\"],
    showCursorWhenSelecting: true,
    scrollbarStyle: null,
    autofocus: false
    /*onKeyEvent: function (e, s) {

      hotkey(\$.event.fix(s));
      if (s.type == \"keyup\") {
          save();
          CodeMirror.showHint(e);
      }
    }*/
  });

  window.codeMirrors.push(editor);
  
  function save(idx) { 

    if (window.codeMirrors.length - 1 < idx) return;
    if (!window.codeMirrors[idx]) return;

    var text = window.codeMirrors[idx].getValue();
    var exprs = ac(readstrsafe(text)); 

    var o = \"\"; 
    map(function (x) { 
      var ok = x[1];
      if (!ok) {

      }
      // o += string(x[0]); o += \"\\n\";
      o += string(x[2]); o += \"\\n\";
      //o += \"\\n\"; 

  }, exprs);

      //\$(\"#output\").append(o); 
      writeOutput(o, idx);

   }
  //if gutter is clicked, set a breakpoint at that line
  editor.on(\"gutterClick\", function(cm, n) {
      var info = cm.lineInfo(n);
    cm.setGutterMarker(n, \"breakpoints\", info.gutterMarkers ? null : makeMarker());
  });


  typed = now();
  setInterval(function() {
    if (typed && ms_since(typed) > 300) {
      typed = null;
      save(0);
      save(1);
      save(2);
    }
  }, 200);

  editor.on('keyup', function(){
      //CodeMirror.commands.autocomplete(editor);
      typed = now();
  });


  //creates html element for breakpoint
  function makeMarker() {
    var marker = document.createElement(\"div\");
    marker.style.color = \"rgb(163, 21, 80)\";
    marker.innerHTML = \"●\";
    return marker;
  };

  function writeOutput(text, idx) {
  //  var text = editor.doc.getValue();
  CodeMirror.runMode(text, \"clojure\", outputElements[idx]);
  //document.getElementById(\"output\").textContent = text;
  };

  \$(function() {
    save();
  });
}

</script>", "partials/mirror_bottom_scripts.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/partials/mirror_bottom_scripts.html.twig");
    }
}
