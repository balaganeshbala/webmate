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
        <title>File Uploader</title>
        <link href="/webmate/commonstyle.css" rel="stylesheet" type="text/css"/>
        <link href="uploaderstyle.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="jquery.form.js" type="text/javascript"></script>
        <script src="uploaderscript.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="main-container">
            <header class="site-name">Webmate</header>
            <nav class="menu-container">
                <ul>
                    <li><a href="/webmate">Home</a></li>
                    <li><a href="/webmate/filecreator">File Creator</a></li>
                    <li><a href="/webmate/fileuploader" class="active">File Uploader</a></li>
                </ul>
            </nav>
            <div class="page-content">
                <div class="uploader-form">
                    <div class="upload-result"></div>
                    <div class="upload-container">
                        <div class="progress" hidden>
                            <div class="bar"></div >
                            <div class="percent">0%</div >
                        </div>
                        <form id="upload-form" method="POST" enctype="multipart/form-data" action="upload.php" style="height:0px;overflow:hidden">
                            <input type="file" id="fileInput" name="filesToUpload[]" multiple/>
                        </form>
                        <div class="progress-bar" hidden></div>
                        <button class="btn-cntrl upload-button">
                            Upload
                        </button>
                    </div>
                </div>
                <aside class="sidebar">
                    <ul></ul>
                </aside>
            </div>
            <footer></footer>
        </div>
    </body>
</html>
