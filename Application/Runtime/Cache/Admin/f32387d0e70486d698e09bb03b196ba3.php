<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Themes - Editor.md examples</title>
        <!--<link rel="stylesheet" href="/lib/css/style.css" />-->
        <link rel="stylesheet" href="/css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <style>
            /* Custom Editor.md theme css example */
            /*
            .editormd-theme-dark {
                border-color: #1a1a17;

            }

            .editormd-theme-dark .editormd-toolbar {
                background: #1A1A17;
                border-color: #1a1a17;
            }

            .editormd-theme-dark .editormd-menu > li > a {
                color: #777;
                border-color: #1a1a17;
            }

            .editormd-theme-dark .editormd-menu > li.divider {
                border-right: 1px solid #111;
            }

            .editormd-theme-dark .editormd-menu > li > a:hover, .editormd-menu > li > a.active {
                border-color: #333;
                background: #333;
            }*/
        </style>
    </head>
    <body>
        <div id="layout">
            <div id="test-editormd">
                <textarea style="display:none;" name="a_text"><?php echo ($article["a_text"]); ?></textarea>
            </div>
        </div>
        <script src="/lib/js/jquery.min.js"></script>
        <script src="/editormd.js"></script>
        <script type="text/javascript">
			var testEditor;

            function themeSelect(id, themes, lsKey, callback)
            {
                var select = $("#" + id);

                for (var i = 0, len = themes.length; i < len; i ++)
                {
                    var theme    = themes[i];
                    var selected = (localStorage[lsKey] == theme) ? " selected=\"selected\"" : "";

                    select.append("<option value=\"" + theme + "\"" + selected + ">" + theme + "</option>");
                }

                select.bind("change", function(){
                    var theme = $(this).val();

                    if (theme === "")
                    {
                        alert("theme == \"\"");
                        return false;
                    }

                    console.log("lsKey =>", lsKey, theme);

                    localStorage[lsKey] = theme;
                    callback(select, theme);
                });

                return select;
            }

            $(function() {
                testEditor = editormd("test-editormd", {
                    width        : "90%",
                    height       : 720,

                    // Editor.md theme, default or dark, change at v1.5.0
                    // You can also custom css class .editormd-preview-theme-xxxx
                    theme        : (localStorage.theme) ? localStorage.theme : "dark",

                    // Preview container theme, added v1.5.0
                    // You can also custom css class .editormd-preview-theme-xxxx
                    previewTheme : (localStorage.previewTheme) ? localStorage.previewTheme : "dark",

                    // Added @v1.5.0 & after version is CodeMirror (editor area) theme
                    editorTheme  : (localStorage.editorTheme) ? localStorage.editorTheme : "pastel-on-dark",
                    path         : '../lib/'
                });

                themeSelect("editormd-theme-select", editormd.themes, "theme", function($this, theme) {
                    testEditor.setTheme(theme);
                });

                themeSelect("editor-area-theme-select", editormd.editorThemes, "editorTheme", function($this, theme) {
                    testEditor.setCodeMirrorTheme(theme);
                    // or testEditor.setEditorTheme(theme);
                });

                themeSelect("preview-area-theme-select", editormd.previewThemes, "previewTheme", function($this, theme) {
                    testEditor.setPreviewTheme(theme);
                });
            });
        </script>
    </body>
</html>