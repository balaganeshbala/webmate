<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Creator</title>
        <link href="/webmate/commonstyle.css" rel="stylesheet" type="text/css"/>
        <link href="creatorstyle.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="creatorscript.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="main-container">
            <header class="site-name">Webmate</header>
            <nav class="menu-container">
                <ul>
                    <li><a href="/webmate">Home</a></li>
                    <li><a href="/webmate/filecreator" class="active">File Creator</a></li>
                    <li><a href="/webmate/fileuploader">File Uploader</a></li>
                </ul>
            </nav>
            <div class="page-content">
                <form class="creator-form">
                    <label for="content-box">Content:</label>
                    <textarea name="content-box" id="content-box" rows="15" required></textarea>
                    <label for="file-name">File name:</label>
                    <input type="text" name="file-name" id="file-name" required>&nbsp;&nbsp;
                    <button type="submit" name="save" class="save">Save</button>&nbsp;&nbsp;
                    <button type="reset" class="reset">Clear</button>
                    <span class="result" hidden></span>
                </form>
                <aside class="sidebar">
                    <ul></ul>
                </aside>
            </div>
            <footer></footer>
        </div>
    </body>
</html>
